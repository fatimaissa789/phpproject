<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM users WHERE id=:id';
$statement = $connection->prepare($sql);

$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);



if (isset ($_POST['nom'])&& isset($_POST['prenom'] )&& isset($_POST['mail'] )&&isset($_POST['roles'])) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['mail'];
  $role = $_POST['roles'];
  // $adresse = $_POST['adresse'];
  // $login = $_POST['login'];
  // $pass = $_POST['pass'];
  // $daten = $_POST['daten'];
 $date_modif=date('y-m-s');
//  var_dump($date_modif);die;

// $sql = $connection -> query("UPDATE users SET  nom= $name, prenom=$prenom, mail=$email, roles=$role, date_modif=$date_modif  WHERE id=:id");

  $sql = 'UPDATE users SET  nom=:nom, prenom=:prenom, mail=:mail, roles=:roles,date_modif=:date_modif WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([
                          ':date_modif'=>$date_modif,
                         
                          ':id'=>$id,
                          ':nom'=>$name,
                          ':prenom'=>$prenom,
                          ':mail'=>$email,
                          ':roles'=>$role])) {
    
    $message = 'Succès';

    
  }
  
}


  //  $old_image = $_POST['old_image'];
  //  $image = $_FILES['image']['name'];
  //  $image_tmp_name = $_FILES['image']['tmp_name'];
  //  $image_size = $_FILES['image']['size'];
  //  $image_folder = 'uploaded_img/'.$image;

  //  if(!empty($image)){

  //     if($image_size > 2000000){
  //        $message[] = 'image taille de l`image est trop large';
  //     }else{
  //        $update_image = $conn->prepare("UPDATE users SET image = ? WHERE id = ?");
  //        $update_image->execute([$image, $user_id]);

  //        if($update_image){
  //           move_uploaded_file($image_tmp_name, $image_folder);
  //           unlink('uploaded_img/'.$old_image);
  //           $message[] = 'image est modifiée!';
  //        }
  //     }

  //  }

 ?>












<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Modifier</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
      <?php endif; ?>
      <form method="POST" enctype="multipart/form-data" >
        <!-- <img src="uploaded_img/<?= $fetch_profile['image'] ;?>" alt=""> -->
        <div class="form-group">
          <label for="nom">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control ">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="<?= $person->mail; ?>" type="text" name="mail" id="mail" class="form-control">
        </div>
        <div class="form-group">
          <label for="role">Roles</label>
          <input value="<?= $person->roles; ?>" type="text" name="roles" id="roles" class="form-control">
        </div>
        <span>profile pic : </span>
            <!-- <input type="hidden" name="old_image" value="<?=$fetch_profile['image']; ?>"> -->
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
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
          <a href="admin_page.php" class="option-btn">go back</a>
        </div>
      </form>
    </div>
  </div>
</div>