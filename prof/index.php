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

        <?php


$sql = " SELECT * FROM activities";
$activities = $conn->query($sql);
foreach ($activities as $activity) {

echo utf8_encode($activity["activity_id"])."<br>";
echo "<strong>".utf8_encode($activity["activity_name"])."</strong><br>";
echo utf8_encode($activity["activity_description"])."<br>";
echo utf8_encode($activity["room_id"])."<br>";
echo utf8_encode($activity["building_id"])."<br>";
echo utf8_encode($activity["activity_date"])."<br>";
echo utf8_encode($activity["activity_start"])."<br>";
echo utf8_encode($activity["activity_end"])."<hr>";


} // foreach

?>



</div>  <!-- / container  -->






<?php require "footer.php" ?>