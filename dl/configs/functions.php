<?php

/**
 * Project:     Framework G
 * File:        functions.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

//load all files from /classes when is required 
function autoload($class_name) 
{
	if(is_file(C_FULL_PATH."classes/".$class_name.".php"))
	{include_once(C_FULL_PATH."classes/".$class_name.".php");}
}

//throw exception to catch zone
function throw_exception($message)
{
	throw new Exception($message);
}

//function for programmers, for printing data in tree form (more easy to see)
function print_r2($val)
{
	echo '<pre><font color="red"><b>'; print_r($val); echo '</b></font></pre>';
}

spl_autoload_register("autoload"); //autoloader classes

function change_seo($params, $engine)
{
	$format=seo_php($params["text"]);
	return $format;
}

function seo_php($toClean) 
{	
	$toClean= htmlentities($toClean, ENT_QUOTES, 'UTF-8');
	
	$normalizeChars = array('&Aacute;'=>'A', '&Agrave;'=>'A', '&Acirc;'=>'A', '&Atilde;'=>'A', '&Aring;'=>'A', '&Auml;'=>'A', '&AElig;'=>'AE', '&Ccedil;'=>'C', '&Eacute;'=>'E', '&Egrave;'=>'E', '&Ecirc;'=>'E', '&Euml;'=>'E', '&Iacute;'=>'I', '&Igrave;'=>'I', '&Icirc;'=>'I', '&Iuml;'=>'I', '&ETH;'=>'Eth','&Ntilde;'=>'N', '&Oacute;'=>'O', '&Ograve;'=>'O', '&Ocirc;'=>'O', '&Otilde;'=>'O', '&Ouml;'=>'O', '&Oslash;'=>'O','&Uacute;'=>'U', '&Ugrave;'=>'U', '&Ucirc;'=>'U', '&Uuml;'=>'U', '&Yacute;'=>'Y','&aacute;'=>'a', '&agrave;'=>'a', '&acirc;'=>'a', '&atilde;'=>'a', '&aring;'=>'a', '&auml;'=>'a', '&aelig;'=>'ae', '&ccedil;'=>'c', '&eacute;'=>'e', '&egrave;'=>'e', '&ecirc;'=>'e', '&euml;'=>'e', '&iacute;'=>'i', '&igrave;'=>'i', '&icirc;'=>'i', '&iuml;'=>'i', '&eth;'=>'eth', '&ntilde;'=>'n', '&oacute;'=>'o', '&ograve;'=>'o', '&ocirc;'=>'o', '&otilde;'=>'o', '&ouml;'=>'o', '&oslash;'=>'o', '&uacute;'=>'u', '&ugrave;'=>'u', '&ucirc;'=>'u', '&uuml;'=>'u', '&yacute;'=>'y', '&szlig;'=>'sz', '&thorn;'=>'thorn', '&yuml;'=>'y');
	
	$toClean = mb_strtolower($toClean);
	$toClean = strtr($toClean, $normalizeChars);
	$toClean = trim(preg_replace('/[^\w\d_ -]/si', '', $toClean));//remove all illegal chars
	$toClean = str_replace(' ', '-', $toClean);
	$toClean = str_replace('--', '-', $toClean);
	$toClean = str_replace('--', '-', $toClean);
	
	return $toClean;
}

function phpcolor($content,$default)
{
	$content = trim($content);
	if ($content != "")
	{
		$content=html_entity_decode($content);
		
		if ( !preg_match('#^<\?php#', $content) )
		{
			$content = '<?php' . "\n" . $content;
		}
	
		if ( !preg_match('#\?>$#', $content) )
		{
			$content = $content . "\n" . '?>';
		}
		
		ob_start();
		highlight_string($content);
		$content = ob_get_contents();
		ob_end_clean();
		
		if($default == 'no')
		{
			$content = str_replace("&lt;?php<br />", "", $content);
			$content = str_replace("?&gt;", "", $content);
			return $content;
		}
		else
		{
			return preg_replace('#^<\?php(.*)\?>$#', '\1', $content);
		}
		
		return $content;
	}
}


?>