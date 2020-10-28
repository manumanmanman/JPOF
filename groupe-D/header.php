<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <title>JPOF SARAH</title>
</head>

<body>
  
<?php require("inc/connexion.inc.php"); ?>


<div id="screensize">


</div>


<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <img src="img/heff_logo.png" alt="">
      </li>
      <li class="nav-item <?php if($page == "accueil"){echo "active";} ?>">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item <?php if($page == "activites"){echo "active";} ?>">
        <a class="nav-link" href="activites.php">Activités</a>
      </li>
      <li class="nav-item <?php if($page == "conferenciers" || $page == "conferencier"){echo "active";} ?>">
        <a class="nav-link" href="conferenciers.php">Conférenciers</a>
      </li>
      <li class="nav-item <?php if($page == "apropos"){echo "active";} ?>">
        <a class="nav-link" href="about.php">A propos</a>
      </li>
      <li class="nav-item <?php if($page == "contact"){echo "active";} ?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
     
 

<?php 

session_start();
if(isset($_SESSION["user"])) {


  echo $_SESSION["user"];
  echo ' - <a href="inc/logout.inc.php">log out</a></p>';


} else { ?>

  <li class="nav-item <?php if($page == "contact"){echo "active";} ?>">
  <?php 
  echo '<a href="register.php" data-toggle="modal" data-target="#exampleModal"> Connexion</a>'; } 


?>
  </li>






</ul>
  </div>
</nav>
</div>