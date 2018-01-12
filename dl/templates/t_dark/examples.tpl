<div>
<div class="alert alert-alert">
<strong>{$Important|ucfirst}</strong> We're improving the material. Each concern will be connected with an example giving you a base code for your projects.
</div>
</div>

<div class="square">
<table cellspacing="5">
<tr><td><h4>Welcome to DL</h4>
Driving your learning is a software that helps developers to learn a specific WAF. This software gives you a personalized learning guide. To access to this guide you only have to follow the next 3 steps.
</td></tr></table>
</div><br />
<form action="{$gvar.l_global}learning_examples.php" method="post" target="_blank">
<div class="square">
<table cellspacing="5">
<tr><td><h4>Step 1 - Choosing the WAF</h4>
What WAF do you learn to learn today?
<select name="framework">
{section name=i loop=$framework}
<option value="{$framework[i]->get('name')}">{$framework[i]->get('name')}</option>
{/section}
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
    {section name=i loop=$concern}
    <tr>
    <td>{$smarty.section.i.index+1}</td>
    <td><input type="checkbox" name="concern[]" value="{$concern[i]->get('id')}" /> {$concern[i]->get('name')}</td>
    <td>{$concern[i]->get('category')}</td>
    <td>{$concern[i]->get('description')}</td>
    </tr>
    {/section}
    </table>

</td></tr>
<tr><td><input type="submit" class="btn btn-primary" value="Start Learning" /></td></tr>
</table>
</div></form>