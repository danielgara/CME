<table cellspacing="10">
<tr><td> 

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_task}?option=add" enctype="multipart/form-data"> 
<legend>Add task <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Goal:*</td><td><input name="goal" required="required" value="{if isset($object)}{$object->goal}{/if}" type="text"></td>
<td align="right">Component:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['component']['foreign']}_{$attr['component']['foreign_attribute']}_{$attr['component']['foreign_name']}" name="component" required="required" value="{if isset($object)}{$object->component}{/if}" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['component']['foreign']}[*INTER*]{$attr['component']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file='admin/control/results.tpl'}

</td></tr></table>