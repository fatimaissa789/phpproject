<?php
require './db/config.php';
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
