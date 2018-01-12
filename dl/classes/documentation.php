<?php

class documentation extends object_standard
{
	//attribute variables
	protected $id;
	protected $task;
	protected $framework;
	protected $video;
	protected $link;
	protected $description;
	protected $note;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "task" => array("name" => "Task", "type" => "bigint", "required" => "not null", "length" => "20", "foreign_name" => "d_t", "foreign" => "task", "foreign_attribute" => "id", "additional" => array()), "framework" => array("name" => "Framework", "type" => "string", "required" => "not null", "length" => "30", "foreign_name" => "d_f", "foreign" => "framework", "foreign_attribute" => "name", "additional" => array()), "video" => array("name" => "Video", "type" => "string", "required" => "null", "length" => "100", "additional" => array()), "link" => array("name" => "Link", "type" => "string", "required" => "null", "length" => "100", "additional" => array()), "description" => array("name" => "Description", "type" => "string", "required" => "null", "length" => "20000", "additional" => array("textarea")), "note" => array("name" => "Note", "type" => "string", "required" => "null", "length" => "5000", "additional" => array("textarea"))); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{
			case "task":
			switch($rel_name)
			{
				case "d_t":
				return array("task");
				break;
			}
			break;
			
			case "framework":
			switch($rel_name)
			{
				case "d_f":
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