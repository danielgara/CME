/**
 * Project:     Framework G
 * File:        functions.js
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

/* alert message for verify data before delete */
function verify()
{
      return confirm("Are you sure you want to delete the selected row?");
}

/* reset values of a form */
function form_reset(frm)
{
	for(var i=0;i<frm.elements.length;i++)
	{
		if(!(frm.elements[i].type == "submit" || frm.elements[i].type == "reset"))
		frm.elements[i].value = "";
	}
}

/* function for CRUD that create a new line for insert new fields */
function append_to_form()
{
	obj = document.getElementById('tbcreator');
	
	tr = document.createElement('tr');
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.className="input-mini";input.name="name[]";td.appendChild(input);tr.appendChild(td);	
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.className="input-mini";input.name="id[]";td.appendChild(input);tr.appendChild(td);

	td = document.createElement('td');
	input = document.createElement('select');input.name="type[]";input.className="input-mini";
	option = document.createElement('option');option.value="string";option.innerHTML="String";input.appendChild(option);
	option = document.createElement('option');option.value="int";option.innerHTML="Int";input.appendChild(option);
	option = document.createElement('option');option.value="bigint";option.innerHTML="BigInt";input.appendChild(option);
	option = document.createElement('option');option.value="float";option.innerHTML="Float";input.appendChild(option);
	option = document.createElement('option');option.value="date";option.innerHTML="Date";input.appendChild(option);
	option = document.createElement('option');option.value="bool";option.innerHTML="Bool";input.appendChild(option);
	option = document.createElement('option');option.value="numeric";option.innerHTML="Numeric";input.appendChild(option);
	option = document.createElement('option');option.value="timestamp";option.innerHTML="Timestamp";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.className="input-mini";input.name="tamano[]";td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');
	input = document.createElement('select');input.name="type_form[]";input.className="input-mini";
	option = document.createElement('option');option.value="text";option.innerHTML="Text";input.appendChild(option);
	option = document.createElement('option');option.value="radio";option.innerHTML="Radio";input.appendChild(option);
	option = document.createElement('option');option.value="select";option.innerHTML="Select";input.appendChild(option);
	option = document.createElement('option');option.value="file";option.innerHTML="File";input.appendChild(option);
	option = document.createElement('option');option.value="password";option.innerHTML="Password";input.appendChild(option);
	option = document.createElement('option');option.value="textarea";option.innerHTML="Textarea";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');
	input = document.createElement('select');input.name="html[]";input.className="input-mini";
	option = document.createElement('option');option.value="yes";option.innerHTML="Yes";input.appendChild(option);
	option = document.createElement('option');option.value="no";option.innerHTML="No";option.selected="selected";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');input = document.createElement('input');input.className="input-mini";
	input.type="text";input.name="values[]";td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');td.align="center";
	input = document.createElement('select');input.name="required[]";input.className="input-mini";
	option = document.createElement('option');option.value="not null";option.innerHTML="Not null";input.appendChild(option);
	option = document.createElement('option');option.value="null";option.innerHTML="Null";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');
	input = document.createElement('select');input.name="autoincrement[]";input.className="input-mini";
	option = document.createElement('option');option.value="yes";option.innerHTML="Yes";input.appendChild(option);
	option = document.createElement('option');option.value="no";option.innerHTML="No";option.selected="selected";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.name="foreign_name[]";input.className="input-mini";td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.name="foreign[]";input.className="input-mini";td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');input = document.createElement('input');
	input.type="text";input.name="foreign_attr[]";input.className="input-mini";td.appendChild(input);tr.appendChild(td);
	
	td = document.createElement('td');
	input = document.createElement('select');input.name="primary[]";input.className="input-mini";
	option = document.createElement('option');option.value="yes";option.innerHTML="Yes";input.appendChild(option);
	option = document.createElement('option');option.value="no";option.innerHTML="No";option.selected="selected";input.appendChild(option);
	td.appendChild(input);tr.appendChild(td);
	
	obj.appendChild(tr);
}