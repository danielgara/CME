<table cellpadding="0" cellspacing="10"><tr><td valign="top" align="left">

{if isset($smarty.session.user) && $smarty.get.option neq 'logout'}
<table cellspacing="0"><tr><td align="center">
<div class="well well-small" style="width:180px">
<b>Welcome {$smarty.session.user.name}</b><br /><br /><img src="{$gvar.l_global}images/admin/admin.png" /><br /><br />
<button class="btn" onClick="location.href='{$gvar.l_admin_index}?option=logout'">{$gvar.n_logout}</button>
</div>
</td></tr></table>
{else}   
<table cellspacing="0" cellpadding="0" width="210px"><tr><td class="font-white" align="center">
<form class="well well-small form-search" action="{$gvar.l_admin_index}?option=login" method="post" name="login">
<b><a name="login">{$gvar.n_login}</a></b><br /><br />
<input name="user" type="text" class="input-medium" placeholder="User"><br /><br />
<input name="password" type="password" class="input-medium" placeholder="Password"><br /><br />
<button type="submit" class="btn">Go</button>
</form>
</td></tr></table>
{/if}

</td><td valign="top" align="left">

<div class="square">
<table cellspacing="5">
<tr><td><h4>Framework G</h4>
G is a framework and an architectural pattern that is based on the MVC (model-view-controller) but it makes it better, integrates new layers and redefine some of its layers, the base of G is the object-oriented programming OOP and class diagram. In based on these defines a CRUD and installer modules that facilitate the development to the developer and save you time and work. 
</td></tr></table>
</div>

</td></tr></table>