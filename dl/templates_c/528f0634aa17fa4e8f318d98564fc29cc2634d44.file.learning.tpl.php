<?php /* Smarty version Smarty-3.0.9, created on 2014-10-24 13:33:29
         compiled from "/home/framewor/public_html/dl/templates/t_dark/learning.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867449177544a9b798b4ee6-09559959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528f0634aa17fa4e8f318d98564fc29cc2634d44' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/learning.tpl',
      1 => 1414175598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1867449177544a9b798b4ee6-09559959',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--<div>
<div class="alert alert-alert">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('Important')->value);?>
</strong> We're improving the material. Each concern will be connected with an example giving you a base code for your projects.
</div>
</div>
-->

<div class="square">
<table cellspacing="5">
<tr><td><h4>Start Your Learning</h4>
These are the concerns you selected with their respective solutions. Some concerns could be combined, others could be not required. <u>Always start reading the notes of each task.</u>
</td></tr></table>
</div><br />


<?php $_smarty_tpl->tpl_vars['c1'] = new Smarty_variable($_smarty_tpl->getVariable('task')->value[0]->auxiliars['c_name'], null, null);?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, null);?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('task')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

<?php if ($_smarty_tpl->getVariable('i')->value==0){?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, null);?>
<div class="square">
<table cellspacing="5">
<tr><td colspan="3"><h4><?php echo $_smarty_tpl->getVariable('c1')->value;?>
</h4></td></tr>
<tr><td><b>Component</b></td><td><b>Task</b></td><td><b>Documentation</b></td>
<tr><td><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('component');?>
</td><td><i><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('goal');?>
</i></td><td>
<?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link']!=''){?>
<a href="<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link'];?>
" target="_blank">Solution Here</a><br />
<?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video']!=''){?>
<iframe width="400" height="230" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video'];?>
" frameborder="0" allowfullscreen></iframe><br />
<?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description']!=''){?>
<div class="square">
<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description'];?>

</div>
<?php }else{ ?>
<span style="color:#F00">There's not documentation for this task right now.<br /></span>
<?php }?>
<?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note']!=''){?>
<b>Note:</b> <?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note'];?>

<?php }?>
</td>
<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('c1')->value==$_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['c_name']){?>
		<tr><td><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('component');?>
</td><td><i><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('goal');?>
</i></td>
        <td>
            <?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link']!=''){?>
            <a href="<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link'];?>
" target="_blank">Solution Here</a><br />
            <?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video']!=''){?>
            <iframe width="400" height="230" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video'];?>
" frameborder="0" allowfullscreen></iframe><br />
            <?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description']!=''){?>
            <div class="square">
            <?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description'];?>

            </div>
            <?php }else{ ?>
            <span style="color:#F00">There's not documentation for this task right now.<br /></span>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note']!=''){?>
            <b>Note:</b> <?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note'];?>

            <?php }?>
        </td>
    <?php }else{ ?>
    	<?php $_smarty_tpl->tpl_vars['c1'] = new Smarty_variable($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['c_name'], null, null);?>
        </table>
		</div><br />
        <div class="square">
        <table cellspacing="5">
        <tr><td colspan="3"><h4><?php echo $_smarty_tpl->getVariable('c1')->value;?>
</h4></td></tr>
        <tr><td><b>Component</b></td><td><b>Task</b></td><td><b>Documentation</b></td>
        <tr><td><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('component');?>
</td><td><i><?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('goal');?>
</i></td>
        <td>
            <?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link']!=''){?>
            <a href="<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_link'];?>
" target="_blank">Solution Here</a><br />
            <?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video']!=''){?>
            <iframe width="400" height="230" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_video'];?>
" frameborder="0" allowfullscreen></iframe><br />
            <?php }elseif($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description']!=''){?>
            <div class="square">
            <?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_description'];?>

            </div>
            <?php }else{ ?>
            <span style="color:#F00">There's not documentation for this task right now.<br /></span>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note']!=''){?>
            <b>Note:</b> <?php echo $_smarty_tpl->getVariable('task')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->auxiliars['d_note'];?>

            <?php }?>
        </td>
    <?php }?>

<?php }?>

<?php endfor; endif; ?>
</table>
</div><br />