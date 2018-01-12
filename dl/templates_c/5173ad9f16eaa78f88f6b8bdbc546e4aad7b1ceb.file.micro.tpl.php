<?php /* Smarty version Smarty-3.0.9, created on 2014-10-24 12:07:46
         compiled from "/home/framewor/public_html/dl/templates/t_dark/micro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544356011544a8762be33a8-92275816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5173ad9f16eaa78f88f6b8bdbc546e4aad7b1ceb' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/micro.tpl',
      1 => 1414170463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544356011544a8762be33a8-92275816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script>
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
</script>



<!--<div>
<div class="alert alert-alert">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('Important')->value);?>
</strong> We're improving the material. Each concern will be connected with an example giving you a base code for your projects.
</div>
</div>-->

<div class="square">
<table cellspacing="5">
<tr><td><h4>Welcome to DL</h4>
Driving your learning is a software that helps developers to learn a specific WAF. This software gives you a personalized learning guide. To access to this guide you only have to follow the next 3 steps.
</td></tr></table>
</div><br />
<form id="form1" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_learning'];?>
" method="post" target="_blank">
<div class="square">
<table cellspacing="5">
<tr><td><h4>Step 1 - Choosing the WAF</h4>
What WAF do you learn to learn today?
<select name="framework">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('framework')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<option value="<?php echo $_smarty_tpl->getVariable('framework')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('name');?>
"><?php echo $_smarty_tpl->getVariable('framework')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('name');?>
</option>
<?php endfor; endif; ?>
</select>
</td></tr></table>
</div><br />

<div class="square">
<table cellspacing="5">
<tr><td><h4>Step 2 - Identify Requirements</h4>
WAFs are used to develop web application. Web applications are very different from one another. You have to analyze, what do you want to implement? what are the requirements? what do you really need?. Take a moment and think about it.
</td></tr></table>
</div><br />

<div class="square">
<table cellspacing="5">
<tr><td><h4>Step 3 - Select your concerns</h4>
Next we introduced a concern list. You have to be carefully,  compare your needs with this list. Read one by one each concern and select the concerns are realted with your development.<br /><br />

    <table class="table table-striped">
    <tr><td><b>#</b></td><td><b>Name</b></td><td><b>Category</b></td><td><b>Select this concern if:</b></td>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('concern')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</td>
    <td><input type="checkbox" name="concern[]" value="<?php echo $_smarty_tpl->getVariable('concern')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('id');?>
" /> <?php echo $_smarty_tpl->getVariable('concern')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('name');?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('concern')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('category');?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('concern')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('description');?>
</td>
    </tr>
    <?php endfor; endif; ?>
    </table>

</td></tr>
<tr><td><input type="submit" class="btn btn-primary" onclick="submitForm('learning_examples.php')" value="Get Examples" /></td></tr>
<tr><td><input type="submit" class="btn btn-primary" onclick="submitForm('learning.php')" value="Get Documentation" /></td></tr>
</table>
</div></form>