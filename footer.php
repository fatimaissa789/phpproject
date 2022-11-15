<?php 
include "./db/config.php";
 include "./model/pagination.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
      <a class="page-link" href="?page=<?php echo $previous ?>">Previous</a>
    </li>
    <?php 
    for($i= 1; $i<=$numPages; $i++) : ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
      <?php  endfor; ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $next ?>">Suivant</a>
    </li>
  </ul>
</nav>
</body>
</html>