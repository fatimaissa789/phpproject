
<?php 

include "./model/affiche_archiver.php";
// include "desarchivage.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="css/style_admin.css">
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
              <a onclick="return confirm('Etes-vous sur de désarchiver cet utlisateur?')" style="color:#e74c3c;text-align:center" href="desarchivage.php?id=<?= $person->id ?>" ><i class="fa-solid fa-box-archive"></i></a>
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