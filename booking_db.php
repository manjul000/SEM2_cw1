<?php
	session_start();

	require 'db_connection.php';

	$BookingID = 1;
	
	if($_SESSION['Username'] == null)
	{
		echo "<script>window.alert('Please Login to Process your order'); window.open('login.php','_self',null,true);</script>";
	}
	
    $Username = $_SESSION['Username'];

	$sql2 = "INSERT INTO `bookings_order`(`Username`, `Booking_ID`) ".
			"VALUES ('$Username','$BookingID')";
	$res2 = mysqli_query($conn,$sql2);
	if($res2){
		echo "<script>window.alert('Success'); window.open('index.php','_self',null,true);</script>";
	}
?>