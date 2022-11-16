const email = document.getElementById('email');
const password = document.getElementById('password');


var emailBool = false;

var passwordBool = false;



form.addEventListener('submit', e => {
	if (!checkInputs()) {
		e.preventDefault();
	}
});


function checkInputs() {
	// trim to remove the whitespaces
	
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();

	
	
	if(emailValue === '') {
		setErrorFor(email, 'champ vide');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Email non valide ');
	} else {
        emailBool = true
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'champ vide');
	} else {
        passwordBool = true
		setSuccessFor(password);
	}
	
	
	if(emailBool == true && passwordBool == true ){
       return true;
    } else {
		return false;
	}
	
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
    // if(usernameBool == true && nomBool == true && roleBool == true && emailBool == true && passwordBool == true && password2Bool == true){
    //     // alert("valide")
    //     // window.location.href="login.php"
    // }
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
