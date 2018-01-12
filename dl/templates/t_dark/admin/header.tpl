<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{$gvar.l_global}favicon.ico" />
<title>{$title}</title>
{literal}
<style type="text/css"> @import url({/literal}{$gvar.l_global}{literal}css/bootstrap.css); </style> 
<style type="text/css"> @import url({/literal}{$gvar.l_global}{literal}css/admin.css); </style> 
<script type='text/javascript'>l_global = '{/literal}{$gvar.l_global}{literal}';</script>
<script type='text/javascript'>path = '{/literal}{$gvar.l_global}{literal}';</script>
<script src="{/literal}{$gvar.l_global}{literal}js/jquery-1.7.2.min.js" language="Javascript"></script>
<script src="{/literal}{$gvar.l_global}{literal}js/functions.js" language="Javascript"></script>
{/literal}
</head>

<body>
<table cellspacing="0" cellpadding="0"><tr><td>

<header>
<div id="header-bar"><a href="{$gvar.l_admin_index}"><img src="{$gvar.l_global}images/admin/logo-admin.png" /></a></div>
<ul class="header-menu">
{include file='admin/menu.tpl'}
</ul>
</header>

<table style="padding:10px"><tr><td>