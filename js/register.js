
const form = document.getElementById('myForm');
const fnameInput = form.elements['f-name'];
const mnameInput = form.elements['m-name'];
const lnameInput = form.elements['l-name'];
const emailInput = form.elements['email'];
const usernameInput = form.elements['username'];
const addressInput = form.elements['address'];
const passwordInput = form.elements['password'];
const confirmPasswordInput = form.elements['confirm-Password'];

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

form.addEventListener('submit', function (event) {
    event.preventDefault();

    if (fnameInput.value == null) {
        alert('Please enter your name');
        return;
    }

    if (lnameInput.value == null) {
        alert('Please enter your name');
        return;
    }

    if (usernameInput.value == null) {
        alert('Please enter your Username');
        return;
    }

    if (!emailInput.value || !emailRegex.test(emailInput.value)) {
        alert('Please enter an email that is valid');
        return;
    }

    if (!passwordInput.value || !passwordRegex.test(passwordInput.value)) {
        alert('Password must be at least 8 characters and contain at least one letter and one number');
        return;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
        alert('Passwords do not match');
        return;
    }

    form.submit();
});
