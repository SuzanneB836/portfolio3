document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll("[data-aos]");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("aos-animate");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  cards.forEach(card => {
    observer.observe(card);
  });
});
