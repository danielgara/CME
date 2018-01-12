<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:38
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/control/documentation_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:552106471540e749a279eb7-83650983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feadd22df7b97d482ff169db97148e38b4ae049e' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/control/documentation_edit.tpl',
      1 => 1410229219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '552106471540e749a279eb7-83650983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/framewor/public_html/dl/modules/m_smarty/plugins/modifier.escape.php';
?><table cellspacing="10">
<tr><td> 


<script type="text/javascript" >
    $(document).ready(function(){
        $("#description").keydown(
        function(){
            var dataString = 'text='+$(this).attr('value');

            $.ajax({
            type: "POST",
            url: "ajax_docs.php",
            data: dataString,
            cache: false,
            success: function(html){
                        $("#flash").show();
                        document.getElementById('flash').innerHTML=html;
                    }
                });
        });
        $("#description").keyup(
        function(){
            $(this).keydown()
        });
        $(".buttoned").click(
        function(){
            $("#description").keydown()
        });
    });
</script>


<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
js/ed.js"></script>

<form class="well form-search" method="post" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_documentation'];?>
?option=save" enctype="multipart/form-data">
<legend>Edit documentation <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Task:*</td><td><?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable($_smarty_tpl->getVariable('obj_aux')->value->metadata(), null, null);?><input id="<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_attribute'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_name'];?>
" value="<?php echo $_smarty_tpl->getVariable('object')->value->get('task');?>
" name="task" required="required" type="text"> <button class="btn" onClick="window.open('<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
results_foreign.php?option=<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign'];?>
[*INTER*]<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_name'];?>
','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/key.png" alt="Assign Foreign" /></button></td>
<td align="right">Framework:*</td><td><?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable($_smarty_tpl->getVariable('obj_aux')->value->metadata(), null, null);?><input id="<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_attribute'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_name'];?>
" value="<?php echo $_smarty_tpl->getVariable('object')->value->get('framework');?>
" name="framework" required="required" type="text"> <button class="btn" onClick="window.open('<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
results_foreign.php?option=<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign'];?>
[*INTER*]<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_name'];?>
','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr><tr><td align="right">Video:</td><td><input name="video" value="<?php echo $_smarty_tpl->getVariable('object')->value->get('video');?>
" type="text"></td>
<td align="right">Link:</td><td><input name="link" value="<?php echo $_smarty_tpl->getVariable('object')->value->get('link');?>
" type="text"></td>
</tr>
<tr><td align="right">Description:*</td><td><script type="text/javascript">edToolbar('description'); </script> <textarea id="description" name="description" required="required" class="ed"><?php echo $_smarty_tpl->getVariable('object')->value->get('description');?>
</textarea></td>
<td><div id="flash" class="square" style="display:none"></div></td>
</tr>
<tr>
<td align="right">Note:</td><td><textarea name="note"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('object')->value->get('note'));?>
</textarea></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="<?php echo $_smarty_tpl->getVariable('object')->value->auxiliars;?>
"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>