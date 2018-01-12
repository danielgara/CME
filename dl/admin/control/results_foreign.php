<?php 

/**
 * Project:     Framework G
 * File:        results_foreign.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

require('../../configs/include.php');

class c_admin_control_results extends super_controller {
	
	public function display()
	{		
		$aux=explode("[*INTER*]",$this->get->option);
		$option=$aux[0];

		$cod=array();
		$cod[$option]['page']=$this->get->page;
		$cod[$option]['order']=$this->get->order;
		$cod[$option]['show_order']=$this->get->show_order;
		$cod[$option]['search_type']=$this->get->search_type;
		$cod[$option]['search_words']=$this->get->search_words;
		
		$options[$option]['lvl2']="by_pages";
		
		$this->orm->connect();
		$this->orm->read_data(array($option),$options,$cod);
		$results = $this->orm->get_objects($option);
		$this->orm->close();
		
		if($this->get->page > $this->orm->numpages[$option]){$this->engine->assign('actual_page',$this->orm->numpages[$option]);}
		else{$this->engine->assign('actual_page',$this->get->page);}
			
		$this->engine->assign('total_page',$this->orm->numpages[$option]);
		
		$this->engine->assign('title','Results');
		$this->engine->assign('rel_name',$aux[1]);
		$this->engine->assign('class_name',$option);
		$this->engine->assign('obj_aux',new $option());
		$this->engine->assign('l_this',basename($_SERVER['PHP_SELF']));
		
		$this->engine->assign('results',$results);
		$this->engine->display('admin/control/results_foreign.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->display();
	}
}

$call = new c_admin_control_results();
$call->run();
	
?>