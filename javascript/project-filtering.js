/*
Project filtering

Used for:
sections-index\projects-section.php
projects.php
*/

document.addEventListener('DOMContentLoaded', function() {
  // DOM Elements
  const filterButtons = document.querySelectorAll('.projects-filter-btn');
  const projectCards = document.querySelectorAll('.projects-card');

  // Filter projects based on selection
  function filterProjects(filter) {
    projectCards.forEach(card => {
      const tags = card.getAttribute('data-tags').split(' ');

      if (filter === 'all' || tags.includes(filter)) {
        card.classList.remove('hide');
      } else {
        card.classList.add('hide');
      }
    });
  }

  // Add click event to filter buttons
  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Update active button
      filterButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      // Filter projects
      const filterValue = this.getAttribute('data-filter');
      filterProjects(filterValue);

      // Smooth scroll to top of projects
      document.querySelector('.projects-grid').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  // Initialize with all projects shown
  filterProjects('all');

  // Add animation on scroll
  const animateOnScroll = function() {
    const windowHeight = window.innerHeight;

    projectCards.forEach(card => {
      const cardPosition = card.getBoundingClientRect().top;
      const cardVisible = 150;

      if (cardPosition < windowHeight - cardVisible && !card.classList.contains('hide')) {
        card.style.opacity = "1";
        card.style.transform = "translateY(0)";
      }
    });
  };

  // Run once on load
  animateOnScroll();

  // Run on scroll
  window.addEventListener('scroll', animateOnScroll);
});
