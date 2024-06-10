// Select button on DOM
const btnName = document.getElementById('btn-name');
const btnEmail = document.getElementById('btn-email');
const btnPassword = document.getElementById('btn-password');

// Select input
const inputName = document.getElementById('username');
const inputEmail = document.getElementById('email');
const inputPassword = document.getElementById('password');

//Validation variable
let nameValid = false;
let emailValid = false;
let passwordValid = false;

//Set Regex
const NameRegex = /^[a-zA-Z-]{3,23}$/;
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
const PasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=]).{8,}$/;

//Set function addClass
function addClass(input, regex, value) {

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

function eventListener(button , input, regex, checkValue) {
    button.addEventListener("click", ()=>{
        input.classList.add("d-block");
        input.classList.remove("d-none");

        if(input.classList.contains("d-block")) {
            input.addEventListener("input", (e)=> {
                addClass(input, regex,  e.target.value);
                if (input.classList.contains("is-valid")) {
                    checkValue = true;
                } else {
                    checkValue  = false;
                }
            })
        }
    })
}

//Call function
eventListener(btnName, inputName, NameRegex, nameValid);
eventListener(btnEmail, inputEmail, EmailRegex, emailValid);
eventListener(btnPassword, inputPassword, PasswordRegex, passwordValid);