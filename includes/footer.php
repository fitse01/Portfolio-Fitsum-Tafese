    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="index.php">John<span>Doe</span></a>
                    <p>Full-Stack Web Developer</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h3>Connect With Me</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-contact">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-envelope"></i> hello@johndoe.com</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-map-marker-alt"></i> San Francisco, CA</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Fitsum Tafese. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <?php if (isset($additionalScripts)): ?>
        <?php foreach ($additionalScripts as $script): ?>
            <script src="<?php echo htmlspecialchars($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <?php if (basename($_SERVER['PHP_SELF']) === 'projects.php'): ?>
        <script src="assets/js/projects-filter.js"></script>
    <?php endif; ?>
    
    <?php if (basename($_SERVER['PHP_SELF']) === 'contact.php'): ?>
        <script src="assets/js/validation.js"></script>
    <?php endif; ?>
    
    <?php if (strpos($_SERVER['REQUEST_URI'], 'project') !== false): ?>
        <script src="assets/js/modal.js"></script>
    <?php endif; ?>
</body>
</html>