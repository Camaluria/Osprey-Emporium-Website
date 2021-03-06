<?php
	// creates order table to add checkout items to order database
	require_once('Database.php');
	
	Class Order extends Database {
		
		
		
		public function __construct(){                    		  
			
			parent::__construct();
			if (session_status() !== PHP_SESSION_ACTIVE) {
				@session_start();
			}	
			
			$this->create_orders_table();	  
			$this->create_orderlines_table();
		}
		
		private function create_orders_table() {
			// sql to create table
			$sql = "CREATE TABLE IF NOT EXISTS Orders (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			orderline_id int(6) NOT NULL,
			order_date varchar(50) NOT NULL,
			order_total decimal(9,2) NOT NULL,
			user_id int(16) NOT NULL
			)";  
			
			$this->query_exec($sql);		       		  
		}
		
		private function create_orderlines_table() {
			// sql to create table
			$sql = "CREATE TABLE IF NOT EXISTS Orderlines (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			order_id int(6) NOT NULL,
			product_id int(6) NOT NULL,
			order_quantity int(6) NOT NULL,
			price_each int(16) NOT NULL
			)";  
			
			$this->query_exec($sql);		       		  
		}
		
	}
	
	
?>
