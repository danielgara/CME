<?php

class access extends object_standard
{
	//attribute variables
	protected $id;
	protected $date_access;
	protected $username;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "date_access" => array("name" => "Date Access", "type" => "timestamp", "required" => "not null", "length" => "19", "additional" => array("timestamp")), "username" => array("name" => "Username", "type" => "string", "required" => "not null", "length" => "100", "additional" => array())); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{
			default:
			break;
		}
	}
	
	function additional_exceptions($list, $check, &$message)
	{
	}
	
	//
	//space for class functions and methods
	//
}

?>