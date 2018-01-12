<?php

require('./configs/include.php');

class c_contact extends super_controller {

	public function display()
	{
		$where = array(array('name' => $this->gvar['n_index'],'link' => $this->gvar['l_index']), array('name' => $this->gvar['n_contact'],'link' => $this->gvar['l_contact']));
		
		$this->engine->assign('title',$this->gvar['n_contact']);
		$this->engine->assign('active',$this->gvar['n_contact']);
		$this->engine->assign('where',$where);
		$this->engine->display('header.tpl');
		$this->engine->display('contact.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_contact();
$call->run();

?>