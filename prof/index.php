<?php require "header.php" ?>
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
          LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id
";
$activities = $conn->query($sql);
foreach ($activities as $activity) {    // Début de la boucle

    $datevent = strtotime( $activity['activity_date'] );
    $datevent = strftime("%A %d %B %G ", $datevent );

    $heuredebut = strtotime( $activity['activity_start'] );
    $heuredebut = strftime("%Hh%M", $heuredebut);

    $heurefin = strtotime( $activity['activity_end'] );
    $heurefin = strftime("%Hh%M", $heurefin);

    $activityid = $activity["activity_id"];
$userid = $_SESSION["userid"];
    ?>
            <div id="id_<?php echo $activity["activity_id"]; ?>" class="col-lg-6 card-entier <?php echo $activity["category_slug"]; ?>">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2><?php echo utf8_encode($activity["category_name"]); ?></h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1><?php echo utf8_encode($activity["activity_name"]); ?></h1>
                        <h4>Le <?php echo $datevent; ?> <br>
                        de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></h4>

                        <!-- on check si l'utilisateur est logué, 
                        SI oui -->
                        <?php if(isset($_SESSION["user"])) { 

// echo $activityid." - ".$userid;

                            
                        //  on check si l'activité est déjà dans ses favoris 
                        $sql2 = "SELECT * FROM favorites WHERE activity_id = '$activityid'";
                        $results = $conn->query($sql2); 
                        $rowcount=mysqli_num_rows($results); 

                          

                       

                            //   echo $result["actvity_id"];
                            // echo "ok";

                            if ($rowcount == 1){

                                echo ' <a class= "coeur" href="inc/remove-from-favorites.php?activity_id='.$activity["activity_id"].'"><img src="img/image-coeur-png-1.png" title="Retirer des favoris"></a>';


                        } else {

                                echo '<a class= "coeur" href="inc/add-to-favorites.php?activity_id='.$activity["activity_id"].'"><img src="img/image-coeur-png-blanc.png" title="Ajouter aux favoris"></a>';
                        }
                            

                         
                           
                            
                        //        
                            ?>

                            

                                    



                                <!-- si oui, on lui permet de le retirer des favoris (et on met le coeur rouge = est déjà dans favoris) -->
                                <?php ?>
                                   
                        
                            
                        <!-- SI NON, il n'est pas logué, on lui propose de se loguer/enregister -->
                        <?php } else { ?>
                            <a class= "coeur" href="#"  data-toggle="modal" data-target="#exampleModal"><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>

                        <?php } ?>

                        




                        <p><?php echo utf8_encode($activity["activity_description"]); ?></p>

                        <span>Campus: <?php echo utf8_encode($activity["building_name"]); ?></span>
                        <h5>Local: <?php echo utf8_encode($activity["room_name"]); ?></h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
             
            </div> <!-- card entier -->

            <?php

    
// echo utf8_encode($activity["activity_id"])."<br>";
// echo "<strong>".utf8_encode($activity["activity_name"])."</strong><br>";
// echo utf8_encode($activity["activity_description"])."<br>";

// echo "<span style='color:red'>".utf8_encode($activity["room_name"])."</span><br>";
// echo "<span style='color:orange'>".utf8_encode($activity["building_name"])."</span><br>";
// echo "<span style='color:blue'>".utf8_encode($activity["category_name"])."</span><br>";
// echo "<span style='color:yellowgreen'>".utf8_encode($activity["speaker_name"])." ".utf8_encode($activity["speaker_surname"])."</span><br>";

// echo $datevent."<br>";
// echo $heuredebut."<br>";
// echo $heurefin."<hr>";

?>

         <!-- fermer ma boucle     -->
 <?php } // foreach   fin de la boucle ?>
     

            

        </div>   <!-- row -->








</div>  <!-- / container  -->






<?php require "footer.php" ?>