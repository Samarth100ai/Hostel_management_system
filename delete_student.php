<?php
include 'db.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM Students WHERE StudentID = $id");
header("Location: dashboard.php");
?>