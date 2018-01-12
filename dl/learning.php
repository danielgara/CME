<?php

require('./configs/include.php');
require(C_FULL_PATH.'modules/m_nbbc/nbbc_main.php');

class c_learning extends super_controller {

	public function display()
	{
		$cod['task']['concern']=$this->post->concern;	
		$cod['task']['framework']=$this->post->framework;	
		$options['task']['lvl2']="complete";		
		$auxiliars['task']=array("c_name","d_video","d_link","d_note","d_description");
		
		
		$this->orm->connect();
		$this->orm->read_data(array("task"),$options,$cod);
		$task = $this->orm->get_objects("task",NULL,$auxiliars);
		$this->orm->close();
		$this->engine->assign('task',$task);
		
		foreach($task as $e)
		{
			$bbcode = new BBCode();	
			$e->auxiliars['d_description']=$bbcode->Parse($e->auxiliars['d_description']);
		}
		
		$where = array(array('name' => $this->gvar['n_index'],'link' => $this->gvar['l_index']), array('name' => $this->gvar['n_learning'],'link' => $this->gvar['l_learning']));		
		$this->engine->assign('title',$this->gvar['n_learning']);
		$this->engine->assign('active',$this->gvar['n_learning']);
		$this->engine->assign('where',$where);
		$this->engine->display('header.tpl');
		$this->engine->display('learning.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_learning();
$call->run();

?>