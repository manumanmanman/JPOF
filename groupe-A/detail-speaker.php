<?php require "header.php";require "admin/includes/conn.inc.php"; $id = $_GET["id"] ?>

<div id="screensize"></div>
<br>


<div class="container-fluid container-detail-speaker">
    <div class="event">
        <div class="row">
        <?php 
        $sql = "SELECT * FROM speakers WHERE speaker_id = $id";
        $result = $conn->query($sql)->fetch();
        $linked = $result["speaker_linkedin"];
            echo "<div class='rounded-circle'>
                
            <img src='".$result["speaker_pfp"]."' alt=''>
            </div>

            <div class='col-12 info-speaker'>
                <h1>".$result["speaker_name"].", ".$result["speaker_surname"]."</h1>
                        <div class='events-speaker'>
                            <div class='row events-liés'>
                                    <div class='col-12 col-md-6'><h4>Evenement(s) lié(s) à ".$result["speaker_name"].", ".$result["speaker_surname"]." : </div>
                                    <div class='liens col-12 col-md-6'>";
                                    $sql = "SELECT * FROM activities WHERE activity_speaker = $id";
                                    $result = $conn->query($sql);
                                    foreach($result as $row){
                                        echo "<a href='#'>".$row["activity_name"]."</a></h4>";
                                    }
                                    echo "</div>
                            </div>
                                <div class='row events-liés'>
                                    <div class='col-12 col-md-6'><h4>Contacter Jean Neymar : </h4></div> 
                                    <div class='liens col-12 col-md-6'><a target='_blank' href='https://LinkedIn.com/".$linked."'>LinkedIn/".$linked."</a></div>
                                </div>
                        </div>
                      

                        
                      
            </div>                               
        </div>";
        ?>
    </div>
</div>
    

<?php require "footer.php" ?>