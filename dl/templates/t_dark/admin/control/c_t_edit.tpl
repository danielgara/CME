<table cellspacing="10">
<tr><td> 

<form class="well form-search" method="post" action="{$gvar.l_admin_control_c_t}?option=save" enctype="multipart/form-data">
<legend>Edit c_t <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Concern:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['concern']['foreign']}_{$attr['concern']['foreign_attribute']}_{$attr['concern']['foreign_name']}" value="{$object->get('concern')}" name="concern" required="required" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['concern']['foreign']}[*INTER*]{$attr['concern']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
<td align="right">Task:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['Task']['foreign']}_{$attr['Task']['foreign_attribute']}_{$attr['Task']['foreign_name']}" value="{$object->get('Task')}" name="Task" required="required" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['Task']['foreign']}[*INTER*]{$attr['Task']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>