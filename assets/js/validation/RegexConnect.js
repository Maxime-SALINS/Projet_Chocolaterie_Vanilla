//Pointing input user email and form :
const inputEmail = document.getElementById('email');
const inputPassword = document.getElementById('password');

//Validation variable
let emailValid = false;
let passwordValid = false;

//Set Regex
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
const PasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=]).{8,}$/;

//Set function addClass
function addClass(input , regex , value) {

    if (regex.test(value) === false) {

        //if value is not correct, we add class "is-invalid" on input email
        input.classList.add("is-invalid");

        //And we remove the class "is-valid"
        input.classList.remove("is-valid");

    } else {

        //if value is correct, we add class "is-valid" on input email
        input.classList.add("is-valid");

        //And we remove the class "is-invalid"
        input.classList.remove("is-invalid");
    }
}

//Set event listener on input
inputEmail.addEventListener("input", (e)=> {
    addClass(inputEmail, EmailRegex,  e.target.value);
    if (inputEmail.classList.contains("is-valid")) {
        emailValid = true;
    } else {
        emailValid = false;
    }
});

inputPassword.addEventListener("input", (e)=> {
    addClass(inputPassword, EmailRegex,  e.target.value);
    if (inputPassword.classList.contains("is-valid")) {
        passwordValid = true;
    } else {
        passwordValid = false;
    }
});