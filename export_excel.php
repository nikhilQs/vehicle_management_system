<?php
include 'db_connect.php';
$date = $_POST['date'];

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"report_{$date}.xls\"");

// Fetch data
$res = $conn->query("
  SELECT tr.vehicle_no, td.weight, td.material, td.earning 
  FROM trip_reports tr
  JOIN trip_details td ON td.report_id = tr.id
  WHERE tr.date = '$date'
");

echo "<table border='1'><tr><th>Vehicle</th><th>Weight</th><th>Material</th><th>Earning</th></tr>";
while ($r = $res->fetch_assoc()) {
    echo "<tr><td>{$r['vehicle_no']}</td><td>{$r['weight']}</td><td>{$r['material']}</td><td>{$r['earning']}</td></tr>";
}
echo "</table>";
