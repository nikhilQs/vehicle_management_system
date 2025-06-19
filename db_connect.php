<?php
$host = "your-mysql-host";
$username = "your-db-user";
$password = "your-db-password";
$database = "your-db-name";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
?>
