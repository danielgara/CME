<?php 

require('../../configs/include.php');
class c_admin_control_framework extends super_controller {

	public function add()
	{
		$framework = new framework($this->post);$framework->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$framework);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$framework = new framework($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$framework);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$framework = new framework($this->post);
		$framework->auxiliars=$framework->pre_edit();
		$this->engine->assign('object',$framework);
		$this->temp_aux = 'admin/control/framework_edit.tpl';
	}
	
	public function save()
	{
		$framework = new framework($this->post);
		$framework->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$framework->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$framework);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['framework']['page']=$this->get->page;
			$cod['framework']['order']=$this->get->order; $cod['framework']['show_order']=$this->get->show_order;
			$cod['framework']['search_type']=$this->get->search_type; $cod['framework']['search_words']=$this->get->search_words;
			$options['framework']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("framework"),$options,$cod);
			$framework = $this->orm->get_objects("framework");
			$this->engine->assign('total_page',$this->orm->numpages['framework']);
			
			if($this->get->page > $this->orm->numpages['framework']){$this->engine->assign('actual_page',$this->orm->numpages['framework']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$framework);
		}
		
		$this->engine->assign('title','framework');
		$this->engine->assign('obj_aux',new framework());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/framework.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$framework_one = new framework($this->post);
				$framework_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$framework_one);
				$this->engine->display('admin/control/framework_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/framework.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/framework.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_framework();
$call->run();

?>