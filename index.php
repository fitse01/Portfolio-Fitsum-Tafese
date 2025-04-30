<?php
// Include common functions and database connection
require_once 'includes/functions.php';
require_once 'includes/db.php';

// Get featured projects
$featuredProjects = getFeaturedProjects(3);

// Get latest blog posts
$latestPosts = getLatestPosts(3);

// Page title and meta description
$pageTitle = "Fitsum Tafese | Web Developer";
$metaDescription = "Portfolio website of Fitsum Tafese, a full-stack web developer specializing in HTML, CSS, JavaScript, and PHP.";

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="animate-on-load">Hi, I'm <span>Fitsum Tafese</span></h1>
            <h2 class="animate-on-load delay-1">Full-Stack Web Developer</h2>
            <p class="animate-on-load delay-2">I build responsive, user-friendly websites and web applications with clean code and modern technologies.</p>
            <div class="hero-buttons animate-on-load delay-3">
                <a href="projects.php" class="btn btn-primary">View My Work</a>
                <a href="contact.php" class="btn btn-secondary">Get In Touch</a>
            </div>
        </div>
        <div class="hero-image animate-on-load">
            <img src="assets/images/hero-image.png" alt="Fitsum Tafese - Web Developer">
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="featured-projects">
    <div class="container">
        <div class="section-header">
            <h2>Featured Projects</h2>
            <p>Here are some of my recent works</p>
        </div>
        <div class="projects-grid">
            <?php if (!empty($featuredProjects)): ?>
                <?php foreach ($featuredProjects as $project): ?>
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                        </div>
                        <div class="project-info">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['summary']); ?></p>
                            <div class="project-tech">
                                <?php foreach (explode(',', $project['technologies']) as $tech): ?>
                                    <span><?php echo htmlspecialchars(trim($tech)); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="#" class="modal-trigger" data-modal="project<?php echo $project['id']; ?>Modal">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback content if no projects are found -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/images/project1.jpg" alt="E-commerce Website">
                    </div>
                    <div class="project-info">
                        <h3>E-commerce Website</h3>
                        <p>A fully responsive e-commerce platform with product filtering and cart functionality.</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="modal-trigger" data-modal="project1Modal">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Additional fallback projects would go here -->
            <?php endif; ?>
        </div>
        <div class="section-footer">
            <a href="projects.php" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills">
    <div class="container">
        <div class="section-header">
            <h2>My Skills</h2>
            <p>Technologies I work with</p>
        </div>
        <div class="skills-container">
            <div class="skill-category">
                <h3>Front-End</h3>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>HTML5</span>
                        <span>95%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>CSS3</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>JavaScript</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <div class="skill-category">
                <h3>Back-End</h3>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>PHP</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>MySQL</span>
                        <span>75%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>API Development</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="skill-category">
                <h3>Tools & Others</h3>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>Git</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>Responsive Design</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-info">
                        <span>UI/UX Principles</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts Section -->
<section class="latest-posts">
    <div class="container">
        <div class="section-header">
            <h2>Latest Blog Posts</h2>
            <p>Thoughts, tutorials, and insights</p>
        </div>
        <div class="posts-grid">
            <?php if (!empty($latestPosts)): ?>
                <?php foreach ($latestPosts as $post): ?>
                    <div class="post-card">
                        <div class="post-image">
                            <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                        </div>
                        <div class="post-info">
                            <div class="post-meta">
                                <span class="post-date"><?php echo date('F j, Y', strtotime($post['date'])); ?></span>
                                <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                            </div>
                            <h3><a href="blog-post.php?id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                            <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                            <a href="blog-post.php?id=<?php echo $post['id']; ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback content if no posts are found -->
                <div class="post-card">
                    <div class="post-image">
                        <img src="assets/images/blog1.jpg" alt="Responsive Design Principles">
                    </div>
                    <div class="post-info">
                        <div class="post-meta">
                            <span class="post-date">June 15, 2023</span>
                            <span class="post-category">Web Design</span>
                        </div>
                        <h3><a href="blog-post.php">Responsive Design Principles Every Developer Should Know</a></h3>
                        <p>Learn the key principles of responsive design that will make your websites look great on any device.</p>
                        <a href="blog-post.php" class="read-more">Read More</a>
                    </div>
                </div>
                
                <!-- Additional fallback posts would go here -->
            <?php endif; ?>
        </div>
        <div class="section-footer">
            <a href="blog.php" class="btn btn-primary">View All Posts</a>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Let's Work Together</h2>
            <p>Have a project in mind? I'd love to hear about it. Get in touch and let's create something amazing together.</p>
            <a href="contact.php" class="btn btn-light">Contact Me</a>
        </div>
    </div>
</section>

<!-- Project Modals -->
<?php if (!empty($featuredProjects)): ?>
    <?php foreach ($featuredProjects as $project): ?>
        <div class="modal" id="project<?php echo $project['id']; ?>Modal">
            <div class="modal-content">
                <span class="modal-close">&times;</span>
                <h2><?php echo htmlspecialchars($project['title']); ?></h2>
                <div class="modal-image">
                    <img src="<?php echo htmlspecialchars($project['large_image'] ?? $project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                </div>
                <div class="modal-description">
                    <p><?php echo nl2br(htmlspecialchars($project['description'])); ?></p>
                    <h3>Key Features:</h3>
                    <ul>
                        <?php foreach (explode("\n", $project['features']) as $feature): ?>
                            <li><?php echo htmlspecialchars(trim($feature)); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h3>Technologies Used:</h3>
                    <div class="tech-tags">
                        <?php foreach (explode(',', $project['technologies']) as $tech): ?>
                            <span><?php echo htmlspecialchars(trim($tech)); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-buttons">
                        <?php if (!empty($project['code_url'])): ?>
                            <a href="<?php echo htmlspecialchars($project['code_url']); ?>" class="btn btn-secondary" target="_blank">View Code</a>
                        <?php endif; ?>
                        <?php if (!empty($project['demo_url'])): ?>
                            <a href="<?php echo htmlspecialchars($project['demo_url']); ?>" class="btn btn-primary" target="_blank">Live Demo</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <!-- Fallback modal if no projects are found -->
    <div class="modal" id="project1Modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <h2>E-commerce Website</h2>
            <div class="modal-image">
                <img src="assets/images/project1-large.jpg" alt="E-commerce Website">
            </div>
            <div class="modal-description">
                <p>A fully responsive e-commerce platform built from scratch using HTML, CSS, JavaScript, and PHP. This project features product filtering, shopping cart functionality, user authentication, and a custom admin panel for product management.</p>
                <h3>Key Features:</h3>
                <ul>
                    <li>Responsive design that works on all devices</li>
                    <li>Product filtering and search functionality</li>
                    <li>Shopping cart with local storage</li>
                    <li>User registration and authentication</li>
                    <li>Admin panel for product management</li>
                    <li>Order processing and tracking</li>
                </ul>
                <h3>Technologies Used:</h3>
                <div class="tech-tags">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                </div>
                <div class="project-buttons">
                    <a href="#" class="btn btn-secondary">View Code</a>
                    <a href="#" class="btn btn-primary">Live Demo</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="modal-overlay"></div>

<?php
// Include footer
include 'includes/footer.php';
?>