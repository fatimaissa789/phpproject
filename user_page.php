<?php
include  'config.php';


session_start();

$id = $_SESSION['admin_id'];

$admin_nomPrenom = $_SESSION['nomPrenom'];

$admin_image = $_SESSION['image'];

$admin_matricule = $_SESSION['matricule'];

//    var_dump($_SESSION['image']);
//         var_dump($_SESSION['matricule']);
//         var_dump($_SESSION['nomPrenom']);
       
// die;

if(!isset($id)){
  // header('location:login.php');
}

$sql = "SELECT * FROM users WHERE etat=1 AND id!=:id";
$statement = $connection->prepare($sql);
$statement->execute([ 'id'=> $id]);
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_user.css">
    <title>Admin_page</title>
</head>
<!-- <body style="background-color:black"> -->

<!--?php require 'header.php'; ?-->
<div class="container" >
  <div class="card mt-5">
    <div class="card-header" style="background-color: #FE6263">
    <div class="deconnect">
    <a href="logout.php"  style="margin-left:956px; top:-789px"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>    
      <!-- <h2>Adminstrateur</h2> -->
      
      <img src="image/<?= $_SESSION['image'];?>" alt="" style=" background-size : contain;
  background-position : 50% 50%; 
 
  width : 50px; height : 50px;
  border: none;
  -moz-border-radius : 75px;
  -webkit-border-radius : 75px;
  border-radius : 75px; ">
      
      <h3><?= $_SESSION['nomPrenom']; ?></h3>
      
      <h3><?= $_SESSION['matricule']; ?></h3>

      <!-- <button ><a style="text-decoration:none" href="page_user_archiver.php">Archive</a></button> -->
      <div class="logout">
      

      </div>
     
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <!-- <th>ID</th> -->
          <th>Matricule</th>

          <th>Nom</th>
          <th>Prenom</th>
          <th>Email</th>
          <th>Role</th>
          <!-- <th>Photo</th> -->



          <!-- <th>Action</th> -->
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <!-- <td><?= $person->id; ?></td> -->
            <td><?= $person->matricule; ?></td>
            <td><?= $person->nom; ?></td>
            <td><?= $person->prenom; ?></td>
            <td><?= $person->mail; ?></td>
            <td><?= $person->roles; ?></td>
            <!-- <td> <img src="image/<?php echo $person->image; ?>" style="background-size : contain;
  background-position : 50% 50%; 
  background-image : url(/img/exemple/filter-image.jpg);
  display : inline-block;
  width : 50px; height : 50px;
  border: none;
  -moz-border-radius : 75px;
  -webkit-border-radius : 75px;
  border-radius : 75px;
"width = 100px > </td></td> -->
          
            
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<!--?php require 'footer.php'?-->

    
    
</body>
</html>