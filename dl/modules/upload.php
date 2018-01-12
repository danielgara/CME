<?php

/**
 * Project:     Framework G
 * File:        upload.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2012-12-01
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class upload{
	
	var $file_upload;
	var $file_name;
	var $file_extension;
	var $file_final_name;
	var $file_mime_type;
	var $info;
	var $max_size = 0; // in kilobytes
	var $max_width = 0; // in pixels
	var $max_height	= 0; // in pixels
	var $path = 'files/';
	var $error = array(0 => 'file was not selected', 1 => 'file was not upload', 2 => 'file size exceeds the maximum',
					   3 => 'file width exceeds the maximum', 4 => 'file height exceeds the maximum',
					   5 => 'error in file name', 6 => 'invalid file', 7 => 'type is not allowed',
					   8 => 'type not found in mime_type.php', 9 => 'invalid upload path',
					   10 => 'file can not be uploaded', 11 => 'unable to load mime type file');
		
	public function __construct($file, $info, $data = NULL)
	{
		$this->file_upload=$file;
		$this->file_name=$file['name'];
		$this->info=$info;
		$this->get_extension();
		
		if($data != NULL)
		{
			foreach ($data as $data_key => $val)
			{if(!is_empty($data[$data_key])){$this->$data_key=$val;}}	
		}
		
		$this->validate();
	}

	private function validate()
	{
		if (!isset($this->file_upload)){throw_exception($this->error[0]);}
		if (!is_uploaded_file($this->file_upload['tmp_name'])){throw_exception($this->error[1]);}
		if ($this->max_size!=0) 
		{
			$real_size=round($this->file_upload['size']/1024, 2); //transform to kb
			if ($real_size > $this->max_size){throw_exception($this->error[2]);}
		}		
		$img_types = array('gif', 'jpg', 'jpeg', 'png', 'jpe');
		if (in_array($this->file_extension, $img_types)){$this->validate_dimensions(); $this->verify_image();}
		
		if (!@is_dir(C_FULL_PATH.$this->path)){throw_exception($this->error[9]);}
		$this->get_real_type();
		$this->validate_type();
		$this->set_name();
	}
	
	private function get_real_type()
	{		
		if(function_exists('finfo_file'))
		{
			$finfo = finfo_open(FILEINFO_MIME_TYPE); 
			$mime = finfo_file($finfo, $this->file_upload['tmp_name']);
			finfo_close($finfo);
			if (strlen($mime) > 0)
			{
				$this->file_mime_type = $mime;
				return;	
			}
		}
		
		if (function_exists('mime_content_type'))
		{
			$mime = @mime_content_type($this->file_upload['tmp_name']);
			if (strlen($mime) > 0)
			{
				$this->file_mime_type = $mime;
				return;	
			}
		}
		
		if (DIRECTORY_SEPARATOR !== '\\')
		{
			$cmd = 'file --brief --mime ' . escapeshellarg($this->file_upload['tmp_name']) . ' 2>&1';

			if (function_exists('exec'))
			{
				$mime = @exec($cmd, $mime, $return_status);
				if (strlen($mime) > 0)
				{
					$this->file_mime_type = $mime;	
					return;	
				}
			}
			
			if ((bool)@ini_get('safe_mode') === FALSE && function_exists('shell_exec'))
			{
				$mime = @shell_exec($cmd);
				if (strlen($mime) > 0)
				{
					$mime = explode("\n", trim($mime));
					$this->file_mime_type=$mime[(count($mime)-1)];
					return;
				}
			}
			
			if (function_exists('popen'))
			{
				$proc = @popen($cmd, 'r');
				if (is_resource($proc))
				{
					$mime = @fread($proc, 512);
					@pclose($proc);
					if ($mime !== FALSE)
					{
						$mime = explode("\n", trim($mime));
						$this->file_mime_type=$mime[(count($mime)-1)];
						return;
					}
				}
			}
		}

		$this->file_mime_type = $this->file_upload['type'];
	}
	
	private function validate_type()
	{		
		if (!is_file(C_FULL_PATH.'configs/mime_type.php'))
		{throw_exception($this->error[7]);}
		
		include(C_FULL_PATH.'configs/mime_type.php');
	
		if (!@in_array($this->file_extension, $this->info['values']) && $this->info['values']!='*')
		{throw_exception($this->error[7]);}		
		
		$img_types = array('gif', 'jpg', 'jpeg', 'png', 'jpe');
		if (in_array($this->file_extension, $img_types))
		{if (getimagesize($this->file_upload['tmp_name']) === FALSE){throw_exception($this->error[7]);}}
		
		if (!array_key_exists($this->file_extension, $mime_type))
		{throw_exception($this->error[8]);}
		
		if(is_array($mime_type[$this->file_extension]))
		{
			$pos=strpos($this->file_mime_type, ';');
			if($pos !== false){$this->file_mime_type = substr($this->file_mime_type, 0, $pos);}
			if(!in_array($this->file_mime_type, $mime_type[$this->file_extension]))
			{throw_exception($this->error[7]);}
		}
		else
		{
			$pos=strpos($this->file_mime_type, ';');
			if($pos !== false){$this->file_mime_type = substr($this->file_mime_type, 0, $pos);}
			if($this->file_mime_type != $mime_type[$this->file_extension])
			{throw_exception($this->error[7]);}
		}
	}
	
	private function validate_dimensions()
	{
		if (function_exists('getimagesize'))
		{
			$data = @getimagesize($this->file_upload['tmp_name']);
			if ($this->max_width > 0 && $data['0'] > $this->max_width){throw_exception($this->error[3]);}
			if ($this->max_height > 0 && $data['1'] > $this->max_height){throw_exception($this->error[4]);}
		}
	}
	
	private function clean_name()
	{
		$this->file_name = preg_replace("/\s+/", "_", $this->file_name);
		$invalid = array("<!--", "-->", "'", "<", ">", '"', '&', '$', '=', ';', '?', '/', "%20", "%22", "%3c", "%253c", "%3e", "%0e","%28",
						 "%29", "%2528", "%26", "%24", "%3f", "%3b", "%3d");
		$this->file_name = str_replace($invalid, '', $this->file_name);
		$this->file_name = stripslashes($this->file_name);
	}
	
	private function get_extension()
	{
		$name_data = explode(".",$this->file_name);
		$this->file_extension=strtolower(array_pop($name_data));
	}
	
	private function set_name()
	{
		$this->clean_name();
		$name_data = explode(".",$this->file_name);
		$this->file_final_name=$name_data[0].rand(0,9).rand(100,9999).'.'.$this->file_extension;
		if ($this->file_final_name == ''){throw_exception($this->error[5]);}
	}
	
	private function verify_image()
	{
		if (function_exists('getimagesize') && @getimagesize($this->file_upload['tmp_name']) !== FALSE)
		{
			if (($data = @fopen($this->file_upload['tmp_name'], 'rb')) === TRUE)
			{
				$opening_bytes = fread($data, 256);
				fclose($data);
				if (preg_match('/<(a|body|head|html|img|plaintext|pre|script|table|title)[\s>]/i', $opening_bytes))
				{throw_exception($this->error[6]);}
			}
		}
	}
	
	public function move_file()
	{	
		if (!@move_uploaded_file($this->file_upload['tmp_name'],C_FULL_PATH.$this->path.$this->file_final_name))
		{throw_exception($this->error[10]);}
	}

}

?>