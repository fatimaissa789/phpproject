<?php 
include './db/config.php';

session_start();

if(isset($_POST['submit'])){
    // $name = $_POST['nom'];
    // $name = filter_var($name, FILTER_SANITIZE_STRING);

    // $username = $_POST['prenom'];
    // $username = filter_var($username, FILTER_SANITIZE_STRING);
    // $mtr = $_POST["mtr"];
    // $mtr = firter_var($mtr, FILTER_SANITIZE_STRING);

    $mail = $_POST['mail'];
    // $mail = filter_var($mail, FILTER_SANITIZE_STRING);

    // $role = $_POST['role'];
    // $role = filter_var($role, FILTER_SANITIZE_STRING);

    $mdp = $_POST['mdp'];
    // $mdp = filter_var($mdp, FILTER_SANITIZE_STRING);
    


    $select = $connection->prepare("SELECT * FROM `users` WHERE mail =? AND mdp =?" );
    $select->execute([$mail,$mdp]);
    $row = $select->fetch(PDO::FETCH_ASSOC);

    

    if($select->rowCount() > 0){
        
        $_SESSION['nomPrenom'] = $row['nom']." ".$row['prenom'];
       
        $_SESSION['image'] = $row['image'];
         $_SESSION['matricule'] = $row['matricule'];

        // var_dump($_SESSION['image']);
        // var_dump($_SESSION['matricule']);
        // var_dump($_SESSION['nomPrenom']);
       
        // var_dump($row['roles'] == 'admin');
        // die;

       if($row['roles']=='admin'){
        $_SESSION['admin_id'] = $row['id'];
        // header('location:admin_page.php');
        header('location:admin_page.php');
       }
       
       elseif($row['roles']=='user'){
        $_SESSION['user_id'] = $row['id'];
        header('location:user_page.php');


       }
       else{
        $message[]= "n'existe pas";

       }

    }
    else{
       $message[]= 'email ou mot de passe incorrect';

    }
    



}


?>