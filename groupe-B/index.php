<?php 
$page = 'accueil';
require "header.php";

$eventid = $_SESSION["eventid"];

?>


<div class="container-fluid">
  <div class="col-12" class="container_home">
  <div class="img_home">
    <img src="img/Rectangle_151.jpg" alt="Home" class="image_home">
  </div>
    <div class="info_home">
      <h1 class="heff_titre">Haute Ecole <br> Francisco Ferrer</h1>
      <button type="button" id="btn_info_home" href="#">Voir plus d'informations</button>
    </div>
  </div>



<div class="wrapper">
  <h1 class="h1_home">Evenements à la journée Ferrer</h1>
  <hr />


<div class="menu_even">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Tous</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Pour vous</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Techniques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Electroniques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Droit</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Medecine</a>
    </li>
</ul>
</div>


  <div class="row scrolling-wrapper">
    <div class="col-md-4 scrolling-wrapper-card">
      <div class="card">
    <img src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo utf8_encode($activity["activity_name"]); ?>">
    <div class="card-body">
      <h3><?php echo $datevent; ?></h3>
    <p class="text-justify"><?php echo utf8_encode($activity["category_name"]); ?></p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
    <div class="col-md-4 scrolling-wrapper-card">
      <div class="card">
    <img src="img/img2.jpg" />
    <div class="card-body">
      <h3>Mer, 24 avril, 16:45</h3>
    <p class="text-justify">Créer ton circuit!</p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
    <div class="col-md-4 scrolling-wrapper-card">
      <div class="card">
    <img src="img/img3.jpg" />
    <div class="card-body">
      <h3>Jeu, 24 mai, 14:00</h3>
    <p class="text-justify">Art du dessin: L'abstrait</p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
  </div>
  
</div>









<div class="wrapper">
  <h1 class="h1_home">Evenements aux journées portes ouvertes</h1>
  <hr />

<div class="menu_even">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Tous</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Pour vous</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Techniques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Electroniques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Droit</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-even" href="#">Medecine</a>
    </li>
</ul>
</div>


  <div class="row">
    <div class="col-md-4">
      <div class="card">
    <img src="img/img1.jpg" />
    <div class="card-body">
      <h3>Jeu, 7 mai, 08:00</h3>
    <p class="text-justify">Circuit rentable</p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
    <div class="col-md-4">
      <div class="card">
    <img src="img/img2.jpg" />
    <div class="card-body">
      <h3>Mer, 24 avril, 16:45</h3>
    <p class="text-justify">Créer ton circuit!</p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
    <div class="col-md-4">
      <div class="card">
    <img src="img/img3.jpg" />
    <div class="card-body">
      <h3>Jeu, 24 mai, 14:00</h3>
    <p class="text-justify">Art du dessin: L'abstrait</p>
    <button type="button" class="btn btn-outline-dark w-50">Je m'inscris</button>
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Ajouter aux favoris</a>
    <a class="nav-link" href="details-even.php">Détails évènements</a>
    </div>
  </div>
    </div>
  </div>
</div>

</div> <!--container fluide-->






<?php require "footer.php" ?>