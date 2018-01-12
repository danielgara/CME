<?php

/**
 * Project:     Framework G
 * File:        gvar.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
$gvar=array();

//links and names
$gvar['l_global'] = C_L_GLOBAL;
$gvar['n_global'] = C_N_GLOBAL;

$gvar['l_index'] = $gvar['l_global']."index.php";
$gvar['l_contact'] = $gvar['l_global']."contact.php";
$gvar['l_learning'] = $gvar['l_global']."learning.php";

$gvar['l_admin'] = $gvar['l_global']."admin/";
$gvar['n_admin'] = "Admin";
$gvar['l_admin_index'] = $gvar['l_admin']."index.php";
$gvar['n_admin_index'] = "Admin";
$gvar['l_admin_creator'] = $gvar['l_admin']."creator.php";
$gvar['n_admin_creator'] = "Creator";
$gvar['l_admin_control'] = $gvar['l_admin']."control/";
$gvar['n_admin_control'] = "Control";

$gvar['l_admin_control_user'] = $gvar['l_admin_control']."user.php";
$gvar['n_admin_control_user'] = "user";

$gvar['l_admin_control_access'] = $gvar['l_admin_control']."access.php";
$gvar['n_admin_control_access'] = "access";

$gvar['l_admin_control_framework'] = $gvar['l_admin_control']."framework.php";
$gvar['n_admin_control_framework'] = "framework";

$gvar['l_admin_control_concern'] = $gvar['l_admin_control']."concern.php";
$gvar['n_admin_control_concern'] = "concern";

$gvar['l_admin_control_component'] = $gvar['l_admin_control']."component.php";
$gvar['n_admin_control_component'] = "component";

$gvar['l_admin_control_task'] = $gvar['l_admin_control']."task.php";
$gvar['n_admin_control_task'] = "task";

$gvar['l_admin_control_c_t'] = $gvar['l_admin_control']."c_t.php";
$gvar['n_admin_control_c_t'] = "c_t";
$gvar['l_admin_control_documentation'] = $gvar['l_admin_control']."documentation.php";
$gvar['n_admin_control_documentation'] = "documentation";
$gvar['l_admin_control_example'] = $gvar['l_admin_control']."example.php";
$gvar['n_admin_control_example'] = "example";

?>