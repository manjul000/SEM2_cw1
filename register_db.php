<?php

require 'db_connection.php';

$mysqli = require __DIR__ . '/db_connection.php';

// prepare and bind
$sql = "INSERT INTO customer (First_Name, Middle_Name, Last_Name, Email, Username, Address, Password) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

//Retrieve form Data
$First_Name = $_POST['f-name'];
$Middle_Name = $_POST['m-name'];
$Last_Name = $_POST['l-name'];
$Email = $_POST['email'];
$Username = $_POST['username'];
$Address = $_POST['address'];
$Password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$stmt->bind_param("sssssss", $First_Name, $Middle_Name, $Last_Name, $Email, $Username, $Address, $Password);

$checkQueryEmail = "SELECT * FROM `customer` WHERE `Email` = '$Email'";
$checkResultEmail = mysqli_query($conn, $checkQueryEmail);

if (mysqli_num_rows($checkResultEmail) > 0) {
    echo '<script> window.alert("Email already in use. Please use a different Email."); window.open("register.php","_self",null,true);</script>';
} 

$checkQueryUsername = "SELECT * FROM `customer` WHERE `Username` = '$Username'";
$checkResultUsername = mysqli_query($conn, $checkQueryUsername);

if(mysqli_num_rows($checkResultUsername) > 0) {
    echo '<script> window.alert("Username already in use. Please use a different Username."); window.open("register.php","_self",null,true);</script>';
}
else {
    $stmt->execute();
    echo '<script>window.open("login.php","_self",null,true);</script>';
}
