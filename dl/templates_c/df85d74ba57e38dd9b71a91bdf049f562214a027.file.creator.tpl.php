<?php /* Smarty version Smarty-3.0.9, created on 2018-01-09 14:15:41
         compiled from "C:/wamp64/www/dl/templates/t_dark\admin/creator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118045a54ce8de730e8-88592154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df85d74ba57e38dd9b71a91bdf049f562214a027' => 
    array (
      0 => 'C:/wamp64/www/dl/templates/t_dark\\admin/creator.tpl',
      1 => 1410229215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118045a54ce8de730e8-88592154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form name="f1" class="form-horizontal well well-small" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_creator'];?>
" method="post">
<fieldset>
<legend>Creator</legend>
<input name="option" type="hidden" value="add">
<table><tr><td>
    <div class="control-group">
    <label class="control-label" for="input01">Class Name</label>
    <div class="controls"><input name="class_n" type="text" class="input-xlarge" value="<?php echo $_smarty_tpl->getVariable('object')->value->class_n;?>
" id="input01">
    <input class="btn" type="submit"onclick="option.value='load_data'; return true;" value="Load Data"></div>
    </div>
    </td><td>
	<div class="control-group">
    <label class="control-label" for="select01">DB Engine</label>
    <div class="controls">
      <select name="bd_engine" id="select01">
        <option value="InnoDB">InnoDB</option>
        <option value="MyISAM">MyISAM</option>
      </select>
    </div>
	</div>
	</td><td>
    <div class="control-group">
    <label class="control-label">Create:</label>
    <div class="controls">
    <table><tr><td>
    <label>Class <input type="checkbox" name="c_class" checked="checked" /></label>
    <label>Table <input type="checkbox" name="c_table" checked="checked" /></label></td>
    <td>
    <label>Controller <input type="checkbox" name="c_controller" checked="checked" /></label>
    <label>Template <input type="checkbox" name="c_template" checked="checked" /></label>
    </td>
    <td rowspan="2" valign="top">
   <label> Edit Files <input type="checkbox" name="c_edit" checked="checked" /></label>
    </td>
    </tr></table>
    </div>
    </div>
</td>
</tr>
</table>

<section id="tables">  
  <table cellspacing="10">
    <tr><td><button class="btn" onClick="append_to_form();return false;">+</button>
    </td></tr>
  </table>
  <table class="table table-bordered table-striped table-hover table-basic">
    <thead>
      <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Type</th>
        <th>Size</th>
        <th>Type Form</th>
        <th>Has Html?</th>
        <th>Values</th>
        <th>Req.</th>
        <th>Autoinc.</th>
        <th>Foreign Name</th>
        <th>Foreign Class</th>
        <th>Foreign Attr</th>
        <th>Primary</th>
      </tr>
    </thead>
    <tbody id="tbcreator">
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, null);?>
	<?php if (count($_smarty_tpl->getVariable('object')->value->name)>0){?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable(count($_smarty_tpl->getVariable('object')->value->name), null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable(8, null, null);?><?php }?>
	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->getVariable('end')->value+1 - (1) : 1-($_smarty_tpl->getVariable('end')->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
      <tr>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->name[$_smarty_tpl->getVariable('i')->value];?>
" name="name[]" /></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->id[$_smarty_tpl->getVariable('i')->value];?>
" name="id[]" /></td>
        <td><select class="input-mini" name="type[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('types')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->type[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->tamano[$_smarty_tpl->getVariable('i')->value];?>
" name="tamano[]" /></td>
        <td><select class="input-mini" name="type_form[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('types_form')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->type_form[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        <td><select class="input-mini" name="html[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('html')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->html[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->values[$_smarty_tpl->getVariable('i')->value];?>
" name="values[]" /></td>
        <td><select class="input-mini" name="required[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('requireds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->required[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        <td><select class="input-mini" name="autoincrement[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('autos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->autoincrement[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->foreign_name[$_smarty_tpl->getVariable('i')->value];?>
" name="foreign_name[]" /></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->foreign[$_smarty_tpl->getVariable('i')->value];?>
" name="foreign[]" /></td>
        <td><input class="input-mini" type="text" value="<?php echo $_smarty_tpl->getVariable('object')->value->foreign_attr[$_smarty_tpl->getVariable('i')->value];?>
"  name="foreign_attr[]" /></td>
        <td><select class="input-mini" name="primary[]"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('primarys')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <option <?php if ($_smarty_tpl->getVariable('object')->value->primary[$_smarty_tpl->getVariable('i')->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option><?php }} ?></select></td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
        <?php }} ?>
      </tbody>
</table>
</section>

<table cellspacing="10">
<tr><td><input class="btn btn-primary" type="submit" value="Send" /></td>
</tr>
</table>      
</fieldset>
</form>

<table cellspacing="10">
<tr><td valign="top">
<form class="form-horizontal well well-small" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_creator'];?>
" method="post">
<fieldset>
<legend>Preload Data</legend>
<input name="option" type="hidden" value="preload_data">
<section id="tables">  
<table cellspacing="10">
<tr><td>Insert the code in the section below for preload a CRUD<br /><br /><textarea name="data"></textarea></td></tr>
<tr><td><input class="btn btn-primary" type="submit" value="Preload Data" /></td></tr>
</table>
</section>
</fieldset>
</form>

</td><td valign="top">
<form name="f1" class="form-horizontal well well-small" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_creator'];?>
" method="post">
<fieldset>
<legend>Obtain Data</legend>
<input name="option" type="hidden" value="obtain_data">
<section id="tables">  
<table cellspacing="10">
<tr><td>Insert the class name for obtain your code: <input type="text" name="obtain_name" /></td></tr>
<?php if (isset($_smarty_tpl->getVariable('obtain_data',null,true,false)->value)){?><tr><td><textarea readonly="readonly" onclick="this.focus();this.select()"><?php echo $_smarty_tpl->getVariable('obtain_data')->value;?>
</textarea></td></tr><?php }?>
<tr><td><input class="btn btn-primary" type="submit" value="Obtain Data" /></td></tr>
</table>
</section>
</fieldset>
</form>
</td>
</tr></table>