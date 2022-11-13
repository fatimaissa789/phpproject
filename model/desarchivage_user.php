<?php
require './db/config.php';
$id = $_GET['id'];
$sql = 'UPDATE users SET etat= 1 WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:admin_page.php");
}?>