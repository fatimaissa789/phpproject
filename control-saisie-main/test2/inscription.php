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
    <div class="titre"> Inscription</div>
    </div>
    <form id="form" class="form" action="inscription.php">
      <div class="form-control">
        <label for="username">Nom</label>
        <input type="text" placeholder="florinpop17" id="username" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Prenom</label>
        <input type="text" placeholder="diop" id="nom" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>

      <div class="form-control">
        <label for="username">Email</label>
        <input type="email" placeholder="a@florin-pop.com" id="email" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Role</label>
        <input type="text" placeholder="admin ou user" id="role" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Password</label>
        <input type="password" placeholder="Password" id="password"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="username">Password check</label>
        <input type="password" placeholder="Password two" id="password2"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <button>Submit</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>