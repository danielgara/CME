<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:15:47
         compiled from "C:/wamp64/www/dl/templates/t_dark\admin/vars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230775a54ce93b6f780-59527884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fadbca21d1b02eafdcd70bdcbfcecc7e429909c' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\admin/vars.tpl',
      1 => 1410229216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230775a54ce93b6f780-59527884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div align="center"><b>Editando las variables en espa&ntilde;ol</b></div>
<form method="post" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
admin/vars.php?option=editarvar">
<table width="100%" border="0" cellspacing="10">

<tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('val')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1, null, null);?>
<td align="right"><b><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
:</b></td><td>
<?php if (strlen($_smarty_tpl->getVariable('val')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']])>40){?>
<textarea name="gvar[<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
]"><?php echo $_smarty_tpl->getVariable('val')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</textarea>
<?php }else{ ?>
<input type="text" name="gvar[<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
]" value="<?php echo $_smarty_tpl->getVariable('val')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" /> 
<?php }?>
</td>
<?php if (($_smarty_tpl->getVariable('j')->value%2)==0){?></tr><tr><?php }?>
<?php endfor; endif; ?>

<tr><td align="center" colspan="2"><input type="submit" class="btn" value="Editar"></td></tr>
</table>
</form>