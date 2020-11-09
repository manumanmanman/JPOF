<?php
require "header-front-page.php";
$page = 'accueil';
$eventid = $_SESSION["eventid"];
?>



<div id="front-page">


<div id="carouselExampleIndicators" style="" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="d-flex text-center justify-content-center">
      <div class="caption-block text-white">
        <h1>Bienvenue sur le site des journées portes ouvertes!</h1>
        <h4>Venez découvrir la Haute Ecole Francisco Ferrer ce 18 et 20 mars</h4>
      </div>
    </div>
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img class="d-block w-100 cimg" src="img/pexels-abby-chung-1106468.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
        
      <img class="d-block w-100 cimg" src="img/pexels-marcin-dampc-1684187.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 cimg" src="img/pexels-pixabay-262577.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-xl-3 col-md-6 text-center mb-5 text-white d-flex justify-content-center">
              <div class="front-menu-container ">
                <a href="activity.php"><img class="fp-link-img" src="img/pexels-olia-danilevich-5088021.jpg"  alt="Informations"></a>
                <h3 class="front-menu-txt" >Voir les activités</h3>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 text-center mb-5 text-white d-flex justify-content-center">
              <div class="front-menu-container ">
              <?php if (isset($_SESSION["user"])) { // s'il est logué?>
             <a href="profile.php?fuserid=<?php echo $_SESSION["userid"]?>"><img class="fp-link-img" src="img/pexels-rfstudio-3059748 (1).jpg"  alt="Voir mon profil"></a>';
             <?php
            } else { // il n'est pas logué, on lui promt de se loger
              echo ' <a href="#" data-toggle="modal" data-target="#exampleModal" ><img class="fp-link-img inscriptionactvite" src="img/pexels-rfstudio-3059748 (1).jpg"  alt="Voir mon profil"></a>';
              
              }?>
                <h3 class="front-menu-txt" >Voir mon profile</h3>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 text-center mb-5 text-white d-flex justify-content-center">
              <div class="front-menu-container ">
                <a href="about.php"><img class="fp-link-img" src="img/pexels-pixabay-434446.jpg"  alt="voir les activités"></a>
                <h3 class="front-menu-txt" >Informations</h3>
              </div>
            </div>
        </div>
    </div>

</div><!--  end of id front-page -->



























<?php require "footer-front-page.php"?>
