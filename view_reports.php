<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM trip_reports");

echo "<h2>Trip Reports</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Vehicle Number</th><th>Date</th><th>Trips</th><th>Earning</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['vehicle_no']}</td>
            <td>{$row['date']}</td>
            <td>{$row['trips']}</td>
            <td>{$row['earning']}</td>
          </tr>";
}
echo "</table>";
?>
