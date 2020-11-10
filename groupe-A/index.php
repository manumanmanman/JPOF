<?php 
require "header.php";
require "admin/includes/conn.inc.php";
?>
<div class="container-fluid bi-nav-body">
<div class="container divactivite1">
        <div class="row" id="corps">
            <h1 class="col-12 activite"> Activités pour : <?php $result = $conn->query("SELECT event_name FROM events WHERE event_on = 1")->fetch(); echo $result["event_name"];
            ?></h1>
            <?php $sql = "SELECT * FROM activities LEFT JOIN events ON activities.event_id = events.event_id LEFT JOIN buildings ON activities.building_id = buildings.building_id LEFT JOIN rooms ON activities.room_id = rooms.room_id WHERE event_on = 1";
            $result = $conn->query($sql); ?>
            <?php foreach($result as $row){
                echo "<div class='col-lg-6 card-entier ".$row["activity_slug"]."'>

                <div class='cartes row'>

                    <div class='carte card-left col-6'>
                        <img src='".$row["activity_img"]."' alt=''>
                        <h2>".ucfirst($row["activity_slug"])."</h2>
                    </div>

                    <div class='col-6 carte card-right'>
                        <h1><a class='lien-ev' href='detail.php?id=".$row["activity_id"]."'>".$row["activity_name"]."</a></h1>
                        <h4>De ".date("G:i",strtotime($row["activity_start"]))." à ".date("G:i",strtotime($row["activity_end"]))."</h4>";
                        if(isset($_SESSION["token"])){
                            $token = $_SESSION["token"];
                            $id = $row["activity_id"];
                            $sql = " SELECT * FROM favorites WHERE activity_id = $id AND user_token = '$token' ";
                            $result = $conn->query($sql)->fetch();
                            if($result != FALSE){
                                echo "<a class= 'coeur' href='admin/includes/fav.inc.php?id=".$row["activity_id"]."&action=remove' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='red' xmlns='http://www.w3.org/2000/svg'>
                                <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                </svg></a>";
                            }else{
                                echo "<a class= 'coeur' href='admin/includes/fav.inc.php?id=".$row["activity_id"]."&action=add' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='gray' xmlns='http://www.w3.org/2000/svg'>
                                <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                </svg></a>";
                            }
                        }else{
                            echo "<a class= 'coeur' data-toggle='modal' data-target='#exampleModal' href='#'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='gray' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                            </svg></a>";
                        }
                        echo "<p>".$row["activity_description"]."</p>

                        <span>Bâtiment : ".$row["building_name"]."</span>
                        <h5>Local : ".$row["room_name"]."</h5>
        
                        <a href='admin/includes/register.inc.php?id=".$row["activity_id"]."' class= 'btn btn-success inscription'>Je m'inscris</a>
                    </div>
                </div>
                
            </div>";
            }
            ?>            

            <div class="col12 toutevenement">
            <a href="all-activities.php" class= "btn btn-success inscription">Voir toutes les activités</a>
            </div>

        </div> <!-- row fin -->
    </div> <!-- container fin -->
</div><!-- container-fluid fin -->















    <div class="container-fluid dubas">
        <div class="container divactivite2">
        <div class="row">
            <h1 class="col-12 activite">Activités de la journée Porte ouverte 2021</h1>

            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->

            <div class="col-lg-6 card-entier paramedical">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Paramedical</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
                
            </div> <!-- card fin -->


            <div class="col-lg-6 card-entier">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
                
            </div> <!-- card fin -->

            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->
            
                <div class="col12 toutevenement">
                <a href="all-activities.php" class= "btn btn-success inscription">Voir toutes les activités</a>
                </div>
            </div><!-- container fin -->
           
        </div> <!-- row fin -->
    </div> <!-- container-fluid fin -->












<?php require "footer.php" ?>
