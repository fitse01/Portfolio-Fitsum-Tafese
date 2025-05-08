<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Fitsum Tafese</title>
    <meta
      name="description"
      content="Get in touch with Fitsum Tafese, a full-stack web developer for your next web project."
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
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
          <a href="index.html">Fitsum <span>Tafese</span></a>
        </div>
        <nav class="main-nav">
          <button class="menu-toggle" aria-label="Toggle menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
          <ul class="nav-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="projects.html">Projects</a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="contact.html" class="active">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
      <div class="container">
        <h1>Contact Me</h1>
        <div class="breadcrumbs">
          <a href="index.html">Home</a> / <span>Contact</span>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
      <div class="container">
        <div class="contact-container">
          <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>
              I'm always open to discussing new projects, creative ideas or
              opportunities to be part of your vision.
            </p>

            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="info-content">
                <h3>Location</h3>
                <p>Adama ASTU</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="info-content">
                <h3>Email</h3>
                <p>fitsumtafese01@gmail.com</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="info-content">
                <h3>Phone</h3>
                <p>+251 901725663</p>
              </div>
            </div>

            <div class="social-links">
              <h3>Follow Me</h3>
              <div class="social-icons">
                <a href="#" aria-label="GitHub"
                  ><i class="fab fa-github"></i
                ></a>
                <a href="#" aria-label="LinkedIn"
                  ><i class="fab fa-linkedin"></i
                ></a>
                <a href="#" aria-label="Twitter"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a href="#" aria-label="Instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="contact-form-container">
            <h2>Send Me a Message</h2>
            <form id="contact-form" action="process-contact.php" method="post">
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required />
              </div>

              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required />
              </div>

              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required />
              </div>

              <div class="form-group">
                <label for="message">Your Message</label>
                <textarea
                  id="message"
                  name="message"
                  rows="5"
                  required
                ></textarea>
              </div>

              <button type="submit" class="btn btn-primary">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
      <div class="container">
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9116.92917818663!2d39.28713087455187!3d8.56539245337966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b1fe4c294e6cb%3A0x6b86d6a89f24215c!2sAdama%20Science%20And%20Technology%20University%20-%20ASTU!5e1!3m2!1sen!2set!4v1746047910237!5m2!1sen!2set"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
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
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/validation.js"></script>
  </body>
</html>
