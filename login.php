<?php
session_start();
if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: admin.php');
    exit;
}

// connect to DB
$host   = 'localhost';
$dbUser = 'root';
$dbPass = 'root';
$dbName = 'website';
$conn   = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die('DB Connection failed: ' . $conn->connect_error);
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['username'] ?? '';
    $passInput = $_POST['password'] ?? '';

    // lookup stored SHA1 hash
    $stmt = $conn->prepare(
        "SELECT password
           FROM admins
          WHERE username = ?"
    );
    $stmt->bind_param('s', $userInput);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($storedHash);
        $stmt->fetch();
        // compare the two SHA1 hashes in constant time
        if (hash_equals($storedHash, sha1($passInput))) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin.php');
            exit;
        }
    }

    $error = 'Invalid credentials';
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <main class="container">
    <section id="login-section">
      <h1 class="section-heading">Admin Login</h1>
      <form method="post" class="contact-container">
        <?php if ($error): ?>
          <p style="color:#c00; text-align:center;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <div class="input-group">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
      </form>
    </section>
  </main>
</body>
</html>
