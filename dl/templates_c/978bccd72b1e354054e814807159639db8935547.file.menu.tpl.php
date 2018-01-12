<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:16:15
         compiled from "C:/wamp64/www/dl/templates/t_dark\admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225225a54ceaf46d060-63465908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978bccd72b1e354054e814807159639db8935547' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\admin/menu.tpl',
      1 => 1515507373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225225a54ceaf46d060-63465908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_admin_index'];?>
</a></li>
<?php if (isset($_SESSION['user'])&&$_GET['option']!='logout'){?>
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