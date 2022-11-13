<?php
require './db/config.php';

$id = $_GET['id'];

// echo $id;

$sql = ("SELECT * FROM users WHERE etat=1 AND id = $id");
$statement = $connection->prepare($sql);
$statement->execute();




$people = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump(($people));
// var_dump($id);

// var_dump($people['roles']);die;

//requete update roles
if($people['roles'] == 'admin'){
    $roles = ("UPDATE users SET roles = 'user' WHERE etat=1 AND id = $id ");
    $change = $connection->prepare($roles);
    $change->execute();
   

    header("location:admin_page.php");
}
else {
    $roles = ("UPDATE `users` SET roles = 'admin' WHERE  etat=1 AND id= $id");
    $change = $connection->prepare($roles);
    $change->execute();

    header("location:admin_page.php");
}
?>
