<?php
session_start();
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'website';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die($conn->connect_error);
$res = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin – Messages</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }

        .admin-table th,
        .admin-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .admin-table th {
            background: #f4f4f4;
            color: #333;
        }

        .admin-table tr:hover {
            background: #f0f0f0;
        }

        a.delete {
            color: #c00;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <main class="container">
        <section id="admin-section">
            <h1 class="section-heading">Contact Messages</h1>
            <div class="contact-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Message</th>
                            <th>When</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $res->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['email']) ?></td>
                                <td><?= htmlspecialchars($row['phone']) ?></td>
                                <td><?= htmlspecialchars($row['location']) ?></td>
                                <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td>
                                    <a
                                        href="delete_message.php?id=<?= $row['id'] ?>"
                                        class="delete"
                                        onclick="return confirm('Delete #<?= $row['id'] ?>?');">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>
<?php $conn->close(); ?>
