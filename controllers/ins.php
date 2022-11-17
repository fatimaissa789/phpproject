<?php 
include './db/config.php';

// $id=$_SESSION ['admin_id'];



if(isset($_POST['submit'])){
    $name = $_POST['nom'];
    // $name = filter_var($name, FILTER_SANITIZE_STRING);

    $username = $_POST['prenom'];
    // $username = filter_var($username, FILTER_SANITIZE_STRING);
    // $mtr = $_POST["mtr"];
    // $mtr = firter_var($mtr, FILTER_SANITIZE_STRING);

    $mail = $_POST['mail'];
    // $mail = filter_var($mail, FILTER_SANITIZE_STRING);

    $role = $_POST['role'];
    // $role = filter_var($role, FILTER_SANITIZE_STRING);

    $mdp = md5($_POST['mdp']);
    // $mdp = filter_var($mdp, FILTER_SANITIZE_STRING);
    $mdp2 = md5($_POST['mdp2']);
    // $mdp2 = filter_var($mdp2, FILTER_SANITIZE_STRING);
    $matricule= date(' his-- A',time()).'-MTR';
    $image = $_FILES['image']['name'];
    $image_size = $_FILES ['image']['size'];
    $image_folder = 'upload_img/'.$image;


    $select = $connection->prepare("SELECT * FROM `users` WHERE mail =? ");
    $select -> execute([$mail]);


    if($select->rowCount() > 0){
        $message[] = 'utilisteur existe';

    }
    else{
        if($mdp != $mdp2){
            $message[] = 'mot de passe non identique';

        }
        elseif ($image_size>2000000) {
            $message[] = 'la taille de l`image est large';
        }
        else{
            $insert = $connection-> prepare("INSERT INTO `users`(nom,matricule, prenom,mail,roles, mdp,image )VALUES (?,?,?,?,?,?,?)");
            $insert->execute([$name,$matricule,$username,$mail, $role,$mdp, $image]);
            if ($insert){
                move_uploaded_file($image_size, $image_folder);
                $message[]= 'enregistrer avec succées';
                header('location:login.php');
            }
        }

    }
    



}


?>