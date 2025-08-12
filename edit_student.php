<?php
include 'db.php';
$id = $_GET['id'];
$student = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM Students WHERE StudentID = $id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    mysqli_query($connection, "UPDATE Students SET Name='$name', Email='$email', RoomID=$room WHERE StudentID=$id");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    <h2>Edit Student</h2>
    <input type="text" name="name" value="<?= $student['Name'] ?>" required><br>
    <input type="email" name="email" value="<?= $student['Email'] ?>" required><br>
    <input type="number" name="room" value="<?= $student['RoomID'] ?>" required><br>
    <button type="submit">Update</button>
</form>