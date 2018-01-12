<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:20
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892972608540e74883e3b03-33907715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d9ec0f2ad2679e4d6efcc7e18807c544e84f78' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/header.tpl',
      1 => 1410229215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892972608540e74883e3b03-33907715',
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