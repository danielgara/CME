<?php 

require('../../configs/include.php');
class c_admin_control_component extends super_controller {

	public function add()
	{
		$component = new component($this->post);$component->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$component);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$component = new component($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$component);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$component = new component($this->post);
		$component->auxiliars=$component->pre_edit();
		$this->engine->assign('object',$component);
		$this->temp_aux = 'admin/control/component_edit.tpl';
	}
	
	public function save()
	{
		$component = new component($this->post);
		$component->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$component->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$component);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['component']['page']=$this->get->page;
			$cod['component']['order']=$this->get->order; $cod['component']['show_order']=$this->get->show_order;
			$cod['component']['search_type']=$this->get->search_type; $cod['component']['search_words']=$this->get->search_words;
			$options['component']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("component"),$options,$cod);
			$component = $this->orm->get_objects("component");
			$this->engine->assign('total_page',$this->orm->numpages['component']);
			
			if($this->get->page > $this->orm->numpages['component']){$this->engine->assign('actual_page',$this->orm->numpages['component']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$component);
		}
		
		$this->engine->assign('title','component');
		$this->engine->assign('obj_aux',new component());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/component.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$component_one = new component($this->post);
				$component_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$component_one);
				$this->engine->display('admin/control/component_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/component.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/component.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_component();
$call->run();

?>