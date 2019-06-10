	<?php 
		$hostname = "localhost";
		$user_name = "root";
		$password = "";
		$database = "school";

		$conn = new mysqli($hostname, $user_name, $password, $database);
		if ($conn->connect_error) {
			die("Database Connection Failed");
		}
	 ?>							
								