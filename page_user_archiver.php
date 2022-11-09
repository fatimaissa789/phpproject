<?php
include  'config.php';

$sql = 'SELECT * FROM users WHERE etat=0';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>
</head>
<body>

<!--?php require 'header.php'; ?-->
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Adminstrateur</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Matricule</th>

          <th>Nom</th>
          <th>Prenom</th>
      
          <th>Email</th>
          <th>Role</th>
          <th>Photo</th>



          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->matricule; ?></td>
            <td><?= $person->nom; ?></td>
            <td><?= $person->prenom; ?></td>
            <td><?= $person->mail; ?></td>
            <td><?= $person->roles; ?></td>
            <td> <img src="image/<?php echo $person->image; ?>" style="background-size : contain;
  background-position : 50% 50%; 
  background-image : url(/img/exemple/filter-image.jpg);
  display : inline-block;
  width : 50px; height : 50px;
  border: none;
  -moz-border-radius : 75px;
  -webkit-border-radius : 75px;
  border-radius : 75px;
"width = 100px > </td></td>
          
            <td>
              <!-- <a href="edit_user.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a> -->
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="desarchivage_user.php?id=<?= $person->id ?>" class='btn btn-danger'>desarchivage</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<!--?php require 'footer.php'?-->

    
    
</body>
</html>