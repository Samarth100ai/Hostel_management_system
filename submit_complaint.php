<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO complaints (student_id, complaint) VALUES ('$student_id', '$complaint')";
    mysqli_query($conn, $sql);
    echo "Complaint submitted successfully.";
}
?>

<form method="POST">
    Student ID: <input type="number" name="student_id" required><br>
    Complaint: <textarea name="complaint" required></textarea><br>
    <button type="submit">Submit</button>
</form>