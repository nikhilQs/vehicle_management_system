<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM attendance");

echo "<h2>Attendance Records</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Staff Name</th><th>Role</th><th>Date</th><th>Present</th></tr>";

while ($row = $result->fetch_assoc()) {
    $present = $row['present'] ? 'Yes' : 'No';
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['staff_name']}</td>
            <td>{$row['role']}</td>
            <td>{$row['date']}</td>
            <td>{$present}</td>
          </tr>";
}
echo "</table>";
?>
