<form class="well form-search" action="{$gvar.l_admin_control}{$l_this}" method="GET">
<fieldset>
<table cellspacing="2">
<tr><td>Search: <select name="search_type">{foreach from=$obj_aux->metadata() key=attribute_key item=attribute}
<option value="{$attribute_key}">{$attribute['name']}</option>{/foreach}</select>
<input type="text" name="search_words" />
{if isset($smarty.get.order)}<input name="order" type="hidden" value="{$smarty.get.order}" />{/if}{if isset($smarty.get.show_order)}<input name="show_order" type="hidden" value="{$smarty.get.show_order}" />{/if}{if $l_this eq "results_foreign.php"}<input name="option" type="hidden" value="{$smarty.get.option}" />{/if}<input class="btn" type="submit" value="Send" />
</td></tr></table>
</fieldset>
</form>

<form action="{$gvar.l_admin_control}{$l_this}" style="margin:0px" method="GET">
<fieldset>
<table cellspacing="0">
<tr><td valign="middle" align="left">
    <div class="pagination" style="float:left">
    <ul>
    {if (1 lt $actual_page-2)}<li><a href="{$gvar.l_admin_control}{$l_this}?page=1{if isset($smarty.get.order)}&order={$smarty.get.order}{/if}{if isset($smarty.get.search_type)}&search_type={$smarty.get.search_type}{/if}{if isset($smarty.get.search_words)}&search_words={$smarty.get.search_words}{/if}{if isset($smarty.get.show_order)}&show_order={$smarty.get.show_order}{/if}{if $l_this eq "results_foreign.php"}&option={$smarty.get.option}{/if}">1</a></li>{if $actual_page eq 4}{else}<li class="disabled"><a href="#">...</a></li>{/if}{/if}
    {if $actual_page eq 1}{$begin=1}{else}{$begin=$actual_page-2}{/if}
    
    {section name=pag start=$begin loop=$actual_page+3}
    {assign var=counter value=$smarty.section.pag.index}
    {if ($counter le $total_page) && ($counter gt 0)}
    {if $counter eq $actual_page}<li class="active"><a href="#">{$counter}</a></li>{else}
    <li><a href="{$gvar.l_admin_control}{$l_this}?page={$counter}{if isset($smarty.get.order)}&order={$smarty.get.order}{/if}{if isset($smarty.get.search_type)}&search_type={$smarty.get.search_type}{/if}{if isset($smarty.get.search_words)}&search_words={$smarty.get.search_words}{/if}{if isset($smarty.get.show_order)}&show_order={$smarty.get.show_order}{/if}{if $l_this eq "results_foreign.php"}&option={$smarty.get.option}{/if}">{$counter}</a></li>{/if}
    {/if}
    {/section}
    
    {if ($total_page gt $actual_page+2)}{if $actual_page eq $total_page-3}{else}<li class="disabled"><a href="#">...</a></li>{/if}<li><a href="{$gvar.l_admin_control}{$l_this}?page={$total_page}{if isset($smarty.get.order)}&order={$smarty.get.order}{/if}{if isset($smarty.get.search_type)}&search_type={$smarty.get.search_type}{/if}{if isset($smarty.get.search_words)}&search_words={$smarty.get.search_words}{/if}{if isset($smarty.get.show_order)}&show_order={$smarty.get.show_order}{/if}{if $l_this eq "results_foreign.php"}&option={$smarty.get.option}{/if}">{$total_page}</a></li>{/if}
    </ul>
    </div>
    <div style="margin: 4px 0px">&nbsp;<input name="page" style="width:20px;" type="text" /></div>
</td>
<td valign="middle" align="right">{if isset($smarty.get.order)}<input name="order" type="hidden" value="{$smarty.get.order}" />{/if}{if isset($smarty.get.show_order)}<input name="show_order" type="hidden" value="{$smarty.get.show_order}" />{/if}{if isset($smarty.get.search_type)}<input name="search_type" type="hidden" value="{$smarty.get.search_type}" />{/if}{if isset($smarty.get.search_words)}<input name="search_words" type="hidden" value="{$smarty.get.search_words}" />{/if}{if $l_this eq "results_foreign.php"}<input name="option" type="hidden" value="{$smarty.get.option}" />{/if}<h4 small>Page {$actual_page} of {$total_page}</h4></td></tr></table>
</fieldset>
</form>