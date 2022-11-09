<?php
require 'config.php';
$id = $_GET['id'];
$sql = 'UPDATE users SET etat= 0 WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: admin_page.php");
}?>