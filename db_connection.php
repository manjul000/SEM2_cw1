<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "cw1_test";
	$conn = mysqli_connect($host,$username,$password,$db);

	if ($conn->connect_errno) {
		die("Connection error: " . $conn->connect_error);
	}
	
	return $conn;
?>