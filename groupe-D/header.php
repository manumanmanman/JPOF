<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>JPOF SARAH</title>
</head>

<body>
  
<?php require("inc/connexion.inc.php"); ?>


<div id="screensize">


</div>

<a href="">Inscription</a> 


<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link" href="#"><img src="img/heff_logo.png" alt=""></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="activites.php">Activités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conferenciers.php">Conférenciers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>


<?php 

session_start();
if(isset($_SESSION["user"])) {


  echo "<p>username: <b> ".$_SESSION["user"]."</b>";
  echo " user id: <b> ".$_SESSION["userid"]."</b>";
  echo ' - <a href="inc/logout.inc.php">log out</a></p>';


} else {


echo '<a href="register.php" data-toggle="modal" data-target="#exampleModal">Connexion</a>';


} 


?>