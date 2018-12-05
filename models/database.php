<?php 

class database {

	public $conn;
	public $data;

	public function __construct() {
		$this->data = json_decode(file_get_contents('../database-configuration'), true);	
		$this->conn = new mysqli($this->data['server'], $this->data['username'], $this->data['password']);

		if(!$this->conn) {
			echo "Cannot connect with database<br>";
		}
		echo "Connection with database has been established<br>";
	}

	public function createdb() {
		$this->conn->query('CREATE DATABASE IF NOT EXISTS '.$this->data['database']);
	}	
}

?>
