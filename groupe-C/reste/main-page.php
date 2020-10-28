<?php 
$page = 'page-principale';
require "header.php";

$eventid = $_SESSION["eventid"];


?>
<div class="container">
        <div class="row">

  <!-- commencer ma boucle -->
  <?php
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 

$sql = " SELECT * FROM activities
          LEFT JOIN rooms ON activities.room_id = rooms.room_id
          LEFT JOIN buildings ON activities.building_id = buildings.building_id
          LEFT JOIN categories ON activities.category_id = categories.category_id
          LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id";


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

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }
    

    ?>
            <div id="id_<?php echo $activityid ; ?>" class="col-lg-6 card-entier <?php echo $activity["category_slug"]; ?>">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo utf8_encode($activity["activity_name"]); ?>">
                        <h2><?php echo utf8_encode($activity["category_name"]); ?></h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1><a href="detail-activite.php?activityid=<?php  echo $activity["activity_id"]; ?>"><?php echo utf8_encode($activity["activity_name"]); ?></a></h1>
                        <h4>Le <?php echo $datevent; ?> <br>
                        de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></h4>
                       
                       
                            <?php 
                            
                            // si le user est logué, je vais checker si l'activité dans laquelle je me trouve est dans ses favoris

                            if(isset($_SESSION["user"])){
                                                 // s'il est logué, je vais faire une query dans la table favorites
                                                $sql2 = "SELECT * FROM favorites WHERE activity_id = '$activityid' AND user_token = '$userid '";
                                                $results = $conn->query($sql2); 
                                                $rowcount=mysqli_num_rows($results); 
                                                echo ' <div class="coeur">';
                                                if ($rowcount > 0) { // si le résultat = 1, ça veut dire que cette activité est dans les favors du user, et donc on lui met un lien pour le SUPPRIMER de ses favoris

                                                    // echo ' <a class= "coeur remove" href="inc/remove-from-favorites.php?activity_id='.$activity["activity_id"].'"><img src="img/image-coeur-png-1.png" title="Retirer des favoris"></a>';
                                                    echo ' <a class="remove" href="#" data-activity="'.$activity["activity_id"].'"><img src="img/image-coeur-png-1.png" title="Retirer des favoris"></a>';


                                                } else { // sinon, ça veut dire que ce n'est pas dans ses favoris, et donc on lui met un lien pour l'AJOUTER dans ses favoris

                                                    // echo '<a class= "coeur add" href="inc/add-to-favorites.php?activity_id='.$activity["activity_id"].'"><img src="img/image-coeur-png-blanc.png" title="Ajouter aux favoris"></a>';
                                                    echo '<a class="add" href="#" data-activity="'.$activity["activity_id"].'"><img src="img/image-coeur-png-blanc.png" title="Ajouter aux favoris"></a>';
                                                }
                                
                                                echo '</div>';


                            } else { // s'il n'est pas logué, on lui affiche le lien pour se connecter

                            echo '<a class="coeur" href="#"  data-toggle="modal" data-target="#exampleModal"><img src="img/image-coeur-png-blanc.png" title="Vous devez être connecté afin d\'ajouter l\'activité à vos favoris"></a>';

                            } // affichage lein pour se connecter
                            
                            
                            
                            ?>
                            









                        
               
                            

            

                        




                        <p><?php echo utf8_encode($activity["activity_description"]); ?></p>

                        <span>Campus: <?php echo utf8_encode($activity["building_name"]); ?></span>
                        <h5>Local: <?php echo utf8_encode($activity["room_name"]); ?></h5>

                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
             
            </div> <!-- card entier -->

            <?php


?>

 <?php } // foreach   fin de la boucle ?>
     

            

        </div>   <!-- row -->








</div>  <!-- / container  -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="inc/login.inc.php" method="post">
       <input type="text" name="login" placeholder="votre login">
       <input type="password" name="mdp" placeholder="mot de passe">
       <input type="submit" value="login" class="btn btn-success">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php');?>
