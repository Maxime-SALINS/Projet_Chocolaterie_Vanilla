//Pointing input and form :
const userName = document.querySelector("#name");
const userFirstname = document.querySelector("#firstname");
const userPhonenumber = document.querySelector("#phone");
const userEmail = document.querySelector ("#email");
const userSubject = document.querySelector("#subject");
const userMessage = document.querySelector("#message");
const form = document.querySelector('#formContact');

//Validation variable
let nameValid = false;
let firstnameValid = false;
let phonenumberValid = false;
let emailValid = false;
let subjectValid = false;
let messageValid = false;

//Set Regex
const UserRegex = /^[a-zA-Z-]{3,23}$/;
const EmailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/;
const PhoneNumberRegex = /^\+(?:\d{1,3})?\d{10}$/;
const SujetRegex = /^[^<>{}$]{3,200}$/;
const MessageRegex = /^[^<>{}$]{24,}$/;

//Set function addClass
function addClass(input , regex , value) {
    // console.log(arrayCompare.test(input.value));

    if (regex.test(value) === false) {

        //if value is not correct, we add class "is-invalid" on input
        input.classList.add("is-invalid");
         //And we remove the class "is-valid"
        input.classList.remove("is-valid");

    } else {

        //if value is correct, we add class "is-valid" on input
        input.classList.add("is-valid");
        //And we remove the class "is-invalid"
        input.classList.remove("is-invalid");
    }
};

//Set event listener on input
userName.addEventListener("input", (e)=> {
    addClass(userName, UserRegex, e.target.value);
    if (userName.classList.contains("is-valid")) {
        nameValid = true;
    } else {
        nameValid = false;
    }
});

userFirstname.addEventListener("input", (e)=> {
    addClass(userFirstname, UserRegex, e.target.value);
    if (userFirstname.classList.contains("is-valid")) {
        firstnameValid = true;
    } else {
        firstnameValid = false;
    }
});

userPhonenumber.addEventListener("input", (e)=> {
    
    let tel= e.target.value;
    tel = tel.replace(/\s/g , '')
    tel = tel.replace(/^0/, '+33');

    addClass(userPhonenumber, PhoneNumberRegex, tel);
    if (userPhonenumber.classList.contains("is-valid")) {
        phonenumberValid = true;
    } else {
        phonenumberValid = false;
    }
});

userEmail.addEventListener("input", (e)=> {
    addClass(userEmail, EmailRegex,  e.target.value);
    if (userEmail.classList.contains("is-valid")) {
        emailValid = true;
    } else {
        emailValid = false;
    }
});

userSubject.addEventListener("input", (e)=> {
    addClass(userSubject, SujetRegex, e.target.value);
    if (userSubject.classList.contains("is-valid")) {
        subjectValid = true;
    } else {
        subjectValid = false;
    }
});

userMessage.addEventListener("input", (e)=> {
    addClass(userMessage, MessageRegex, e.target.value);
    if (userMessage.classList.contains("is-valid")) {
        messageValid = true;
    } else {
        messageValid = false;
    }
});


//Set listener on event submit
form.addEventListener("submit", (e)=>{
    //Stop default sumbit
    e.preventDefault();

    //Chech if all value is correct
    if (nameValid && firstnameValid && phonenumberValid && emailValid && subjectValid && messageValid) {

        //Stock the value on variable
        let name = userName.value;
        let prenom = userFirstname.value;
        let phone = userPhonenumber.value;
        let email = userEmail.value;
        let sujet = userSubject.value;
        let discribe = userMessage.value;
        
        //Stock all variable on object infoContact
        let infoContact = {
            name : name,
            prenom : prenom,
            phone : phone,
            email : email,
            sujet : sujet,
            discribe : discribe,
        };

        // Send Email
        Email.send({
            SecureToken : "a2052279-6489-4346-927f-74fd73b787dd",
            To : "maxime.salins@gmail.com",
            From : "maxime.salins@gmail.com",
            Subject : infoContact.sujet,
            Body : "Nom: " + infoContact.name + " ,prenom: " + infoContact.prenom + " ,tel: " + infoContact.phone + " ,email: " + infoContact.email + " ,message: " + infoContact.discribe
        }).then(
            message => alert(message)
        );
    } else {
        //Sinon le programme lance une alert pour demander à l'utilisateur de rentrer correctement les champs du formulaire 
        alert ("Tout les champs ne sont pas rentrés ou ne sont pas valide, mercie de rentrer correctement les champs du formulaire");
    }
});