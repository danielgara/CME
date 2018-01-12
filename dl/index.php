<?php
 
require('./configs/include.php');
require(C_FULL_PATH.'modules/m_phpass/PasswordHash.php');

class c_micro extends super_controller {

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
		}
	}
	
	public function logout()
	{
		$this->destroy_session();
		$this->set_message($this->gvar['m_correct_logout'],'temp_aux','success');
	}
	
	public function display()
	{
		$where = array(array('name' => $this->gvar['n_index'],'link' => $this->gvar['l_index']));
		
		$options['concern']['lvl2']="all_by_order";
		$options['framework']['lvl2']="all";
		
		$this->orm->connect();
		$this->orm->read_data(array("framework","concern"),$options,$cod);
		$framework = $this->orm->get_objects("framework");
		$concern = $this->orm->get_objects("concern");
		$this->orm->close();
		
		$a1=array();$a2=array();$a3=array();$a4=array();$a5=array();
		for($i=0;$i<count($concern);$i++)
		{
			if($concern[$i]->get('category')=='User Interface')
			{
				$a1[]=$concern[$i];
			}
			else if($concern[$i]->get('category')=='Architecture and data flow control')
			{
				$a2[]=$concern[$i];
			}
			else if($concern[$i]->get('category')=='Data modeling and persistence')
			{
				$a3[]=$concern[$i];
			}
			else if($concern[$i]->get('category')=='Security')
			{
				$a4[]=$concern[$i];
			}
			else if($concern[$i]->get('category')=='Modules and extensions')
			{
				$a5[]=$concern[$i];
			}
		}
		$merge=array_merge($a1,$a2);
		$merge=array_merge($merge,$a3);
		$merge=array_merge($merge,$a4);
		$merge=array_merge($merge,$a5);
		
		$this->engine->assign('concern',$merge);
		$this->engine->assign('framework',$framework);
		
		$this->engine->assign('title',$this->gvar['n_global']);
		$this->engine->assign('active',$this->gvar['n_index']);
		$this->engine->assign('where',$where);
		$this->engine->display('header.tpl');		
		$this->engine->display($this->temp_aux);
		$this->engine->display('micro.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}
		$this->display();
	}
}

$call = new c_micro();
$call->run();

?>