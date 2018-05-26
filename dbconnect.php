<?php
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "records";

	$conn = mysqli_connect($host, $user, $password, $dbname);

	if (!$conn) {
		die("Error in connection.");
	}

	echo "Connection established successfully.";

?>