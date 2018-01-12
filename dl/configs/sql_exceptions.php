<?php

/**
 * Project:     Framework G
 * File:        sql_exceptions.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class sql_exceptions
{
	var $msg='';
	
	public function __construct($errno, $error, $class)
	{
		$this->search_exceptions($errno, $error, $class);
	}
	
	//handling sql exceptions based in class and errno
	private function search_exceptions($errno, $error, $class)
	{
		switch($errno)
		{
			case "1062":
			switch($class)
			{
				default:
					$column=$this->errno_1062($error);
					$this->msg="The $column value is already in use and must be unique.";
					break;
			}
			break;
			
			case "1452":
			switch($class)
			{
				default:
					$column=$this->errno_1452($error);
					$this->msg="Invalid Foreign Key, check the $column field.";
					break;
			}
			break;

			default: break;
		}
	}
	
	//especific method for handling error 1062
	private function errno_1062($error)
	{
		$pos=strpos($error, 'for key');
		$column = substr($error, $pos+9, strlen($error)-$pos-10); 
		return $column;
	}
	
	//especific method for handling error 1452
	private function errno_1452($error)
	{
		$pos=strpos($error, 'REFERENCES'); $pos2=strpos($error, "(", $pos); $pos3=$pos2-14-$pos;
		$column = substr($error, $pos+12, $pos3); 
		return $column;
	}
}

?>