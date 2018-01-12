<!--<div>
<div class="alert alert-alert">
<strong>{$Important|ucfirst}</strong> We're improving the material. Each concern will be connected with an example giving you a base code for your projects.
</div>
</div>
-->

<div class="square">
<table cellspacing="5">
<tr><td><h4>Start Your Learning</h4>
These are the concerns you selected with their respective solutions. Some concerns could be combined, others could be not required. <u>Always start reading the notes of each task.</u>
</td></tr></table>
</div><br />


{$c1=$task[0]->auxiliars['c_name']}
{$i=0}
{section name=i loop=$task}

{if $i == 0}
{$i=1}
<div class="square">
<table cellspacing="5">
<tr><td colspan="3"><h4>{$c1}</h4></td></tr>
<tr><td><b>Component</b></td><td><b>Task</b></td><td><b>Documentation</b></td>
<tr><td>{$task[i]->get('component')}</td><td><i>{$task[i]->get('goal')}</i></td><td>
{if $task[i]->auxiliars['d_link'] != ''}
<a href="{$task[i]->auxiliars['d_link']}" target="_blank">Solution Here</a><br />
{else if $task[i]->auxiliars['d_video'] != ''}
<iframe width="400" height="230" src="//www.youtube.com/embed/{$task[i]->auxiliars['d_video']}" frameborder="0" allowfullscreen></iframe><br />
{else if $task[i]->auxiliars['d_description'] != ''}
<div class="square">
{$task[i]->auxiliars['d_description']}
</div>
{else}
<span style="color:#F00">There's not documentation for this task right now.<br /></span>
{/if}
{if $task[i]->auxiliars['d_note'] != ''}
<b>Note:</b> {$task[i]->auxiliars['d_note']}
{/if}
</td>
{else}
	{if $c1 == $task[i]->auxiliars['c_name']}
		<tr><td>{$task[i]->get('component')}</td><td><i>{$task[i]->get('goal')}</i></td>
        <td>
            {if $task[i]->auxiliars['d_link'] != ''}
            <a href="{$task[i]->auxiliars['d_link']}" target="_blank">Solution Here</a><br />
            {else if $task[i]->auxiliars['d_video'] != ''}
            <iframe width="400" height="230" src="//www.youtube.com/embed/{$task[i]->auxiliars['d_video']}" frameborder="0" allowfullscreen></iframe><br />
            {else if $task[i]->auxiliars['d_description'] != ''}
            <div class="square">
            {$task[i]->auxiliars['d_description']}
            </div>
            {else}
            <span style="color:#F00">There's not documentation for this task right now.<br /></span>
            {/if}
            {if $task[i]->auxiliars['d_note'] != ''}
            <b>Note:</b> {$task[i]->auxiliars['d_note']}
            {/if}
        </td>
    {else}
    	{$c1=$task[i]->auxiliars['c_name']}
        </table>
		</div><br />
        <div class="square">
        <table cellspacing="5">
        <tr><td colspan="3"><h4>{$c1}</h4></td></tr>
        <tr><td><b>Component</b></td><td><b>Task</b></td><td><b>Documentation</b></td>
        <tr><td>{$task[i]->get('component')}</td><td><i>{$task[i]->get('goal')}</i></td>
        <td>
            {if $task[i]->auxiliars['d_link'] != ''}
            <a href="{$task[i]->auxiliars['d_link']}" target="_blank">Solution Here</a><br />
            {else if $task[i]->auxiliars['d_video'] != ''}
            <iframe width="400" height="230" src="//www.youtube.com/embed/{$task[i]->auxiliars['d_video']}" frameborder="0" allowfullscreen></iframe><br />
            {else if $task[i]->auxiliars['d_description'] != ''}
            <div class="square">
            {$task[i]->auxiliars['d_description']}
            </div>
            {else}
            <span style="color:#F00">There's not documentation for this task right now.<br /></span>
            {/if}
            {if $task[i]->auxiliars['d_note'] != ''}
            <b>Note:</b> {$task[i]->auxiliars['d_note']}
            {/if}
        </td>
    {/if}

{/if}

{/section}
</table>
</div><br />