<?php 
// header('Content-Type: text/html; charset=utf-8');
// on inclut la connexion 
require("inc/connexion.inc.php");
// on démarre une session pour avoir les variables de session disponibles sur toutes les pages
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
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_SESSION["eventname"]; ?></title> <!-- on met comme titre le titre de l'event actif -->
</head>
<body id="<?php echo $page; ?>"> <!-- on met un id différent sur chaque page pour pouvoir styliser chaque page individuellement. $page est défini pour chaque page avant l'appel du header -->
<div id="front-page">

<!-- <div class="front-page-top"> -->
  
        
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img  src="img/heff_logo.png" alt="Logo" class="logo-img2"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0  nav-tabs  ">
      <li class="nav-item active">
        <a class="nav-link pl-1" href="index.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-1" href="activity.php">Activitées</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-1" href="conferenciers.php">Conférenciers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-1" href="about.php">À propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pl-1" href="contact.php">Contact</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="btn-group log-in ml-3">
    <?php 
              
 
              if (isset($_SESSION["user"])) {

                echo '<a class="btn btn-outline-dark" href="profile.php?fuserid='.$_SESSION["userid"].'"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-circle mr-1 pb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
              </svg>'.$_SESSION["user"].'</a>';
                // echo "<h5 class='go-right'> | ".$_SESSION["userid"]."</h5>";
                echo '<a href="inc/logout.inc.php" class="btn btn-danger go-right" type="submit" >logout</a>';
                

              } else {
                //Button trigger modal
                echo '<button href="href="register.php" type="button" class="btn btn-outline-dark my-2 my-sm-0 go-right" data-toggle="modal" data-target="#exampleModal">Inscription - Connexion</button>';
                

              }
              
              
              ?>


    </div>
  </div>
</nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
        <button type="button bg-light text-light" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">

        <form action="inc/login.inc.php" method="post">
          <div class="form-row align-items-center">
      <div class="col">
       <input class="form-control mb-2" type="text" name="login" placeholder="votre login">
         </div>
         <div class="col">
       <input class="form-control mb-2" type="password" name="mdp" placeholder="mot de passe">
         </div>
         <div class="col">
           <input type="submit" value="login" class="btn btn-secondary mb-2 btn-block">
           </div>
    </div>
       </form>
      </div>
      <div class="modal-header mt-5">
        <h5 class="modal-title" id="exampleModalLabel">Ou s'inscrire</h5>
      </div>

      <div class="modal-body">
        <form class="needs-validation" action="user.php" method="post" novalidate>
          <div class="form-row">
            <div class="col mb-3">
              <label for="validationCustom02">Nom</label>
              <input type="text" class="form-control" id="validationCustom02"  name="nom" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
    <div class="col mb-3">
      <label for="validationCustom01">Prénom</label>
      <input type="text" class="form-control" id="validationCustom01" name="prenom" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  
  <div class="form-row">
    <div class="col mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername"  name="email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col">
      <label for="password">Mot de passe</label>
      <input type="password" class="form-control" id="password"  name="mdp" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>


  <div class="form-group mt-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      J'accepte les termes et conditions
      </label>
      <div class="invalid-feedback">
      Vous devez accepter avant de soumettre.
      </div>
    </div>
  </div>
  <button class="btn btn-secondary btn-block" type="submit">Submit form</button>
</form>

      </div>

    </div>
  </div>
</div>

