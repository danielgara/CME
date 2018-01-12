<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:13:21
         compiled from "C:/wamp64/www/dl/templates/t_dark\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47565a54ce0104b866-45457215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b121eaa356eef03aa118b65681d63a273344cfb3' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\message.tpl',
      1 => 1410229183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47565a54ce0104b866-45457215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
