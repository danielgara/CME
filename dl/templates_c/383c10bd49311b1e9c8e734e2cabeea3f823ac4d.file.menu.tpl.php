<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:20
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335274109540e748843c042-29251905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '383c10bd49311b1e9c8e734e2cabeea3f823ac4d' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/menu.tpl',
      1 => 1410229216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335274109540e748843c042-29251905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_index'];?>
</a></li>
<?php if (isset($_SESSION['user'])&&$_GET['option']!='logout'){?>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_creator'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_creator'];?>
</a></li>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control'];?>
</a>
	<ul>
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_example'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_example'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_documentation'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_documentation'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_c_t'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_c_t'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_task'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_task'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_component'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_component'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_concern'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_concern'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_framework'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_framework'];?>
</a></li>
		
		<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_access'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_access'];?>
</a></li>
		
        <li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_user'];?>
" style="background:url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
/images/admin/docs.png) no-repeat 6px center;">
        Manage <?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_control_user'];?>
</a></li>
    </ul>
</li>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin'];?>
vars.php">Vars</a></li>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
?option=logout"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</a></li>
<?php }?>