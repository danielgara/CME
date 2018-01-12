<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{$gvar.l_global}favicon.ico" />
<title>{$title}</title>
{literal}
<style type="text/css"> @import url({/literal}{$gvar.l_global}{literal}css/bootstrap.css); </style> 
<style type="text/css"> @import url({/literal}{$gvar.l_global}{literal}css/admin.css); </style>
<script language="JavaScript">
	function send_value (keys,values,class_name,rel_name){
	keys = keys.split('[*INTER*]');
	values = values.split('[*INTER*]');
	for (i=0;i<keys.length-1;i=i+1)
	{
		window.opener.document.getElementById(class_name+'_'+keys[i]+'_'+rel_name).value = values[i];
	}
	window.close();
	}
</script>
{/literal}
</head>

<body>

<table cellspacing="20">
<tr>
<td>

{include file='admin/control/pagination.tpl'}
{if isset($results)}
<div id="result" style="overflow-x: auto"> 
<section id="tables">  
<table class="table table-bordered table-striped table-hover table-basic">
<thead><tr>
{foreach from=$results[0]->metadata() key=attribute_key item=attribute}
<th>
<a style="text-decoration:underline;color:#030303;" href="{$gvar.l_admin_control}{$l_this}?order={$attribute_key}&show_order=desc"><img src="{$gvar.l_global}images/admin/down.png" /></a> <a style="text-decoration:underline;color:#030303;" href="{$gvar.l_admin_control}{$l_this}?order={$attribute_key}">{$attribute['name']}</a> <a style="text-decoration:underline;color:#030303;" href="{$gvar.l_admin_control}{$l_this}?order={$attribute_key}&show_order=asc"><img src="{$gvar.l_global}images/admin/up.png" /></a>
</th>
{/foreach}
<th width="23px">&nbsp;</th>
</tr>
</thead>
<tbody>
{section name=i loop=$results}
<tr>
{foreach from=$results[0]->metadata() key=attribute_key item=attribute}
    {if in_array('html', $attribute['additional']) or in_array('textarea', $attribute['additional'])}
    <td><textarea name="{$attribute_key}" readonly="readonly" cols="10" rows="2">{$results[i]->get($attribute_key)}</textarea></td>
    {else}<td>{$results[i]->get($attribute_key)}</td>{/if}
{/foreach}
	<td>{$key = ''}{$value = ''}
    {foreach from=$results[0]->primary_key() item=keys}{$key = $key|cat: $keys}{$key = $key|cat: '[*INTER*]'}{/foreach}
    {foreach from=$results[0]->primary_key() item=keys}{$value = $value|cat: $results[i]->get($keys)}{$value = $value|cat: '[*INTER*]'}{/foreach}
	<button class="btn" onClick="send_value('{$key}','{$value}','{$class_name}','{$rel_name}')"><i class="icon-plus"></i></button>
	</td>
</tr>
{/section}  
</tbody>
</table>
</section>
</div>
{/if}

</td></tr></table>

</body>
</html>