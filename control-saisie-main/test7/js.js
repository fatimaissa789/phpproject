const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const role = document.getElementById('role');

const password = document.getElementById('password');
const password2 = document.getElementById('password2');






form.addEventListener('submit', (e) => {
	e.preventDefault();
    // refresh()
	validateInputs();



    




});
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!email.value.match(re)){
        return setError()
      }
      
    // return re.test(String(email).toLowerCase());
}
const validateInputs = () => {
    const usernameValue = username.value.trim();
    const nameValue = name.value.trim();
    // const emailValue = email.value.trim();
    const roleValue = role.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'Nom est vide');
    } else {
        setSuccess(username);
    }
    if(nameValue === '') {
        setError(name, 'prenom est vide');
    } else {
        setSuccess(name);
    }
    if(roleValue === '') {
        setError(role, 'prenom est vide');
    } else {
        setSuccess(role);
    }
    // if(emailValue === '') {
    //     setError(email, 'Mail est vide');
    // } else if (!isValidEmail(emailValue)) {
    //     setError(email, 'Ecrire correctement mail');
    // } else {
    //     setSuccess(email);
    // }
    
    

    if(passwordValue === '') {
        setError(password, 'mot de passe obligatoire');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'mot de passe doit contenir 8 caracteres')
    } else {
        setSuccess(password);
    }
    if(password2Value === '') {
        setError(password2, 'Confirmer mot de passe');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Mot de passe non-identique");
    } else {
        setSuccess(password2);
    }


};
// const refresh =() =>{
//         window.location.reload(false); 
// }






