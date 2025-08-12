<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    mysqli_query($connection, "INSERT INTO Rooms (RoomNumber, RoomType, Capacity, Occupied) VALUES ('$number', '$type', $capacity, 0)");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    <h2>Add Room</h2>
    <input type="text" name="number" placeholder="Room Number" required><br>
    <input type="text" name="type" placeholder="Room Type" required><br>
    <input type="number" name="capacity" placeholder="Capacity" required><br>
    <button type="submit">Add</button>
</form>