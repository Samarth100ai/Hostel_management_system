<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    mysqli_query($connection, "INSERT INTO Students (Name, Email, RoomID, AdmissionDate) VALUES ('$name', '$email', $room, CURDATE())");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    <h2>Add Student</h2>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="room" placeholder="Room ID" required><br>
    <button type="submit">Add</button>
</form>