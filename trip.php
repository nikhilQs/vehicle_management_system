<?php
session_start();
if (!isset($_SESSION['user'])) { header("Location: login.php"); exit; }
require 'db_connect.php';
if ($_POST) {
    $earning = $_POST['weight'] * $_POST['rate'];
    $stmt = $conn->prepare("INSERT INTO trips (staff_id, date, vehicle, material, weight, rate, earning) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssidd", $_SESSION['staff_id'], $_POST['date'], $_POST['vehicle'], $_POST['material'], $_POST['weight'], $_POST['rate'], $earning);
    $stmt->execute();
    echo "Trip recorded! Earnings: ₹" . $earning;
}
?>
<form method="POST">
  Date: <input type="date" name="date" required><br>
  Vehicle: <input name="vehicle" required><br>
  Material: <input name="material" required><br>
  Weight (tons): <input type="number" step="0.01" name="weight" required><br>
  Rate (₹/ton): <input type="number" step="0.01" name="rate" required><br>
  <button type="submit">Submit Trip</button>
</form>
