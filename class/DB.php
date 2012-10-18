<?php

/**
* 
*/
class DB
{
	
	private $host;
	private $username;
	private $password;

	function __construct()
	{
		# code...
	}

	public function connect()
	{
		$conn = mysql_connect($this->host, $this->username, $this->password);
		// return $conn ? "true" : "false";
	}

	public function setHost($host)
	{
		$this->host = $host;
		// echo $this->host
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}
}