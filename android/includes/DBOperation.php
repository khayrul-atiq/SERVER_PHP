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

			//$this->name = $name;
		}




	}






?>