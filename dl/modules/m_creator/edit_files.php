<?php

/**
 * Project:     Framework G
 * File:        edit_files.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
 
class m_edit_files
{
	
public function m_edit_files($class_name,$attr_file)
{
	//edit templates/admin/control/index.tpl
	$aux='';
	if($fh = fopen("../templates/".C_TEMPLATE_SELECTED."/admin/control/index.tpl","r"))
	{
		while (!feof($fh)){$aux.=fgets($fh);}
		fclose($fh);
	}

	$pos=strpos($aux, 'Manage '.$class_name.'</button>');
	if ($pos === false) 
	{
		
		$pos=strpos($aux, 'Control</button>');
		$text = substr($aux, 0, $pos+16); 
		$text2 = substr($aux, $pos+16, strlen($aux));
		$text1='&nbsp;&nbsp;<button class="btn" onClick="location.href=\'{$gvar.l_admin_control_'.$class_name.'}\'">Manage {$gvar.n_admin_control_'.$class_name.'}</button>';
		$final=$text.$text1.$text2;

		if($archivo = fopen("../templates/".C_TEMPLATE_SELECTED."/admin/control/index.tpl", 'w'))
		{
			fwrite($archivo, $final);
			fclose($archivo);
		}
	}
	
	//edit templates/admin/menu.tpl
	$aux='';
	if($fh = fopen("../templates/".C_TEMPLATE_SELECTED."/admin/menu.tpl","r"))
	{
		while (!feof($fh)){$aux.=fgets($fh);}
		fclose($fh);
	}

	$pos=strpos($aux, '{$gvar.n_admin_control_'.$class_name.'}');
	if ($pos === false) 
	{
		
		$pos=strpos($aux, '{$gvar.n_admin_control}');
		$pos=strpos($aux, '<ul>', $pos);
		$text = substr($aux, 0, $pos+4); 
		$text2 = substr($aux, $pos+4, strlen($aux));
		$text1='
		<li><a href="{$gvar.l_admin_control_'.$class_name.'}" style="background:url({$gvar.l_global}/images/admin/docs.png) no-repeat 6px center;">Manage {$gvar.n_admin_control_'.$class_name.'}</a></li>
		';
		$final=$text.$text1.$text2;

		if($archivo = fopen("../templates/".C_TEMPLATE_SELECTED."/admin/menu.tpl", 'w'))
		{
			fwrite($archivo, $final);
			fclose($archivo);
		}
	}
	
	//edit links.php
	$aux='';
	if($fh = fopen("../configs/gvar.php","r"))
	{
		while (!feof($fh)){$aux.=fgets($fh);}
		fclose($fh);
	}

	$posf = strpos($aux, '$gvar[\'l_admin_control_'.$class_name.'\']');
	if ($posf === false) 
	{
		$len = strlen($aux);
		$text = substr($aux, 0, $len-3); 
		$text.='$gvar[\'l_admin_control_'.$class_name.'\'] = $gvar[\'l_admin_control\']."'.$class_name.'.php";
$gvar[\'n_admin_control_'.$class_name.'\'] = "'.$class_name.'";

?>';
		if($archivo = fopen("../configs/gvar.php", 'w'))
		{
			fwrite($archivo, $text);
			fclose($archivo);
		} 
	}

	/*
	//edit modules/db.php
	$aux='';
	if($fh = fopen("../modules/db.php","r"))
	{
		while (!feof($fh)){$aux.=fgets($fh);}
		fclose($fh);
	}

	$ini = strpos($aux, 'case "'.$class_name.'"');
	
	if($ini === FALSE)
	{
		//edit insert
		$pos=strpos($aux, 'public function insert');$pos=strpos($aux,'{',$pos);$pos=strpos($aux,'{',$pos+1);
		$texto = substr($aux, 0, $pos+1);$texto2 = substr($aux, $pos+1, strlen($aux));
		$texto1='
			case "'.$class_name.'":
			switch($options[\'lvl2\'])
			{
				case "normal": 
					$this->normal_insert($options,$object);
					if($get_id==\'yes\'){return mysql_insert_id();}
					break;
			}
			break;
			';
		
		$final=$texto.$texto1.$texto2;
		
		//edit select
		$pos=strpos($final, 'public function select');$pos=strpos($final,'{',$pos);$pos=strpos($final,'{',$pos+1);
		$texto = substr($final, 0, $pos+1);$texto2 = substr($final, $pos+1, strlen($final));	
		$texto1='
			case "'.$class_name.'":
			switch($option[\'lvl2\'])
			{
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;					
				case "all":	$info=$this->get_data("SELECT * FROM '.$class_name.';"); break;
			}
			break;
			';
			
		$final=$texto.$texto1.$texto2;
		
		//edit delete
		$pos=strpos($final, 'public function delete');
		$pos=strpos($final,'{',$pos);$pos=strpos($final,'{',$pos+1);
		$texto = substr($final, 0, $pos+1);
		$texto2 = substr($final, $pos+1, strlen($final));	
		$texto1='
			case "'.$class_name.'":
			switch($options[\'lvl2\'])
			{
				case "normal": $this->normal_delete($options,$object); break;
			}
			break;
			';
			
		$final=$texto.$texto1.$texto2;
		
		//edit update
		$pos=strpos($final, 'public function update');
		$pos=strpos($final,'{',$pos);$pos=strpos($final,'{',$pos+1);
		$texto = substr($final, 0, $pos+1);
		$texto2 = substr($final, $pos+1, strlen($final));	

		$texto1='
			case "'.$class_name.'":
			switch($options[\'lvl2\'])
			{
				case "normal": $this->normal_update($options,$object); break;
			}
			break;
			';

		$final=$texto.$texto1.$texto2;

		if($archivo = fopen("../modules/db.php", 'w'))
		{
			fwrite($archivo, $final);
			fclose($archivo);
		}
	}*/
}
}

?>