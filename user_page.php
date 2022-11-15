<?php 

include "./model/affiche_user.php";

include "./model/pagination.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="css/style_admin.css">
  <title>Admin_page</title>
</head>
<!-- <body style="background-color:black"> -->

<!--?php require 'header.php'; ?-->
<div class="container" style="background-color: #FE6263">
  <div class="card mt-5">
 
    <div class="card-header" style="height:199px">
    
      <div class="deconnect">
        <a href="logout.php" style="margin-left:1248px; top:789px"><i
            class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>

     
           

      <!-- <h2>Adminstrateur</h2> -->
      <img src="image/<?= $_SESSION['image'];?>" alt="" style=" background-size : contain;
                  background-position : 50% 50%; 
 
                  width : 50px; height : 50px;
                  border: none;
                  -moz-border-radius : 75px;
                  -webkit-border-radius : 75px;
                  border-radius : 75px; ">

      <h3>
        <?= $_SESSION['nomPrenom']; ?>
      </h3>

      <h3>
        <?= $_SESSION['matricule']; ?>
      </h3>
      

    </div>
    <div class="card-body">
    <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Utilisateurs</a>
   
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

      <table class="table table-bordered">
        <tr>
          <!-- <th>ID</th> -->
          <th>Matricule</th>

          <th>Nom</th>
          <th>Prenom</th>
          <th>Email</th>
          <th>Role</th>
          <th>Photo</th>
          <th>Date_Inscription</th>



          
        </tr>
        <?php foreach($people as $person): ?>
        <tr>
          <!-- <td><?= $person->id; ?></td> -->
          <td>
            <?= $person->matricule; ?>
          </td>
          <td>
            <?= $person->nom; ?>
          </td>
          <td>
            <?= $person->prenom; ?>
          </td>
          <td>
            <?= $person->mail; ?>
          </td>
          <td>
            <?= $person->roles; ?>
          </td>
          <td> <img src="image/<?php echo $person->image; ?>" style="background-size : contain;
  background-position : 50% 50%; 
  background-image : url(/img/exemple/filter-image.jpg);
  display : inline-block;
  width : 50px; height : 50px;
  border: none;
  -moz-border-radius : 75px;
  -webkit-border-radius : 75px;
  border-radius : 75px;
"width = 100px > </td>
<td>
            <?= $person->date_Ins; ?>
          </td>
          
        </tr>
        <?php endforeach; ?>

      </table>
       <?php include "footer.php" ?>


    </div>
  </div>
</div>

<!--?php require 'footer.php'?-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>