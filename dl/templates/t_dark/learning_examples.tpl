<!--<div>
<div class="alert alert-alert">
<strong>{$Important|ucfirst}</strong> We're improving the material. Each concern will be connected with an example giving you a base code for your projects.
</div>
</div>-->

<div class="square">
<table cellspacing="5">
<tr><td><h4>Start Your Learning</h4>
These are the concerns you selected with their respective examples. Used them to develop your application.
</td></tr></table>
</div><br />

{section name=i loop=$example}
<div class="square">
<table cellspacing="5">
<tr><td><h4>{$example[i]->auxiliars['c_name']}</h4></td></tr>
<tr><td>{$example[i]->get('description')}</td></tr>
</table>
</div><br />
{/section}