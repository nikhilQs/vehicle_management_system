<?php
include 'db_connect.php';

 echo "<a href='export_vehicles.php'><button>Download as Excel</button></a>";

header('Content-Disposition: attachment;filename=trip_reports.csv');

$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Vehicle Number', 'Date', 'Trips', 'Earning']);

$result = $conn->query("SELECT * FROM trip_reports");
while ($row = $result->fetch_assoc()) {
    fputcsv($output, [$row['id'], $row['vehicle_no'], $row['date'], $row['trips'], $row['earning']]);
}
fclose($output);
?>
