<?php 
// on inclut la connexion 
require("inc/connexion.inc.php");
// on démarre une session pour avoir les variables de session disponibles sur toutes lespages
session_start();  


// on va récupérer l'id de l'événement actif
$sql = " SELECT * FROM events WHERE event_on = '1'";
$events = $conn->query($sql);
foreach ($events as $event) {

  // on stock dans une variable de session les différentes infos de l'evenement actif
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
    <!-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="scss/style.css">
    <title><?php echo $_SESSION["eventname"]; ?></title> <!-- on met comme titre le titre de l'event actif -->
</head>
<body id="<?php echo $page; ?>"> <!-- on met un id différent sur chaque page pour pouvoir styliser chaque page individuellement. $page est défini pour chaque page avant l'appel du header -->
<div id="screensize"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item mx-3 <?php if($page == "accueil"){echo "active";} ?>">  <!-- pour chaque élément du menu on check si c'est la page active, si oui, on affiche la classe 'active' -->
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "activites"){echo "active";} ?>">
        <a class="nav-link" href="activites.php">Activites</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "conferenciers" || $page == "conferencier"){echo "active";} ?>">
        <a class="nav-link" href="conferenciers.php" >Conférenciers</a>
      </li>
      <li class="nav-item mx-3 <?php if($page == "apropos"){echo "active";} ?>">
        <a class="nav-link" href="#">À propos</a>
      </li>
      <li class="nav-item ml-3 mr-5 <?php if($page == "contact"){echo "active";} ?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <?php 
          // si l'utilisateur est logué (la session existe, çàd dire que $_SESSION["user"] existe, il est ISSET) alors on affiche son nom, son id et un lien LOGOUT
        if (isset($_SESSION["user"])) {

          echo '<li class="nav-item mx-3" ><a class="nav-link" href="mon-profil.php"><b> '.$_SESSION["user"].'</a></li>';
          // echo " user id:  <b> ".$_SESSION["userid"]."</b>";
          echo ' <li class="nav-item mx-3" ><a class="nav-link" href="inc/logout.inc.php">logout</a></li>';

          // s'il n'est pas logué, on affiche le lien pour se loguer
        } else {

          echo '<li class="nav-item mx-3" ><a class="nav-link ml-5" href=""  data-toggle="modal" data-target="#exampleModal">Inscription - Connexion</a></li>';

        } // si n'est pas logué
  
  
   ?>
    </ul>
  </div>
</nav>