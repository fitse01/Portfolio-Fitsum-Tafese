<?php
session_start();
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

// DB credentials
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'website';

if (!isset($_GET['id']) || !($id = intval($_GET['id']))) {
    header('Location: admin.php');
    exit;
}

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('DB Connection failed: ' . $conn->connect_error);
}

$stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();
$conn->close();

header('Location: admin.php');
exit;
