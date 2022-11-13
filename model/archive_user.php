<?php
require './db/config.php';
$id = $_GET['id'];
$date_archi=date('y-m-s');
$sql = 'UPDATE users SET  etat= 0,date_archi=:date_archi WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id,':date_archi'=>$date_archi])) {
  header("Location: admin_page.php");
}?>