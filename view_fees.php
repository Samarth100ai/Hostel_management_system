<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM fees");

echo "<table border='1'>
<tr><th>ID</th><th>Student ID</th><th>Amount</th><th>Due Date</th><th>Status</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['student_id']}</td>
        <td>{$row['amount']}</td>
        <td>{$row['due_date']}</td>
        <td>{$row['status']}</td>
    </tr>";
}
echo "</table>";
?>