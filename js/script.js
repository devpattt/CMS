// Get the form element
const registrationForm = document.getElementById('registrationForm');

// Get the success message element
const successMessage = document.getElementById('successMessage');

// Add an event listener for form submission
registrationForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Normally, you'd handle form data here (e.g., send it to the server)
    // For now, we'll just show the success message

    successMessage.style.display = 'block'; // Show the success message
});
