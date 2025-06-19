<?php
include 'db_connect.php';

$date = date('Y-m-d');

foreach ($_POST['vehicle_no'] as $i => $vehicle) {
    $driver = $_POST['driver_name'][$i];
    $trips = intval($_POST['trips'][$i]);
    $weight = floatval($_POST['weight'][$i]);
    $fuel = floatval($_POST['fuel'][$i]);
    $earning = floatval($_POST['earning'][$i]);

    if ($trips > 0 || $weight > 0) {
        $conn->query("
            INSERT INTO trip_reports (vehicle_no, driver_name, trips, weight, fuel_used, earning, date)
            VALUES ('$vehicle','$driver',$trips,$weight,$fuel,$earning,'$date')
        ");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trip Sheet Saved</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            color: #00ff00;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            animation: fadeIn 1s ease-in;
        }

        .tick {
            font-size: 100px;
            animation: bounce 1.2s infinite alternate;
        }

        h1 {
            font-size: 30px;
            margin-top: 20px;
        }

        a {
            color: #00ffff;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
            border: 1px solid #00ffff;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background 0.3s;
        }

        a:hover {
            background: #00ffff;
            color: black;
        }

        @keyframes bounce {
            from { transform: scale(1); }
            to { transform: scale(1.2); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="tick">✅</div>
    <h1>Thank you! Data Recorded Successfully.</h1>
    <a href="daily_trip_sheet.php">← Go Back to Trip Sheet</a>
</body>
</html>
