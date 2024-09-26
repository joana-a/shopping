document.getElementById('registerForm').addEventListener('submit', function(event) {
    var valid = true; 

    // Validate email
    var email = document.querySelector('input[name="email"]').value;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@ashesi\.edu\.gh$/;
    if (!emailRegex.test(email)) {
        alert('Please use a valid Ashesi email.');
        valid = false; // 
    }

    // Validate phone number
    var phone = document.querySelector('input[name="contact"]').value;
    var phoneRegex = /^\+[1-9]\d{1,14}$/; 
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number starting with your country code.');
        valid = false; 
    }

    
    if (!valid) {
        event.preventDefault();
    }
});
