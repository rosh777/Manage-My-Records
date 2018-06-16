<?php
	
	include('dbconnect.php');
	session_start();
	if (isset($_POST["sub"])) {
		
		$user_name = $_POST["user-name"];
		$user_password = md5($_POST["user-pass"]);

		$query = "SELECT * FROM login WHERE user_name= '$user_name' AND user_password= '$user_password'";

		$result = mysqli_query($conn, $query);
		$rowscount = mysqli_num_rows($result);

		if ($rowscount == 1) {
			$_SESSION["login_user"] = $user_name;
			header("location: index.php");
		 }else{
		 	header("location: loginform.php?invalid= Incorrect username or password!");
		 } 
	}

?>