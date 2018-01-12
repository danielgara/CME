<?php

/**
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
require('../../configs/include.php');

class c_admin_control_index extends super_controller {

	public function display()
	{	
		$this->engine->assign('title',$this->gvar['n_admin_control']);
		$this->engine->display('admin/header.tpl');
		$this->engine->display('admin/control/index.tpl');
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		$this->display();
	}
}

$call = new c_admin_control_index();
$call->run();

?>