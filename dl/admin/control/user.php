<?php 

/**
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

require('../../configs/include.php');
require(C_FULL_PATH.'modules/m_phpass/PasswordHash.php');

class c_admin_control_user extends super_controller {
	
	public function add()
	{
		$user = new user($this->post);
		$user->exceptions();
		$this->orm->connect();
		$this->orm->insert_data("normal",$user);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_insert'],'temp_aux','success');
	}
	
	public function delete()
	{
		$user = new user($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$user);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_delete'],'temp_aux','success');
	}
	
	public function edit()
	{
		$user = new user($this->post);
		$user->auxiliars=$user->pre_edit();
		$this->engine->assign('object',$user);
		$this->temp_aux = 'admin/control/user_edit.tpl';
	}
	
	public function save()
	{
		$user = new user($this->post);
		$user->auxiliars=unserialize(base64_decode($this->post->auxiliars));
		$user->exceptions();
		$this->orm->connect();
		$this->orm->update_data("normal",$user);
		$this->orm->close();		
		$this->set_message($this->gvar['m_correct_update'],'temp_aux','success');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{			
			$cod['user']['page']=$this->get->page; 
			$cod['user']['order']=$this->get->order; $cod['user']['show_order']=$this->get->show_order; 
			$cod['user']['search_type']=$this->get->search_type; $cod['user']['search_words']=$this->get->search_words; 
			$options['user']['lvl2']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("user"),$options,$cod);
			$user = $this->orm->get_objects("user");
			$this->engine->assign('total_page',$this->orm->numpages['user']);
			if($this->get->page > $this->orm->numpages['user']){$this->engine->assign('actual_page',$this->orm->numpages['user']);}
			else{$this->engine->assign('actual_page',$this->get->page);}
			$this->orm->close();
			$this->engine->assign('results',$user);
		}
		
		$this->engine->assign('title','user');
		$this->engine->assign('obj_aux',new user());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == 'message.tpl'){$this->engine->display('admin/control/user.tpl');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$user_one = new user($this->post);
				$user_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign('object',$user_one);
				$this->engine->display('admin/control/user_edit.tpl');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign('object',$this->post);
				$this->engine->display('admin/control/user.tpl');
			}
		}
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = 'admin/control/user.tpl';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),'temp_aux');}
		
		$this->display();
	}
}

$call=new c_admin_control_user();
$call->run();

?>