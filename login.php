
    <?php 
    
    include "./db/config.php";
include  "./controllers/coonnect.php";
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
         <!-- <link rel="stylesheet" href="css/style.css"> -->
        <title>Document</title>
    </head>
    <body>
    <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
    <div class="contain">

<form action="" method="post" id="form" enctype="multipart/form-data">
    <div class="header">
        <div class="titre">Inscription</div>
    </div>
    <!-- <input type="text" id="username" placeholder="Nom" class="box"name="nom">
        <small>Error message</small> -->

    <div class="corps-formulaire">
        <div class="gauche" >
            <!-- <div class="form-control">
                <label for="username">Nom</label>
                <input type="text" placeholder="florinpop17" name="nom" id="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div> -->
            <!-- <input type="text" id="nom" placeholder="Prénom" class="box" name="prenom">
        <small>Error message</small> -->
            <!-- <div class="form-control">
                <label for="username">Prenom</label>
                <input type="text" name="prenom" placeholder="diop" id="nom" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div> -->
            <!-- <input type="text" placeholder="Matricule" class="box" name="mtr"> -->
            <!-- <input type="mail" id= "email"placeholder="Email"class="box" name="mail">
        <small>Error message</small> -->
            <div class="form-control" style="text-align">
                <label for="username">Email</label>
                <input type="email" placeholder="florin@gmail.com" name="mail" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Mot de passe</label>
                <input type="password" name="mdp" placeholder="mot de passe"  name="password" id="password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>


            <!-- <input type="text" id="roles"placeholder="Role"class="box" name="role">
        <small>Error message</small> -->
            <!-- <div class="form-control">
                <input type="file" name="image" class="box" accept="image/jpg, image/png, image/jpeg">
            </div> -->


        </div>
        <!-- <div class="droite"> -->
            <!-- <input type="password" id="password2"placeholder="Confirmer Mot de passe"class= "box" name="mdp2">
         <small>Error message</small> -->
            <!-- <div class="form-control">
                <label for="username">Password Confirmer</label>
                <input type="password" name="mdp2" placeholder="Password two" id="password2" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Role</label>
                <input type="text" name="role" placeholder="admin ou user" id="role" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
        </div> -->




        <!-- <input type="password" id="password"placeholder="Mot de passe" class="box" name="mdp">
        <small>Error message</small> -->




    </div>
    <div class="pied-formulaire" align="center">
        <input type="submit" value="Se connecter" class="btn" name="submit">


    </div>
    <div class="pied-formulaire2">
        <p>Vous avez un compte?<a href="register.php"> S'inscrire</a></p>
    </div>

</div>


</form>
</div>



<script src="script_login.js"></script>
        
    </body>
    </html>
   
  </body>
  </html>