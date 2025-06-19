<?php
$conn = new mysqli("localhost", "root", "", "ms_sp_singh");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$number = $_POST['number'];
$model = $_POST['model'];
$owner = $_POST['owner'];

$sql = "INSERT INTO vehicles (number, model, owner) VALUES ('$number', '$model', '$owner')";

if ($conn->query($sql) === TRUE) {
    echo "New vehicle added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
