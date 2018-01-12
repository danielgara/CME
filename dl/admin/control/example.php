<?php 

require('../../configs/include.php');
class c_admin_control_example extends super_controller {

	public function add()
	{
		$example = new example($this->post);$example->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$example);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$example = new example($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$example);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$example = new example($this->post);
		$example->auxiliars=$example->pre_edit();
		$this->engine->assign('object',$example);
		$this->temp_aux = 'admin/control/example_edit.tpl';
	}
	
	public function save()
	{
		$example = new example($this->post);
		$example->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$example->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$example);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['example']['page']=$this->get->page;
			$cod['example']['order']=$this->get->order; $cod['example']['show_order']=$this->get->show_order;
			$cod['example']['search_type']=$this->get->search_type; $cod['example']['search_words']=$this->get->search_words;
			$options['example']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("example"),$options,$cod);
			$example = $this->orm->get_objects("example");
			$this->engine->assign('total_page',$this->orm->numpages['example']);
			
			if($this->get->page > $this->orm->numpages['example']){$this->engine->assign('actual_page',$this->orm->numpages['example']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$example);
		}
		
		$this->engine->assign('title','example');
		$this->engine->assign('obj_aux',new example());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/example.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$example_one = new example($this->post);
				$example_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$example_one);
				$this->engine->display('admin/control/example_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/example.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/example.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_example();
$call->run();

?>