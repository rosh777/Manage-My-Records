<?php
	
	$id = $_GET['id'];

	include('dbconnect.php');

	$query = "DELETE FROM customerdetails WHERE id='$id';";

	$query .= "DELETE FROM paymentdetails WHERE payment_id='$id';";

	if (mysqli_multi_query($conn, $query)) {

		header("Location: display.php");
	}else{

		echo "Error in delete query." . mysqli_error($conn);
	}

	mysqli_close($conn);
 
?>