<?php /* Smarty version Smarty-3.0.9, created on 2014-09-08 22:31:20
         compiled from "/home/framewor/public_html/dl/templates/t_dark/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:900617565540e74884bcde7-78797020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0bf3537d6beb12aff4ad044ad1d9a319dc2dc2e' => 
    array (
      0 => '/home/framewor/public_html/dl/templates/t_dark/admin/index.tpl',
      1 => 1410229216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900617565540e74884bcde7-78797020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table cellpadding="0" cellspacing="10"><tr><td valign="top" align="left">

<?php if (isset($_SESSION['user'])&&$_GET['option']!='logout'){?>
<table cellspacing="0"><tr><td align="center">
<div class="well well-small" style="width:180px">
<b>Welcome <?php echo $_SESSION['user']['name'];?>
</b><br /><br /><img src="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
images/admin/admin.png" /><br /><br />
<button class="btn" onClick="location.href='<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
?option=logout'"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</button>
</div>
</td></tr></table>
<?php }else{ ?>   
<table cellspacing="0" cellpadding="0" width="210px"><tr><td class="font-white" align="center">
<form class="well well-small form-search" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_admin_index'];?>
?option=login" method="post" name="login">
<b><a name="login"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_login'];?>
</a></b><br /><br />
<input name="user" type="text" class="input-medium" placeholder="User"><br /><br />
<input name="password" type="password" class="input-medium" placeholder="Password"><br /><br />
<button type="submit" class="btn">Go</button>
</form>
</td></tr></table>
<?php }?>

</td><td valign="top" align="left">

<div class="square">
<table cellspacing="5">
<tr><td><h4>Framework G</h4>
G is a framework and an architectural pattern that is based on the MVC (model-view-controller) but it makes it better, integrates new layers and redefine some of its layers, the base of G is the object-oriented programming OOP and class diagram. In based on these defines a CRUD and installer modules that facilitate the development to the developer and save you time and work. 
</td></tr></table>
</div>

</td></tr></table>