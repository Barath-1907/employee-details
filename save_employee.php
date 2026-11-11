<?php

$servername = "localhost";
$username = "root";
$password = "Placement@123";
$dbname = "employee_db";
$port = 3306;

// Database connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname,
    $port
);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Get form data
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$department = trim($_POST['department']);

// Insert employee details
$sql = "INSERT INTO employees (name, email, phone, department)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $name, $email, $phone, $department);

if ($stmt->execute()) {

    echo "<h2>Employee Registered Successfully!</h2>";
    echo "Employee Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Department: " . htmlspecialchars($department);

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>