<?php
include 'db_connect.php';

// Fetch all vehicles with drivers
$res = $conn->query("SELECT vehicle_no, driver_name FROM vehicles");
$entries = [];
while ($row = $res->fetch_assoc()) {
    $entries[] = $row;
}

// Set rate per ton (can be fetched from user input or DB)
$ratePerTon = 1500; // ₹ per ton (changeable)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daily Trip Sheet</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            margin: 0; padding: 30px;
            color: #333;
        }

        h2 { text-align: center; margin-bottom: 20px; }

        table {
            width: 100%; border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #0074D9;
            color: #fff;
        }

        input {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="number"] {
            text-align: right;
        }

        #submitBtn, #excelBtn {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s, opacity 0.2s;
        }

        #submitBtn {
            background: #28a745;
            color: white;
        }

        #submitBtn:hover {
            transform: scale(1.02);
        }

        #excelBtn {
            background: #0074D9;
            color: white;
            margin-left: 10px;
        }

        #excelBtn:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <h2>📋 Daily Trip Sheet - <?= date('Y-m-d') ?></h2>

    <form action="save_trip_sheet.php" method="post">
        <table>
            <tr>
                <th>Vehicle No</th>
                <th>Driver Name</th>
                <th>No. of Trips</th>
                <th>Weight (Tons)</th>
                <th>Fuel Taken (L)</th>
                <th>Earning (₹)</th>
            </tr>
            <?php foreach($entries as $i => $row): ?>
            <tr>
                <td>
                    <input type="hidden" name="vehicle_no[<?= $i ?>]" value="<?= $row['vehicle_no'] ?>">
                    <?= htmlspecialchars($row['vehicle_no']) ?>
                </td>
                <td>
                    <input type="hidden" name="driver_name[<?= $i ?>]" value="<?= $row['driver_name'] ?>">
                    <?= htmlspecialchars($row['driver_name']) ?>
                </td>
                <td><input type="number" name="trips[<?= $i ?>]" min="0" value="0" required></td>
                <td><input type="number" name="weight[<?= $i ?>]" min="0" step="0.01" value="0" required></td>
                <td><input type="number" name="fuel[<?= $i ?>]" min="0" step="0.1" value="0" required></td>
                <td><input type="number" name="earning[<?= $i ?>]" readonly></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div style="display:flex; justify-content: center;">
            <button type="submit" id="submitBtn">Submit All</button>
            <button type="button" id="excelBtn">Export to Excel</button>
        </div>
    </form>

    <script>
        const ratePerTon = <?= json_encode($ratePerTon) ?>;
        const rows = document.querySelectorAll('tbody tr, table tr:not(:first-child)');
        rows.forEach((tr, i) => {
            const tripsInput = tr.querySelector('input[name="trips['+i+']"]');
            const weightInput = tr.querySelector('input[name="weight['+i+']"]');
            const earningInput = tr.querySelector('input[name="earning['+i+']"]');

            function recalc() {
                const weight = parseFloat(weightInput.value) || 0;
                const earn = weight * ratePerTon;
                earningInput.value = earn.toFixed(2);
            }
            tripsInput.addEventListener('input', recalc);
            weightInput.addEventListener('input', recalc);

            // initial calculate
            recalc();
        });

        document.getElementById('excelBtn').addEventListener('click', () => {
            alert('Click Export (✓) on Submit to get an Excel report.');
            // Implementation could call export endpoint
        });
    </script>
</body>
</html>
