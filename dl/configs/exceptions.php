<?php

/**
 * Project:     Framework G
 * File:        exceptions.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

//verify if $str is a int value
function check_int($str)
{
	if(is_numeric($str))
	{
		if(!(intval($str) - $str == 0.0)){return FALSE;}
		else{return TRUE;}
	}
	return FALSE;
}

//verify if $str is a bigint value
function check_bigint($str)
{
	if(is_numeric($str))
	{
		$str2=preg_replace('/[^0-9\-]/','',$str);
		if($str2==$str){return TRUE;}
		else{return FALSE;}
	}
	return FALSE;
}

//verify if $str is a float value
function check_float($str)
{
	return (is_float($str)|| ((float) $str != round($str) || strlen($str) != strlen((int) $str)) && $str != 0);
}

//verify if $date is a Date value
function check_date($date)
{
	if (strlen($date)<8){return FALSE;}
	$stamp = strtotime($date);

	if (!is_numeric($stamp)){return FALSE;}
	$month = date( 'm', $stamp );
	$day   = date( 'd', $stamp );
	$year  = date( 'Y', $stamp );

	if (checkdate($month, $day, $year)){return TRUE;}
	
	return FALSE; 
}

//verify if $email is a email
function check_mail($email)
{
	if ((strlen($email)>= 6) && (substr_count($email,"@")==1) && (substr($email,0,1)!="@") && (substr($email,strlen($email)-1,1) !="@"))
	{
	   if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\"")) && (!strstr($email,"$"))) {
		  //check that exist a point character .
		  if (substr_count($email,".")>= 1){
			 //get domain termination
			 $term_dom = substr(strrchr ($email, '.'),1);
			 //check that domain termination is correct
			 if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
				//check the @ and other things
				$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
				$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
				if ($caracter_ult != "@" && $caracter_ult != "."){
				   return TRUE;
	} } } } }
	return FALSE;
}

//check if a var is empty
function is_empty($data)
{
	if(!isset($data) || ($data == NULL)){return TRUE;}
	else{return FALSE;}
}

?>