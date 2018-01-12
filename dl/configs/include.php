<?php

@session_start();

/**
 * Project:     Framework G
 * File:        include.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

define('C_FULL_PATH', 'C:/wamp64/www/dl/'); //full path
define('C_TEMPLATE_SELECTED', 't_dark'); //template selected

define('C_L_GLOBAL', 'http://localhost/dl/'); //application global link
define('C_N_GLOBAL', 'DL - Driving your WAF Learning'); //application global title

define('C_DB_SERVER', 'localhost'); //DB server
define('C_DB_USER', 'root'); //DB user
define('C_DB_PASS', ''); //DB password
define('C_DB_DATABASE_NAME', 'dl'); //DB database name
define('C_DB_LIMIT', 10); //DB limit of elements by page

require(C_FULL_PATH."modules/super_controller.php"); //Super Controller
require(C_FULL_PATH."modules/object_standard.php"); //Object Standard
require(C_FULL_PATH."modules/orm.php"); //Object Relational Mapping
require(C_FULL_PATH."modules/db.php"); //database manager
require(C_FULL_PATH."configs/exceptions.php"); //common exceptions
require(C_FULL_PATH."configs/functions.php"); //functions of general use
require(C_FULL_PATH."configs/sql_exceptions.php"); //common sql exceptions

?>