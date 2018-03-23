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

		}

		function createUserAccount($name, $email, $password, $reward) {


			$sql = "INSERT INTO user (name, email, password, reward) VALUES ('$name', '$email', '$password', '$reward')";
			if(mysqli_query($this->conn, $sql)) {
				return true;
			} else {
				return false;
			}
		}




	}


//$op = new DBOperation();
//$op->createUserAccount('Atiq', 'atiqahammedshamim@gmail.com', '123456', '0');






?>