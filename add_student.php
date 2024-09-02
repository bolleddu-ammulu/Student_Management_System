<?php
include 'db_connect.php';

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

// Insert data into the Students table
$sql = "INSERT INTO Students (first_name, last_name, date_of_birth, gender, address, phone_number, email)
VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$address', '$phone_number', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to success.html
    header("Location: success.html");
    exit(); // Ensure the script stops after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
