<?php 

require('../../configs/include.php');
class c_admin_control_documentation extends super_controller {

	public function add()
	{
		$documentation = new documentation($this->post);$documentation->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$documentation);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$documentation = new documentation($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$documentation);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$documentation = new documentation($this->post);
		$documentation->auxiliars=$documentation->pre_edit();
		$this->engine->assign('object',$documentation);
		$this->temp_aux = 'admin/control/documentation_edit.tpl';
	}
	
	public function save()
	{
		$documentation = new documentation($this->post);
		$documentation->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$documentation->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$documentation);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['documentation']['page']=$this->get->page;
			$cod['documentation']['order']=$this->get->order; $cod['documentation']['show_order']=$this->get->show_order;
			$cod['documentation']['search_type']=$this->get->search_type; $cod['documentation']['search_words']=$this->get->search_words;
			$options['documentation']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("documentation"),$options,$cod);
			$documentation = $this->orm->get_objects("documentation");
			$this->engine->assign('total_page',$this->orm->numpages['documentation']);
			
			if($this->get->page > $this->orm->numpages['documentation']){$this->engine->assign('actual_page',$this->orm->numpages['documentation']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$documentation);
		}
		
		$this->engine->assign('title','documentation');
		$this->engine->assign('obj_aux',new documentation());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/documentation.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$documentation_one = new documentation($this->post);
				$documentation_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$documentation_one);
				$this->engine->display('admin/control/documentation_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/documentation.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/documentation.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_documentation();
$call->run();

?>