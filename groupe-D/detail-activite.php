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




<div class="container">
 


 
        
        <img class="card-img-detail" src="img/activites.jpg " alt="Card image cap">

    <div class="carre detail <?php echo $activity["category_slug"]?>">
    <i class="far fa-bookmark">  <?php echo utf8_encode ($activity["category_name"])?></i> <br>
    <i class="far fa-calendar-alt">   <?php echo utf8_encode ($activity["activity_date"])?></i> <br>
    <i class="fas fa-map-marker-alt"> <?php echo utf8_encode ($activity["building_name"])?></i> <br>
    <i class="fas fa-microphone">  <?php echo utf8_encode ($activity["speaker_name"])?></i>

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

    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>


   

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