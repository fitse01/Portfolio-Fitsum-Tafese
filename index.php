<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitsum Tafese | Web Developer</title>
    <meta
      name="description"
      content="Portfolio website of Fitsum Tafese, a full-stack web developer specializing in HTML, CSS, JavaScript,  PHP , next js , react , node , express, mysql, mongodb , prisma  ."
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header -->
    <header class="site-header">
      <div class="container">
        <div class="logo">
          <a href="index.html">Fitsum<span>Tafese</span></a>
        </div>
        <nav class="main-nav">
          <button class="menu-toggle" aria-label="Toggle menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
          <ul class="nav-menu">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="projects.html">Projects</a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="animate-on-load">Hi, I'm <span>Fitsum Tafese</span></h1>
          <h2 class="animate-on-load delay-1">Full-Stack Web Developer</h2>
          <p class="animate-on-load delay-2">
            I build responsive, user-friendly websites and web applications with
            clean code and modern technologies.
          </p>
          <div class="hero-buttons animate-on-load delay-3">
            <a href="projects.html" class="btn btn-primary">View My Work</a>
            <a href="contact.html" class="btn btn-secondary">Get In Touch</a>
          </div>
        </div>
        <div class="hero-image animate-on-load">
          <img
            src="./assets/image/fitsum-tafese.jpg"
            alt="Fitsum Tafese - Web Developer"
          />
        </div>
      </div>
    </section>

    <!-- <section class="about-section" id="about">
      <div class="container">
        <div class="about-content">
          <div class="section-header">
            <span class="section-subtitle">About Me</span>
            <h2 class="section-title">Turning Ideas Into Digital Reality</h2>
          </div>

          <div class="about-text">
            <p class="lead">
              I'm a full-stack developer passionate about creating elegant
              solutions to complex problems.
            </p>

            <p>
              With expertise in both frontend and backend technologies, I build
              responsive web applications that deliver exceptional user
              experiences. My approach combines clean code, modern design
              principles, and performance optimization.
            </p>
          </div>

          <div class="key-points">
            <div class="key-point">
              <div class="icon-box">
                <i class="fas fa-code"></i>
              </div>
              <div>
                <h3>Clean Code</h3>
                <p>
                  Writing maintainable, well-structured code that stands the
                  test of time.
                </p>
              </div>
            </div>

            <div class="key-point">
              <div class="icon-box">
                <i class="fas fa-rocket"></i>
              </div>
              <div>
                <h3>Fast Delivery</h3>
                <p>
                  Efficient development process with timely delivery of
                  high-quality solutions.
                </p>
              </div>
            </div>

            <div class="key-point">
              <div class="icon-box">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div>
                <h3>Responsive Design</h3>
                <p>
                  Creating seamless experiences across all devices and screen
                  sizes.
                </p>
              </div>
            </div>
          </div>

          <div class="cta-container">
            <a href="#contact" class="btn btn-primary">Get In Touch</a>
            <a href="#projects" class="btn btn-outline">View My Work</a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Featured Projects Section -->
    <section class="featured-projects">
      <div class="container">
        <div class="section-header">
          <h2>Featured Projects</h2>
          <p>Here are some of my recent works</p>
        </div>
        <div class="projects-grid">
          <!-- Project 1 -->
          <div class="project-card">
            <div class="project-image">
              <img
                src="assets/image/project/hoobank.png"
                alt="Hoobank Website"
              />
            </div>
            <div class="project-info">
              <h3>Hoobank</h3>
              <p>
                A fully responsive Next Generation Getstarted Payment
                Method.With the right credit card, you can improve your
                financial life by building credit, earning rewards and saving
                money. But with hundreds of credit cards on the market.
              </p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>React</span>
              </div>
              <div class="project-links">
                <a
                  href="hoobank.fitsum.net"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="project-card">
            <div class="project-image">
              <img
                src="./assets/image/project/MindSet-Consultancy.png"
                alt="e-learning Platform"
              />
            </div>
            <div class="project-info">
              <h3>Mindset-Consultancy e-learning</h3>
              <p>
                The Mindset Consultancy Website is a visually appealing and
                user-friendly platform designed to provide comprehensive
                information about the consultancy’s services, certifications,
                and courses.
              </p>
              <div class="project-tech">
                <span>JavaScript</span>
                <span>Next js </span>
                <span>Tailwind</span>
              </div>
              <div class="project-links">
                <a
                  href="https://mindset-consultance.vercel.app/"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="project-card">
            <div class="project-image">
              <img
                src="assets/image/project/rejuvaglows-beauty.png"
                alt="rejuvaglows-beauty website"
              />
            </div>
            <div class="project-info">
              <h3>Rejuvaglows-beauty-Salon</h3>
              <p>
                A modern, responsive beauty salon website designed to showcase
                services, manage appointments, and enhance customer engagement
                through an elegant user interface.
              </p>
              <div class="project-tech">
                <span>JavaScript</span>
                <span>Next js </span>
                <span>Tailwind</span>
                <span>Node Js</span>
                <span>Express</span>
                <span>Mysql</span>
                <span>Prisma</span>
              </div>
              <div class="project-links">
                <a
                  href="https://www.rejuvaglowsbeauty.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="section-footer">
          <a href="projects.html" class="btn btn-primary">View All Projects</a>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="skills">
      <div class="container">
        <div class="header">
          <div class="expertise-badge">MY EXPERTISE</div>
          <h1 class="title">Technical Skills</h1>
        </div>

        <div class="skills-grid">
          <!-- Frontend Development -->
          <div class="skill-category">
            <div class="category-blob"></div>
            <div class="category-header">
              <div class="icon-container">
                <i class="fas fa-code"></i>
              </div>
              <h2>Frontend Development</h2>
            </div>
            <div class="skills-list">
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-html5"></i>
                </div>
                <span>HTML</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-css3-alt"></i>
                </div>
                <span>CSS</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-js"></i>
                </div>
                <span>JavaScript</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-react"></i>
                </div>
                <span>React</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-react"></i>
                </div>
                <span>Next.js</span>
              </div>
            </div>
          </div>

          <!-- Backend Development -->
          <div class="skill-category">
            <div class="category-blob"></div>
            <div class="category-header">
              <div class="icon-container">
                <i class="fas fa-server"></i>
              </div>
              <h2>Backend Development</h2>
            </div>
            <div class="skills-list">
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-node-js"></i>
                </div>
                <span>Node.js</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fab fa-node-js"></i>
                </div>
                <span>Express</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fas fa-database"></i>
                </div>
                <span>Prisma</span>
              </div>
            </div>
          </div>

          <!-- Database -->
          <div class="skill-category">
            <div class="category-blob"></div>
            <div class="category-header">
              <div class="icon-container">
                <i class="fas fa-database"></i>
              </div>
              <h2>Database</h2>
            </div>
            <div class="skills-list">
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fas fa-database"></i>
                </div>
                <span>MySQL</span>
              </div>
              <div class="skill-item">
                <div class="skill-icon">
                  <i class="fas fa-leaf"></i>
                </div>
                <span>MongoDB</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Tech Stack Highlights -->
        <div class="tech-stack">
          <h2 class="title">Tech Stack Highlights</h2>
          <div class="tech-grid">
            <div class="tech-item">
              <i class="fab fa-html5"></i>
              <span>HTML</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-css3-alt"></i>
              <span>CSS</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-js"></i>
              <span>JavaScript</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-react"></i>
              <span>React</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-react"></i>
              <span>Next.js</span>
            </div>
            <div class="tech-item">
              <i class="fas fa-database"></i>
              <span>MySQL</span>
            </div>
            <div class="tech-item">
              <i class="fas fa-leaf"></i>
              <span>MongoDB</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-node-js"></i>
              <span>Node.js</span>
            </div>
            <div class="tech-item">
              <i class="fab fa-node-js"></i>
              <span>Express</span>
            </div>
            <div class="tech-item">
              <i class="fas fa-database"></i>
              <span>Prisma</span>
            </div>
          </div>
        </div>

        <!-- Scroll to top button -->
        <button id="scroll-top" class="scroll-top">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
      <!-- <div class="container">
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
      </div> -->
    </section>

    <!-- Latest Blog Posts Section -->
    <section class="latest-posts">
      <div class="container">
        <div class="section-header">
          <h2>Latest Blog Posts</h2>
          <p>Thoughts, tutorials, and insights</p>
        </div>
        <div class="posts-grid">
          <!-- Blog Post 1 -->
          <div class="post-card">
            <div class="post-image">
              <img
                src="https://images.unsplash.com/photo-1546146830-2cca9512c68e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Responsive Design Principles"
              />
            </div>
            <div class="post-info">
              <div class="post-meta">
                <span class="post-date"
                  ><i class="far fa-calendar-alt"></i> June 15, 2023</span
                >
                <span class="post-category"
                  ><i class="fas fa-tag"></i> Web Design</span
                >
              </div>
              <h3>
                <a href="blog-post.html"
                  >Responsive Design Principles Every Developer Should Know</a
                >
              </h3>
              <p>
                Learn the key principles of responsive design that will make
                your websites look great on any device.
              </p>
              <a href="blog-post.html" class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <!-- Blog Post 2 -->
          <div class="post-card">
            <div class="post-image">
              <img
                src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="JavaScript Tips"
              />
            </div>
            <div class="post-info">
              <div class="post-meta">
                <span class="post-date"
                  ><i class="far fa-calendar-alt"></i> May 28, 2023</span
                >
                <span class="post-category"
                  ><i class="fas fa-tag"></i> JavaScript</span
                >
              </div>
              <h3>
                <a href="blog-post.html"
                  >10 JavaScript Tips to Improve Your Code</a
                >
              </h3>
              <p>
                Discover practical JavaScript tips and tricks that will help you
                write cleaner, more efficient code.
              </p>
              <a href="blog-post.html" class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <!-- Blog Post 3 -->
          <div class="post-card">
            <div class="post-image">
              <img
                src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="PHP Security"
              />
            </div>
            <div class="post-info">
              <div class="post-meta">
                <span class="post-date"
                  ><i class="far fa-calendar-alt"></i> May 10, 2023</span
                >
                <span class="post-category"
                  ><i class="fas fa-tag"></i> PHP</span
                >
              </div>
              <h3>
                <a href="blog-post.html">Essential PHP Security Practices</a>
              </h3>
              <p>
                Learn how to protect your PHP applications from common security
                vulnerabilities and attacks.
              </p>
              <a href="blog-post.html" class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="section-footer">
          <a href="blog-post.html" class="btn btn-primary">View All Posts</a>
        </div>
      </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta">
      <div class="container">
        <div class="cta-content">
          <h2>Let's Work Together</h2>
          <p>
            Have a project in mind? I'd love to hear about it. Get in touch and
            let's create something amazing together.
          </p>
          <a href="contact.html" class="btn btn-light">Contact Me</a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <a href="index.html">Fitsum <span>Tafese</span></a>
            <p>Full-Stack Web Developer</p>
          </div>
          <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="footer-social">
            <h3>Connect With Me</h3>
            <div class="social-icons">
              <a href="/https://github.com/fitse01" aria-label="GitHub"
                ><i class="fab fa-github"></i
              ></a>
              <a href="/https://www.linkedin.com/feed/" aria-label="LinkedIn"
                ><i class="fab fa-linkedin"></i
              ></a>
              <a href="#" aria-label="Twitter"
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                href="/https://www.instagram.com/fitsum_tafese/"
                aria-label="Instagram"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="footer-contact">
            <h3>Contact Info</h3>
            <p><i class="fas fa-envelope"></i> fitsumtafese01@gmail.com</p>
            <p><i class="fas fa-phone"></i> +251 901725663</p>
            <p><i class="fas fa-map-marker-alt"></i> Adama ASTU</p>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2025 Fitsum Tafese. All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <!-- Project Modals -->
    <div class="modal" id="project1Modal">
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2>E-commerce Website</h2>
        <div class="modal-image">
          <img
            src="assets/images/project1-large.jpg"
            alt="E-commerce Website"
          />
        </div>
        <div class="modal-description">
          <p>
            A fully responsive e-commerce platform built from scratch using
            HTML, CSS, JavaScript,Next js and PHP. This project features product
            filtering, shopping cart functionality, user authentication, and a
            custom admin panel for product management.
          </p>
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
            <span>Next js</span>
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

    <div class="modal" id="project2Modal">
      <!-- Similar structure to project1Modal -->
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2>Blog Platform</h2>
        <!-- Content for project 2 -->
      </div>
    </div>

    <div class="modal" id="project3Modal">
      <!-- Similar structure to project1Modal -->
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2>Task Manager App</h2>
        <!-- Content for project 3 -->
      </div>
    </div>

    <div class="modal-overlay"></div>

    <!-- JavaScript -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/modal.js"></script>
  </body>
</html>
