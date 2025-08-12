<?php
include 'db.php';
$id = $_GET['id'];
$room = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM Rooms WHERE RoomID = $id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    mysqli_query($connection, "UPDATE Rooms SET RoomNumber='$number', RoomType='$type', Capacity=$capacity WHERE RoomID=$id");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    <h2>Edit Room</h2>
    <input type="text" name="number" value="<?= $room['RoomNumber'] ?>" required><br>
    <input type="text" name="type" value="<?= $room['RoomType'] ?>" required><br>
    <input type="number" name="capacity" value="<?= $room['Capacity'] ?>" required><br>
    <button type="submit">Update</button>
</form>