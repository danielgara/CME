<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:26
         compiled from "/home/framewor/public_html/dl/templates/t_dark/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139688265540e748ea1b803-59669697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33abb77e6d4113a98d9a45e25c541b6f798f7f08' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/message.tpl',
      1 => 1410229183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139688265540e748ea1b803-59669697',
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
