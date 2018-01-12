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

<form class="well form-search" method="post" action="{$gvar.l_admin_control_example}?option=save" enctype="multipart/form-data">
<legend>Edit example <span style="font-size:14px">(Fields marked with * are required)</span></legend>
<fieldset>
<table cellspacing="2"><tr><td align="right">Concern:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['concern']['foreign']}_{$attr['concern']['foreign_attribute']}_{$attr['concern']['foreign_name']}" value="{$object->get('concern')}" name="concern" required="required" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['concern']['foreign']}[*INTER*]{$attr['concern']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
<td align="right">Framework:*</td><td>{$attr=$obj_aux->metadata()}<input id="{$attr['framework']['foreign']}_{$attr['framework']['foreign_attribute']}_{$attr['framework']['foreign_name']}" value="{$object->get('framework')}" name="framework" required="required" type="text"> <button class="btn" onClick="window.open('{$gvar.l_admin_control}results_foreign.php?option={$attr['framework']['foreign']}[*INTER*]{$attr['framework']['foreign_name']}','popuppage','width=600,toolbar=1,resizable=1,scrollbars=yes,height=500,top=100,left=100');return false;"><img src="{$gvar.l_global}images/admin/key.png" alt="Assign Foreign" /></button></td>
</tr>
<tr><td align="right">Description:*</td><td>{literal}<script type="text/javascript">edToolbar('description'); </script>{/literal} <textarea id="description" name="description" required="required" class="ed">{$object->get('description')}</textarea></td>
<td><div id="flash" class="square" style="display:none"></div></td>
</tr>
<tr><td>
<input type="hidden" name="auxiliars" value="{$object->auxiliars}"  />

<input class="btn btn-primary" type="submit" value="Edit"></td></tr>
</table>
</fieldset>
</form>

</td></tr></table>