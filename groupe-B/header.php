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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="scss/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="scss/style.css" rel="stylesheet" type="text/css">
  <title><?php echo $_SESSION["eventname"]; ?></title>
</head>	


<body id="<?php echo $page; ?>">
<div id="resolution"></div> <!-- barre pour les tailles écrans -->

<div class="menu">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php"><img src="img/heff_logo.png" alt="heff_logo" class="heff_logo"></a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">OK</button>
    </form>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item <?php if($page == "accueil"){echo "active";} ?>">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($page == "conferenciers" || $page == "conferencier"){echo "active";} ?>">
        <a class="nav-link" href="conferenciers.php">Conférenciers</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link <?php if($page == "profil"){echo "active";} ?>" href="mon-profil.php">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($page == "apropos"){echo "active";} ?>" href="about.php">A propos</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link <?php if($page == "contact"){echo "active";} ?>" href="contact.php">Contact</a>
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
</div> <!--/ div menu-->