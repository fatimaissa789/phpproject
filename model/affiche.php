<?php
include  './db/config.php';


session_start();


$id = $_SESSION['admin_id'];

$admin_nomPrenom = $_SESSION['nomPrenom'];

$admin_image = $_SESSION['image'];

$admin_matricule = $_SESSION['matricule'];

//    var_dump($_SESSION['image']);
//         var_dump($_SESSION['matricule']);
//         var_dump($_SESSION['nomPrenom']);
       
// die;





// var_dump($people);
// die;

// if(!isset($id)){
//   header('location:login.php');
// }

$sql = "SELECT * FROM users WHERE etat=1 AND matricule!='.$admin_matricule";
$statement = $connection->prepare($sql);
$statement->execute([ 'id'=> $id]);
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>