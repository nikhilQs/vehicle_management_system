<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['driver_name']) && is_array($_POST['driver_name'])) {
    $date = isset($_POST['date']) && $_POST['date'] !== "" ? $_POST['date'] : date('Y-m-d');

    foreach ($_POST['driver_name'] as $i => $driver) {
        $present = isset($_POST['present'][$i]) ? intval($_POST['present'][$i]) : 0;
        $shift = isset($_POST['shift'][$i]) ? $_POST['shift'][$i] : 'Day';

        if ($driver !== "") {
            $driverEsc = $conn->real_escape_string($driver);
            $shiftEsc = $conn->real_escape_string($shift);

            $sql = "INSERT INTO attendance (staff_name, date, present, shift)
                    VALUES ('$driverEsc', '$date', $present, '$shiftEsc')";

            $conn->query($sql); // You can check for errors if needed
        }
    }

    // Show stylish popup confirmation
    echo "<script>
        document.body.style.background = '#000';
        document.body.innerHTML = `
            <div style='
                text-align: center;
                color: #00ff88;
                font-family: Arial, sans-serif;
                margin-top: 20%;
                animation: fadeIn 0.6s ease;
            '>
                <div style='font-size: 60px;'>✔️</div>
                <h2>Attendance Saved Successfully</h2>
                <a href='attendance.php' style='
                    padding: 10px 20px;
                    background: linear-gradient(to right, #00c853, #64dd17);
                    border-radius: 6px;
                    color: white;
                    text-decoration: none;
                    font-weight: bold;
                    display: inline-block;
                    margin-top: 20px;
                '>Go Back</a>
            </div>
        `;
    </script>";
} else {
    echo "<script>alert('Error: No attendance data submitted!'); window.location.href = 'attendance.php';</script>";
}
?>
