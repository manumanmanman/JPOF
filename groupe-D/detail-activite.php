<?php 
$page = 'activites';
$activityid = $_GET["activityid"];
require "header.php" ;


date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 

$sql = " SELECT * FROM activities
          LEFT JOIN rooms ON activities.room_id = rooms.room_id
          LEFT JOIN buildings ON activities.building_id = buildings.building_id
          LEFT JOIN categories ON activities.category_id = categories.category_id
          LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id

          WHERE activities.activity_id = '$activityid '
      ";


$activities = $conn->query($sql);
foreach ($activities as $activity) {    // Début de la boucle

    $datevent = strtotime( $activity['activity_date'] );
    // $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));
    $datevent = (strftime("%A %d %B %G ", $datevent ));

    $heuredebut = strtotime( $activity['activity_start'] );
    $heuredebut = strftime("%Hh%M", $heuredebut);

    $heurefin = strtotime( $activity['activity_end'] );
    $heurefin = strftime("%Hh%M", $heurefin);

    $activityid = $activity["activity_id"];

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }
    


?>


<div id="bienvenue">
<h1><?php echo utf8_encode ($activity["activity_name"]);?></h1>
</div>


<div class="container-fluid">
 

<div class="row detail-activity">
 
<div class="col-12 col-md-6 left"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753253!2d4.340286715726704!3d50.840603279531074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603801690513!5m2!1sfr!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- FIN LEFT -->


<div class="col-12 col-md-6 right"> 
        <img class="card-img-detail" src="<?php echo ($activity["activity_img"])?>" alt="Card image cap">

    <div class="row carre detail <?php echo $activity["category_slug"]?>">
    <div class="col-md-6 ">
    <i class="far fa-bookmark"> </i> <?php echo  ($activity["category_name"])?><br>
    <i class="far fa-calendar-alt">   </i> <?php echo utf8_encode ($activity["activity_date"]).' de ' . $heuredebut .' à '. $heurefin ?>
    </div>
    <div class="col-md-6 ">
    <i class="fas fa-map-marker-alt"></i>  <?php echo utf8_encode ($activity["building_name"])?><br>
    <i class="fas fa-microphone"></i>  <?php echo utf8_encode ($activity["speaker_name"])?>
    </div>

    </div>  <!-- FIN DU CARE -->

  
    <h5 class="card-title-detail"> 
    <?php echo utf8_encode ($activity["activity_name"]);?></h5>
    <p class="card-text"><?php echo utf8_encode ($activity["activity_description"])?></p>
    
    
 

    <?php 



// si le user est logué, je vais checker si l'activité dans laquelle je me trouve est dans ses favoris

    if(isset($_SESSION["user"])) { // s'il est logué, je vais faire une query dans la table favorites

      $userid = $_SESSION["userid"];


      $sql2 = "SELECT * FROM favorites WHERE activity_id = '$activityid' AND user_token = '$userid'";
      $results = $conn->query($sql2);
      $rowcount=mysqli_num_rows($results);
      echo '<div class="coeur">';

      if ($rowcount > 0) { //si le resultat = 1, ca veut dire que cette activité est dans les favoris du user, on lui met un lien pour supprimer de ses favoris


        //echo ' <a href="inc/remove-from-favorites.php?activity_id='.$activity["activity_id"].'" class="favori"><i class="fas fa-heart redheart" title="Retirer des favoris"></i></a>';

        echo ' <a class="remove" href="#" data-activity="'.$activity["activity_id"].'" class="favori"><i class="fas fa-heart redheart" title="Retirer des favoris"></i></a>';

      } else  { // sinon, ca veut dire que ce n'est pas dans ses favoris, on lui met un lien ajouter dans favoris

       // echo ' <a href="inc/add-to-favorites.php?activity_id='.$activity["activity_id"].'" class="favori"><i class="fas fa-heart grayheart" title="Ajouter aux favoris"></i></a>';

       echo ' <a class="add" href="#" data-activity="'.$activity["activity_id"].'" class="favori"><i class="fas fa-heart grayheart" title="Ajouter aux favoris"></i></a>';
      }

echo '</div>';


    } else { // s'il n'est pas logué, on lui affiche lien pour se connecter

    echo ' <a href="#" data-toggle="modal" data-target="#exampleModal" class="favori"><i class="fas fa-heart grayheart" title="Vous devez être connecté"></i></a>';

    } // affiche lien pour se connecter


?>

<h6>Places disponibles : <?php echo utf8_encode($activity["activity_size"]); ?></h6> 


<?php


    // si connecté 
    if(isset($_SESSION["user"])){

// aller chercher dans la table registrations le nombre d'inscrits pour un event donné (celui dans lequel on se trouve dans la boucle)
$sql3 = "SELECT * FROM registrations WHERE activity_id = '$activityid' ";
                    $results = $conn->query($sql3); 
                    $nombreinscriptions=mysqli_num_rows($results); 
                    $placesrestantes = $activity["activity_size"] - $nombreinscriptions;

                    if ($placesrestantes == 1) {
                        $places = 'place';
                    } else {
                        $places = 'places';
                    }
                  
                                        

?>


<?php 

if ($nombreinscriptions < $activity["activity_size"]) {
    // echo '<h5>Places disponibles: <span class="disponible">'.$placesrestantes.'</span> sur '.$activity["activity_size"].'</h5>';
    echo '<h6>Il reste encore <span class="disponible">'.$placesrestantes.'</span> '.$places.'</h6>';


                // on va aussi aller voir si l'utilisateur connecté est déjà inscrit à l'activité
                $sql4 = "SELECT * FROM registrations WHERE activity_id = '$activityid' AND user_token = '$userid '";
                $results = $conn->query($sql4); 
                $rowcount=mysqli_num_rows($results); 
                echo '<div class="contenantboutoninscription">';
                if ($rowcount > 0) {
                   
                 // si oui, on lui propose de se désinscrire
                 echo '<a href="#" class= "btn btn-danger desinscriptionactvite" data-activity="'.$activity["activity_id"].'">Je me désinscris</a>';
                } else {
               // si non, on lui propose de s'y inscrire
                echo '<a href="#" class= "btn btn-success inscriptionactvite" data-activity="'.$activity["activity_id"].'">Je m\'inscris</a>';
                }
                echo "</div>"; //#contenantboutoninscription

                

} else {

    echo "COMPLET";
}

} // si connecté

else {
echo '<a href="#" class= "btn btn-success inscriptionactvite"   data-toggle="modal" data-target="#exampleModal">Je m\'inscris</a>';

}

?>

   
<!-- <a href="#" class= "btn <?php echo $activity["category_slug"]?> ">S'inscrire</a> -->
    
    
    
    
    
    
</div>
<!-- FIN RIGHT -->
    
    
    
    
    
  </div> 
  <!-- FIN ROW -->


   

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














<?php } // foreach   fin de la boucle ?>
<?php require "footer.php" ?>