<?php 

require('../../configs/include.php');
class c_admin_control_c_t extends super_controller {

	public function add()
	{
		$c_t = new c_t($this->post);$c_t->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$c_t);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$c_t = new c_t($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$c_t);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$c_t = new c_t($this->post);
		$c_t->auxiliars=$c_t->pre_edit();
		$this->engine->assign('object',$c_t);
		$this->temp_aux = 'admin/control/c_t_edit.tpl';
	}
	
	public function save()
	{
		$c_t = new c_t($this->post);
		$c_t->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$c_t->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$c_t);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['c_t']['page']=$this->get->page;
			$cod['c_t']['order']=$this->get->order; $cod['c_t']['show_order']=$this->get->show_order;
			$cod['c_t']['search_type']=$this->get->search_type; $cod['c_t']['search_words']=$this->get->search_words;
			$options['c_t']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("c_t"),$options,$cod);
			$c_t = $this->orm->get_objects("c_t");
			$this->engine->assign('total_page',$this->orm->numpages['c_t']);
			
			if($this->get->page > $this->orm->numpages['c_t']){$this->engine->assign('actual_page',$this->orm->numpages['c_t']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$c_t);
		}
		
		$this->engine->assign('title','c_t');
		$this->engine->assign('obj_aux',new c_t());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/c_t.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$c_t_one = new c_t($this->post);
				$c_t_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$c_t_one);
				$this->engine->display('admin/control/c_t_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/c_t.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/c_t.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_c_t();
$call->run();

?>