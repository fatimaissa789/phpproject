<?php
include  './db/config.php';

$sql = 'SELECT * FROM users WHERE etat=0';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>