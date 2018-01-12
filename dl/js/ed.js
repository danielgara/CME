/*****************************************/
// Name: Javascript Textarea BBCode Markup Editor
// Version: 1.3
// Author: Balakrishnan
// Last Modified Date: 25/jan/2009
// License: Free
// URL: http://www.corpocrat.com
/******************************************/

var textarea;
var content;

function edToolbar(obj) {
    document.write("<div class=\"toolbar\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/text_color.png\" name=\"btnTextColor\" title=\"TextColor\" onClick=\"doAddTags('[color=black]','[/color]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/background_color.png\" name=\"btnBgColor\" title=\"BgColor\" onClick=\"doAddTags('[bgcolor=white]','[/bgcolor]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/font_size.png\" name=\"btnFontSize\" title=\"FontSize\" onClick=\"doAddTags('[size=3]','[/size]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/bold.png\" name=\"btnBold\" title=\"Bold\" onClick=\"doAddTags('[b]','[/b]','" + obj + "')\">");
    //document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/italic.png\" name=\"btnItalic\" title=\"Italic\" onClick=\"doAddTags('[i]','[/i]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/underline.png\" name=\"btnUnderline\" title=\"Underline\" onClick=\"doAddTags('[u]','[/u]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/strike_trough.png\" name=\"btnStrikeTrough\" title=\"StrikeTrough\" onClick=\"doAddTags('[s]','[/s]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/superscript.png\" name=\"btnSuperScript\" title=\"SuperScript\" onClick=\"doAddTags('[sup]','[/sup]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/subscript.png\" name=\"btnSubScript\" title=\"SubScript\" onClick=\"doAddTags('[sub]','[/sub]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/rule.png\" name=\"btnRule\" title=\"Rule\" onClick=\"doAddTags('[rule]','','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/align_left.png\" name=\"btnAlignLeft\" title=\"AlignLeft\" onClick=\"doAddTags('[left]','[/left]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/align_center.png\" name=\"btnAlignCenter\" title=\"AlignCenter\" onClick=\"doAddTags('[center]','[/center]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/align_right.png\" name=\"btnAlignRight\" title=\"AlignRight\" onClick=\"doAddTags('[right]','[/right]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/align_justify.png\" name=\"btnAlignJustify\" title=\"AlignJustify\" onClick=\"doAddTags('[indent]','[/indent]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/insert_link.png\" name=\"btnLink\" title=\"Insert URL Link\" onClick=\"doURL('" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/image.png\" name=\"btnPicture\" title=\"Insert Image\" onClick=\"doImage('" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/numbered_list.png\" name=\"btnList\" title=\"Ordered List\" onClick=\"doList('[LIST=1]','[/LIST]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/bulleted_list.png\" name=\"btnList\" title=\"Unordered List\" onClick=\"doList('[LIST]','[/LIST]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/blockquote.png\" name=\"btnQuote\" title=\"Quote\" onClick=\"doAddTags('[quote]','[/quote]','" + obj + "')\">"); 
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/division.png\" name=\"btnDivision\" title=\"Division\" onClick=\"doAddTags('[division=square-code]','[/division]','" + obj + "')\">");
	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/phpcolorcode.png\" name=\"btnPhpColorCode\" title=\"PhpColorCode\" onClick=\"doAddTags('[phpcolor=yes]','[/phpcolor]','" + obj + "')\">");
  	document.write("<img class=\"buttoned\" src=\"" + path + "images/bbcode/code.png\" name=\"btnCode\" title=\"Code\" onClick=\"doAddTags('[code]','[/code]','" + obj + "')\">");
    document.write("</div>");
				}

function doImage(obj)
{
textarea = document.getElementById(obj);
var url = prompt('Enter the Image URL:','http://');
var scrollTop = textarea.scrollTop;
var scrollLeft = textarea.scrollLeft;

if (url != '' && url != null) {

	if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				sel.text = '[img]' + url + '[/img]';
			}
   else 
    {
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
        var sel = textarea.value.substring(start, end);
		var rep = '[img]' + url + '[/img]';
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
			
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
	}
}

}

function doURL(obj)
{
textarea = document.getElementById(obj);
var url = prompt('Enter the URL:','http://');
var scrollTop = textarea.scrollTop;
var scrollLeft = textarea.scrollLeft;

if (url != '' && url != null) {

	if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				
			if(sel.text==""){
					sel.text = '[url target="_blank"]'  + url + '[/url]';
					} else {
					sel.text = '[url=' + url + ' target="_blank"]' + sel.text + '[/url]';
					}			
			}
   else 
    {
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
        var sel = textarea.value.substring(start, end);
		
		if(sel==""){
				var rep = '[url target="_blank"]' + url + '[/url]';
				} else
				{
				var rep = '[url=' + url + ' target="_blank"]' + sel + '[/url]';
				}
		
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
			
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
	}
 }
}

function doAddTags(tag1,tag2,obj)
{
textarea = document.getElementById(obj);
	// Code for IE
		if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				sel.text = tag1 + sel.text + tag2;
			}
   else 
    {  // Code for Mozilla Firefox
		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		
		
		var scrollTop = textarea.scrollTop;
		var scrollLeft = textarea.scrollLeft;

		
        var sel = textarea.value.substring(start, end);
		var rep = tag1 + sel + tag2;
        textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
		
		
	}
}

function doList(tag1,tag2,obj){
textarea = document.getElementById(obj);
// Code for IE
		if (document.selection) 
			{
				textarea.focus();
				var sel = document.selection.createRange();
				var list = sel.text.split('\n');
		
				for(i=0;i<list.length;i++) 
				{
				list[i] = '[*]' + list[i];
				}
				sel.text = tag1 + '\n' + list.join("\n") + '\n' + tag2;
			} else
			// Code for Firefox
			{

		var len = textarea.value.length;
	    var start = textarea.selectionStart;
		var end = textarea.selectionEnd;
		var i;
		
		var scrollTop = textarea.scrollTop;
		var scrollLeft = textarea.scrollLeft;

		
        var sel = textarea.value.substring(start, end);
		
		var list = sel.split('\n');
		
		for(i=0;i<list.length;i++) 
		{
		list[i] = '[*]' + list[i];
		}       
		
		var rep = tag1 + '\n' + list.join("\n") + '\n' +tag2;
		textarea.value =  textarea.value.substring(0,start) + rep + textarea.value.substring(end,len);
		
		textarea.scrollTop = scrollTop;
		textarea.scrollLeft = scrollLeft;
 }
}