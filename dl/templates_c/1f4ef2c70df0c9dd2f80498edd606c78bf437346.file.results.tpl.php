<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:30
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/control/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1036190993540e7492d6a1d2-41994612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f4ef2c70df0c9dd2f80498edd606c78bf437346' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/control/results.tpl',
      1 => 1410229220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036190993540e7492d6a1d2-41994612',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('admin/control/pagination.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('results',null,true,false)->value)){?>
<div id="result" style="overflow-x: auto"> 
<section id="tables">  
<table class="table table-bordered table-striped table-hover table-basic">
<thead><tr>
<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['attribute_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value[0]->metadata(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
 $_smarty_tpl->tpl_vars['attribute_key']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
<th>
<a style="text-decoration:underline;color:#030303;" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?order=<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
&show_order=desc"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/down.png" /></a> <a style="text-decoration:underline;color:#030303;" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?order=<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
</a> <a style="text-decoration:underline;color:#030303;" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?order=<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
&show_order=asc"><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/up.png" /></a>
</th>
<?php }} ?>
<th width="23px">&nbsp;</th>
<th width="23px">&nbsp;</th>
</tr>
</thead>
<tbody>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('results')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<tr>
<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['attribute_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value[0]->metadata(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
 $_smarty_tpl->tpl_vars['attribute_key']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
    <?php if (in_array('html',$_smarty_tpl->tpl_vars['attribute']->value['additional'])||in_array('textarea',$_smarty_tpl->tpl_vars['attribute']->value['additional'])){?>
    <td><textarea name="<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
" readonly="readonly" cols="10" rows="2"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get($_smarty_tpl->tpl_vars['attribute_key']->value);?>
</textarea></td>
    <?php }else{ ?><td><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get($_smarty_tpl->tpl_vars['attribute_key']->value);?>
</td><?php }?>
<?php }} ?>
    <td>
        <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?option=edit" style="margin:0px" method="post">
        <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['attribute_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value[0]->metadata(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
 $_smarty_tpl->tpl_vars['attribute_key']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
        <?php if (in_array('html',$_smarty_tpl->tpl_vars['attribute']->value['additional'])||in_array('textarea',$_smarty_tpl->tpl_vars['attribute']->value['additional'])){?>
        <textarea style="display:none" name="<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
" readonly="readonly" cols="10"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get($_smarty_tpl->tpl_vars['attribute_key']->value);?>
</textarea>
        <?php }else{ ?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get($_smarty_tpl->tpl_vars['attribute_key']->value);?>
"><?php }?>
        <?php }} ?>
		<button class="btn" style="padding:0px; padding-left:4px; padding-right:4px; margin:0px"  type="submit"><i class="icon-pencil"></i></button>
        </form>
    </td>
    <td>
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?option=delete" style="margin:0px" method="post" name="delete" onsubmit="return verify();"><?php  $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value[0]->primary_key(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['keys']->key => $_smarty_tpl->tpl_vars['keys']->value){
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
" value="<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get($_smarty_tpl->tpl_vars['keys']->value);?>
" /><?php }} ?><button class="btn" style="padding:0px; padding-left:4px; padding-right:4px; margin:0px" type="submit"><i class="icon-remove"></i></button></form>
    </td>
</tr>
<?php endfor; endif; ?>  
</tbody>
</table>
</section>
</div>


<script type="text/javascript">
var ancho=screen.width; ancho=ancho-68;document.getElementById('result').style.width=ancho+"px";
</script>

<?php }?>