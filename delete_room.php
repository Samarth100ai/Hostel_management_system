<?php
include 'db.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM Rooms WHERE RoomID = $id");
header("Location: dashboard.php");
?>