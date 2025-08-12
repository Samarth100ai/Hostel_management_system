<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM complaints");

echo "<table border='1'>
<tr><th>ID</th><th>Student ID</th><th>Complaint</th><th>Status</th><th>Date</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['student_id']}</td>
        <td>{$row['complaint']}</td>
        <td>{$row['status']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
echo "</table>";
?>