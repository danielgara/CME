<?php

require('./configs/include.php');
require(C_FULL_PATH.'modules/m_nbbc/nbbc_main.php');


class c_learning_examples extends super_controller {

	public function display()
	{
		$cod['example']['concern']=$this->post->concern;	
		$cod['example']['framework']=$this->post->framework;	
		$options['example']['lvl2']="complete";		
		$auxiliars['example']=array("c_name");
		
		
		$this->orm->connect();
		$this->orm->read_data(array("example"),$options,$cod);
		$example = $this->orm->get_objects("example",NULL,$auxiliars);
		$this->orm->close();
		
		foreach($example as $e)
		{
			$bbcode = new BBCode();	
			$e->set('description',$bbcode->Parse($e->get('description')));
		}
		
		$this->engine->assign('example',$example);
		
		$where = array(array('name' => $this->gvar['n_index'],'link' => $this->gvar['l_index']), array('name' => $this->gvar['n_learning'],'link' => $this->gvar['l_learning']));		
		$this->engine->assign('title',$this->gvar['n_learning']);
		$this->engine->assign('active',$this->gvar['n_learning']);
		$this->engine->assign('where',$where);
		$this->engine->display('header.tpl');
		$this->engine->display('learning_examples.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_learning_examples();
$call->run();

?>