<?php require("inc/connexion.inc.php");
session_start();  

$sql = " SELECT * FROM events WHERE event_on = '1'";
$events = $conn->query($sql);
foreach ($events as $event) {

  $_SESSION["eventid"] = utf8_encode($event["event_id"]);
  $_SESSION["eventname"] = utf8_encode($event["event_name"]);
  $_SESSION["eventdate"] = utf8_encode($event["event_date"]);
  $_SESSION["eventdescription"] = utf8_encode($event["event_description"]);


}

?>
<!DOCTYPE html>
<html lang="fr">
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
      <li class="nav-item mx-3 <?php if($page == "accueil"){echo "active";} ?>">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "activites"){echo "active";} ?>">
        <a class="nav-link" href="activites.php">Activites</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "conferenciers"){echo "active";} ?>">
        <a class="nav-link" href="conferenciers.php" >Conférenciers</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "apropos"){echo "active";} ?>">
        <a class="nav-link" href="#">À propos</a>
      </li>
      <li class="nav-item ml-3 mr-5 <?php if($page == "contact"){echo "active";} ?>">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <?php 
  
  

  // si l'utilisateur est logué (la session existe, çàd dire que $_SESSION["user"] existe, il est ISSET) alors on affiche son nom, son id et un lien LOGOUT
  if (isset($_SESSION["user"])) {

    echo "<p>username:  <b> ".$_SESSION["user"]."</b>";
    echo " user id:  <b> ".$_SESSION["userid"]."</b>";
    echo ' - <a href="inc/logout.inc.php">logout</a></P>';

    // s'il n'est pas logué, on affiche le lien pour se loguer
  } else {

    echo '<a class="nav-link ml-5" href="href="register.php"  data-toggle="modal" data-target="#exampleModal">Inscription - Connexion</a>';

  } // si n'est pas logué
  
  
   ?>


    


    
  </div>
</nav>