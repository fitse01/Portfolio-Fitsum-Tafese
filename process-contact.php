<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'website';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('DB Connection failed: ' . $conn->connect_error);
}

$name     = $conn->real_escape_string($_POST['name']);
$email    = $conn->real_escape_string($_POST['email']);
$phone    = $conn->real_escape_string($_POST['subject']);
// $location = $conn->real_escape_string($_POST['location']);
$message  = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO contacts (name, email, subject , message)
        VALUES ('$name','$email','$subject','$message')";
$conn->query($sql);

$conn->close();
header('Location: index.php');
exit;