<?php

class Database 
{

	var $host = 'localhost';
	var $uname = 'root';
	var $pass = '';
	var $db = 'learn_pl2';

	function Connect()
	{
		$this->connection = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		return $this->connection;
	}

}