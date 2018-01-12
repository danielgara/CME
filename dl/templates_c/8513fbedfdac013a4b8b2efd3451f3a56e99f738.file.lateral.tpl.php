<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:02:26
         compiled from "C:/wamp64/www/dl/templates/t_dark\lateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106715a54cb72694a62-17861349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8513fbedfdac013a4b8b2efd3451f3a56e99f738' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\lateral.tpl',
      1 => 1410229182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106715a54cb72694a62-17861349',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_SESSION['user'])&&$_GET['option']!='logout'){?>
<table cellspacing="0"><tr><td align="center">
<div class="well well-small">
<b>Welcome <?php echo $_SESSION['user']['name'];?>
</b><br /><br /><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/admin.png" /><br /><br />
<button class="btn" onClick="location.href='<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
?option=logout'"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</button>
</div>
</td></tr></table>
<?php }else{ ?>   
<table cellspacing="0" cellpadding="0"><tr><td class="font-white" align="center">
<form class="well well-small form-search" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
?option=login" method="post" name="login">
<b><a name="login"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_login'];?>
</a></b><br /><br />
<input name="user" type="text" class="input-medium" placeholder="User"><br /><br />
<input name="password" type="password" class="input-medium" placeholder="Password"><br /><br />
<button type="submit" class="btn">Go</button>
</form>
</td></tr></table>
<?php }?>

<table cellspacing="0" cellpadding="0"><tr><td>
<h4>Menu</h4>
<div class="well well-small" style="padding: 8px 0;">
    <ul class="nav nav-list">
      <li class="nav-header">Principal List</li>
      <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_index'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp1){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_index'];?>
</a></li>
      <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_contact'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp2){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_contact'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_contact'];?>
</a></li>
    </ul>
</div>
</td></tr></table>