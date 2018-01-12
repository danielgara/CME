<table cellspacing="10">
<tr><td> 

<form class="well form-search" method="post" action="{$gvar.l_admin_control_concern}?option=save" enctype="multipart/form-data">
<legend>Edit concern <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Name:*</td><td><input name="name" required="required" value="{$object->get('name')}" type="text"></td>
<td align="right">Description:*</td><td><textarea name="description" required="required">{$object->get('description')}</textarea></td>
</tr><tr><td align="right">Lorder:*</td><td><input name="lorder" required="required" value="{$object->get('lorder')}" type="text"></td>
<td align="right">Category:*</td><td><select name="category"><option value="User Interface" {if $object->get('category') eq 'User Interface'}selected="selected"{/if}>User Interface</option><option value="Architecture and data flow control" {if $object->get('category') eq 'Architecture and data flow control'}selected="selected"{/if}>Architecture and data flow control</option><option value="Data modeling and persistence" {if $object->get('category') eq 'Data modeling and persistence'}selected="selected"{/if}>Data modeling and persistence</option><option value="Security" {if $object->get('category') eq 'Security'}selected="selected"{/if}>Security</option><option value="Modules and extensions" {if $object->get('category') eq 'Modules and extensions'}selected="selected"{/if}>Modules and extensions</option></select></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>