<?php

class example extends object_standard
{
	//attribute variables
	protected $id;
	protected $concern;
	protected $framework;
	protected $description;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "concern" => array("name" => "Concern", "type" => "bigint", "required" => "not null", "length" => "20", "foreign_name" => "c_e", "foreign" => "concern", "foreign_attribute" => "id", "additional" => array()), "framework" => array("name" => "Framework", "type" => "string", "required" => "not null", "length" => "100", "foreign_name" => "e_f", "foreign" => "framework", "foreign_attribute" => "name", "additional" => array()), "description" => array("name" => "Description", "type" => "string", "required" => "not null", "length" => "40000", "additional" => array("textarea"))); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{
			case "concern":
			switch($rel_name)
			{
				case "c_e":
				return array("concern");
				break;
			}
			break;
			
			case "framework":
			switch($rel_name)
			{
				case "e_f":
				return array("framework");
				break;
			}
			break;
			
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