<?php
include 'auth.php';
include 'db_config.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];

// Insert employee into database
$sql = "INSERT INTO employees (name, email, phone, department) VALUES ('$name', '$email', '$phone', '$department')";

if ($conn->query($sql) === TRUE) {
    // If insertion successful, fetch and display updated employee records
    include 'fetch_employees.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>