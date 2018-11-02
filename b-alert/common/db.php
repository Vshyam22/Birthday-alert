<?php
// Define Credentials	
if (!defined("DB_SERVER")) 		define("DB_SERVER", "localhost");
if (!defined("DB_USER")) 			define("DB_USERNAME", "root");
if (!defined("DB_PASSWORD")) 	define("DB_PASSWORD", "");
if (!defined("DB_NAME")) 			define("DB_NAME", "b-alert");
if (!defined("DB_PORT")) 			define("DB_PORT", "");

// Create class for DB activities

class DB {
	public static function Connect()
	{
		$conn = mysqli_connect("localhost", "root", "", "b-alert");
		if(!$conn)
		{
			echo "Error";
		}
		mysqli_select_db($conn,DB_NAME)or die(mysql_error());
	}

	public static function run($query)
	{
		$conn = mysqli_connect("localhost", "root", "", "b-alert");
		$row = array();
		$result = mysqli_query($conn,$query);
		while ($r = mysqli_fetch_array($result)) {
			$row[] = $r;
		}
		return $row;	
	}

	public static function Close($mysqliConn)
	{
		$mysqliConn->close();
	}

} 
?>
