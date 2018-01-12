<?php

class task extends object_standard
{
	//attribute variables
	protected $id;
	protected $goal;
	protected $component;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "goal" => array("name" => "Goal", "type" => "string", "required" => "not null", "length" => "1000", "additional" => array()), "component" => array("name" => "Component", "type" => "string", "required" => "not null", "length" => "30", "foreign_name" => "c_t", "foreign" => "component", "foreign_attribute" => "name", "additional" => array())); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{
			case "component":
			switch($rel_name)
			{
				case "c_t":
				return array("component");
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