<?php
include 'db_connect.php';

echo "<a href='export_vehicles.php'><button>Download as Excel</button></a>";

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=vehicles.csv');

$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Vehicle Number', 'Vehicle Type', 'Driver Name']);

$result = $conn->query("SELECT * FROM vehicles");
while ($row = $result->fetch_assoc()) {
    fputcsv($output, [$row['id'], $row['vehicle_no'], $row['vehicle_type'], $row['driver_name']]);
}
fclose($output);
?>
