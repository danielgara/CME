<table cellspacing="10">
<tr><td> 

<form class="well form-search" method="post" action="{$gvar.l_admin_control_task}?option=save" enctype="multipart/form-data">
<legend>Edit task <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Goal:*</td><td><input name="goal" required="required" value="{$object->get('goal')}" type="text"></td>
<td align="right">Component:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['component']['foreign']}_{$attr['component']['foreign_attribute']}_{$attr['component']['foreign_name']}" value="{$object->get('component')}" name="component" required="required" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['component']['foreign']}[*INTER*]{$attr['component']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>