<?php

$admin_matricule = $_SESSION['matricule'];
// search
// $search = $connection ->query("SELECT * from users ORDER BY id DESC");
if (isset($_GET['search']) AND !empty($_GET['search'])){
    $recherche = htmlspecialchars($_GET['search']);
    $search = $connection->query("SELECT * FROM users  WHERE matricule!='$admin_matricule' and  nom  LIKE '%".$recherche."%'");
    // var_dump($search); exit;
}

?>