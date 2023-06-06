<?php

// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);

$host = "127.0.0.1";
$db_name = "webdev_week_11_2023";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error()); }
// echo "Connected successfully";
?>