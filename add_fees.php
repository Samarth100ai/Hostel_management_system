<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'];
    $due_date = $_POST['due_date'];

    $sql = "INSERT INTO fees (student_id, amount, due_date) VALUES ('$student_id', '$amount', '$due_date')";
    mysqli_query($conn, $sql);
    header("Location: dashboard.php");
}
?>

<form method="POST">
    Student ID: <input type="number" name="student_id" required><br>
    Amount: <input type="text" name="amount" required><br>
    Due Date: <input type="date" name="due_date" required><br>
    <button type="submit">Add Fee</button>
</form>