<?php 
$page = 'accueil'; // on définit la page dans laquell on est. cela sert pour l'id sur le body et pour le menu pour voir lequel est actif afin d'y ajouter la classe 'active'
require "header.php";  // on inclut le header

$eventid = $_SESSION["eventid"]; // on crée la variable $eventid  sur base de $_SESSION["eventid"] qui est disponible dans le header, ceci afin de faire les requêtes d'activités uniquement sur l'event actif


?>
<div class="container">
<h1>Event ID: <?php echo   $_SESSION["eventid"]; ?> - Name: <?php echo   $_SESSION["eventname"]; ?> - <?php echo   $_SESSION["eventdate"]; ?></h1>
<p><?php echo   $_SESSION["eventdescription"]; ?></p> <!-- on affiche les infos de l'event actif. ces variables de sessions proviennent du header -->
        <div class="row">

  <!-- commencer ma boucle -->
  <?php
  // pour formater la date
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 

// on va chercher les activités avec des INNER JOIN pour avoir les infos des rooms, conferenciers (speakers) etc, et uniquement pour l'event actif ($eventid) qu'on a récupéré dans le header
$sql = " SELECT * FROM activities
          LEFT JOIN rooms ON activities.room_id = rooms.room_id
          LEFT JOIN buildings ON activities.building_id = buildings.building_id
          LEFT JOIN categories ON activities.category_id = categories.category_id
          LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id
          WHERE activities.event_id = '$eventid'; 
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

    // on check si le user est connecté et alors on récupère son id
    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }
    

    ?>
            <!-- dans la boucle on crée la div .card-entier qui va contenir toutes les infos d'un event. on y ajoute les classes qui vont servir aux filtres-->
            <div id="id_<?php echo $activityid ; ?>" class="col-lg-6 card-entier <?php echo $activity["category_slug"]; ?> campus_<?php echo $activity["building_id"]; ?>">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo utf8_encode($activity["activity_name"]); ?>">
                        <h2><?php echo utf8_encode($activity["category_name"]); ?></h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1><a href="detail-activite.php?activityid=<?php  echo $activity["activity_id"]; ?>"><?php echo utf8_encode($activity["activity_name"]); ?></a>  <?php //echo $activity["activity_id"]; ?></h1>
                        <h4>Le <?php echo $datevent; ?> <br>
                        de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></h4>
                       
                       
                            <?php 
                            
                            // si le user est logué, je vais checker si l'activité dans laquelle je me trouve est dans ses favoris

                            if(isset($_SESSION["user"])){
                                                 // s'il est logué, je vais faire une query dans la table favorites
                                                $sql2 = "SELECT * FROM favorites WHERE activity_id = '$activityid' AND user_token = '$userid '";
                                                $results = $conn->query($sql2); 
                                                $rowcount=mysqli_num_rows($results); 
                                                if ($rowcount > 0) {
                                                $inscritfavoris = "inscrit"; 
                                                } else { $inscritfavoris = "pas inscrit";}
                                                echo ' <div class="coeur">';?>
                                                <a class="<?php if($inscritfavoris == "inscrit"){echo "remove";} else {echo "add";} ?>" href="#" data-activity="<?php echo $activity["activity_id"]; ?>">
                                               
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="<?php if($inscritfavoris == "inscrit"){echo "red";} else {echo "gray";} ?>" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                  </svg>

                                                 <?php //echo $inscrit; ?>
                                                
                                                </a>

                                                </div>
                                               <?php  
                                


                            } else { // s'il n'est pas logué, on lui affiche le lien pour se connecter

                            echo '<a class= "coeur" href="#"  data-toggle="modal" data-target="#exampleModal"><img src="img/image-coeur-png-blanc.png" title="Vous devez être connecté afin d\'ajouter l\'activité à vos favoris"></a>';

                            } // affichage lein pour se connecter
       
                            ?>
      

                        <p><?php echo utf8_encode($activity["activity_description"]); ?></p>

                        <span>Campus: <?php echo utf8_encode($activity["building_name"]); ?></span>
                        <h5>Local: <?php echo utf8_encode($activity["room_name"]); ?></h5>
                        <h5>Places total: <?php echo utf8_encode($activity["activity_size"]); ?></h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
             
            </div> <!-- card entier -->


         <!-- fermer ma boucle     -->
 <?php } // foreach   fin de la boucle ?>
     

        </div>   <!-- row -->
</div>  <!-- / container  -->

<?php require "footer.php" ?>

