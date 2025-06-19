<?php
include 'db_connect.php';

$vehicle = $_POST['vehicle_no'];
$date = $_POST['date'];
$rate = floatval($_POST['rate_per_ton']);

$totalEarning = floatval($_POST['earning']);
$sql = "INSERT INTO trip_reports (vehicle_no, date, earning, rate_per_ton) VALUES ('$vehicle', '$date', $totalEarning, $rate)";
$conn->query($sql);
$report_id = $conn->insert_id;

// Save each trip
foreach ($_POST as $k => $v) {
    if (strpos($k, 'weight_') === 0) {
        $idx = explode('_', $k)[1];
        $weight = floatval($v);
        $material = $_POST["material_$idx"];
        $earn = $weight * $rate;
        $conn->query("INSERT INTO trip_details (report_id, weight, material, earning) VALUES ($report_id, $weight, '$material', $earn)");
    }
}

echo "Report saved! 🗓️ <a href='trip_report.php'>Add Another</a>";
