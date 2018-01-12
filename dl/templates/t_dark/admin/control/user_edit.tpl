<table cellspacing="10">
<tr><td> 
     
<form class="well form-search" method="post" action="{$gvar.l_admin_control_user}?option=save" enctype="multipart/form-data">
<legend>Edit user <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2">
<tr><td align="right">Name:*</td><td> <input name="name" required="required" value="{$object->get('name')}" type="text"></td><td align="right">User:*</td><td> <input name="user" required="required" value="{$object->get('user')}" type="text"></td>
</tr><tr>
<td align="right">Password:*</td><td> <input name="password" required="required" type="password"></td><td align="right">Type:*</td><td> <select name="type"><option value="admin" {if $object->get('type') eq 'admin'}selected="selected"{/if}>admin</option><option value="user" {if $object->get('type') eq 'user'}selected="selected"{/if}>user</option></select></td>
</tr><tr>
<td align="right">Email:*</td><td> <input name="email" required="required" value="{$object->get('email')}" type="text"></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit">
</td></tr>
</table>
</fieldset>
</form>

</td></tr></table>