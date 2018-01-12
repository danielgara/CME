<?php 

require('../../configs/include.php');
class c_admin_control_access extends super_controller {

	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod['access']['page']=$this->get->page;
			$cod['access']['order']=$this->get->order; $cod['access']['show_order']=$this->get->show_order;
			$cod['access']['search_type']=$this->get->search_type; $cod['access']['search_words']=$this->get->search_words;
			$options['access']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("access"),$options,$cod);
			$access = $this->orm->get_objects("access");
			$this->engine->assign('total_page',$this->orm->numpages['access']);
			
			if($this->get->page > $this->orm->numpages['access']){$this->engine->assign('actual_page',$this->orm->numpages['access']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$access);
		}
		
		$this->engine->assign('title','access');
		$this->engine->assign('obj_aux',new access());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/access.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$access_one = new access($this->post);
				$access_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$access_one);
				$this->engine->display('admin/control/access_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/access.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/access.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_access();
$call->run();

?>