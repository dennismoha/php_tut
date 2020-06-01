<?php session_start();  
  $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
  echo   $_SESSION['url'] ;

?>

<!DOCTYPE html>
<html>
<head>
  <title> this is the php login / Singup form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" type="text/css" href="style.css">
  <script  src="./includes/analytical.js"></script>
  <link rel="stylesheet" type="text/css" href="./includes/analytical.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tutorial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quiz.php">quiz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="analytical.php">Analytical</a>
      </li>
    </ul>
    <span class="navbar-text">

      <?php 
      if(isset($_SESSION['username'])) {
        echo ' <form action="logout.php" method="POST"><input type="submit" name="logout" value="logout" class ="btn btn-primery"></form>
      <li class="nav-item" style="margin-left:100px">
        <a class="nav-link" href="#" >profile</a>
      </li>      
    </ul>';
      }else {
       echo '
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="register.php">Singup <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>     
            </ul>
        ';
      }


       ?>

     
    </span>
  </div>
</nav>










