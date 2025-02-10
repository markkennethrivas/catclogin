document.addEventListener("DOMContentLoaded", function () {
    const loginPopup = document.getElementById('loginPopup');
    const btnLoginPopup = document.querySelector('.btnlogin-popup');
    const closeButtons = document.querySelectorAll('.close'); // Select all close buttons

    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signup');

    // Open the Login modal when the Login button is clicked
    if (btnLoginPopup) {
        btnLoginPopup.addEventListener('click', function () {
            loginPopup.style.display = 'flex'; // Show the login modal
        });
    }

    // Add event listeners to all close buttons to close modals
    closeButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Close any modal when the close button is clicked
            const modal = button.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
            }
        });
    });

    // Toggle between Sign Up and Sign In forms
    if (signUpButton) {
        signUpButton.addEventListener('click', function () {
            signInForm.style.display = "none"; // Hide Sign In form
            signUpForm.style.display = "block"; // Show Sign Up form
        });
    }

    if (signInButton) {
        signInButton.addEventListener('click', function () {
            signInForm.style.display = "block"; // Show Sign In form
            signUpForm.style.display = "none"; // Hide Sign Up form
        });
    }
});

