<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Default values if not set
$pageTitle = $pageTitle ?? 'Fitsum Tafese | Web Developer';
$metaDescription = $metaDescription ?? 'Portfolio website of Fitsum Tafese, a full-stack web developer.';

// Get current page for active menu highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php if (isset($additionalStyles)): ?>
        <?php foreach ($additionalStyles as $style): ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">John<span>Doe</span></a>
            </div>
            <nav class="main-nav">
                <button class="menu-toggle" aria-label="Toggle menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <ul class="nav-menu">
                    <li><a href="index.php" <?php echo ($currentPage === 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="about.php" <?php echo ($currentPage === 'about.php') ? 'class="active"' : ''; ?>>About</a></li>
                    <li><a href="projects.php" <?php echo ($currentPage === 'projects.php') ? 'class="active"' : ''; ?>>Projects</a></li>
                    <li><a href="blog.php" <?php echo ($currentPage === 'blog.php' || $currentPage === 'blog-post.php') ? 'class="active"' : ''; ?>>Blog</a></li>
                    <li><a href="contact.php" <?php echo ($currentPage === 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
                    <?php if (isLoggedIn()): ?>
                        <li><a href="admin/index.php">Admin</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <?php
    // Display flash messages if any
    if (isset($_SESSION['flash_message'])) {
        echo '<div class="flash-message ' . $_SESSION['flash_message_type'] . '">';
        echo '<div class="container">';
        echo $_SESSION['flash_message'];
        echo '</div>';
        echo '</div>';
        
        // Clear the message after displaying
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_message_type']);
    }
    ?>