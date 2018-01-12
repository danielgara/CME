<?php

/**
 * Project:     Framework G
 * File:        creator.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

require('../configs/include.php');
require(C_FULL_PATH.'modules/m_creator/class_creator.php');
require(C_FULL_PATH.'modules/m_creator/controller_creator.php');
require(C_FULL_PATH.'modules/m_creator/template_creator.php');
require(C_FULL_PATH.'modules/m_creator/template_update_creator.php');
require(C_FULL_PATH.'modules/m_creator/edit_files.php');
require(C_FULL_PATH.'modules/m_creator/table_creator.php');

class c_admin_creator extends super_controller {
	
	public function load_data()
	{
		$class_n=$this->post->class_n;
		$file = "../modules/m_creator/backup.php"; 
		$content = file_get_contents($file);
		
		$text= trim(substr($content, 5)); 
		
		$data=explode("[*INTER*]", $text);
		for($i=0;$i<count($data)-1;$i++)
		{
			parse_str($data[$i], $final[$i]);
			if($final[$i]['class_n'] == $class_n)
			{
				settype($final[$i],'object');
				$this->engine->assign('object',$final[$i]);
			}
		}
	}
	
	public function obtain_data()
	{
		$class_n=$this->post->obtain_name;
		$file = "../modules/m_creator/backup.php"; 
		$content = file_get_contents($file);
		
		$text= trim(substr($content, 5)); 
		
		$data=explode("[*INTER*]", $text);
		for($i=0;$i<count($data)-1;$i++)
		{
			parse_str($data[$i], $final[$i]);
			if($final[$i]['class_n'] == $class_n)
			{
				$obtain_data=$data[$i];
				$this->engine->assign('obtain_data',$obtain_data);
			}
		}
	}
	
	public function preload_data()
	{
		parse_str($this->post->data, $result);
		settype($result,'object');
		$this->engine->assign('object',$result);
	}

	public function add()
	{
		if(!is_empty($this->post->class_n))
		{
			$class_name=$this->post->class_n;
			$j=0;
	
			for($i=0;$i<count($this->post->name);$i++)
			{
				if(!is_empty($this->post->name[$i])){$j++;}
				if($this->post->primary[$i]=='yes'){$attr_primary[]=$this->post->id[$i];}
				if($this->post->type_form[$i]=='file'){$attr_file[]=$this->post->id[$i];}
				if($this->post->type[$i]=='int' && (is_empty($this->post->tamano[$i]) || $this->post->tamano[$i]>11))
				{$this->post->tamano[$i]=11;}
				if($this->post->type[$i]=='bigint' && (is_empty($this->post->tamano[$i]) || $this->post->tamano[$i]>20))
				{$this->post->tamano[$i]=20;}
				if($this->post->type[$i]=='date'){$this->post->tamano[$i]=10;}
				if($this->post->type[$i]=='timestamp'){$this->post->tamano[$i]=19;}
				if(!is_empty($this->post->foreign[$i]))
				{
					$relational_name[$this->post->foreign_name[$i]]=$this->post->foreign[$i];
					$relational_n[$this->post->foreign[$i]][]=$this->post->foreign_name[$i];
					$relational[$this->post->foreign[$i]][]=$this->post->id[$i];
					$relational_attr[$this->post->foreign[$i]][]=$this->post->foreign_attr[$i];
				}
			}

			if($this->post->c_class == "on")
			{$class_creator = new m_class_creator($j-1, $class_name, $this->post->name, $this->post->id, $this->post->type, $this->post->type_form, $this->post->values, $this->post->foreign_name, $this->post->foreign, $this->post->foreign_attr, $this->post->required, $this->post->autoincrement, $attr_primary, $relational, $relational_attr, $relational_name, $relational_n, $this->post->tamano, $this->post->html);}
			
			if($this->post->c_table == "on")
			{$table_creator = new m_table_creator($j-1, $class_name, $this->post->name, $this->post->id, $this->post->type, $this->post->type_form, $this->post->values, $this->post->foreign_name, $this->post->foreign, $this->post->foreign_attr, $this->post->required, $this->post->autoincrement, $attr_primary, $relational, $this->post->tamano, $relational_attr, $relational_name, $relational_n, $this->post->bd_engine);
			$text = $table_creator->get_text();
			$this->orm->connect();
			$this->orm->do_operation($text); //create table
			$this->orm->close();}
			
			if($this->post->c_controller == "on")
			{$controller_creator = new m_controller_creator($class_name,$attr_file);}
			
			if($this->post->c_template == "on")
			{$template_creator = new m_template_creator($j-1, $class_name, $this->post->name, $this->post->id, $this->post->type, $this->post->type_form, $this->post->values, $this->post->foreign, $this->post->foreign_attr, $this->post->required, $this->post->autoincrement, $attr_primary, $relational);		
			$template_update_creator = new m_template_update_creator($j-1, $class_name, $this->post->name, $this->post->id, $this->post->type, $this->post->type_form, $this->post->values, $this->post->foreign, $this->post->foreign_attr, $this->post->required, $this->post->autoincrement, $attr_primary, $relational, $this->post->html);}
			
			if($this->post->c_edit == "on")
			{$edit_files = new m_edit_files($class_name,$attr_file);}
			
			//Begin save data
			if($fh = fopen("../modules/m_creator/backup.php","r"))
			{
				while (!feof($fh)){$aux.=fgets($fh);}
				fclose($fh);
			}
			
			$pos=strpos($aux, 'class_n='.$class_name.'&');
			if ($pos === false) 
			{
				$len = strlen($aux);
				$text ='<?php
				
';
				$text.= trim(substr($aux, 5, $len-8)); 
				$text.=file_get_contents('php://input').'[*INTER*]
				
?>';
			}
			else
			{
				$pos2=strpos($aux, '[*INTER*]', $pos+1);
				$text = substr($aux, 0, $pos); 
				$text.= substr($aux, $pos2+9); 
				$text = trim(substr($text, 0, $len-3)); 
				$text.=file_get_contents('php://input').'[*INTER*]
				
?>';
			}
			//End save data
			
			if($archivo = fopen("../modules/m_creator/backup.php", 'w'))
			{
				fwrite($archivo, $text);
				fclose($archivo);
			} 
			$this->set_message('CRUD created correctly','temp_aux','success');
		}
		else
		{
			throw_exception("You must to add a class name");
		}
	}
	
	public function display()
	{
		$this->engine->assign('title',$this->gvar['n_admin_creator']);
		$this->engine->display('admin/header.tpl');
		
		$type=array("string" => "String", "int" => "Int", "bigint" => "BigInt", "float" => "Float", "date" => "Date", "bool" => "Bool", "numeric" => "Numeric", "timestamp" => "Timestamp"); $type_form=array("text" => "Text", "radio" => "Radio", "select" => "Select", "file" => "File", "password" => "Password", "textarea" => "Textarea"); $html=array("no" => "No", "yes" => "Yes"); $required=array("not null" => "Not Null", "null" => "Null"); $auto=array("no" => "No", "yes" => "Yes");
		$primary=array("no" => "No", "yes" => "Yes");
		$this->engine->assign('types',$type); $this->engine->assign('types_form',$type_form); $this->engine->assign('html',$html); $this->engine->assign('requireds',$required);
		$this->engine->assign('autos',$auto); $this->engine->assign('primarys',$primary); 
		
		if($this->error==1)
		{
			$this->engine->assign('object',$this->post);
		}
		
		$this->engine->display($this->temp_aux);
		$this->engine->display('admin/creator.tpl');
		$this->engine->display('admin/footer.tpl');
	}
	
	public function run()
	{
		$this->restricted_zone();		
		try {if (isset($this->post->option)){$this->{$this->post->option}();}}
		catch (Exception $e) {$this->error=1; $this->set_message($e->getMessage(),'temp_aux');}		
		$this->display();
	}
}

$call = new c_admin_creator();
$call->run();

?>