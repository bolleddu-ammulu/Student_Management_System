<?php
include 'db_connect.php';

// Get student ID from form data
$student_id = $_POST['student_id'];

// Ensure student_id is an integer to prevent SQL injection
$student_id = intval($student_id);

// Prepare statement to check if student exists
$check_sql = "SELECT student_id FROM Students WHERE student_id = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("i", $student_id);
$check_stmt->execute();
$check_stmt->store_result();

if ($check_stmt->num_rows === 0) {
    // Student ID not found
    echo "Student ID not found. Please enter a correct ID.";
} else {
    // Prepare statement to delete the student record
    $delete_sql = "DELETE FROM Students WHERE student_id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $student_id);

    if ($delete_stmt->execute()) {
        // Redirect to success.html
        header("Location: success.html");
        exit(); // Ensure the script stops after redirection
    } else {
        echo "Error: " . $delete_stmt->error;
    }

    $delete_stmt->close();
}

$check_stmt->close();
$conn->close();
?>
