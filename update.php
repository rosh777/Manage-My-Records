<?php
	
	include('dbconnect.php');

	// variables for table : customerdetails
	$id = $_GET['id'];
	$shop_name = $_GET['shop-name'];
	$shop_add = $_GET['shop-add'];
	$mobile_no = $_GET['mobile-no'];
	$invoice_no = $_GET['invoice-no'];

	//variables for table : paymentdetails
	$adv_payment = $_GET['adv-payment'];
	$adv_date = $_GET['adv-date'];
	$installment_1 = $_GET['installment-1'];
	$date_1 = $_GET['date-1'];
	$installment_2 = $_GET['installment-2'];
	$date_2 = $_GET['date-2'];
	$installment_3 = $_GET['installment-3'];
	$date_3 = $_GET['date-3'];
	$installment_4 = $_GET['installment-4'];
	$date_4 = $_GET['date-4'];

	$query = "UPDATE customerdetails SET shop_name='$shop_name', shop_add='$shop_add', mobile_no='$mobile_no', invoice_no='$invoice_no' WHERE id='$id';";

	$query .= "UPDATE paymentdetails SET adv_payment='$adv_payment', adv_date='$adv_date', installment_1='$installment_1', date_1='$date_1', installment_2='$installment_2', date_2='$date_2', installment_3='$installment_3', date_3='$date_3', installment_4='$installment_4', date_4='$date_4' WHERE payment_id='$id';";

	if (mysqli_multi_query($conn, $query)) {
		
		echo "<script type='text/javascript'>alert('Record updated successfully.');
		window.location.href='display.php'</script>";
		
	}else{

		echo "<script type='text/javascript'>alert('Something went wrong while updating record. Please try again.');
		window.location.href='updateform.php'</script>";
	}

	mysqli_close($conn);

?>