<?php

$host = "localhost";
$user = "root";
$password = "Placement@123";
$database = "internal_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
 
?>