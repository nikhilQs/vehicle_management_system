<?php
include 'db_connect.php';

echo "<a href='export_vehicles.php'><button>Download as Excel</button></a>";

header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=attendance.csv');

$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Staff Name', 'Role', 'Date', 'Present']);

$result = $conn->query("SELECT * FROM attendance");
while ($row = $result->fetch_assoc()) {
    $present = $row['present'] ? 'Yes' : 'No';
    fputcsv($output, [$row['id'], $row['staff_name'], $row['role'], $row['date'], $present]);
}
fclose($output);
?>
