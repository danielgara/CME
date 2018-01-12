<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:30
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/control/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:927546834540e7492e18741-38988151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6bccee1beec43dde159e9a7f449afe9f90178a' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/control/pagination.tpl',
      1 => 1410229220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '927546834540e7492e18741-38988151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form class="well form-search" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
" method="GET">
<fieldset>
<table cellspacing="2">
<tr><td>Search: <select name="search_type"><?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['attribute_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('obj_aux')->value->metadata(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
 $_smarty_tpl->tpl_vars['attribute_key']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['attribute_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
</option><?php }} ?></select>
<input type="text" name="search_words" />
<?php if (isset($_GET['order'])){?><input name="order" type="hidden" value="<?php echo $_GET['order'];?>
" /><?php }?><?php if (isset($_GET['show_order'])){?><input name="show_order" type="hidden" value="<?php echo $_GET['show_order'];?>
" /><?php }?><?php if ($_smarty_tpl->getVariable('l_this')->value=="results_foreign.php"){?><input name="option" type="hidden" value="<?php echo $_GET['option'];?>
" /><?php }?><input class="btn" type="submit" value="Send" />
</td></tr></table>
</fieldset>
</form>

<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
" style="margin:0px" method="GET">
<fieldset>
<table cellspacing="0">
<tr><td valign="middle" align="left">
    <div class="pagination" style="float:left">
    <ul>
    <?php if ((1<$_smarty_tpl->getVariable('actual_page')->value-2)){?><li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?page=1<?php if (isset($_GET['order'])){?>&order=<?php echo $_GET['order'];?>
<?php }?><?php if (isset($_GET['search_type'])){?>&search_type=<?php echo $_GET['search_type'];?>
<?php }?><?php if (isset($_GET['search_words'])){?>&search_words=<?php echo $_GET['search_words'];?>
<?php }?><?php if (isset($_GET['show_order'])){?>&show_order=<?php echo $_GET['show_order'];?>
<?php }?><?php if ($_smarty_tpl->getVariable('l_this')->value=="results_foreign.php"){?>&option=<?php echo $_GET['option'];?>
<?php }?>">1</a></li><?php if ($_smarty_tpl->getVariable('actual_page')->value==4){?><?php }else{ ?><li class="disabled"><a href="#">...</a></li><?php }?><?php }?>
    <?php if ($_smarty_tpl->getVariable('actual_page')->value==1){?><?php $_smarty_tpl->tpl_vars['begin'] = new Smarty_variable(1, null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['begin'] = new Smarty_variable($_smarty_tpl->getVariable('actual_page')->value-2, null, null);?><?php }?>
    
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['name'] = 'pag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'] = (int)$_smarty_tpl->getVariable('begin')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('actual_page')->value+3) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pag']['total']);
?>
    <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['pag']['index'], null, null);?>
    <?php if (($_smarty_tpl->getVariable('counter')->value<=$_smarty_tpl->getVariable('total_page')->value)&&($_smarty_tpl->getVariable('counter')->value>0)){?>
    <?php if ($_smarty_tpl->getVariable('counter')->value==$_smarty_tpl->getVariable('actual_page')->value){?><li class="active"><a href="#"><?php echo $_smarty_tpl->getVariable('counter')->value;?>
</a></li><?php }else{ ?>
    <li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('counter')->value;?>
<?php if (isset($_GET['order'])){?>&order=<?php echo $_GET['order'];?>
<?php }?><?php if (isset($_GET['search_type'])){?>&search_type=<?php echo $_GET['search_type'];?>
<?php }?><?php if (isset($_GET['search_words'])){?>&search_words=<?php echo $_GET['search_words'];?>
<?php }?><?php if (isset($_GET['show_order'])){?>&show_order=<?php echo $_GET['show_order'];?>
<?php }?><?php if ($_smarty_tpl->getVariable('l_this')->value=="results_foreign.php"){?>&option=<?php echo $_GET['option'];?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('counter')->value;?>
</a></li><?php }?>
    <?php }?>
    <?php endfor; endif; ?>
    
    <?php if (($_smarty_tpl->getVariable('total_page')->value>$_smarty_tpl->getVariable('actual_page')->value+2)){?><?php if ($_smarty_tpl->getVariable('actual_page')->value==$_smarty_tpl->getVariable('total_page')->value-3){?><?php }else{ ?><li class="disabled"><a href="#">...</a></li><?php }?><li><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_control'];?>
<?php echo $_smarty_tpl->getVariable('l_this')->value;?>
?page=<?php echo $_smarty_tpl->getVariable('total_page')->value;?>
<?php if (isset($_GET['order'])){?>&order=<?php echo $_GET['order'];?>
<?php }?><?php if (isset($_GET['search_type'])){?>&search_type=<?php echo $_GET['search_type'];?>
<?php }?><?php if (isset($_GET['search_words'])){?>&search_words=<?php echo $_GET['search_words'];?>
<?php }?><?php if (isset($_GET['show_order'])){?>&show_order=<?php echo $_GET['show_order'];?>
<?php }?><?php if ($_smarty_tpl->getVariable('l_this')->value=="results_foreign.php"){?>&option=<?php echo $_GET['option'];?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('total_page')->value;?>
</a></li><?php }?>
    </ul>
    </div>
    <div style="margin: 4px 0px">&nbsp;<input name="page" style="width:20px;" type="text" /></div>
</td>
<td valign="middle" align="right"><?php if (isset($_GET['order'])){?><input name="order" type="hidden" value="<?php echo $_GET['order'];?>
" /><?php }?><?php if (isset($_GET['show_order'])){?><input name="show_order" type="hidden" value="<?php echo $_GET['show_order'];?>
" /><?php }?><?php if (isset($_GET['search_type'])){?><input name="search_type" type="hidden" value="<?php echo $_GET['search_type'];?>
" /><?php }?><?php if (isset($_GET['search_words'])){?><input name="search_words" type="hidden" value="<?php echo $_GET['search_words'];?>
" /><?php }?><?php if ($_smarty_tpl->getVariable('l_this')->value=="results_foreign.php"){?><input name="option" type="hidden" value="<?php echo $_GET['option'];?>
" /><?php }?><h4 small>Page <?php echo $_smarty_tpl->getVariable('actual_page')->value;?>
 of <?php echo $_smarty_tpl->getVariable('total_page')->value;?>
</h4></td></tr></table>
</fieldset>
</form>