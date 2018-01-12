<table cellspacing="10">
<tr><td> 

{literal}
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
{/literal}

{literal}<script type="text/javascript" src="{/literal}{$gvar.l_global}{literal}js/ed.js"></script>{/literal}

<form class="well form-search" onreset="form_reset(this);return false;" method="post" action="{$gvar.l_admin_control_documentation}?option=add" enctype="multipart/form-data"> 
<legend>Add documentation <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Task:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['task']['foreign']}_{$attr['task']['foreign_attribute']}_{$attr['task']['foreign_name']}" name="task" required="required" value="{if isset($object)}{$object->task}{/if}" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['task']['foreign']}[*INTER*]{$attr['task']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
<td align="right">Framework:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['framework']['foreign']}_{$attr['framework']['foreign_attribute']}_{$attr['framework']['foreign_name']}" name="framework" required="required" value="{if isset($object)}{$object->framework}{/if}" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['framework']['foreign']}[*INTER*]{$attr['framework']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr><tr><td align="right">Video:</td><td><input name="video" value="{if isset($object)}{$object->video}{/if}" type="text"></td>
<td align="right">Link:</td><td><input name="link" value="{if isset($object)}{$object->link}{/if}" type="text"></td>
</tr>

<tr><td align="right">Description:*</td><td> {literal}<script type="text/javascript">edToolbar('description'); </script>{/literal}<textarea id="description" name="description" class="ed">{if isset($object)}{$object->description}{/if}</textarea></td><td colspan="2"><div id="flash" class="square" style="display:none"></div></td></tr>

<tr>
<td align="right">Note:</td><td><textarea name="note">{if isset($object)}{$object->note}{/if}</textarea></td>
</tr><tr><td><input class="btn btn-primary" type="submit" value="Add">&nbsp;<input class="btn" type="reset" value="Reset"></td></tr>
</table>
</fieldset>
</form>

{include file='admin/control/results.tpl'}

</td></tr></table>