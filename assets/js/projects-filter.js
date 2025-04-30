document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const projectCards = document.querySelectorAll(".project-card");

  if (filterButtons.length > 0 && projectCards.length > 0) {
    // Add click event to filter buttons
    filterButtons.forEach((button) => {
      button.addEventListener("click", function () {
        // Remove active class from all buttons
        filterButtons.forEach((btn) => {
          btn.classList.remove("active");
        });

        // Add active class to clicked button
        this.classList.add("active");

        // Get filter value
        const filterValue = this.getAttribute("data-filter");

        // Filter projects
        filterProjects(filterValue);
      });
    });

    // Filter projects function
    function filterProjects(category) {
      projectCards.forEach((card) => {
        // Get card category
        const cardCategory = card.getAttribute("data-category");

        // Show/hide card based on filter
        if (category === "all" || category === cardCategory) {
          card.style.display = "block";

          // Add animation
          card.classList.add("fade-in");
          setTimeout(() => {
            card.classList.remove("fade-in");
          }, 500);
        } else {
          card.style.display = "none";
        }
      });
    }

    // Add CSS for animation
    const style = document.createElement("style");
    style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            .fade-in {
                animation: fadeIn 0.5s ease forwards;
            }
        `;
    document.head.appendChild(style);
  }
});
