<?php
include 'db_connect.php';
$vehicle_no = $_POST['vehicle_no'];
$vehicle_type = $_POST['vehicle_type'];
$driver_name = $_POST['driver_name'];
$sql = "INSERT INTO vehicles (vehicle_no, vehicle_type, driver_name)
        VALUES ('$vehicle_no', '$vehicle_type', '$driver_name')";
echo ($conn->query($sql) === TRUE) ? "Vehicle added." : "Error: " . $conn->error;
$conn->close();
?>
