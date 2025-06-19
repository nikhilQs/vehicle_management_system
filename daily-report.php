<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daily Trip Report</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #fff;
        }

        .form-box {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px 40px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: none;
            border-radius: 6px;
            background-color: #f0f0f0;
            color: #333;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            border: none;
            background: linear-gradient(to right, #00b09b, #96c93d);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            transform: scale(1.05);
            background: linear-gradient(to right, #96c93d, #00b09b);
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Daily Trip Report</h2>
        <form method="POST" action="save_trip.php">
            <label for="vehicle_no">Vehicle No:</label>
            <input type="text" name="vehicle_no" required>

            <label for="driver_name">Driver Name:</label>
            <input type="text" name="driver_name" required>

            <label for="trips">Number of Trips:</label>
            <input type="number" name="trips" min="1" required>

            <label for="fuel_used">Fuel Used (in Litres):</label>
            <input type="number" name="fuel_used" min="0" step="0.1" required>

            <label for="earning">Earnings (INR):</label>
            <input type="number" name="earning" min="0" step="0.01" required>

            <label for="date">Date:</label>
            <input type="date" name="date" required>

            <button type="submit">Submit Trip Report</button>
        </form>
    </div>
</body>
</html>
