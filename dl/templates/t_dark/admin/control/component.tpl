<table cellspacing="10">
<tr><td> 

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_component}?option=add" enctype="multipart/form-data"> 
<legend>Add component <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Name:*</td><td><input name="name" required="required" value="{if isset($object)}{$object->name}{/if}" type="text"></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file='admin/control/results.tpl'}

</td></tr></table>