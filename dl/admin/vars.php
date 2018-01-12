<?php

/**
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
require('../configs/include.php');

class c_admin_vars extends super_controller {
	
	public function editarvar()
	{
		$resul=$this->post->gvar;
		
		$texto= '<?php 
';
		foreach($resul as $key => $val)
		{
			//$text = preg_replace('/\n+/', "\n", trim($val));
			$text = preg_replace("/\s\s+/", " ", $val);
			$texto.='
$gvar[\''.$key.'\'] = "'.preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $text).'";';
		}
		
		$texto.='
?>';
		
		if($archivo = fopen('../configs/gvar_local.php', 'w'))
		{
			fwrite($archivo, $texto);
			fclose($archivo);		
		} 		
		$this->set_message('Variables editadas correctamente','temp_aux','success');
	}	

	public function display()
	{
		$archivo='../configs/gvar_local.php';
		
		if($fh = fopen($archivo,"r")){
			while (!feof($fh))
			{
				$aux= str_replace(array("\r\n", "\r", "\n", "\r\t"), '', fgets($fh));
				$F1[]=htmlentities($aux);
			}
			fclose($fh);	
		}
		
		$arr=array();
		$val=array();
		for($i=0;$i<count($F1);$i++)
		{
			$pos=strpos($F1[$i],'gvar');
			if($pos)
			{
				$a=strpos($F1[$i],"'");
				$b=strpos($F1[$i],"'",$a+1);
				$var=substr($F1[$i],$a+1,$b-$a-1);
				
				$arr[]=$var;
				
				$c=strpos($F1[$i],'&quot;');
				$d=strrpos($F1[$i],'&quot;',$c+1);
				$var2=substr($F1[$i],$c+6,$d-$c-6);
				
				$val[]=html_entity_decode($var2);
				
			}
		}

		$this->engine->assign('arr',$arr);
		$this->engine->assign('val',$val);
		
		$this->engine->assign('title','Editar variables');
		$this->engine->display('admin/header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('admin/vars.tpl');
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}	
		$this->display();
	}
}

$call = new c_admin_vars();
$call->run();

?>