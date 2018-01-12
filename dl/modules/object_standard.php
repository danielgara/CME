<?php

/**
 * Project:     Framework G
 * File:        object_standard.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class object_standard
{
	function __construct($data = NULL, $components = NULL, $orm = NULL, $auxiliars = NULL)
	{
		if($data != NULL){$this->set_attributes($data,$auxiliars[get_class($this)]);}
		if($components[get_class($this)] != NULL){$this->assign_components($components,$orm,$auxiliars);}
	}
	
	//get attribute
	public function get($attribute){return $this->$attribute;}	
	//set attribute
	public function set($attribute,$value){$this->$attribute = $value;}
	
	//set multiple attributes
	function set_attributes($data, $auxiliars = NULL)
	{
		foreach ($this->metadata() as $key => $attribute)
		{
			if(!is_empty($data->$key)){$this->set($key,$data->$key);}
		}
		
		if($auxiliars != NULL)
		{
			foreach ($auxiliars as $attribute_aux)
			{if(!is_empty($data->$attribute_aux)){$this->auxiliars[$attribute_aux]=$data->$attribute_aux;}}
		}
	}
	
	//assign foreign relations to objetcs
	function assign_components($components,$orm,$auxiliars = NULL)
	{
		foreach ($components[get_class($this)] as $class_ref => $rels)
		{
			$j=0;
			while($j < count($rels)) //one component can have one or more relations
			{
				$name_rel = $rels[$j]; $pos=0;
				$data = $orm->get_data($class_ref,$pos);
				while($data != NULL)
				{
					$rel_one='';$rel_two='';$f=0;$ft=0;unset($rel_aux);
								
					if (get_class($this) == $class_ref) //when is a foreign to the own table
					{
						$rel = $this->relational_keys($class_ref, $name_rel);
						if(!is_empty($rel))
						{
							$attribute_info=$this->metadata();
							while($ft < count($rel)){$rel_one=$rel_one.$data->$rel[$ft];
							$rel_aux[]=$attribute_info[$rel[$ft]]['foreign_attribute'];$ft++;}$ft=0;
							while($ft < count($rel_aux)){$rel_two=$rel_two.$this->get($rel_aux[$ft]);$ft++;}
							
							if($rel_one == $rel_two)
							{$this->components[$class_ref][$name_rel][]= new $class_ref($data,$components,$orm,$auxiliars);}
						}
					}
					else //when is a foreign to other table
					{
						$class_ref_aux = new $class_ref();
						$rel_this = $this->relational_keys($class_ref, $name_rel);
						$rel = $class_ref_aux->relational_keys(get_class($this), $name_rel);
				
						if(is_empty($rel) && is_empty($rel_this))
						{
							if(substr($name_rel,0,1) == '-') // when is a indirect relation
							{$this->components[$class_ref][$name_rel][]= new $class_ref($data,$components,$orm,$auxiliars);}
						}
						else
						{
							if(is_empty($rel))
							{
								$attribute_info=$this->metadata();
								while($f < count($rel_this)){$rel_one=$rel_one.$this->get($rel_this[$f]);
								$rel_aux[]=$attribute_info[$rel_this[$f]]['foreign_attribute'];$f++;}$f=0;
								while($f < count($rel_aux)){$rel_two=$rel_two.$data->$rel_aux[$f];$f++;}
							}
							else
							{
								$attribute_info=$class_ref_aux->metadata();
								while($ft < count($rel)){$rel_one=$rel_one.$data->$rel[$ft];
								$rel_aux[]=$attribute_info[$rel[$ft]]['foreign_attribute'];$ft++;}$ft=0;
								while($ft < count($rel_aux)){$rel_two=$rel_two.$this->get($rel_aux[$ft]);$ft++;}
							}
							if($rel_one == $rel_two)
							{$this->components[$class_ref][$name_rel][]= new $class_ref($data,$components,$orm,$auxiliars);}
						}	
					}
					
					$pos++;
					$data = $orm->get_data($class_ref,$pos);
				}
				$j++;
			}
		}
	}
	
	
	//check exceptions
	function exceptions($list = NULL, $check = 'check')
	{
		$message='';
		$this->basic_exceptions($list, $check, $message);
		$this->additional_exceptions($list, $check, $message);
		if(!is_empty($message)){throw_exception($message);}
	}
	
	//check the basic exceptions
	function basic_exceptions($list, $check, &$message)
	{
		$attributes=$this->metadata();
		foreach ($attributes as $key => $atr)
		{
			if(($list==NULL) || (in_array($key,$list) && $check=='check') || (!in_array($key,$list) && $check=='not check'))
			{
				//check exceptions based in required
				switch($atr['required'])
				{
					case "not null":
					if(is_empty($this->$key) && !in_array("autoincrement", $atr['additional']) && !in_array("timestamp", $atr['additional']))
					{$message.="&bull; The field ".$atr['name']." can't be empty ";} break;
	
					default: break;
				}
				
				//check exceptions based in type
				switch($atr['type'])
				{
					case "numeric":
					if(!is_empty($this->$key) && !is_numeric($this->$key))
					{$message.="&bull; ".$atr['name']." must be numeric value ";} break;
					
					case "int":
					if(!is_empty($this->$key)){if(!check_int($this->$key))
					{$message.="&bull; ".$atr['name']." must be int value ";}} break;
					
					case "bigint":
					if(!is_empty($this->$key)){if(!check_bigint($this->$key))
					{$message.="&bull; ".$atr['name']." must be bigint value ";}} break;
					
					case "float":
					if(!is_empty($this->$key)){if(!check_float($this->$key))
					{$message.="&bull; ".$atr['name']." must be float value ";}} break;
					
					case "date":
					if(!is_empty($this->$key) && !check_date($this->$key))
					{$message.="&bull; ".$atr['name']." must be date value ";} break;
					
					default: break;
				}
				
				//check valid values for one attribute
				if(!is_empty($this->$key) && !is_empty($atr['values']) && !in_array("file", $atr['additional']))
				{
					if(!in_array($this->$key, $atr['values']))
					{$message.="&bull; ".$this->$key." is not a valid value for the field ".$atr['name']." ";}
				}
				
				//check max attributes length
				if($atr['type']=='float')
				{
					$num=explode(",",$atr['length']);$total=$num[0]+$num[1]+1;
					if(strlen($this->$key)>$total)
					{$message.="&bull; The field ".$atr['name']." exceeds maximum length (".$atr['length'].") ";}
				}
				else if(!is_empty($this->$key) && strlen($this->$key)>$atr['length'])
				{$message.="&bull; The field ".$atr['name']." exceeds maximum length (".$atr['length'].") ";}
			}
		}
	}
	
	//function for update_data, return the original state of each attribute
	function pre_edit()
	{
		$backup_edit = array();
		foreach ($this->metadata() as $key => $attribute)
		{
			$backup_edit[$key.'_aux']=$this->get($key);
		}
		
		$data=base64_encode(serialize($backup_edit));

		return $data;
	}
	
}

?>