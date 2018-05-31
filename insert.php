<?php
	
	// connect with dbconnect.php
	include ('dbconnect.php');

	// variables for table : customerdetails
	$shop_name = $_POST['shop-name'];
	$shop_add = $_POST['shop-add'];
	$mobile_no = $_POST['mobile-no'];
	$invoice_no = $_POST['invoice-no'];

	//variables for table : paymentdetails
	$adv_payment = $_POST['adv-payment'];
	$adv_date = $_POST['adv-date'];
	$installment_1 = $_POST['installment-1'];
	$date_1 = $_POST['date-1'];
	$installment_2 = $_POST['installment-2'];
	$date_2 = $_POST['date-2'];
	$installment_3 = $_POST['installment-3'];
	$date_3 = $_POST['date-3'];
	$installment_4 = $_POST['installment-4'];
	$date_4 = $_POST['date-4'];

	//create query
	$query = "INSERT INTO customerdetails(shop_name, shop_add, mobile_no, invoice_no) VALUES ('$shop_name', '$shop_add', '$mobile_no', '$invoice_no');";

	$query .= "INSERT INTO paymentdetails(adv_payment, adv_date, installment_1, date_1, installment_2, date_2, installment_3, date_3, installment_4, date_4) VALUES ('$adv_payment', '$adv_date', '$installment_1', '$date_1', '$installment_2', '$date_2', '$installment_3', '$date_3', '$installment_4', '$date_4');";


	if (mysqli_multi_query($conn, $query)) {
		echo "<script type='text/javascript'>alert('Data saved successfully.');
		window.location.href='index.php?success'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Something went wrong while inserting data.');
		window.location.href='index.php?fail'</script>";
	}

	mysqli_close($conn);
?>