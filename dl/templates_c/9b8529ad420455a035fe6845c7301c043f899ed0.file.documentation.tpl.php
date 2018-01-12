<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:30
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/control/documentation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368835236540e7492cafe79-36572963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8529ad420455a035fe6845c7301c043f899ed0' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/control/documentation.tpl',
      1 => 1410229219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368835236540e7492cafe79-36572963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table cellspacing="10">
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

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control_documentation'];?>
?option=add" enctype="multipart/form-data"> 
<legend>Add documentation <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Task:*</td><td><?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable($_smarty_tpl->getVariable('obj_aux')->value->metadata(), null, null);?><input id="<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_attribute'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_name'];?>
" name="task" required="required" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->task;?>
<?php }?>" type="text"> <button class="btn" onClick="window.open('<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
results_foreign.php?option=<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign'];?>
[*INTER*]<?php echo $_smarty_tpl->getVariable('attr')->value['task']['foreign_name'];?>
','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/key.png" alt="Assign Foreign" /></button></td>
<td align="right">Framework:*</td><td><?php $_smarty_tpl->tpl_vars['attr'] = new Smarty_variable($_smarty_tpl->getVariable('obj_aux')->value->metadata(), null, null);?><input id="<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_attribute'];?>
_<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_name'];?>
" name="framework" required="required" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->framework;?>
<?php }?>" type="text"> <button class="btn" onClick="window.open('<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
results_foreign.php?option=<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign'];?>
[*INTER*]<?php echo $_smarty_tpl->getVariable('attr')->value['framework']['foreign_name'];?>
','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr><tr><td align="right">Video:</td><td><input name="video" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->video;?>
<?php }?>" type="text"></td>
<td align="right">Link:</td><td><input name="link" value="<?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->link;?>
<?php }?>" type="text"></td>
</tr>

<tr><td align="right">Description:*</td><td> <script type="text/javascript">edToolbar('description'); </script><textarea id="description" name="description" class="ed"><?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->description;?>
<?php }?></textarea></td><td colspan="2"><div id="flash" class="square" style="display:none"></div></td></tr>

<tr>
<td align="right">Note:</td><td><textarea name="note"><?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('object')->value->note;?>
<?php }?></textarea></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

<?php $_template = new Smarty_Internal_Template('admin/control/results.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</td></tr></table>