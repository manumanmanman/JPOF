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



    ?>

            <div class="col-lg-6 card-entier">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1><?php echo utf8_encode($activity["activity_name"]); ?></h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
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