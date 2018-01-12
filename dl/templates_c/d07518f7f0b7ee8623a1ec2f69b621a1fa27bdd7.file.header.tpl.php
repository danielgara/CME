<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:13:12
         compiled from "C:/wamp64/www/dl/templates/t_dark\admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64485a54cdf8ded4f0-60965528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07518f7f0b7ee8623a1ec2f69b621a1fa27bdd7' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\admin/header.tpl',
      1 => 1410229215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64485a54cdf8ded4f0-60965528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
favicon.ico" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

<style type="text/css"> @import url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
css/bootstrap.css); </style> 
<style type="text/css"> @import url(<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
css/admin.css); </style> 
<script type='text/javascript'>l_global = '<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
';</script>
<script type='text/javascript'>path = '<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
';</script>
<script src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
js/jquery-1.7.2.min.js" language="Javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
js/functions.js" language="Javascript"></script>

</head>

<body>
<table cellspacing="0" cellpadding="0"><tr><td>

<header>
<div id="header-bar"><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/logo-admin.png" /></a></div>
<ul class="header-menu">
<?php $_template = new Smarty_Internal_Template('admin/menu.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</ul>
</header>

<table style="padding:10px"><tr><td>