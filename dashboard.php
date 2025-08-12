<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hostel Management Dashboard</h1>
    <a href="add_student.php">Add Student</a> |
    <a href="add_room.php">Add Room</a> |
    <a href="logout.php">Logout</a>

    <h2>Students</h2>
    <?php include 'db.php';
    $students = mysqli_query($connection, "SELECT * FROM Students");
    echo "<table><tr><th>Name</th><th>Email</th><th>Room</th><th>Actions</th></tr>";
    while ($row = mysqli_fetch_assoc($students)) {
        echo "<tr>
            <td>{$row['Name']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['RoomID']}</td>
            <td>
                <a href='edit_student.php?id={$row['StudentID']}'>Edit</a> |
                <a href='delete_student.php?id={$row['StudentID']}'>Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
    ?>

    <h2>Rooms</h2>
    <?php
    $rooms = mysqli_query($connection, "SELECT * FROM Rooms");
    echo "<table><tr><th>Room Number</th><th>Type</th><th>Occupied</th><th>Actions</th></tr>";
    while ($row = mysqli_fetch_assoc($rooms)) {
        echo "<tr>
            <td>{$row['RoomNumber']}</td>
            <td>{$row['RoomType']}</td>
            <td>{$row['Occupied']}</td>
            <td>
                <a href='edit_room.php?id={$row['RoomID']}'>Edit</a> |
                <a href='delete_room.php?id={$row['RoomID']}'>Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>