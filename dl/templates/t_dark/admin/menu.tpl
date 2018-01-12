<li><a href="{$gvar.l_admin_index}">{$gvar.n_admin_index}</a></li>
{if isset($smarty.session.user) && $smarty.get.option neq 'logout'}
<li><a href="{$gvar.l_admin_control}">{$gvar.n_admin_control}</a>
	<ul>
		<li><a href="{$gvar.l_admin_control_example}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_example}</a></li>
		
		<li><a href="{$gvar.l_admin_control_documentation}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_documentation}</a></li>
		
		<li><a href="{$gvar.l_admin_control_c_t}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_c_t}</a></li>
		
		<li><a href="{$gvar.l_admin_control_task}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_task}</a></li>
		
		<li><a href="{$gvar.l_admin_control_component}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_component}</a></li>
		
		<li><a href="{$gvar.l_admin_control_concern}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_concern}</a></li>
		
		<li><a href="{$gvar.l_admin_control_framework}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_framework}</a></li>
		
		<li><a href="{$gvar.l_admin_control_access}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_access}</a></li>
		
        <li><a href="{$gvar.l_admin_control_user}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">
        Manage {$gvar.n_admin_control_user}</a></li>
    </ul>
</li>
<li><a href="{$gvar.l_admin}vars.php">Vars</a></li>
<li><a href="{$gvar.l_admin_index}?option=logout">{$gvar.n_logout}</a></li>
{/if}