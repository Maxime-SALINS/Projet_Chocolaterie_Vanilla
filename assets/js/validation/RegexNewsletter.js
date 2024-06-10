//Pointing input user email and form :
const inputEmail = document.getElementById('useremail_news');

//Validation variable
let emailValid = false;

//Set Regex
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;

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