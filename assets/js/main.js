// Main JavaScript file for the portfolio website
// This file contains all the JavaScript code for the website, including

document.addEventListener("DOMContentLoaded", function () {
  // Mobile Menu Toggle
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.querySelector(".nav-menu");

  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", function () {
      menuToggle.classList.toggle("active");
      navMenu.classList.toggle("active");
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (event) {
      if (
        !event.target.closest(".main-nav") &&
        navMenu.classList.contains("active")
      ) {
        menuToggle.classList.remove("active");
        navMenu.classList.remove("active");
      }
    });
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");

      if (targetId === "#") return;

      e.preventDefault();

      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        // Close mobile menu if open
        if (menuToggle && navMenu && navMenu.classList.contains("active")) {
          menuToggle.classList.remove("active");
          navMenu.classList.remove("active");
        }

        // Scroll to target
        window.scrollTo({
          top: targetElement.offsetTop - 80, // Adjust for header height
          behavior: "smooth",
        });
      }
    });
  });

  // Animate skill bars on scroll
  const skillBars = document.querySelectorAll(".skill-level");

  if (skillBars.length > 0) {
    const animateSkills = () => {
      skillBars.forEach((bar) => {
        const barPosition = bar.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (barPosition < screenPosition) {
          const width = bar.getAttribute("style").match(/width: (\d+)%/)[1];
          bar.style.width = "0%";
          setTimeout(() => {
            bar.style.width = width + "%";
          }, 100);
        }
      });
    };

    // Initial check
    animateSkills();

    // Check on scroll
    window.addEventListener("scroll", animateSkills);
  }

  // Testimonial Slider
  const testimonialSlider = document.querySelector(".testimonials-slider");
  const testimonialItems = document.querySelectorAll(".testimonial-item");
  const testimonialDots = document.querySelectorAll(".testimonial-dots .dot");
  const prevButton = document.querySelector(".prev-testimonial");
  const nextButton = document.querySelector(".next-testimonial");

  if (testimonialSlider && testimonialItems.length > 0) {
    let currentIndex = 0;

    // Hide all testimonials except the first one
    testimonialItems.forEach((item, index) => {
      if (index !== 0) {
        item.style.display = "none";
      }
    });

    // Function to show testimonial at specific index
    const showTestimonial = (index) => {
      testimonialItems.forEach((item) => {
        item.style.display = "none";
      });

      testimonialItems[index].style.display = "block";

      // Update dots
      testimonialDots.forEach((dot) => {
        dot.classList.remove("active");
      });

      testimonialDots[index].classList.add("active");

      currentIndex = index;
    };

    // Event listeners for dots
    testimonialDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        showTestimonial(index);
      });
    });

    // Event listeners for prev/next buttons
    if (prevButton && nextButton) {
      prevButton.addEventListener("click", () => {
        let newIndex = currentIndex - 1;
        if (newIndex < 0) {
          newIndex = testimonialItems.length - 1;
        }
        showTestimonial(newIndex);
      });

      nextButton.addEventListener("click", () => {
        let newIndex = currentIndex + 1;
        if (newIndex >= testimonialItems.length) {
          newIndex = 0;
        }
        showTestimonial(newIndex);
      });
    }

    // Auto rotate testimonials
    setInterval(() => {
      let newIndex = currentIndex + 1;
      if (newIndex >= testimonialItems.length) {
        newIndex = 0;
      }
      showTestimonial(newIndex);
    }, 5000);
  }

  // Add active class to current nav item based on page
  const currentPage = window.location.pathname.split("/").pop();
  const navLinks = document.querySelectorAll(".nav-menu a");

  navLinks.forEach((link) => {
    const linkPage = link.getAttribute("href");

    if (
      currentPage === linkPage ||
      (currentPage === "" && linkPage === "index.html") ||
      (currentPage === "blog-post.html" && linkPage === "blog.html")
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  // Fixed header on scroll
  const header = document.querySelector(".site-header");

  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        header.style.padding = "1rem 0";
        header.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
      } else {
        header.style.padding = "1.5rem 0";
        header.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
      }
    });
  }
});
