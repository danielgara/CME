<?php 

require('../../configs/include.php');
class c_admin_control_task extends super_controller {

	public function add()
	{
		$task = new task($this->post);$task->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$task);
		$this->orm->close();
				
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$task = new task($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$task);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$task = new task($this->post);
		$task->auxiliars=$task->pre_edit();
		$this->engine->assign('object',$task);
		$this->temp_aux = 'admin/control/task_edit.tpl';
	}
	
	public function save()
	{
		$task = new task($this->post);
		$task->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$task->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$task);
		$this->orm->close();
			
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['task']['page']=$this->get->page;
			$cod['task']['order']=$this->get->order; $cod['task']['show_order']=$this->get->show_order;
			$cod['task']['search_type']=$this->get->search_type; $cod['task']['search_words']=$this->get->search_words;
			$options['task']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("task"),$options,$cod);
			$task = $this->orm->get_objects("task");
			$this->engine->assign('total_page',$this->orm->numpages['task']);
			
			if($this->get->page > $this->orm->numpages['task']){$this->engine->assign('actual_page',$this->orm->numpages['task']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$task);
		}
		
		$this->engine->assign('title','task');
		$this->engine->assign('obj_aux',new task());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/task.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$task_one = new task($this->post);
				$task_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$task_one);
				$this->engine->display('admin/control/task_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/task.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/task.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_task();
$call->run();

?>