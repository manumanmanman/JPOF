<?php require "header.php";require "admin/includes/conn.inc.php"; ?>
<div id="screensize"></div>
<br>

<div class="container-fluid bi-nav-body">
<div class="container divactivite1">
        <div class="row">

        <div class="col-12 filtre">
            <div class="filtre-tout">

            <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtrer les activités
            </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
      <div class="tout">
    <span>Trier par </span>
                <div class="custom-select departement">
                    <select>
                        <option value="0">département :</option>
                        <option value="1">Tout</option>
                        <option value="1">Technique graphique</option>
                        <option value="2">Pédagolique</option>
                        <option value="3">Art appliqués</option>
                        <option value="4">Paramédical</option>
                        <option value="5">Economie / social</option>
                    </select>
                </div><!--departement fin -->

                <div class="custom-select heure">
                    <select>
                        <option value="0">horaire :</option>
                        <option value="1">Tout</option>
                        <option value="1">8h - 10h</option>
                        <option value="2">10h - 12h</option>
                        <option value="3">12h - 14h</option>
                        <option value="4">14h - 16h</option>
                        <option value="5">16h - 18h</option>
                    </select>
                </div><!--heure fin -->



                <div class="custom-select implantation">
                    <select>
                        <option value="0">implantation :</option>
                        <option value="1">Tout</option>
                        <option value="1">Aneessens</option>
                        <option value="2">Palais du midi</option>
                        <option value="3">Brugmann</option>
                        <option value="4">Terre-Neuve</option>
                        <option value="5">Lemonnier</option>
                    </select>
                </div><!--implantation fin -->


                <div class="custom-select jour">
                    
                    <input type="date" id="start" name="trip-start"
                    value="2021-10-28"
                    min="2021-01-01" max="2021-12-31">
                    
                </div><!--jour fin -->




            </div>
    </div> <!--card fin -->
</div> <!--collapse fin -->

         </div> <!--filtre-tout fin -->
        </div><!--filtre fin -->


            <?php
            $sql = "SELECT * FROM activities LEFT JOIN events ON activities.event_id = events.event_id LEFT JOIN buildings ON activities.building_id = buildings.building_id LEFT JOIN rooms ON activities.room_id = rooms.room_id WHERE event_on = 1";
            $result = $conn->query($sql);

            foreach($result as $row){
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

        </div> <!-- row fin -->
    </div> <!-- container fin -->
</div><!-- container-fluid fin -->



<?php require "footer.php" ?>
