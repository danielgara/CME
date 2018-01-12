<?php

/**
 * Project:     Framework G
 * File:        table_creator.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
class m_table_creator
{
var $text;
	
public function m_table_creator($j,  $class_name, $attr_name, $attr_id, $attr_type, $attr_type_form, $attr_values, $attr_foreign_name, $attr_foreign, $attr_foreign_attr, $attr_required, $attr_autoincrement, $attr_primary, $relational, $attr_tamano, $relational_attr, $relational_name, $relational_n, $bd_engine)
{
//create table with attributes
$texto='CREATE TABLE '.$class_name.' (';	
$i=0;
while($i<=$j)
{
	$texto.=$attr_id[$i];
	if($attr_type[$i]=='string'){$texto.=' VARCHAR';}
	else if($attr_type[$i]=='bool'){$texto.=' TINYINT';}
	else{$texto.=' '.$attr_type[$i];}
	
	if($attr_type[$i]=='date'){}
	else if($attr_type[$i]=='bool'){}
	else if($attr_type[$i]=='timestamp'){$texto.=' DEFAULT CURRENT_TIMESTAMP';}
	else {$texto.='('.$attr_tamano[$i].')';}
	
	$texto.=' '.$attr_required[$i];
	if($attr_autoincrement[$i]=='yes'){$texto.=' AUTO_INCREMENT';}
	
	$texto.=',
	';
	$i++;
}

//create primary key
$texto.='PRIMARY KEY(';
for($i=0;$i<count($attr_primary);$i++)
{
	if($i==0){$texto.=$attr_primary[$i];}
	else{$texto.=', '.$attr_primary[$i];}
}
$texto.=')';

//create foreign keys
if(isset($relational_name))
{
foreach ($relational_name as $key => $attribute)
{
	//order foreign keys in the same order that the primary key of class reference
	$obj_aux = new $attribute();
	$ref_primary = $obj_aux->primary_key();
	
	unset($attr_list_foreign);
	unset($attr_list);

	for($i=0;$i<count($ref_primary);$i++)
	{
		for($j=0;$j<count($relational_attr[$attribute]);$j++)
		{
			if($relational_n[$attribute][$j] == $key)
			{
				if($ref_primary[$i]==$relational_attr[$attribute][$j])
				{$attr_list_foreign[]=$relational[$attribute][$j];$attr_list[]=$relational_attr[$attribute][$j];}
			}
		}
	}
	
	for($i=0;$i<count($attr_list_foreign);$i++)
	{
		if($i==0)
		{$aux1=$attr_list_foreign[$i];$aux2=$attr_list[$i];}
		else
		{$aux1.=', '.$attr_list_foreign[$i];$aux2.=', '.$attr_list[$i];}
	}
	$texto.=',CONSTRAINT '.$key.' FOREIGN KEY ('.$aux1.') REFERENCES '.$attribute.' ('.$aux2.')';
}
}
$texto.=') ENGINE='.$bd_engine.';';

$this->text=$texto;
}

public function get_text()
{
return $this->text;
}

}
?>