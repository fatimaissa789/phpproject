<?php 

include "./db/config.php";
// recuperation du nombre d'utilisateurs
$sql = "SELECT COUNT(*) as numUsers FROM users WHERE etat=1";

$numUsers = $connection->query($sql)->fetchColumn();
$limit=5;
$numPages = ceil($numUsers/$limit);

$page=isset($_GET["page"]) ? $_GET['page'] :1;
$start=($page-1) * $limit;
$admin_matricule = $_SESSION['matricule'];
$sql = "SELECT * FROM users WHERE etat=1 and matricule!='$admin_matricule' LIMIT $start,$limit";

$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

$previous = $page - 1;



if($page < $numPages){
    $next=$page + 1;
}else{
    $next=$numPages;
}


?>