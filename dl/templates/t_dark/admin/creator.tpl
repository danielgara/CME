<form name="f1" class="form-horizontal well well-small" action="{$gvar.l_admin_creator}" method="post">
<fieldset>
<legend>Creator</legend>
<input name="option" type="hidden" value="add">
<table><tr><td>
    <div class="control-group">
    <label class="control-label" for="input01">Class Name</label>
    <div class="controls"><input name="class_n" type="text" class="input-xlarge" value="{$object->class_n}" id="input01">
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
    {$i=0}
	{if $object->name|@count gt 0}{$end=$object->name|@count}{else}{$end=8}{/if}
	{for $foo=1 to $end}
      <tr>
        <td><input class="input-mini" type="text" value="{$object->name[$i]}" name="name[]" /></td>
        <td><input class="input-mini" type="text" value="{$object->id[$i]}" name="id[]" /></td>
        <td><select class="input-mini" name="type[]">{foreach from=$types key=key item=type}
        <option {if $object->type[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        <td><input class="input-mini" type="text" value="{$object->tamano[$i]}" name="tamano[]" /></td>
        <td><select class="input-mini" name="type_form[]">{foreach from=$types_form key=key item=type}
        <option {if $object->type_form[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        <td><select class="input-mini" name="html[]">{foreach from=$html key=key item=type}
        <option {if $object->html[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        <td><input class="input-mini" type="text" value="{$object->values[$i]}" name="values[]" /></td>
        <td><select class="input-mini" name="required[]">{foreach from=$requireds key=key item=type}
        <option {if $object->required[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        <td><select class="input-mini" name="autoincrement[]">{foreach from=$autos key=key item=type}
        <option {if $object->autoincrement[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        <td><input class="input-mini" type="text" value="{$object->foreign_name[$i]}" name="foreign_name[]" /></td>
        <td><input class="input-mini" type="text" value="{$object->foreign[$i]}" name="foreign[]" /></td>
        <td><input class="input-mini" type="text" value="{$object->foreign_attr[$i]}"  name="foreign_attr[]" /></td>
        <td><select class="input-mini" name="primary[]">{foreach from=$primarys key=key item=type}
        <option {if $object->primary[$i] eq $key}selected="selected"{/if} value="{$key}">{$type}</option>{/foreach}</select></td>
        </tr>
        {$i=$i+1}
        {/for}
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
<form class="form-horizontal well well-small" action="{$gvar.l_admin_creator}" method="post">
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
<form name="f1" class="form-horizontal well well-small" action="{$gvar.l_admin_creator}" method="post">
<fieldset>
<legend>Obtain Data</legend>
<input name="option" type="hidden" value="obtain_data">
<section id="tables">  
<table cellspacing="10">
<tr><td>Insert the class name for obtain your code: <input type="text" name="obtain_name" /></td></tr>
{if isset($obtain_data)}<tr><td><textarea readonly="readonly" onclick="this.focus();this.select()">{$obtain_data}</textarea></td></tr>{/if}
<tr><td><input class="btn btn-primary" type="submit" value="Obtain Data" /></td></tr>
</table>
</section>
</fieldset>
</form>
</td>
</tr></table>