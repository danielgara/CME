<?php

class framework extends object_standard
{
	//attribute variables
	protected $name;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("name" => array("name" => "Name", "type" => "string", "required" => "not null", "length" => "30", "additional" => array())); 
	}

	public function primary_key()
	{
		return array("name");
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