<?php 
$page = 'Activitées';
$activityid = $_GET["activityid"];
require "header.php" ;
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 


$sql = " SELECT * FROM activities
          LEFT JOIN rooms ON activities.room_id = rooms.room_id
          LEFT JOIN buildings ON activities.building_id = buildings.building_id
          LEFT JOIN categories ON activities.category_id = categories.category_id
          LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id

          WHERE activities.activity_id = '$activityid '";




$activities = $conn->query($sql);
foreach ($activities as $activity) {    // Début de la boucle

    $datevent = strtotime( $activity['activity_date'] );
    // $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));
    $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));

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
<div id="details-activity" >
    <div class="row ml-5 mr-5 mt-10 mb-5 ">
        <div class="col-12 px-0">
            <h1 class="text-center ml-4 mr-4 mb-4 pb-2 text-dark border border-top-0 border-right-0 border-left-0"><?php echo ($activity["activity_name"]); ?> <?php //echo $activity["activity_id"]; ?></h1>
        </div>
        <div class="col-12 col-md-6 py-3 rounded-left">

            <h2 class="category-name rounded-lg text-light p-2 d-block
                <?php if ($activity["category_name"] == "Paramédical - Biologie médical"){
                    echo 'category-name-red';

                }elseif ($activity["category_name"] == "Économique & Social"){
                    echo 'category-name-orange';
                
                }elseif ($activity["category_name"] == "Arts Appliqués"){
                    echo 'category-name-green';
                
                }elseif ($activity["category_name"] == "Pédagogique"){
                    echo 'category-name-blue';
                
                }elseif ($activity["category_name"] == "Technique"){
                    echo 'category-name-purple';
                }  ?>
            
            "><?php echo ($activity["category_name"]); ?></h2>
            <img class="img-thumbnail"src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo ($activity["activity_name"]); ?>">
        </div>
        <div class="col-12 col-md-6">
            <div class="col-12 bg-white mt-3 py-3 details-activite">
                <p class="mb-5"> <?php echo ($activity["activity_description"]); ?></p>
                <h6>Le <?php echo ($datevent); ?> de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></h6>
                <span>Campus: <?php echo ($activity["building_name"]); ?></span>
                <h6>Local: <?php echo ($activity["room_name"]); ?></h6>

                <div class="col-12 p-0 my-4" >

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
                                        echo ' <div class="coeur text-right">';?>
                                        <a class="<?php if($inscritfavoris == "inscrit"){echo "remove";} else {echo "add";} ?>" href="#" data-activity="<?php echo $activity["activity_id"]; ?>">
                                        
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="<?php if($inscritfavoris == "inscrit"){echo "red";} else {echo "gray";} ?>" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>

                                            <?php //echo $inscrit; ?>
                                        
                                        </a>

                                        </div>
                                        <?php  
                        


                    } else { // s'il n'est pas logué, on lui affiche le lien pour se connecter

                    echo '<a class= "coeur mt-2" href="#"  data-toggle="modal" data-target="#exampleModal" style="float:right"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg> </a>';

                    } // affichage lein pour se connecter






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
                                
                                
                                // on va aussi aller voir si l'utilisateur connecté est déjà inscrit à l'activité
                                            $sql4 = "SELECT * FROM registrations WHERE activity_id = '$activityid' AND user_token = '$userid '";
                                            $results = $conn->query($sql4); 
                                            $rowcount=mysqli_num_rows($results); 
                                            echo '<div class="contenantboutoninscription">';
                                            if ($rowcount > 0) {
                                                
                                                // si oui, on lui propose de se désinscrire
                                                echo '<a href="#" class= "btn btn-danger desinscriptionactvite mb-2" data-activity="'.$activity["activity_id"].'">Je me désinscris</a>';
                                            } else {
                                                // si non, on lui propose de s'y inscrire
                                                echo '<a href="#" class= "btn btn-secondary inscriptionactvite mb-2" data-activity="'.$activity["activity_id"].'">Je m\'inscris</a>';
                                            }
                                            echo "</div>"; //#contenantboutoninscription
                                            
                                            echo '<h5 class="" >Il reste encore <span class="disponible">'.$placesrestantes.'</span> '.$places.'.</h5>';
                                            

                            } else {

                                echo "COMPLET";
                            }
                            
                        } // si connecté

                        else {
                            echo '<a href="#" class= "btn btn-secondary inscriptionactvite"   data-toggle="modal" data-target="#exampleModal">Je m\'inscris</a>';

                        }
                            
                        


                    ?>
                </div>
            </div>
            <div class="col-12  mt-5 mb-5  p-0" >
                <a href="activity.php" class="btn btn-secondary btn-lg btn-block mb-5">Retour</a>
            </div>
        </div>
    </div> <!--end of row-->
</div><!--end of container-lg-->

<?php } // foreach   fin de la boucle ?>





<?php require "footer.php" ?>