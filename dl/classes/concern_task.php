<?php

class concern_task extends object_standard
{
	//attribute variables
	protected $id;
	protected $concern;
	protected $Task;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "concern" => array("name" => "Concern", "type" => "bigint", "required" => "not null", "length" => "20", "foreign_name" => "c_c", "foreign" => "concern", "foreign_attribute" => "id", "additional" => array()), "Task" => array("name" => "Task", "type" => "bigint", "required" => "not null", "length" => "20", "foreign_name" => "c_t", "foreign" => "task", "foreign_attribute" => "id", "additional" => array())); 
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
				case "c_c":
				return array("concern");
				break;
			}
			break;
			
			case "task":
			switch($rel_name)
			{
				case "c_t":
				return array("Task");
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