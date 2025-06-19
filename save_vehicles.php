<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ms_sp_singh";

// connect
$conn = new mysqli($host, $user, $password, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$vehicle_no = $_POST['vehicle_no'];
$vehicle_type = $_POST['vehicle_type'];
$driver_name = $_POST['driver_name'];

$sql = "INSERT INTO vehicles (vehicle_no, vehicle_type, driver_name)
        VALUES ('$vehicle_no', '$vehicle_type', '$driver_name')";

if ($conn->query($sql) === TRUE) {
    echo "Vehicle added successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
