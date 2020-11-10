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


<div class="container menu">

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
$sql = " SELECT * FROM events WHERE event_on = '1'";
$events = $conn->query($sql);
foreach ($events as $event) {

  // on stock dans une variable de session les différentes infos de l'evenement actif
  $_SESSION["eventid"] = utf8_encode($event["event_id"]);
  $_SESSION["eventname"] = utf8_encode($event["event_name"]);
  $_SESSION["eventdate"] = utf8_encode($event["event_date"]);
  $_SESSION["eventdescription"] = utf8_encode($event["event_description"]);


}

if(isset($_SESSION["user"])) {

  echo '<li class="nav-item" ><a class="nav-link righta" href="mon-profil.php"><b> '.$_SESSION["user"].'</b></a></li>';
  echo '<li class="nav-item" ><a class="nav-link rightm" href="inc/logout.inc.php"><b>LOG OUT</b></a></li> ';


} else { ?>

  <li class="nav-item <?php if($page == "contact"){echo "active";} ?>">
  <?php 

  echo '<li class="nav-item rightm" ><a class="nav-link" href="register.php" data-toggle="modal" data-target="#examplemodal"><b>CONNEXION</b></a></li>'; } 


?>
  </li>




</ul>
  </div>
</nav>
</div>