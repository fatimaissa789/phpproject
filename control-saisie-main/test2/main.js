// const form = document.getElementById('form');
// const username = document.getElementById('username');
// const nom = document.getElementById('nom');
// const role = document.getElementById('role');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const password2 = document.getElementById('password2');


// var usernameBool= false;

// var nomBool= false;

// var roleBool= false;
// var emailBool = false;

// var passwordBool = false;
// var password2Bool=false;

// form.addEventListener('submit', e => {
// 	e.preventDefault();
	
// 	checkInputs();
// });

// function checkInputs() {
// 	// trim to remove the whitespaces
// 	const usernameValue = username.value.trim();
//     const nomValue = nom.value.trim();
//     const roleValue = role.value.trim();
// 	const emailValue = email.value.trim();
// 	const passwordValue = password.value.trim();
// 	const password2Value = password2.value.trim();
	
// 	if(usernameValue === '') {
// 		setErrorFor(username, 'Username cannot be blank');
// 	} else {
//         usernameBool=true
// 		setSuccessFor(username);
// 	}
//     if(nomValue === '') {
// 		setErrorFor(nom, 'nom cannot be blank');
// 	} else {
//         nomBool=true
// 		setSuccessFor(nom);
// 	}
// 	if(roleValue === '') {
// 		setErrorFor(role, 'role cannot be blank');
// 	} else {
//         roleBool=true
// 		setSuccessFor(role);
// 	}
// 	if(emailValue === '') {
// 		setErrorFor(email, 'Email cannot be blank');
// 	} else if (!isEmail(emailValue)) {
// 		setErrorFor(email, 'Not a valid email');
// 	} else {
//         emailBool = true
// 		setSuccessFor(email);
// 	}
	
// 	if(passwordValue === '') {
// 		setErrorFor(password, 'Password cannot be blank');
// 	} else {
//         passwordBool = true
// 		setSuccessFor(password);
// 	}
	
// 	if(password2Value === '') {
// 		setErrorFor(password2, 'Password2 cannot be blank');
// 	} else if(passwordValue !== password2Value) {
// 		setErrorFor(password2, 'Passwords does not match');
// 	} else{
//         password2Bool = true
// 		setSuccessFor(password2);
// 	}
// }

// function setErrorFor(input, message) {
// 	const formControl = input.parentElement;
// 	const small = formControl.querySelector('small');
// 	formControl.className = 'form-control error';
// 	small.innerText = message;
// }

// function setSuccessFor(input) {
// 	const formControl = input.parentElement;
// 	formControl.className = 'form-control success';
//     // if(usernameBool === true && nomBool === true && roleBool === true && emailBool === true && passwordBool === true && password2Bool === true){
//     //     alert("valide")
//     //     window.location.href="inscription.php"
//     // }
// }
	
// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }


const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});
// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }
function setError(input, message) {
    	const formControl = input.parentElement;
    	const small = formControl.querySelector('small');
    	formControl.className = 'form-control error';
    	small.innerText = message;
    }
    function setSuccess(input) {
        	const formControl = input.parentElement;
        	formControl.className = 'form-control success';
            // if(usernameBool === true && nomBool === true && roleBool === true && emailBool === true && passwordBool === true && password2Bool === true){
            //     alert("valide")
            //     window.location.href="inscription.php"
            // }
    }
// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
     const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }
    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

};
