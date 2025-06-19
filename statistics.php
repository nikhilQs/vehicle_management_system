<?php
include 'db_connect.php';

// Fetch aggregated data
$sql = "SELECT vehicle_no, SUM(trips) AS total_trips, SUM(earning) AS total_earning, SUM(fuel_used) AS total_fuel
        FROM trip_reports
        GROUP BY vehicle_no";

$result = $conn->query($sql);

$vehicles = [];
$trips = [];
$earnings = [];
$fuels = [];
$avg_fuel_per_trip = [];

while ($row = $result->fetch_assoc()) {
    $vehicles[] = $row['vehicle_no'];
    $trips[] = $row['total_trips'];
    $earnings[] = $row['total_earning'];
    $fuels[] = $row['total_fuel'];
    $avg = ($row['total_trips'] > 0) ? round($row['total_fuel'] / $row['total_trips'], 2) : 0;
    $avg_fuel_per_trip[] = $avg;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Statistics</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: Arial, sans-serif;
            color: white;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 90%;
            margin: 0 auto 40px auto;
            border-collapse: collapse;
            background-color: #ffffff10;
        }

        table, th, td {
            border: 1px solid #ffffff30;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #1c1c1c;
        }

        canvas {
            display: block;
            margin: 0 auto 50px auto;
            max-width: 900px;
        }

        .chart-title {
            text-align: center;
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Vehicle Trip Statistics</h2>

    <table>
        <tr>
            <th>Vehicle No</th>
            <th>Total Trips</th>
            <th>Total Earnings (₹)</th>
            <th>Fuel Used (L)</th>
            <th>Avg Fuel/Trip (L)</th>
        </tr>
        <?php for ($i = 0; $i < count($vehicles); $i++) { ?>
            <tr>
                <td><?= $vehicles[$i] ?></td>
                <td><?= $trips[$i] ?></td>
                <td><?= $earnings[$i] ?></td>
                <td><?= $fuels[$i] ?></td>
                <td><?= $avg_fuel_per_trip[$i] ?></td>
            </tr>
        <?php } ?>
    </table>

    <div class="chart-title">Fuel Used Per Vehicle</div>
    <canvas id="fuelChart"></canvas>

    <div class="chart-title">Average Fuel per Trip</div>
    <canvas id="avgFuelChart"></canvas>

    <script>
        const vehicles = <?= json_encode($vehicles) ?>;
        const fuels = <?= json_encode($fuels) ?>;
        const avgFuel = <?= json_encode($avg_fuel_per_trip) ?>;

        const ctx1 = document.getElementById('fuelChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: vehicles,
                datasets: [{
                    label: 'Fuel Used (L)',
                    data: fuels,
                    backgroundColor: '#00c8ff'
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        const ctx2 = document.getElementById('avgFuelChart').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: vehicles,
                datasets: [{
                    label: 'Avg Fuel/Trip (L)',
                    data: avgFuel,
                    backgroundColor: '#ffcb05'
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
</body>
</html>
