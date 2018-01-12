<?php

/**
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
require('../configs/include.php');
require(C_FULL_PATH.'modules/m_phpass/PasswordHash.php');

class c_admin_index extends super_controller {

	public function login()
	{
		if(is_empty($this->post->user)){throw_exception($this->gvar['m_user_empty']);}
		else if(is_empty($this->post->password)){throw_exception($this->gvar['m_password_empty']);}
		
		$cod['user']['password']=$this->post->password;
		$cod['user']['user']=$this->post->user;				
		$options['user']['lvl2']="one_login";
		
		$this->orm->connect();
		$this->orm->read_data(array("user"),$options,$cod);
		$user = $this->orm->get_objects("user");
		$this->orm->close();
		
		if (empty($user[0])){throw_exception($this->gvar['m_incorrect_login']);}
		else
		{
			$this->set_user_session($user[0]);
			$this->set_message($this->gvar['m_correct_login'],'temp_aux','success');
			
			$access = new access();
			$access->set('username',$user[0]->get('user'));
			
			$this->orm->connect();
			$this->orm->insert_data("normal",$access);
			$this->orm->close();
		}
	}
	
	public function logout()
	{
		$this->destroy_session();
		$this->set_message($this->gvar['m_correct_logout'],'temp_aux','success');
	}
	
	public function display()
	{		
		$this->engine->assign('title','Administrator Framework G');
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('admin/index.tpl');
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}
		$this->display();
	}
}

$call = new c_admin_index();
$call->run();

?>