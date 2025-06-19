<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM vehicles");

echo "<h2>Vehicle Records</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Vehicle Number</th><th>Vehicle Type</th><th>Driver Name</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['vehicle_no']}</td>
            <td>{$row['vehicle_type']}</td>
            <td>{$row['driver_name']}</td>
          </tr>";
}
echo "</table>";
?>
