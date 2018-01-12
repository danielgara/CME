<?php

/**
 * Project:     Framework G
 * File:        class_creator.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class m_class_creator
{
	
public function m_class_creator($j, $class_name, $attr_name, $attr_id, $attr_type, $attr_type_form, $attr_values, $attr_foreign_name, $attr_foreign, $attr_foreign_attr, $attr_required, $attr_autoincrement, $attr_primary, $relational, $relational_attr, $relational_name, $relational_n, $attr_tamano)
{
$texto= '<?php

class '.$class_name.' extends object_standard
{
	//attribute variables
	';
	
//create attributes list
$i=0;
while ($i<=$j)
{
	$texto.= "protected $".$attr_id[$i].";
	";
	$i++;
}

$texto.= '
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		';

//create attributes information

$i=0;
while ($i<=$j)
{
	$chcs=array();
	if($i==0){$texto.= "return array(";}
	$texto.= "\"".$attr_id[$i]."\" => array(\"name\" => \"".$attr_name[$i]."\", \"type\" => \"".$attr_type[$i]."\", \"required\" => \"".$attr_required[$i]."\"";
	
	if(is_empty($attr_tamano[$i])){$texto.= ", \"length\" => \"100\"";}else{$texto.= ", \"length\" => \"".$attr_tamano[$i]."\"";}
	if($attr_type[$i]=="timestamp"){$chcs[]="timestamp";}
	if($attr_type_form[$i]=="file"){$chcs[]="file";}
	if($attr_type_form[$i]=="textarea"){$chcs[]="textarea";}
	if($attr_autoincrement[$i]=="yes"){$chcs[]="autoincrement";}
	if($attr_html[$i]=="yes"){$chcs[]="html";}
	if(!is_empty($attr_foreign_name[$i])){$texto.= ", \"foreign_name\" => \"".$attr_foreign_name[$i]."\"";}
	if(!is_empty($attr_foreign[$i])){$texto.= ", \"foreign\" => \"".$attr_foreign[$i]."\"";}
	if(!is_empty($attr_foreign_attr[$i])){$texto.= ", \"foreign_attribute\" => \"".$attr_foreign_attr[$i]."\"";}
	if(!is_empty($attr_values[$i]))
	{
		$values = explode(",", $attr_values[$i]);$val_ini=0;$vals='';
		foreach ($values as $option)
		{
			$option=trim($option);
			if($val_ini==0){$vals.="\"$option\""; $val_ini=1;}
			else{$vals.=", \"$option\"";}
		}
		$texto.= ", \"values\" => array(".$vals.")";
	}
	if(is_empty($attr_values[$i]) && $attr_type_form[$i]=="file"){$texto.= ", \"values\" => \"*\"";}
	if(count($chcs)>0){$texto.= ", \"additional\" => array(\"".$comma_separated = implode("\", \"", $chcs)."\")";}
	else{$texto.= ", \"additional\" => array()";}
	if($i==$j){$texto.= ")); ";}
	else{$texto.= "), ";}
	$i++;
}

//create primary key
$texto.= '
	}

	public function primary_key()
	{
		return array(';
$i=0;
while ($i< count($attr_primary))
{
	if($i==0){$texto.= "\"".$attr_primary[$i]."\"";}
	else{$texto.= ", \"".$attr_primary[$i]."\"";}
	$i++;
}
$texto.=');
	}
	';

//create relationals key
$texto.='
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{';
		
$i=0;

if(isset($relational))
{
	foreach ($relational as $key => $attribute)
	{
		$texto.= "
			case \"".$key."\":
			switch(".'$rel_name)
			{';
			
		foreach ($relational_name as $key2 => $attribute2)
		{
			if($key==$attribute2)
			{
			unset($attr_list_foreign);
	
			$texto.= "
				case \"".$key2."\":
				return array(";
				
				//order relationals key in the same order that the primary key of class reference
				if($attribute2 == $class_name){$ref_primary = $attr_primary;}
				else{$obj_aux = new $attribute2();$ref_primary = $obj_aux->primary_key();}
				
				for($i=0;$i<count($ref_primary);$i++)
				{
					for($j=0;$j<count($relational_attr[$attribute2]);$j++)
					{
						if($relational_n[$attribute2][$j] == $key2)
						{
							if($ref_primary[$i]==$relational_attr[$attribute2][$j])
							{$attr_list_foreign[]=$relational[$attribute2][$j];}
						}
					}
				}
				
				$j=0;
				while ($j< count($attr_list_foreign))
				{
					if($j==0){$texto.= "\"".$attr_list_foreign[$j]."\"";}
					else{$texto.= ", \"".$attr_list_foreign[$j]."\"";}
					$j++;
				}
				$texto.= ");
				break;";
			}
		}
		
		$texto.= '
			}
			break;
			';
	}
}

	$texto.='
			default:
			break;
		}
	}
	
	function additional_exceptions($list, $check, &$message)
	{
	}
	
	//
	//space for class functions and methods
	//
}
';	
	
$texto.='
?>';

//create file
if($archivo = fopen('../classes/'.$class_name.".php", 'w'))
{
	fwrite($archivo, $texto);
	fclose($archivo);
}
}

}
?>