document.addEventListener('DOMContentLoaded', function() {
    // Only run this on the homepage
    if (!window.projectsData || !window.projectsData.isIndex) return;

    const projectsGrid = document.querySelector('.projects-grid');
    const projectCards = document.querySelectorAll('.projects-card');

    function updateVisibleProjects() {
        const minCardWidth = 300; // Minimum width for each project card (should match CSS)
        const availableWidth = projectsGrid.clientWidth;
        // Calculate columns based on available width and min card width
        const columns = Math.max(1, Math.floor(availableWidth / minCardWidth));
        // Limit is the number of columns, or total projects if fewer
        let newLimit = Math.min(columns, window.projectsData.allProjects.length);

        // Show/hide projects based on the new limit
        projectCards.forEach((card, index) => {
            if (index < newLimit) {
                card.style.removeProperty('display'); // Remove inline display override
            } else {
                card.style.display = 'none';
            }
        });

        // Set grid columns to match
        projectsGrid.style.gridTemplateColumns = `repeat(${columns}, minmax(${minCardWidth}px, 1fr))`;
    }

    // Initial update
    updateVisibleProjects();

    // Update on window resize with debounce
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            updateVisibleProjects();
            // Re-run filter in case it was active
            if (typeof filterProjects === 'function') {
                const activeFilter = document.querySelector('.projects-filter-btn.active');
                if (activeFilter) {
                    filterProjects(activeFilter.getAttribute('data-filter'));
                }
            }
        }, 200);
    });

    // Make sure filtering still works with our dynamic display
    if (typeof filterProjects === 'function') {
        const originalFilterProjects = filterProjects;
        window.filterProjects = function(filter) {
            originalFilterProjects(filter);
            updateVisibleProjects();
        };
    }
});