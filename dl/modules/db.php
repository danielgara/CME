<?php

/**
 * Project:     Framework G
 * File:        db.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class db
{
    var $server = C_DB_SERVER; //DB server
	var $user = C_DB_USER; //DB user
    var $pass = C_DB_PASS; //DB password
	var $db = C_DB_DATABASE_NAME; //DB database name
	var $limit = C_DB_LIMIT; //DB limit of elements by page
	var $cn;
	var $numpages;
	
	public function db(){}
	
	//connect to database
	public function connect()
	{
		$this->cn = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
		if(!$this->cn) {die("Failed connection to the database: ".mysql_error());}
		mysqli_query($this->cn,"SET NAMES utf8");
	}
	
	//function for doing multiple queries
	public function do_operation($operation, $class = NULL)
	{
		$result = mysqli_query($this->cn, $operation) ;
		if(!$result) {$this->throw_sql_exception($class);}	
	}
	
	//function for obtain data from db in object form
	private function get_data($operation)
	{		
		$data = array(); 
		$result = mysqli_query($this->cn, $operation) or die(mysql_error($this->cn));
		while ($row = mysqli_fetch_object($result))
		{
			array_push($data, $row);
		}
		return $data;
	}
	
	//throw exception to web document
	private function throw_sql_exception($class)
    {
		$errno = mysql_errno(); $error = mysql_error();
		$sql_exceptions = new sql_exceptions($errno, $error, $class);
		
		if(!is_empty($sql_exceptions->msg)){$msg=$sql_exceptions->msg;}
		else{$msg = $error."<br /><br /><b>Error number:</b> ".$errno;}
		
        throw new Exception($msg);
    }
	
	//for avoid sql injections, this functions cleans the variables
	private function escape_string(&$data)
	{
		if(is_object($data))
		{
			foreach ($data->metadata() as $key => $attribute)
			{if(!is_empty($data->get($key))){$data->set($key,mysqli_real_escape_string($this->cn,$data->get($key)));}}
		}
		else if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{if(!is_array($value)){$data[$key]=mysqli_real_escape_string($this->cn,$value);}}
		}
	}
	
	//function for add data to db
	public function insert($options,$object,$get_id) 
	{
		$this->escape_string($object);
		switch($options['lvl1'])
		{																															
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					$hasher = new PasswordHash(8, FALSE);
					$object->set('password',$hasher->HashPassword($object->get('password')));
					unset($hasher);
					$this->normal_insert($options,$object); 
					if($get_id=='yes'){return mysql_insert_id();}
					break;
			}
			break;
			
			default: 
			switch($options['lvl2'])
			{
				case "normal": 
					$this->normal_insert($options,$object);
					if($get_id=='yes'){return mysql_insert_id();}
					break;
			}
			break;
		}
	}
	
	//function for edit data from db
	public function update($options,$object) 
	{
		$this->escape_string($object);
		switch($options['lvl1'])
		{																				
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					$hasher = new PasswordHash(8, FALSE);
					$object->set('password',$hasher->HashPassword($object->get('password')));
					unset($hasher);
					$this->normal_update($options,$object); 
					break;
			}
			break;
			
			default: 
			switch($options['lvl2'])
			{
				case "normal": $this->normal_update($options,$object); break;
			}
			break;
		}
	}
	
	//function for delete data from db
	public function delete($options,$object)
	{
		$this->escape_string($object);
		switch($options['lvl1'])
		{																												
			case "user":
			switch($options['lvl2'])
			{
				case "normal": $this->normal_delete($options,$object); break;
			}
			break;
			
			default: 
			switch($options['lvl2'])
			{
				case "normal": $this->normal_delete($options,$object); break;
			}
			break;			  
		}
	}
	
	//function that returns an array with data from a operation
	public function select($option,$data)
	{
		$this->escape_string($data);
		$info = array();
		switch($option['lvl1'])
		{
			case "example":
			switch($option['lvl2'])
			{
				case "complete":
					$a = implode(", ", $data['concern']);
					$f = $data['framework'];
					$info=$this->get_data("SELECT e.*, c.name AS c_name FROM example e, concern c WHERE c.id=e.concern AND c.id in ($a) AND e.framework = '$f' ORDER BY c.id ASC;");
					break;				
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;					
				case "all":	$info=$this->get_data("SELECT * FROM $option[lvl1];"); break;
			}
			break;
			
			case "concern":
			switch($option['lvl2'])
			{
				case "all_by_order": 				
					$info=$this->get_data("SELECT * FROM concern ORDER BY category asc, lorder asc;");
					break;				
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;					
				case "all":	$info=$this->get_data("SELECT * FROM $option[lvl1];"); break;
			}
			break;
			
			case "task":
			switch($option['lvl2'])
			{
				case "complete": 				
					$a = implode(", ", $data['concern']);
					$f = $data['framework'];
					$info=$this->get_data("SELECT t.*, c.name AS c_name, d.link AS d_link, d.description AS d_description, d.video AS d_video, d.note AS d_note FROM concern c, c_t ct, task t LEFT OUTER JOIN  documentation AS d ON d.task = t.id AND d.framework = '$f' WHERE ct.concern = c.id AND ct.task = t.id AND c.id in ($a) GROUP BY t.component, d.description ORDER BY c.id, t.component;");
					break;
				case "complete2": 				
					$a = implode(", ", $data['concern']);
					$f = $data['framework'];
					$info=$this->get_data("SELECT t.*, c.name AS c_name, d.link AS d_link, d.description AS d_description, d.video AS d_video, d.note AS d_note FROM concern c, c_t ct, task t LEFT OUTER JOIN documentation AS d ON d.task = t.id AND d.framework = '$f' WHERE ct.concern = c.id AND ct.task = t.id AND c.id in ($a) ORDER BY c.id, t.component;");
					break;
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;					
				case "all":	$info=$this->get_data("SELECT * FROM $option[lvl1];"); break;
			}
			break;
			
			case "user":
			switch($option['lvl2'])
			{
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;
				case "one_login":
					$user= $data['user']; $password = $data['password'];
					$result = $this->get_data("SELECT password, id FROM user WHERE user = '$user';");
					$id=$result[0]->id;
					$hasher = new PasswordHash(8, FALSE);
					if ($hasher->CheckPassword($password, $result[0]->password)) 
					{$info=$this->get_data("SELECT name, user, type, id FROM user WHERE id = '$id';");}
					unset($hasher);
					break;
			}
			break;
			
			default: 
			switch($option['lvl2'])
			{
				case "by_pages": $info=$this->select_by_pages($option,$data); break;
				case "by_attributes": $info=$this->select_by_attributes($option,$data); break;					
				case "all":	$info=$this->get_data("SELECT * FROM $option[lvl1];"); break;
			}
			break;
		}
		return $info;
	}
	
	//this function make the normal insert
	private function normal_insert($options,$object)
	{
		$operation = $this->make_insert($options['lvl1'],$object);
		$this->do_operation($operation,$options['lvl1']);
	}
	
	//this function make the normal delete
	private function normal_delete($options,$object)
	{
		$operation = $this->make_delete($options['lvl1'],$object);
		$this->do_operation($operation,$options['lvl1']);
	}
	
	//this function make the normal update
	private function normal_update($options,$object)
	{
		$operation = $this->make_update($options['lvl1'],$object);
		$this->do_operation($operation,$options['lvl1']);
	}
	
	//this function create a select by pages for all classes
	private function select_by_pages($option,$data)
	{
		$class=$option['lvl1'];
		if(!is_empty($data['search_words']))
		{$result = $this->get_data("SELECT count(*) AS total FROM $class WHERE $data[search_type] LIKE '%$data[search_words]%';");}
		else{$result = $this->get_data("SELECT count(*) AS total FROM $class;");}
		$numelements = $result[0]->total;
		$this->numpages = ceil($numelements / $this->limit);
		if(($data['page'])>$this->numpages && $this->numpages!=0){$data['page']=$this->numpages;}
		$numfirstelement = ($data['page']-1)*$this->limit;
		$order=$data['order']; $show_order=$data['show_order'];
		if(is_empty($order)){$obj_aux = new $class();
		$keys=array_keys($obj_aux->metadata());
		$order=array_shift($keys);} //order default is the first attribute key
		if(is_empty($show_order)){$show_order='asc';} //show order default is asc
		if(!is_empty($data['search_words']))
		{$info=$this->get_data("SELECT * FROM $class WHERE $data[search_type] LIKE '%$data[search_words]%' ORDER BY $order $show_order LIMIT $numfirstelement,$this->limit;");}
		else{$info=$this->get_data("SELECT * FROM $class ORDER BY $order $show_order LIMIT $numfirstelement,$this->limit;");}
		return $info;
	}
	
	//this function create a select by attributes for all classes
	private function select_by_attributes($option,$data)
	{
		$class=$option['lvl1']; $aux=0;	$where='';
		foreach ($data['attributes'] as $key => $attribute)
		{
			if($aux==0){$aux=1; $where.="$attribute = '$data[$attribute]'";}
			else{$where.="AND $attribute = '$data[$attribute]'";}
		}
			
		if(!is_empty($data['page'])) // read elements by pages
		{
			$result = $this->get_data("SELECT count(*) AS total FROM $class WHERE $where;");
			$numelements = $result[0]->total;
			$this->numpages = ceil($numelements / $this->limit);
			if(($data['page'])>$this->numpages && $this->numpages!=0){$data['page']=$this->numpages;}
			$numfirstelement = ($data['page']-1)*$this->limit;
			$order=$data['order']; $show_order=$data['show_order'];
			if(is_empty($order)){$obj_aux = new $class();
			$order=array_shift(array_keys($obj_aux->metadata()));} //order default is the first attribute key
			if(is_empty($show_order)){$show_order='asc';} //show order default is asc
			$info=$this->get_data("SELECT * FROM $class WHERE $where ORDER BY $order $show_order LIMIT $numfirstelement,$this->limit;");
			return $info;
		}
		else // read all elements
		{
			return $this->get_data("SELECT * FROM $class WHERE $where;");
		}
	}
	
	//this function make a string of insert based in the attributes that aren't empty
	private function make_insert($option,$object)
	{
		$aux=0;
		$text ="INSERT INTO ".$option." (";
		foreach ($object->metadata() as $key => $attribute)
		{if(!is_empty($object->get($key))){$aux=1;$text.="$key, ";}}
		if($aux==1){$text = substr($text,0,-2);}$aux=0;
		$text.=") VALUES (";
		foreach ($object->metadata() as $key => $attribute)
		{if(!is_empty($object->get($key))){$aux=1;$value_aux=$object->get($key); $text.="'$value_aux', ";}}
		if($aux==1){$text = substr($text,0,-2);}
		$text.=");";
		return $text;
	}
	
	//this function make a string of update based in the attributes of each class
	private function make_update($option,$object)
	{
		$text ="UPDATE ".$option." SET ";
		foreach ($object->metadata() as $key => $attribute)
		{
			if(!is_empty($object->get($key))){$aux=$object->get($key);$text.="$key='$aux', ";}
			else if (is_empty($object->get($key)) && !is_empty($object->auxiliars[$key.'_aux']))
			{
				if(in_array("autoincrement", $attribute['additional']) || in_array("file", $attribute['additional'])){}
				else{$aux=$object->get($key);$text.="$key=NULL, ";}
			}
		}
		$text = substr($text,0,-2); 
		$text .= " WHERE "; $i=0;
		foreach ($object->primary_key() as $key)
		{
			if($i==0){$aux=$object->auxiliars[$key.'_aux']; $text.="$key = '$aux' ";}
			else{$aux=$object->get($key); $text.="AND $key = '$aux' ";}
			$i++;
		}
		$text = substr($text,0,-1);
		$text.=";";
		return $text;
	}
	
	//this function make a string of delete BASED IN PRIMARY KEYS of each class
	private function make_delete($option,$object)
	{
		$text ="DELETE FROM ".$option." WHERE "; $i=0;
		foreach ($object->primary_key() as $key)
		{
			if($i==0){$aux=$object->get($key); $text.="$key = '$aux' ";}
			else{$aux=$object->get($key); $text.="AND $key = '$aux' ";}
			$i++;
		}
		$text = substr($text,0,-1);
		$text.=";";
		return $text;
	}
	
	//close the db connection
	public function close()
	{
		if($this->cn){mysqli_close($this->cn);}
	}
	
}

?>