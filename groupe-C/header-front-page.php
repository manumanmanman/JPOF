<?php require("inc/connexion.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    

<div class="nav-box">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="activites.php" >Activités</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">À porpos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
        <li class="nav-item">
                          <?php 
              
              session_start();  
              if (isset($_SESSION["user"])) {

                echo "<h5>".$_SESSION["user"]."</h5>";
                echo "<h5>--".$_SESSION["userid"]."</h5>";
                echo ' <h5>- <a href="inc/logout.inc.php" class="btn btn-primary" type="submit" >logout</a></h5>';
                

              } else {
                //Button trigger modal
                echo '<button href="href="register.php" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscription - Connexion</button>';
                

              }
              
              
              ?>
        </li>
      </ul>
     
    </div>
</nav>
            </div>

<div class="front-page-text">
    <h1>Bienvenu sur les sites des journées portes ouvertes! </h1>
    <p>Venez découvrir la Haute Ecole Francisco Ferrer ce 18 et 20 mars</p>

</div>
<div class="fp-nav-img"><img src="img/pexels-abby-chung-1106468.jpg" alt="fond nav"></div>
     
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="inc/login.inc.php" method="post">
       <input type="text" name="login" placeholder="votre login">
       <input type="password" name="mdp" placeholder="mot de passe">
       <input type="submit" value="login" class="btn btn-success">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  


   