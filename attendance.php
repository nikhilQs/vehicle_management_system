<?php
session_start();
if (!isset($_SESSION['user'])) { header("Location: login.php"); exit; }
require 'db_connect.php';
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO attendance (staff_id, date, shift, present) VALUES (?, ?, ?, 1)");
    $stmt->bind_param("iss", $_SESSION['staff_id'], $_POST['date'], $_POST['shift']);
    $stmt->execute();
    echo "Attendance recorded!";
}
?>
<form method="POST">
  Date: <input type="date" name="date" required><br>
  Shift: <select name="shift"><option>Day</option><option>Night</option></select><br>
  <button type="submit">Mark Present</button>
</form>
