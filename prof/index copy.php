<?php require "header.php" ?>
<div class="container">
        <div class="row">

            <div class="col-lg-6 card-entier">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
             
            </div> <!-- card entier -->


            <div class="col-lg-6 card-entier">
           
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/vue.jpeg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                
                </div>
                
            </div>  <!-- card entier -->

            <div class="col-lg-6 card-entier">
           
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                
                </div>
                
            </div>  <!-- card entier -->

            <div class="col-lg-6 card-entier">
           
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><img src="img/image-coeur-png-blanc.png" alt="coeur"></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                
                </div>
                
            </div>  <!-- card entier -->

        </div>
    </div>


<?php

date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 

$sql = "  SELECT * FROM activities 

LEFT JOIN rooms ON activities.room_id = rooms.room_id
LEFT JOIN buildings ON activities.building_id = buildings.building_id
LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id 
LEFT JOIN categories ON activities.category_id = categories.category_id 

ORDER BY activity_date";
$activities = $conn->query($sql);

  foreach ($activities as $activity) {



    $datevent = strtotime( $activity['activity_date'] );
    $datevent = strftime("%A %d %B %G ", $datevent );
    $heureevent = strftime("%Hh%M", $activity['activity_date'] );

    $idactivity = $activity['activity_id'];



    echo utf8_encode($activity['activity_name'])."<br>";
    echo $activity['activity_date']."<br>";
    echo $datevent."<br>";
    echo ($activity['room_name'])."<br>";
    echo ($activity['building_name'])."<br>";
    echo ($activity['speaker_name'])."<br>";
    echo utf8_encode($activity['category_name'])."<br>";

    echo "<hr>";

  }


?>

 <!-- LEFT JOIN locaux ON activities.room_id = rooms.room_id
                  LEFT JOIN buildings ON activities.building_id = buildings.building_id
                   LEFT JOIN speakers ON activities.activity_speaker = speakers.speakers_id -->


<?php require "footer.php" ?>