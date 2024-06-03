// Select button on DOM
const btnName = document.getElementById('btn-name');
const btnEmail = document.getElementById('btn-email');
const btnPassword = document.getElementById('btn-password');

// Select input
const inputName = document.getElementById('username');
const inputEmail = document.getElementById('email');
const inputPassword = document.getElementById('password');

//function Listener on button
function btnListener(button , input) {
    button.addEventListener("click", ()=>{
        input.classList.add("d-block");
        input.classList.remove("d-none");
    })
}

//Call function
btnListener(btnName, inputName);
btnListener(btnEmail, inputEmail);
btnListener(btnPassword, inputPassword);