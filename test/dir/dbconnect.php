<?php
// Database connection details
// $con= mysqli_connect('localhost',"gauri_Nath","HnE*i#GvMg}A","gauri_nath");
$servername = "localhost";
$username = "gauri_Nath";
$password = "HnE*i#GvMg}A@123";
$dbname = "gauri_nath";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare and execute an SQL statement to insert data
$sql = "INSERT INTO contact (name, email, mobile, subject, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $mobile, $subject, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "contact submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
