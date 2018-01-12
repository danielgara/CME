<?php

class concern extends object_standard
{
	//attribute variables
	protected $id;
	protected $name;
	protected $description;
	protected $lorder;
	protected $category;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "name" => array("name" => "Name", "type" => "string", "required" => "not null", "length" => "50", "additional" => array()), "description" => array("name" => "Description", "type" => "string", "required" => "not null", "length" => "10000", "additional" => array("textarea")), "lorder" => array("name" => "Lorder", "type" => "int", "required" => "not null", "length" => "11", "additional" => array()), "category" => array("name" => "Category", "type" => "string", "required" => "not null", "length" => "50", "values" => array("User Interface", "Architecture and data flow control", "Data modeling and persistence", "Security", "Modules and extensions"), "additional" => array())); 
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