document.addEventListener("DOMContentLoaded", function () {
  // Get all elements with class 'modal-trigger'
  const modalTriggers = document.querySelectorAll(".modal-trigger");
  const modalOverlay = document.querySelector(".modal-overlay");
  const modalCloseButtons = document.querySelectorAll(".modal-close");

  // Open modal when trigger is clicked
  modalTriggers.forEach((trigger) => {
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      const modalId = this.getAttribute("data-modal");
      const modal = document.getElementById(modalId);

      if (modal) {
        // Show modal and overlay
        modal.classList.add("active");
        modalOverlay.classList.add("active");
        document.body.style.overflow = "hidden"; // Prevent scrolling

        // Load content dynamically if needed
        if (this.hasAttribute("data-project-id")) {
          const projectId = this.getAttribute("data-project-id");
          loadProjectDetails(projectId, modal);
        }
      }
    });
  });

  // Close modal when close button is clicked
  modalCloseButtons.forEach((button) => {
    button.addEventListener("click", function () {
      closeAllModals();
    });
  });

  // Close modal when clicking outside
  if (modalOverlay) {
    modalOverlay.addEventListener("click", function () {
      closeAllModals();
    });
  }

  // Close modal with ESC key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeAllModals();
    }
  });

  // Function to close all modals
  function closeAllModals() {
    const activeModals = document.querySelectorAll(".modal.active");
    activeModals.forEach((modal) => {
      modal.classList.remove("active");
    });

    if (modalOverlay) {
      modalOverlay.classList.remove("active");
    }

    document.body.style.overflow = ""; // Restore scrolling
  }

  // Function to load project details via AJAX (mock implementation)
  function loadProjectDetails(projectId, modal) {
    // In a real implementation, this would fetch data from the server
    // For this demo, we'll just simulate a loading delay

    const contentContainer = modal.querySelector(".modal-content");
    const originalContent = contentContainer.innerHTML;

    // Show loading indicator
    const loadingHTML = `
            <div class="loading-indicator">
                <div class="spinner"></div>
                <p>Loading project details...</p>
            </div>
        `;

    contentContainer.innerHTML = loadingHTML;

    // Simulate AJAX request with setTimeout
    setTimeout(() => {
      // Restore original content (in a real app, this would be replaced with fetched data)
      contentContainer.innerHTML = originalContent;
    }, 1000);
  }
});
