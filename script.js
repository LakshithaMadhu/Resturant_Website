// Filter button active state
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        // Add filtering logic here if required
    });
});

// Example JavaScript for form handling (optional)
document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Sign up successful!');
});
