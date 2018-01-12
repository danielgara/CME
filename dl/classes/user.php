<?php
 
class user extends object_standard
{
	//attributes
	protected $id;
	protected $name;
	protected $user;
	protected $password;
	protected $type;
	protected $email;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array("name" => "Id", "type" => "bigint", "required" => "not null", "length" => "20", "additional" => array("autoincrement")), "name" => array("name" => "Name", "type" => "string", "required" => "not null", "length" => "30", "additional" => array()), "user" => array("name" => "User", "type" => "string", "required" => "not null", "length" => "10", "additional" => array()), "password" => array("name" => "Password", "type" => "string", "required" => "not null", "length" => "72", "additional" => array()), "type" => array("name" => "Type", "type" => "string", "required" => "not null", "length" => "20", "values" => array("admin", "user"), "additional" => array()), "email" => array("name" => "Email", "type" => "string", "required" => "not null", "length" => "50", "additional" => array())); 
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
		if(($list == NULL) || (in_array('email',$list) && $check == 'check') || (!in_array('email',$list) && $check == 'not check'))
		{
			if(!is_empty($this->email)){if(!check_mail($this->email)){$message.="&bull; Invalid email ";}}
		}
	}
}

?>