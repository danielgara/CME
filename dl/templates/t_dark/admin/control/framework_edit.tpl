<table cellspacing="10">
<tr><td> 

<form class="well form-search" method="post" action="{$gvar.l_admin_control_framework}?option=save" enctype="multipart/form-data">
<legend>Edit framework <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Name:*</td><td><input name="name" required="required" value="{$object->get('name')}" type="text"></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>