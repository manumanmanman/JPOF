<?php require "header.php";require "admin/includes/conn.inc.php" ?>

<div id="screensize"></div>

<br>

<div class="container-fluid allconf">
<div class="container">
        <div class="row rowconf">

            <h1 class="col-12 titreconferencier">Les conférenciers</h1>
            <?php 
            $sql = "SELECT * FROM speakers";
            $result = $conn->query($sql);
            foreach($result as $row){
                echo "<div class='col-lg-6 conferencier'>
                        
                        <div class='row conftout'>
    
                            <div class='conf-left col-6'>
                                <a href='detail-speaker.php'><img src='".$row["speaker_pfp"]."' alt=''></a>
                                
                            </div><!--  left fin -->
    
                            <div class='col-6 conf-right'>
                                <a href='detail-speaker.php'><h1>".$row["speaker_name"].", ".$row["speaker_surname"]."</h1></a>
                                <a href='linkedin/prof=Jeanboffrot'><img target='_blank' src='img/linkedin.png' alt='profil linkedin de ".$row["speaker_name"].", ".$row["speaker_surname"]."'></a><br>

                            </div><!--  right fin -->
                            
                        </div> <!--  row fin -->
                        
                    </div> <!--  conferencier fin -->";
            }
            ?>
            <div class="col-12 lienall">
            <a href="all-activities.php" class= "btn btn-success acti">Voir toutes les activités</a>
            </div>

        </div> <!-- row fin -->
    </div> <!-- container fin -->
</div><!-- container-fluid fin -->





<?php require "footer.php" ?>
