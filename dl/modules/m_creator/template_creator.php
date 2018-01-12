<?php

/**
 * Project:     Framework G
 * File:        template_creator.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
class m_template_creator
{
	
public function m_template_creator($j,  $class_name, $attr_name, $attr_id, $attr_type, $attr_type_form, $attr_values, $attr_foreign, $attr_foreign_attr, $attr_required, $attr_autoincrement, $attr_primary, $relational)
{
$texto= '<table cellspacing="10">
<tr><td> 

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_'.$class_name.'}?option=add" enctype="multipart/form-data"> 
<legend>Add '.$class_name.' <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr>';

$i=0;
$k=0;
while($i<=$j)
{
	if($k % 2 == 0 && $k !=0){$texto.='</tr><tr>';}
	if($attr_autoincrement[$i]=='yes'){}
	else if($attr_type[$i]=='timestamp'){}
	else if($attr_foreign[$i]!=NULL)
	{
		$class_rep=$attr_foreign[$i];
		$texto.='<td align="right">'.$attr_name[$i].':';
		if($attr_required[$i]=='not null'){$texto.='*';}
		$texto.='</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr[\''.$attr_id[$i].'\'][\'foreign\']}_{$attr[\''.$attr_id[$i].'\'][\'foreign_attribute\']}_{$attr[\''.$attr_id[$i].'\'][\'foreign_name\']}" name="'.$attr_id[$i].'" ';
		if($attr_required[$i]=='not null'){$texto.='required="required" ';}$texto.='value="{if isset($object)}{$object->'.$attr_id[$i].'}{/if}" type="text"> <button class="btn" onClick="window.open(\'{$gvar.l_admin_control}results_foreign.php?option={$attr[\''.$attr_id[$i].'\'][\'foreign\']}[*INTER*]{$attr[\''.$attr_id[$i].'\'][\'foreign_name\']}\',\'popuppage\',\'width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100\');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
';
		$k++;
	}
	else
	{
		if($attr_type_form[$i] == "text")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$texto.='</td><td><input name="'.$attr_id[$i].'" ';
			if($attr_required[$i]=='not null'){$texto.='required="required" ';}$texto.='value="{if isset($object)}{$object->'.$attr_id[$i].'}{/if}" type="text"></td>
';
			$k++;
		}
		else if($attr_type_form[$i] == "password")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$texto.='</td><td><input name="'.$attr_id[$i].'" ';
			if($attr_required[$i]=='not null'){$texto.='required="required" ';}$texto.='type="password"></td>
';
			$k++;
		}
		else if($attr_type_form[$i] == "textarea")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$texto.='</td><td><textarea name="'.$attr_id[$i].'"';
			if($attr_required[$i]=='not null'){$texto.=' required="required"';}$texto.='>{if isset($object)}{$object->'.$attr_id[$i].'}{/if}</textarea></td>
';
			$k++;
		}
		else if($attr_type_form[$i] == "file")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$texto.='</td><td><input type="file" name="'.$attr_id[$i].'" /></td>';
			$k++;
		}
		else if($attr_type_form[$i] == "select")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$texto.='</td><td><select name="'.$attr_id[$i].'">';
			$values = explode(",", $attr_values[$i]);
			foreach ($values as $option)
			{
				$option=trim($option);
				$texto.='<option value="'.$option.'" {if isset($object)}{if $object->'.$attr_id[$i].' eq \''.$option.'\'}selected="selected"{/if}{/if}>'.$option.'</option>';
			}
			$texto.='</select></td>
';
			$k++;
		}
		else if($attr_type_form[$i] == "radio")
		{
			$texto.='<td align="right">'.$attr_name[$i].':';
			if($attr_required[$i]=='not null'){$texto.='*';}
			$values = explode(",", $attr_values[$i]);
			foreach ($values as $option)
			{
				$option=trim($option);
				$texto.='</td><td><input type="radio" name="'.$attr_id[$i].'" {if isset($object)}{if $object->'.$attr_id[$i].' eq \''.$option.'\'}checked="checked"{/if}{/if} value="'.$option.'">'.$option.'';
			}
			$texto.='</td>
';
			$k++;
		}
	}
	$i++;
}

$texto.='</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file=\'admin/control/results.tpl\'}

</td></tr></table>';

if($archivo = fopen('../templates/t_dark/admin/control/'.$class_name.".tpl", 'w'))
{
	fwrite($archivo, $texto);
	fclose($archivo);
}
}

}

?>