<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="header">
    <div class="titre"> Connexion</div>
    </div>
    <form id="form" class="form" action="inscription.php">
      <!-- <div class="form-control">
        <label for="username">Nom</label>
        <input type="text" placeholder="florinpop17" id="username" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div> -->
      <!-- <div class="form-control">
        <label for="username">Prenom</label>
        <input type="text" placeholder="diop" id="nom" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div> -->

      <div class="form-control">
        <label for="mail">Email</label>
        <input type="email" placeholder="a@florin-pop.com" name="email" id="email" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <!-- <div class="form-control">
        <label for="username">Role</label>
        <input type="text" placeholder="admin ou user" id="role" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div> -->
      <div class="form-control">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <!-- <div class="form-control">
        <label for="username">Password check</label>
        <input type="password" placeholder="Password two" id="password2"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div> -->
      <button>Submit</button>
    </form>
  </div>
  <script>
    const form = document.getElementById('form');
// const username = document.getElementById('username');
// const nom = document.getElementById('nom');
// const role = document.getElementById('role');
const email = document.getElementById('email');
const password = document.getElementById('password');
// const password2 = document.getElementById('password2');


// var usernameBool= false;

// var nomBool= false;

// var roleBool= false;
var emailBool = false;

var passwordBool = false;
// var password2Bool=false;

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	// const usernameValue = username.value.trim();
    // const nomValue = nom.value.trim();
    // const roleValue = role.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	// const password2Value = password2.value.trim();
	
	// if(usernameValue === '') {
	// 	setErrorFor(username, 'Username cannot be blank');
	// } else {
    //     usernameBool=true
	// 	setSuccessFor(username);
	// }
    // if(nomValue === '') {
	// 	setErrorFor(nom, 'nom cannot be blank');
	// } else {
    //     nomBool=true
	// 	setSuccessFor(nom);
	// }
	// if(roleValue === '') {
	// 	setErrorFor(role, 'role cannot be blank');
	// } else {
    //     roleBool=true
	// 	setSuccessFor(role);
	// }
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
        emailBool = true
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
        passwordBool = true
		setSuccessFor(password);
	}
	
	// if(password2Value === '') {
	// 	setErrorFor(password2, 'Password2 cannot be blank');
	// } else if(passwordValue !== password2Value) {
	// 	setErrorFor(password2, 'Passwords does not match');
	// } else{
    //     password2Bool = true
	// 	setSuccessFor(password2);
	// }
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
    if(emailBool === true && passwordBool === true){
        alert("valide")
        window.location.href="inscription.php"
    }
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}



  </script>
</body>
</html>