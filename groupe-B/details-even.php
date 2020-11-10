<?php 
$page = 'details';
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
    <div class="row">
    <div id="id_<?php echo $activityid ; ?>" class="col-12 card-entier <?php echo $activity["category_slug"]; ?>">
        <h1 class="h1_home"><?php echo utf8_encode($activity["activity_name"]); ?> <?php //echo $activity["activity_id"]; ?></h1>
            <div class="card">
                <div class="card-left col-12">
                    <div class="img-square-wrapper">
                    <img src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo ($activity["activity_name"]); ?>" class="img-details-even">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Le <?php echo ($datevent); ?> <br>
                  de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></h4>
                       
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                <h5>Description :</h5>
                                <p><?php echo ($activity["activity_description"]); ?></p>
                                </li> 
                                <li class="list-group-item">
                                <h5>Campus :</h5>
                                <p><?php echo ($activity["building_name"]); ?></p>
                                </li>
                                <li class="list-group-item">
                                <h5>Local :</h5>
                                <p><?php echo ($activity["room_name"]); ?></p>
                                </li>
                                <li class="list-group-item">
                                <h5>Place totale :</h5>
                                <p><?php echo ($activity["activity_size"]); ?></p>
                                </li>


<!---------------------------------- php inscription ----------------------------------->
                            <?php
                            // aller chercher dans la table registrations le nombre d'inscrits pour un event donné (celui dans lequel on se trouve dans la boucle)
                            $sql3 = "SELECT * FROM registrations WHERE activity_id = '$activityid' ";
                                                $results = $conn->query($sql3); 
                                                $nombreinscriptions=mysqli_num_rows($results); 
                                                $placesrestantes = $activity["activity_size"] - $nombreinscriptions;                                                                                                                              
                            ?>
                            
                            <?php 
                            
                            if ($nombreinscriptions < $activity["activity_size"]) {
                                echo '<li class="list-group-item"><h5>Places disponibles: <span class="disponible">'.$placesrestantes.'</span> /'.$activity["activity_size"].'</h5></li>';


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
                            
                            ?>
                               
                            </ul>

<!---------------------------------- php favoris----------------------------------->
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

                            echo '<a class= "coeur-details-even" href=""  data-toggle="modal" data-target="#exampleModal"><img src="img/image-coeur-png-blanc.png" title="Vous devez être connecté afin d\'ajouter l\'activité à vos favoris"></a>';

                            } // affichage lein pour se connecter
       
                    ?>  


                    </div>
                </div>
                <div class="card-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753253!2d4.340286716179844!3d50.840603279531074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603795511723!5m2!1sfr!2sbe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> <!-- card-->
        </div> <!-- col4-->
    </div> <!-- row-->


             <!-- fermer ma boucle     -->
 <?php } // foreach   fin de la boucle ?>
     
</div> <!-- container -->




<?php require "footer.php" ?>



                        

