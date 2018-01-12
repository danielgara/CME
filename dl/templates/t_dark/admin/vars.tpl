<div align="center"><b>Editando las variables en espa&ntilde;ol</b></div>
<form method="post" action="{$gvar.l_global}admin/vars.php?option=editarvar">
<table width="100%" border="0" cellspacing="10">

<tr>
{section name=i loop=$val}
{$j = $smarty.section.i.index+1}
<td align="right"><b>{$arr[i]}:</b></td><td>
{if $val[i]|strlen > 40}
<textarea name="gvar[{$arr[i]}]">{$val[i]}</textarea>
{else}
<input type="text" name="gvar[{$arr[i]}]" value="{$val[i]}" /> 
{/if}
</td>
{if ($j mod 2) eq 0}</tr><tr>{/if}
{/section}

<tr><td align="center" colspan="2"><input type="submit" class="btn" value="Editar"></td></tr>
</table>
</form>