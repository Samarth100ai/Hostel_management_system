<?php
include 'db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hostel Dashboard</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        h1 { color: #333; }
        .card { background: white; padding: 20px; margin: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .grid { display: flex; gap: 20px; flex-wrap: wrap; }
        a { text-decoration: none; color: #007BFF; }
    </style>
</head>
<body>
    <h1>-Hostel Management Dashboard</h1>
    <div class="grid">
        <div class="card">
            <h2>Students</h2>
            <p><a href="view_students.php">View All</a> | <a href="add_student.php">Add New</a></p>
        </div>
        <div class="card">
            <h2>Rooms</h2>
            <p><a href="view_rooms.php">View All</a> | <a href="add_room.php">Add New</a></p>
        </div>
        <div class="card">
            <h2>Fees</h2>
            <p><a href="view_fees.php">View All</a> | <a href="add_fee.php">Add New</a></p>
        </div>
        <div class="card">
            <h2>Complaints</h2>
            <p><a href="view_complaints.php">View All</a> | <a href="submit_complaint.php">Submit New</a></p>
        </div>
        <div class="card">
            <h2>Logout</h2>
            <p><a href="logout.php">Sign Out</a></p>
        </div>
    </div>
</body>
</html>