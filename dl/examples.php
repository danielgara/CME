<?php
 
require('./configs/include.php');
require(C_FULL_PATH.'modules/m_phpass/PasswordHash.php');

class c_examples extends super_controller {
	
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
		$this->engine->display('examples.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}
		$this->display();
	}
}

$call = new c_examples();
$call->run();

?>