<?php  

	/**
	* 
	*/
	class DBOperation
	{
		
		private $conn;

		function __construct()
		{
			require_once('DBConnect.php');

			$db = new DBConnect();

			$this->conn = $db->connect();

			if($this->conn) {
				echo "connection established";
			}

			//$this->name = $name;
		}




	}


$op = new DBOperation();






?>