<table cellspacing="10">
<tr><td> 

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
</tr>
{/section}  
</tbody>
</table>
</section>
</div>

{literal}
<script type="text/javascript">
var ancho=screen.width; ancho=ancho-68;document.getElementById('result').style.width=ancho+"px";
</script>
{/literal}
{/if}

</td></tr></table>