<table cellspacing="10">
<tr><td> 

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_concern}?option=add" enctype="multipart/form-data"> 
<legend>Add concern <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Name:*</td><td><input name="name" required="required" value="{if isset($object)}{$object->name}{/if}" type="text"></td>
<td align="right">Description:*</td><td><textarea name="description" required="required">{if isset($object)}{$object->description}{/if}</textarea></td>
</tr><tr><td align="right">Lorder:*</td><td><input name="lorder" required="required" value="{if isset($object)}{$object->lorder}{/if}" type="text"></td>
<td align="right">Category:*</td><td><select name="category"><option value="User Interface" {if isset($object)}{if $object->category eq 'User Interface'}selected="selected"{/if}{/if}>User Interface</option><option value="Architecture and data flow control" {if isset($object)}{if $object->category eq 'Architecture and data flow control'}selected="selected"{/if}{/if}>Architecture and data flow control</option><option value="Data modeling and persistence" {if isset($object)}{if $object->category eq 'Data modeling and persistence'}selected="selected"{/if}{/if}>Data modeling and persistence</option><option value="Security" {if isset($object)}{if $object->category eq 'Security'}selected="selected"{/if}{/if}>Security</option><option value="Modules and extensions" {if isset($object)}{if $object->category eq 'Modules and extensions'}selected="selected"{/if}{/if}>Modules and extensions</option></select></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file='admin/control/results.tpl'}

</td></tr></table>