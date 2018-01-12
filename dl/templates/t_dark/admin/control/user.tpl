<table cellspacing="10">
<tr><td> 
    
<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_user}?option=add" enctype="multipart/form-data">
<legend>Add user <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2">
<tr><td align="right">Name:*</td><td> <input name="name" required="required" value="{if isset($object)}{$object->name}{/if}" type="text"></td><td align="right">User:*</td><td> <input name="user" required="required" value="{if isset($object)}{$object->user}{/if}" type="text"></td>
</tr><tr>
<td align="right">Password:*</td><td> <input name="password" required="required" type="password"></td><td align="right">Type:*</td><td> <select name="type"><option value="admin" {if isset($object)}{if $object->type eq 'admin'}selected="selected"{/if}{/if}>admin</option><option value="user" {if isset($object)}{if $object->type eq 'user'}selected="selected"{/if}{/if}>user</option></select></td>
</tr><tr>
<td align="right">Email:*</td><td> <input name="email" required="required" value="{if isset($object)}{$object->email}{/if}" type="text"></td>
</tr>
<tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file='admin/control/results.tpl'}

</td></tr></table>