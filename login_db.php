<?php

$conn = mysqli_connect("localhost", "root", "", "cw1_test");

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$query = "SELECT * FROM `customer` WHERE `Username` = '" . $Username . "' and `Email` = '" . $Email . "'";
$res = mysqli_query($conn, $query);
if ($res === false) {
    die("Error" . mysqli_error($conn));
}
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
if ($row) {
    $storedHashedPassword = $row['Password'];
    if (isset($storedHashedPassword)) {
        // Verify the password
        if (password_verify($Password, $storedHashedPassword)) {
            
            session_start();
            
            session_regenerate_id(); 

            $_SESSION["Username"] = $Username;
            
            echo '<script>window.alert("Logged In."); window.open("index.php","_self",null,true)</script>';
        } else {
            echo '<script>window.alert("Wrong Username or Password."); window.open("login.php","_self",null,true)</script>';
        }
    } else {
        echo '<script>window.alert("Password column not found"); window.open("login.php","_self",null,true)</script>';
    }
} else {
    echo '<script>window.alert("Wrong Username or Password."); window.open("login.php","_self",null,true)</script>';
}
