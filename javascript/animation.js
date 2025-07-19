// Ripple effect for return button
document.querySelectorAll('.return a').forEach(button => {
    button.addEventListener('mouseenter', function(e) {
        const ripple = document.createElement('span');
        ripple.classList.add('ripple-effect');
        this.appendChild(ripple);
        
        // Position the ripple
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        
        // Remove ripple after animation
        setTimeout(() => {
            ripple.remove();
        }, 1000);
    });
});