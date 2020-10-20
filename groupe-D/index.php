

<?php include("header.php");?>


<div id="bienvenue">
<h1>Bienvenue</h1>



</div>
<nav class="navbar navbar-expand-lg justify-content-center nav-cat">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link black" href="#"> Toutes les activités</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link mauve" href="#"> Technique</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link orange" href="#"> Economique et Social</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link rouge" href="#"> Paramédical</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link vert" href="#"> Arts Appliqués</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link bleu" href="#"> Pédagogique</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">
 <div class="row">

<!-- COMMENCER MA BOUCLE  -->
<?php 


$sql = "SELECT * FROM activities
        LEFT JOIN rooms ON activities.room_id = rooms.room_id
        LEFT JOIN buildings ON activities.building_id = buildings.building_id
        LEFT JOIN categories ON activities.category_id = categories.category_id
        LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id



";



$activities = $conn->query($sql);

foreach($activities as $activity) { // DEBUT DE LE BOUCLE

 
?>
 
        <div class="col-12 col-md-4 full-card">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/activites.jpg " alt="Card image cap">

    <div class="carre <?php echo $activity["category_slug"]?>">
    <i class="far fa-bookmark">  <?php echo utf8_encode ($activity["category_name"])?></i>
    <i class="far fa-calendar-alt">   <?php echo utf8_encode ($activity["activity_date"])?></i>
    <i class="fas fa-map-marker-alt"> <?php echo utf8_encode ($activity["building_name"])?></i>
    <i class="fas fa-microphone">  <?php echo utf8_encode ($activity["speaker_name"])?></i>

    </div>  <!-- FIN DU CARE -->

  <div class="card-body">
    <h5 class="card-title"><?php echo utf8_encode ($activity["activity_name"])?></h5>
    <p class="card-text"><?php echo utf8_encode ($activity["activity_description"])?></p>
    <a href="#" class="favori"><i class="far fa-heart"></i></a>
  </div>

</div> <!-- FIN DU CARD-BODY -->


    
</div> <!-- FIN DU FULL-CARD -->
  
<?php

} 
//  FIN DE FOREACH




?>

    
</div>
    <!-- row -->

   

<!-- <?php

echo utf8_encode ($activity["activity_id"])."<br>";
echo "<h2>".utf8_encode ($activity["activity_name"])."</h2><br>";
echo utf8_encode ($activity["activity_description"])."<br>";
echo utf8_encode ($activity["room_name"])."<br>";
echo utf8_encode ($activity["building_name"])."<br>";
echo utf8_encode ($activity["category_name"])."<br>";
echo utf8_encode ($activity["activity_date"])."<br>";
echo utf8_encode ($activity["activity_start"])."<br>";
echo utf8_encode ($activity["activity_end"])."<br>";
echo utf8_encode ($activity["speaker_name"])."<hr>";

?> -->



    </div>
    <!-- container -->







<?php include("footer.php");?>