


<?php 

include "./db/config.php";
include "./model/modif.php";


?>





<link rel="stylesheet" href="css/style2.css">



      <h2>Modifier</h2>
    </div>

      <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
      <?php endif; ?>
      <form method="POST" enctype="multipart/form-data" >
        <!-- <img src="uploaded_img/<?= $fetch_profile['image'] ;?>" alt=""> -->
        <div class="corps-formulaire" style="background-color:white">
        <div class="form-control">
          <label for="nom">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" >
        </div>
        <!-- <div class="form-control">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" >
        </div> -->
        <div class="form-control">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" >
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input value="<?= $person->mail; ?>" type="text" name="mail" id="mail" >
        </div>
        <div class="form-control">
          <label for="role">Roles</label>
          <input value="<?= $person->roles; ?>" type="text" name="roles" id="roles" >
        </div>
        </div>
        <!-- <span>profile pic : </span> -->
            <!-- <input type="hidden" name="old_image" value="<?=$fetch_profile['image']; ?>"> -->
            <!-- <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png"> -->
        <!-- <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<!?= $person->email; ?>" name="email" id="email" class="form-control">
        </div> -->


        <!-- <div class="mb-3">
          <select class="form-control " value="<!?= $person->statut; ?>" type="text" name="statut" id="statut" required>
            <option>Statut</option>
            <option value="Enseignant">Enseignant </option>
            <option value="Professeur">Professeur</option>
            <option value="Surveillant">Surveillant </option>
          </select>


         
        </div> -->
        <!-- <div class="form-group">
          <label for="adresse">Adresse</label>
          <input value="<!?= $person->adresse; ?>" type="text" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
          <label for="login">Login</label>
          <input value="<!?= $person->login; ?>" type="text" name="login" id="login" class="form-control">
        </div> -->
        <!-- <div class="form-group">
          <label for="pass">Mot de passe</label>
          <input value="<!?= $person->pass; ?>" type="password" name="pass" id="pass" class="form-control">
        </div> -->
        <!-- <div class="form-group">
          <label for="daten">Date de naissance</label>
          <input value="<!?= $person->daten; ?>" type="date" name="daten" id="daten" class="form-control">
        </div> -->

        <div class="form-group">
          <button type="submit" name='envoyer' class="btn btn-info">Modifier</button>
          <button> <a href="admin_page.php" class="option-btn"> Retour</a></button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="script.js"></script>