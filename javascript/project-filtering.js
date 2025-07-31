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
    const filters = filter.split(',');
    projectCards.forEach(card => {
      const tags = card.getAttribute('data-tags').split(' ');
      if (
        filter === 'all' ||
        filters.some(f => tags.includes(f))
      ) {
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

      // Update URL (remove ?filter= for 'all', set for others)
      const url = new URL(window.location);
      if (filterValue === 'all') {
        url.searchParams.delete('filter');
      } else {
        url.searchParams.set('filter', filterValue);
      }
      window.history.replaceState({}, '', url);

      // Smooth scroll to top of projects
      document.querySelector('.projects-grid').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });


  // Helper to get query param
  function getQueryParam(name) {
    const url = new URL(window.location.href);
    return url.searchParams.get(name);
  }

  // Check for filter param in URL
  const urlFilter = getQueryParam('filter');
  if (urlFilter) {
    // Set active button if exists
    filterButtons.forEach(btn => {
      if (btn.getAttribute('data-filter') === urlFilter) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });
    filterProjects(urlFilter);
  } else {
    filterProjects('all');
  }

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
