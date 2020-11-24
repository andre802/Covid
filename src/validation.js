let loginBtn = document.getElementById("loginBtn");
let registerBtn = document.getElementById("registerBtn");
let email;
let password; 
const $ = function(id) {
        return document.getElementById(id);
    } 
function validateLogin() {
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    let emailRegex = /[a-z0-9]+@([a-z]+).([a-z]+)/gi;
    let passwordRegex = /(?=.*[A-Z]+)(?=.*\d)(?=.*[!@#$%^&*()_+{}|[\]\\;',./:"<>?])[A-Za-z\d!@#$%^&*()_+{}|[\]\\;',./:"<>?]{8,}$/;
    if (emailRegex.test(email) && passwordRegex.test(password)) {
        const form = $("loginForm");
        form.action = './../Login/login.php';
        form.submit();
    } 
}
function validateRegistration() {

     let emailRegex = /[a-z0-9]+@([a-z]+).([a-z]+)/gi;
     let passwordRegex = /(?=.*[A-Z]+)(?=.*\d)(?=.*[!@#$%^&*()_+{}|[\]\\;',./:"<>?])[A-Za-z\d!@#$%^&*()_+{}|[\]\\;',./:"<>?]{8,}$/;

    let firstName = $("firstName");
    let lastName = $("lastName");
    let email = $("email");
    let password = $("password");
    let age = $("age");
    let gender = $("gender");
    let race = $("race");
    let zipcode = $("zipcode");
    
    const form = $("registrationForm");
    form.method = 'POST';
    if (firstName.value != null && lastName.value != null 
        && email != null && password != null 
        && emailRegex.test(email.value) 
        && passwordRegex.test(password.value)) {
            
        form.action = './../Login/register.php';
        form.submit();
    } else {
        form.addEventListener("submit", (e) => e.preventDefault());
        if (passwordRegex.test(password.value) == false) {
            passwordSpan = $("passwordRequired");
            passwordSpan.innerText = "Password must be at least 8 characters long, contain a digit, an uppercase letter, and a symbol."
            passwordSpan.classList += ' required';
        }
    }
    // Validate zipcode
        
}
