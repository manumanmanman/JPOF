<?php require "header.php";
require "admin/includes/conn.inc.php" ?>
<div id="screensize"></div>
<br>



<div class="container-fluid bi-nav-body">
    <div class="container divactivite1">
        
            <div class="row">
                <?php 
                $id = $_GET["id"];
                $sql = "SELECT * FROM activities LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id LEFT JOIN buildings ON activities.building_id = buildings.building_id LEFT JOIN rooms ON activities.room_id = rooms.room_id WHERE activity_id = $id";
                $result = $conn->query($sql)->fetch();
                echo "<div class='col-12 col-md-6 imgact'>
                    <h4>".ucfirst($result["activity_slug"])."</h4>
                    <img src='".$result["activity_img"]."' alt=''>
                </div>
                <div class='col-12 col-md-6 txtact'>
                <h1>".$result["activity_name"]."</h1>
                            <h4>De ".date("G:i",strtotime($result["activity_start"]))."h à ".date("G:i",strtotime($result["activity_end"]))."h</h4>";
                            if(isset($_SESSION["token"])){
                                $token = $_SESSION["token"];
                                $id = $result["activity_id"];
                                $sql2 = " SELECT * FROM favorites WHERE activity_id = $id AND user_token = '$token' ";
                                $result2 = $conn->query($sql2)->fetch();
                                if($result2 != FALSE){
                                    echo "<a class= 'coeur' href='admin/includes/fav.inc.php?id=".$result["activity_id"]."&action=remove' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='red' xmlns='http://www.w3.org/2000/svg'>
                                    <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                    </svg></a>";
                                }else{
                                    echo "<a class= 'coeur' href='admin/includes/fav.inc.php?id=".$result["activity_id"]."&action=add' ><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='gray' xmlns='http://www.w3.org/2000/svg'>
                                    <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                    </svg></a>";
                                }
                            }else{
                                echo "<a class= 'coeur' data-toggle='modal' data-target='#exampleModal' href='#'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-heart-fill' fill='gray' xmlns='http://www.w3.org/2000/svg'>
                                <path fill-rule='evenodd' d='M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z'/>
                                </svg></a>";
                            }
                            echo "<p>".$result["activity_description"]."
                                <br><br>
                                Par <span id='speaker-txt-detail'>".$result["speaker_name"].", ".$result["speaker_surname"]."</span>

                        
                            </p>
                            

                            <span>Bâtiment: ".$result["building_name"]."</span>
                            <h5>Local: ".$result["room_name"]."</h5>";

                            if(isset($_SESSION["token"])){
                                echo "<a href='#' class= 'btn btn-success inscription'>Je m'inscris</a>";
                            }else{
                                echo "<a data-toggle='modal' data-target='#exampleModal' href='#' class= 'btn btn-success inscription'>Je m'inscris</a>";
                            }
                            
                echo "</div>
                <div class='col-12 google-maps'>
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.436087895105!2d4.3417609152810925!3d50.84160836698417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f8e9e6e5%3A0xce8f6e6d0dc0ab14!2sHaute%20%C3%89cole%20Francisco%20Ferrer!5e0!3m2!1sfr!2sbe!4v1603753975273!5m2!1sfr!2sbe'  frameborder='0' style='border:0;' allowfullscreen=' aria-hidden='false' tabindex='0'></iframe>
                </div>

            </div>";?>
        
    </div>
</div>
    


<div class="container-fluid dubas dubas-detail">
        <div class="container divactivite2 divactivite2-detail">
        <div class="row">

        <div class="col-12 suggestions"><h5>Suggestions:</h4></div>
            
            <div class="col-lg-6 card-entier pedagogique ">
                
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

            </div><!-- container fin -->
           
           </div> <!-- row fin -->
       </div> <!-- container-fluid fin -->            

<?php require "footer.php" ?>