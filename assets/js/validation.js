document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      let isValid = true;

      // Get form fields
      const name = document.getElementById("name");
      const email = document.getElementById("email");
      const subject = document.getElementById("subject");
      const message = document.getElementById("message");

      // Clear previous error messages
      document.querySelectorAll(".error-message").forEach((el) => el.remove());
      document
        .querySelectorAll(".is-invalid")
        .forEach((el) => el.classList.remove("is-invalid"));

      // Validate name (required, at least 2 characters)
      if (!name.value.trim() || name.value.trim().length < 2) {
        isValid = false;
        showError(name, "Please enter your name (at least 2 characters)");
      }

      // Validate email (required, valid format)
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
        isValid = false;
        showError(email, "Please enter a valid email address");
      }

      // Validate subject (required)
      if (!subject.value.trim()) {
        isValid = false;
        showError(subject, "Please enter a subject");
      }

      // Validate message (required, at least 10 characters)
      if (!message.value.trim() || message.value.trim().length < 10) {
        isValid = false;
        showError(
          message,
          "Please enter your message (at least 10 characters)"
        );
      }

      // If form is not valid, prevent submission
      if (!isValid) {
        e.preventDefault();

        // Scroll to first error
        const firstError = document.querySelector(".is-invalid");
        if (firstError) {
          firstError.focus();
          firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      } else {
        // Show loading indicator
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner"></span> Sending...';

        // In a real implementation, you might want to use fetch API for AJAX submission
        // For this demo, we'll just simulate a delay and then allow the form to submit normally

        // Uncomment this for AJAX submission
        /*
                e.preventDefault();
                
                // Simulate AJAX request
                setTimeout(() => {
                    // Show success message
                    contactForm.innerHTML = `
                        <div class="success-message">
                            <h3>Thank You!</h3>
                            <p>Your message has been sent successfully. I'll get back to you as soon as possible.</p>
                        </div>
                    `;
                }, 1500);
                */
      }
    });

    // Real-time validation as user types
    const formInputs = contactForm.querySelectorAll("input, textarea");
    formInputs.forEach((input) => {
      input.addEventListener("blur", function () {
        validateField(this);
      });

      input.addEventListener("input", function () {
        // Remove error when user starts typing again
        if (this.classList.contains("is-invalid")) {
          this.classList.remove("is-invalid");
          const errorEl = this.parentNode.querySelector(".error-message");
          if (errorEl) errorEl.remove();
        }
      });
    });
  }

  // Helper function to show error message
  function showError(field, message) {
    field.classList.add("is-invalid");
    const errorDiv = document.createElement("div");
    errorDiv.className = "error-message";
    errorDiv.innerText = message;
    field.parentNode.appendChild(errorDiv);
  }

  // Validate individual field
  function validateField(field) {
    // Remove existing error
    const existingError = field.parentNode.querySelector(".error-message");
    if (existingError) existingError.remove();
    field.classList.remove("is-invalid");

    // Validate based on field ID
    switch (field.id) {
      case "name":
        if (!field.value.trim() || field.value.trim().length < 2) {
          showError(field, "Please enter your name (at least 2 characters)");
        }
        break;

      case "email":
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!field.value.trim() || !emailRegex.test(field.value.trim())) {
          showError(field, "Please enter a valid email address");
        }
        break;

      case "subject":
        if (!field.value.trim()) {
          showError(field, "Please enter a subject");
        }
        break;

      case "message":
        if (!field.value.trim() || field.value.trim().length < 10) {
          showError(
            field,
            "Please enter your message (at least 10 characters)"
          );
        }
        break;
    }
  }

  // Comment form validation (for blog posts)
  const commentForm = document.querySelector(".comment-form");

  if (commentForm) {
    commentForm.addEventListener("submit", function (e) {
      let isValid = true;

      // Get form fields
      const name = document.getElementById("comment-name");
      const email = document.getElementById("comment-email");
      const message = document.getElementById("comment-message");

      // Clear previous error messages
      document.querySelectorAll(".error-message").forEach((el) => el.remove());
      document
        .querySelectorAll(".is-invalid")
        .forEach((el) => el.classList.remove("is-invalid"));

      // Validate name
      if (!name.value.trim() || name.value.trim().length < 2) {
        isValid = false;
        showError(name, "Please enter your name (at least 2 characters)");
      }

      // Validate email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
        isValid = false;
        showError(email, "Please enter a valid email address");
      }

      // Validate message
      if (!message.value.trim() || message.value.trim().length < 10) {
        isValid = false;
        showError(
          message,
          "Please enter your comment (at least 10 characters)"
        );
      }

      // If form is not valid, prevent submission
      if (!isValid) {
        e.preventDefault();

        // Scroll to first error
        const firstError = document.querySelector(".is-invalid");
        if (firstError) {
          firstError.focus();
          firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      }
    });
  }
});
