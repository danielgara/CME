<?php

/**
 * Project:     Framework G
 * File:        controller_creator.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
class m_controller_creator
{
	
public function m_controller_creator($class_name,$attr_file)
{

$aux=''; $aux2=''; $aux3='';
for($i=0;$i<count($attr_file);$i++)
{
		$aux.='if(is_uploaded_file($this->files->'.$attr_file[$i].'[\'tmp_name\']))
		{
			$info=$'.$class_name.'->metadata(); $upload'.$i.' = new upload($this->files->'.$attr_file[$i].', $info[\''.$attr_file[$i].'\']);
			$'.$class_name.'->set(\''.$attr_file[$i].'\',$upload'.$i.'->file_final_name);
		}
		';
		$aux2.='if(is_uploaded_file($this->files->'.$attr_file[$i].'[\'tmp_name\'])){$upload'.$i.'->move_file();}
		';
		
		if(is_empty($aux3)){$aux3.='array("'.$attr_file[$i].'"';}
		else{$aux3.=', "'.$attr_file[$i].'"';}
}

$texto= '<?php 

require(\'../../configs/include.php\');
';
if(!is_empty($aux))
{$texto.='require(C_FULL_PATH.\'modules/upload.php\');

';}
$texto.=

	'class c_admin_control_'.$class_name.' extends super_controller {

	public function add()
	{
		$'.$class_name.' = new '.$class_name.'($this->post);';
		if(!is_empty($aux)){$texto.='
		'.$aux;}
		$texto.='$'.$class_name.'->exceptions();';
		$texto.='
		$this->orm->connect();
		$this->orm->insert_data("normal",$'.$class_name.');
		$this->orm->close();
		';
		if(!is_empty($aux2)){$texto.='
		'.$aux2;}
		$texto.='		
		$this->set_message($this->gvar[\'m_correct_insert\'],\'temp_aux\',\'success\');
	}
	
	public function delete()
	{
		$'.$class_name.' = new '.$class_name.'($this->post);
		$this->orm->connect();
		$this->orm->delete_data("normal",$'.$class_name.');
		$this->orm->close();		
		$this->set_message($this->gvar[\'m_correct_delete\'],\'temp_aux\',\'success\');
	}
	
	public function edit()
	{
		$'.$class_name.' = new '.$class_name.'($this->post);
		$'.$class_name.'->auxiliars=$'.$class_name.'->pre_edit();
		$this->engine->assign(\'object\',$'.$class_name.');
		$this->temp_aux = \'admin/control/'.$class_name.'_edit.tpl\';
	}
	
	public function save()
	{
		$'.$class_name.' = new '.$class_name.'($this->post);
		$'.$class_name.'->auxiliars=unserialize(base64_decode($this->post->auxiliars));';
		if(!is_empty($aux)){$texto.='
		'.$aux;}
		if(!is_empty($aux3)){$texto.='
		$'.$class_name.'->exceptions('.$aux3.'), \'not check\');';}
		else{$texto.='
		$'.$class_name.'->exceptions();';}
		$texto.='
		$this->orm->connect();
		$this->orm->update_data("normal",$'.$class_name.');
		$this->orm->close();
		';
		if(!is_empty($aux2)){$texto.='
		'.$aux2;}
		$texto.='	
		$this->set_message($this->gvar[\'m_correct_update\'],\'temp_aux\',\'success\');
	}
	
	public function display()
	{		
		if(!(($this->get->option=="save" && $this->error==1)|| $this->get->option=="edit"))
		{
			$cod[\''.$class_name.'\'][\'page\']=$this->get->page;
			$cod[\''.$class_name.'\'][\'order\']=$this->get->order; $cod[\''.$class_name.'\'][\'show_order\']=$this->get->show_order;
			$cod[\''.$class_name.'\'][\'search_type\']=$this->get->search_type; $cod[\''.$class_name.'\'][\'search_words\']=$this->get->search_words;
			$options[\''.$class_name.'\'][\'lvl2\']="by_pages";
			
			$this->orm->connect();
			$this->orm->read_data(array("'.$class_name.'"),$options,$cod);
			$'.$class_name.' = $this->orm->get_objects("'.$class_name.'");
			$this->engine->assign(\'total_page\',$this->orm->numpages[\''.$class_name.'\']);
			
			if($this->get->page > $this->orm->numpages[\''.$class_name.'\']){$this->engine->assign(\'actual_page\',$this->orm->numpages[\''.$class_name.'\']);}
			else{$this->engine->assign(\'actual_page\',$this->get->page);}
			$this->orm->close();
			$this->engine->assign(\'results\',$'.$class_name.');
		}
		
		$this->engine->assign(\'title\',\''.$class_name.'\');
		$this->engine->assign(\'obj_aux\',new '.$class_name.'());
		$this->engine->assign(\'l_this\',basename($_SERVER[\'PHP_SELF\']));
		$this->engine->display(\'admin/header.tpl\');
		$this->engine->display($this->temp_aux);
		
		if($this->error == 0)
		{
			if($this->temp_aux == \'message.tpl\'){$this->engine->display(\'admin/control/'.$class_name.'.tpl\');}
		}
		else
		{
			if($this->get->option == "save")
			{
				$'.$class_name.'_one = new '.$class_name.'($this->post);
				$'.$class_name.'_one->auxiliars=$this->post->auxiliars;
				$this->engine->assign(\'object\',$'.$class_name.'_one);
				$this->engine->display(\'admin/control/'.$class_name.'_edit.tpl\');
			}
			else if($this->get->option == "add")
			{
				$this->engine->assign(\'object\',$this->post);
				$this->engine->display(\'admin/control/'.$class_name.'.tpl\');
			}
		}
		$this->engine->display(\'admin/footer.tpl\');
	}
	
	public function run()
	{
		$this->restricted_zone();
		if(!isset($this->get->page) || $this->get->page<1){$this->get->page=1;}	
		$this->temp_aux = \'admin/control/'.$class_name.'.tpl\';
		
		try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		catch (Exception $e) {$this->error=1;  $this->set_message($e->getMessage(),\'temp_aux\');}
		
		$this->display();
	}
}

$call=new c_admin_control_'.$class_name.'();
$call->run();

?>';

if($archivo = fopen('../admin/control/'.$class_name.".php", 'w'))
{
	fwrite($archivo, $texto);
	fclose($archivo);
} 
}
}

?>