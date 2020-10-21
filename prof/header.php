<?php require("inc/connexion.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/bootstrap.min.css">
    <link rel="stylesheet" href="scss/style.css">
    <title></title>
</head>
<body>
<div id="screensize"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item mx-3">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link" href="#">Conférenciers</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link" href="#">À propos</a>
      </li>
      <li class="nav-item ml-3 mr-5">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <?php 
  
  session_start();  

  // si l'utilisateur est logué (la session existe, çàd dire que $_SESSION["user"] existe, il est ISSET) alors on affiche son nom, son id et un lien LOGOUT
  if (isset($_SESSION["user"])) {

    echo "<p>username:  <b> ".$_SESSION["user"]."</b>";
    echo " user id:  <b> ".$_SESSION["userid"]."</b>";
    echo ' - <a href="inc/logout.inc.php">logout</a></P>';

    // s'il n'est pas logué, on affiche le lien pour se loguer
  } else {

    echo '<a class="nav-link ml-5" href="href="register.php"  data-toggle="modal" data-target="#exampleModal">Inscription - Connexion</a>';

  }
  
  
   ?>


    


    
  </div>
</nav>