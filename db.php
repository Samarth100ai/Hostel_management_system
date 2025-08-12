<?php
$connection = mysqli_connect("localhost", "root", "", "hostel_db");
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
