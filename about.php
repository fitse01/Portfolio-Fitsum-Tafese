<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me | Fitsum Tafese</title>
    <meta
      name="description"
      content="Portfolio website of Fitsum Tafese, a full-stack web developer specializing in HTML, CSS, JavaScript,  PHP , next js , react , node , express, mysql, mongodb , prisma  ."
    />
    <link rel="stylesheet" href="assets/css/style.css" />
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="active">About</a></li>
            <li><a href="projects.php">Projects</a></li>
            <!-- <li><a href="blog.php">Blog</a></li> -->
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
      <div class="container">
        <h1>About Me</h1>
        <div class="breadcrumbs">
          <a href="index.html">Home</a> / <span>About</span>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
      <div class="container">
        <div class="about-content">
          <div class="about-image">
            <img
              src="./assets/image/fitsum-tafese.jpg"
              alt="Fitsum Tafese - Web Developer"
            />
          </div>
          <div class="about-text">
            <h2>Hi, I'm Fitsum Tafese</h2>
            <h3>Full-Stack Web Developer based in Adama Ethiopia</h3>
            <p>
              I'm a passionate web developer with over 2 and a half years of
              experience creating dynamic, responsive websites and web
              applications. My journey in web development began when I built my
              first HTML page when i was 1st year student at ASTU , and I've
              been hooked ever since.
            </p>
            <p>
              I specialize in building clean, efficient, and user-friendly
              websites that not only look great but also perform exceptionally
              well. My approach combines technical expertise with creative
              problem-solving to deliver solutions that exceed client
              expectations.
            </p>
            <p>
              When I'm not coding, you can find me hiking in the mountains,
              experimenting with new recipes in the kitchen, or contributing to
              open-source projects.
            </p>
            <div class="about-details">
              <div class="detail-item">
                <span class="detail-label">Name:</span>
                <span class="detail-value">Fitsum Tafese</span>
              </div>
              <div class="detail-item">
                <span class="detail-label">Email:</span>
                <span class="detail-value">fitsumtafese01@gmail.com</span>
              </div>
              <div class="detail-item">
                <span class="detail-label">Phone:</span>
                <span class="detail-value">+251 901725663</span>
              </div>
              <div class="detail-item">
                <span class="detail-label">Location:</span>
                <span class="detail-value">Adama</span>
              </div>
            </div>
            <div class="about-buttons">
              <a
                href="assets/files/fitsum-tafese-resume.pdf"
                class="btn btn-primary"
                download
                >Download Resume</a
              >
              <a href="contact.html" class="btn btn-secondary">Get In Touch</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section">
      <div class="container">
        <div class="section-header">
          <h2>Experience & Education</h2>
          <p>My professional journey</p>
        </div>
        <div class="timeline">
          <!-- Work Experience -->
          <div class="timeline-section">
            <h3>Work Experience</h3>
            <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-date">2023 - Present</div>
              <div class="timeline-content">
                <h4>Senior Web Developer</h4>
                <h5>Evangadi Tech.</h5>
                <p>
                  Lead developer for client projects, managing a team of 3
                  junior developers. Implemented modern development workflows
                  and improved project delivery time by 30%.
                </p>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-date">2024 - 2025</div>
              <div class="timeline-content">
                <h4>Web Developer</h4>
                <h5>Ozon Technology</h5>
                <p>
                  Developed responsive websites and web applications for various
                  clients. Specialized in e-commerce solutions and content
                  management systems.
                </p>
              </div>
            </div>
          </div>

          <!-- Education -->
          <div class="timeline-section">
            <h3>Education</h3>
            <!-- <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-date">2014 - 2016</div>
              <div class="timeline-content">
                <h4>Master's in Computer Science</h4>
                <h5>University of California, Berkeley</h5>
                <p>
                  Specialized in Web Technologies and Software Engineering.
                  Graduated with honors.
                </p>
              </div>
            </div> -->
            <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-date">2010 - 2014</div>
              <div class="timeline-content">
                <h4>Bachelor's in Computer Science and Engineering</h4>
                <h5>Adama Science and Technology University</h5>
                <p>
                  Focused on programming fundamentals, data structures, and web
                  development. Active member of the Web Development Club.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
      <div class="container">
        <div class="section-header">
          <h2>Services I Offer</h2>
          <p>How I can help you</p>
        </div>
        <div class="services-grid">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3>Web Development</h3>
            <p>
              Custom website development with clean, efficient code that follows
              best practices and modern standards.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Responsive Design</h3>
            <p>
              Creating websites that look and function perfectly on all devices,
              from desktops to smartphones.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <h3>E-commerce Solutions</h3>
            <p>
              Building online stores with secure payment processing, inventory
              management, and user-friendly interfaces.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-server"></i>
            </div>
            <h3>Back-End Development</h3>
            <p>
              Developing robust server-side applications, APIs, and database
              solutions to power your website.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-search"></i>
            </div>
            <h3>SEO Optimization</h3>
            <p>
              Improving your website's visibility in search engines to attract
              more organic traffic.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-code-branch"></i>
            </div>
            <h3>Website Maintenance</h3>
            <p>
              Keeping your website up-to-date, secure, and running smoothly with
              regular maintenance and updates.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
      <div class="container">
        <div class="section-header">
          <h2>Client Testimonials</h2>
          <p>What people say about my work</p>
        </div>
        <div class="testimonials-slider">
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>
                "Fitsum is an exceptional developer who delivered our e-commerce
                website ahead of schedule and exceeded all our expectations. His
                attention to detail and problem-solving skills are impressive."
              </p>
            </div>
            <div class="testimonial-author">
              <img src="assets/images/client1.jpg" alt="Kiya Kebe" />
              <div class="author-info">
                <h4>Kiya Kebe</h4>
                <p>CSEC ASTU president</p>
              </div>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>
                "Working with Fitsum was a pleasure. He understood our
                requirements perfectly and created a website that perfectly
                represents our brand. His technical skills and communication are
                top-notch."
              </p>
            </div>
            <div class="testimonial-author">
              <img src="assets/images/client2.jpg" alt="henok Assefa" />
              <div class="author-info">
                <h4>Henok Assefa</h4>
                <p>Software developer</p>
              </div>
            </div>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-content">
              <p>
                "Fitsum transformed our outdated website into a modern,
                user-friendly platform that has significantly increased our
                conversion rates. His expertise in both design and development
                is rare and valuable."
              </p>
            </div>
            <div class="testimonial-author">
              <img src="assets/images/client3.jpg" alt="Girum" />
              <div class="author-info">
                <h4>Girum</h4>
                <p>CEO Synnertechtechnology</p>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial-controls">
          <button class="prev-testimonial" aria-label="Previous testimonial">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="testimonial-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
          <button class="next-testimonial" aria-label="Next testimonial">
            <i class="fas fa-chevron-right"></i>
          </button>
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

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
