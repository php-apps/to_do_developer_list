<?php

class Database{

	// Database parameters
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db_name = 'to_do_developer_list';
	private $conn;

	//Connect to Database and return connection
	public function connect(){
		$this->conn = null;
		//Create connection
		$this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

		// Check connection
		if ($this->conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}
		return $this->conn;
	}
}