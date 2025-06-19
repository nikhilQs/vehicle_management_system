<?php
session_start();
if (!isset($_SESSION['user'])) { header("Location: login.php"); exit; }
echo "<h2>Welcome, " . $_SESSION['user'] . "</h2>";
echo "<p><a href='attendance.php'>Mark Attendance</a> | <a href='trip.php'>Enter Trip</a> | <a href='logout.php'>Logout</a></p>";
?>
