<?php

require('../../configs/include.php');
require(C_FULL_PATH.'modules/m_nbbc/nbbc_main.php');

class c_admin_ajax_docs extends super_controller {

	public function display()
	{
		$bbcode = new BBCode();
		echo $bbcode->Parse($this->post->text);
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_admin_ajax_docs();
$call->run();

?>