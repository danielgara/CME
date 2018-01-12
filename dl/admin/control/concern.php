<?php 

require('../../configs/include.php');
class c_admin_control_concern extends super_controller {

	public function add()
	{
		$concern = new concern($this->post);$concern->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$concern);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$concern = new concern($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$concern);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$concern = new concern($this->post);
		$concern->auxiliars=$concern->pre_edit();
		$this->engine->assign('object',$concern);
		$this->temp_aux = 'admin/control/concern_edit.tpl';
	}
	
	public function save()
	{
		$concern = new concern($this->post);
		$concern->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$concern->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$concern);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['concern']['page']=$this->get->page;
			$cod['concern']['order']=$this->get->order; $cod['concern']['show_order']=$this->get->show_order;
			$cod['concern']['search_type']=$this->get->search_type; $cod['concern']['search_words']=$this->get->search_words;
			$options['concern']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("concern"),$options,$cod);
			$concern = $this->orm->get_objects("concern");
			$this->engine->assign('total_page',$this->orm->numpages['concern']);
			
			if($this->get->page > $this->orm->numpages['concern']){$this->engine->assign('actual_page',$this->orm->numpages['concern']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$concern);
		}
		
		$this->engine->assign('title','concern');
		$this->engine->assign('obj_aux',new concern());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/concern.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$concern_one = new concern($this->post);
				$concern_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$concern_one);
				$this->engine->display('admin/control/concern_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/concern.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/concern.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_concern();
$call->run();

?>