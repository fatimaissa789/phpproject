<?php
require './db/config.php';

session_start();

// $id = $_SESSION['admin_id'];

$admin_nomPrenom = $_SESSION['nomPrenom'];

$admin_image = $_SESSION['image'];

$admin_matricule = $_SESSION['matricule'];

$sql = 'SELECT * FROM users WHERE etat=1 ';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
