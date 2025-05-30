<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects | Fitsum Tafese</title>
    <meta
      name="description"
      content="Explore Fitsum Tafese's web development projects showcasing HTML, CSS, JavaScript, and PHP skills."
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
          <a href="index.html">Fistum<span>Tafese</span></a>
        </div>
        <nav class="main-nav">
          <button class="menu-toggle" aria-label="Toggle menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
          <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="projects.php" class="active">Projects</a></li>
            <!-- <li><a href="blog.php">Blog</a></li> -->
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
      <div class="container">
        <h1>My Projects</h1>
        <div class="breadcrumbs">
          <a href="index.html">Home</a> / <span>Projects</span>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section">
      <div class="container">
        <div class="projects-filter">
          <button class="filter-btn active" data-filter="all">All</button>
          <button class="filter-btn" data-filter="web-development">
            Web Development
          </button>
          <button class="filter-btn" data-filter="e-commerce">
            company-web app
          </button>
          <button class="filter-btn" data-filter="blog">E-learning</button>
          <button class="filter-btn" data-filter="other">Other</button>
        </div>

        <div class="projects-grid">
          <!-- Project 1 -->
          <div class="project-card" data-category="e-commerce">
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
                  href="https://hoobank.fitsum.net"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="project-card" data-category="blog">
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
          <div class="project-card" data-category="web-development">
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

          <!-- Project 4 -->
          <div class="project-card" data-category="e-commerce">
            <div class="project-image">
              <img
                src="assets/image/project/synner-tech.png"
                alt="tech company "
              />
            </div>
            <div class="project-info">
              <h3>Synertech Technology PLC</h3>
              <p>
                Synertech Technology PLC: Empowering Businesses through
                Innovative IT Solutions for companies and businesses worldwide.
              </p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>React</span>
              </div>
              <div class="project-links">
                <a
                  href="https://synertechtechnology.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Project 5 -->
          <div class="project-card" data-category="web-development">
            <div class="project-image">
              <img
                src="assets/image/project/epic-lounge.png"
                alt="Portfolio Website"
              />
            </div>
            <div class="project-info">
              <h3>Epic Lounge and Restaurant</h3>
              <p>
                Epic Lounge & Restaurant offers a vibrant atmosphere where
                guests enjoy handcrafted cocktails, fine wines, and flavorful
                bites—perfect for relaxing evenings or lively nights out.
              </p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>React</span>
                <span>Next Js</span>
              </div>
              <div class="project-links">
                <a
                  href="https://epicloungeandrestaurant.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <!-- Project 6 -->
          <!-- <div class="project-card" data-category="other">
            <div class="project-image">
              <img src="assets/images/project6.jpg" alt="Weather App" />
            </div>
            <div class="project-info">
              <h3>Weather App</h3>
              <p>
                A weather application that displays current conditions and
                forecasts based on location.
              </p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>API</span>
              </div>
              <div class="project-links">
                <a href="#" class="modal-trigger" data-modal="project6Modal"
                  >View Details</a
                >
              </div>
            </div>
          </div> -->
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
            HTML, CSS, JavaScript, and PHP. This project features product
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

    <!-- Additional project modals (2-6) would follow the same structure -->

    <div class="modal-overlay"></div>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/projects-filter.js"></script>
  </body>
</html>
