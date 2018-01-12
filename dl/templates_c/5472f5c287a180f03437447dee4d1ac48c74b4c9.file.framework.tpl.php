<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:16:25
         compiled from "C:/wamp64/www/dl/templates/t_dark\admin/control/framework.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259345a54ceb9338f96-00866526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5472f5c287a180f03437447dee4d1ac48c74b4c9' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\admin/control/framework.tpl',
      1 => 1410229220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259345a54ceb9338f96-00866526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table cellspacing="10">
<tr><td> 

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_framework'];?>
?option=add" enctype="multipart/form-data"> 
<legend>Add framework <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Name:*</td><td><input name="name" required="required" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->name;?>
<?php }?>" type="text"></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

<?php $_template = new Smarty_Internal_Template('admin/control/results.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</td></tr></table>