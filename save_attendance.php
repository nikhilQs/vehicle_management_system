<?php
include 'db_connect.php';

$date = $_POST['att_date'];

foreach ($_POST['driver_id'] as $i => $id) {
  $present = isset($_POST['present'][$i]) ? 1 : 0;
  $shift   = $_POST['shift'][$i];

  $conn->query("
    INSERT INTO attendance (staff_id, date, present, shift)
    VALUES ($id, '$date', $present, '$shift')
  ");
}

echo '<script>alert("✔️ Attendance saved!"); window.location="attendance.php";</script>';
