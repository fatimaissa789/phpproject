<?php 

include "./db/config.php";
// recuperation du nombre d'utilisateurs
$sql = "SELECT COUNT(*) as numUsers FROM users WHERE etat=1";

$numUsers = $connection->query($sql)->fetchColumn();
$limit=5;
$numPages = ceil($numUsers/$limit);

$page=isset($_GET["page"]) ? $_GET['page'] :1;
$start=($page-1) * $limit;
$sql = "SELECT * FROM users WHERE etat=1 LIMIT $start,$limit";

$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

$previous = $page - 1;
$next=$page + 1;



// search
// $search = $connection ->query("SELECT * from users ORDER BY id DESC");
if (isset($_GET['search']) AND !empty($_GET['search'])){
    $recherche = htmlspecialchars($_GET['search']);
    $search = $connection->query('SELECT * FROM users WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC ');
    // var_dump($search); exit;
}
?>