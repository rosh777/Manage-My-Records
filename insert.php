<?php
	
	// connect with dbconnect.php
	include ('dbconnect.php');

	// variables
	$shop_name = $_POST['shop-name'];
	$mobile_no = $_POST['mobile-no'];

	//create query
	$query = "INSERT INTO paymentdetail(shop_name, mobile_no) VALUES ('$shop_name', '$mobile_no')";

	if (mysqli_query($conn, $query)) {
		echo "Record successfully inserted into database.";
	}
	else{
		echo "Something went wrong.";
	}

	mysqli_close($conn);
?>