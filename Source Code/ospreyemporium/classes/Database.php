<?php
	Class Database {		    
		protected $servername = "localhost";
		protected $username = "group4";
		protected $password = "fall2017189654";
		protected $dbname = "group4";
		
		
		protected function __construct() {		      
			try {
				$this->create_database();
				$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, 
				$this->password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
			}
			catch(PDOException $e)
			{
		        echo "Connection failed: " . $e->getMessage();
			}   
		}
		
		/* mysqli method to create database */
		private function create_database(){
			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			// Create database
			$sql = "CREATE DATABASE IF NOT EXISTS " . $this->dbname;
			if ($conn->query($sql) === FALSE) {
				echo "Error creating database: " . $conn->error;
			}
			
			$conn->close();
		}
		
		/* 		   
			performs queries where results are not expected and where 
			parameter binding is not needed.
		*/
		
	protected function query_exec($sql) {
	try {   
	$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, 
	$this->password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  		         
	$conn->exec($sql);		         
	}
	catch(PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
	}
	}
	
	protected function select_all($table) {
	try {
	$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", 
	$this->username, $this->password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "SELECT * FROM " . $table;
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$arr = $stmt->fetchAll();
	return $arr;
	}catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
	}
	
	
	
	protected function delete_record($table, $id_label, $id) {      		
	try {
	$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", 
	$this->username, $this->password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// sql to delete a record
	$sql = "DELETE FROM " . $table . " WHERE " . $id_label . "=" . $id;
	// use exec() because no results are returned
	$conn->exec($sql);
	echo "Record deleted successfully";
	}
	catch(PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
	}
	
	public function close_db() {
	$this->conn = null;   
	
	}
	
	/* remove all html tags and values behind them */
	protected function filter_input($str) {
	return filter_var($str, FILTER_SANITIZE_STRING);
	}
    }  
	?>
		