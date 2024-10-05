document.getElementById('loginForm').addEventListener('submit', function(event) {
    var email = document.querySelector('input[name="email"]').value;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
        alert('Please use a valid email.');
        event.preventDefault();
    }
});
 