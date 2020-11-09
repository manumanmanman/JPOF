<?php
$page = 'Activitées';
require "header.php";

?>

<div id="activity">




<div class="container px-0">
    <div class="row">
<div class="col-12 px-4">
    <div class="col-12 mb-5 pt-3 border-top">
       <div class="chevron">
        <button class="btn btn-secondary filtre" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Filtrer  <i class="fa fa-chevron-down" aria-hidden="true"></i>
        
        </button>
        </div>
        <div class="collapse hidden" id="collapseExample">
        <form>
            <div class="form-row">
                <div class="col"><label class="mr-sm-2 pl-1 text-dark" for="date">Date</label></div>
                <div class="col"><label class="mr-sm-2 pl-1 text-dark" for="inlineFormCustomSelectSite">Site</label></div>
                <div class="col"><label class="mr-sm-2 pl-1 text-dark" for="inlineFormCustomSelectDepartment">Département</label></div>
                <div class="col"></div>
            </div>
        <div class="form-row">
            <div class="col">
                
                <input id="date" type="date" class="form-control" placeholder="State"> 
            </div>
            <div class="col ">
            
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelectSite">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="col ">
            
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelectDepartment">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <div class="col">
            <button type="submit" class="btn btn-secondary btn-block">Submit</button>
            </div>
        </div>
  
        </form>
        </div>
    </div>
</div> <!-- eind of outer container form -->
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
    // $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));
    $datevent = (strftime("%A %d %B %G ", $datevent ));

    $heuredebut = strtotime( $activity['activity_start'] );
    $heuredebut = strftime("%Hh%M", $heuredebut);

    $heurefin = strtotime( $activity['activity_end'] );
    $heurefin = strftime("%Hh%M", $heurefin);

    $activityid = $activity["activity_id"];

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }
    


?>

    

    <div id="id_<?php echo $activityid ; ?>" class="col-lg-4 col-md-6 mb-5 text-center <?php echo $activity["category_slug"]; ?> ">
    
        <div class="card mb-5" style="">
        <div class="card-header bg-white">
        <h5><a  class="hover-link text-dark card-title" href="details-activity.php?activityid=<?php  echo $activity["activity_id"]; ?>"><span data-content="<?php echo utf8_encode($activity['activity_name']); ?>"><?php echo utf8_encode($activity["activity_name"]); ?></span></a>  <?php //echo $activity["activity_id"]; ?></h5>
        </div>
            
        <div class="main-card-body">
            
            <a href="details-activity.php?activityid=<?php  echo $activity["activity_id"]; ?>"><img class="card-img-top" src="<?php echo $activity["activity_img"]; ?>" alt="<?php echo utf8_encode($activity["activity_name"]); ?>"></a>
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
                                                echo ' <div class="coeur">';?>
                                                <a class="<?php if($inscritfavoris == "inscrit"){echo "remove";} else {echo "add";} ?>" href="#" data-activity="<?php echo $activity["activity_id"]; ?>">
                                               
                                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="<?php if($inscritfavoris == "inscrit"){echo "red";} else {echo "gray";} ?>" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                  </svg>

                                                 <?php //echo $inscrit; ?>
                                                
                                                </a>

                                                </div>
                                               <?php  
                                


                            } else { // s'il n'est pas logué, on lui affiche le lien pour se connecter

                            echo '<a class= "coeur" href="#"  data-toggle="modal" data-target="#exampleModal"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                              </svg></a>';

                            } // affichage lein pour se connecter
       
                            ?>
            </div>
                        
            <div class="card-body second-card-body 
            
            <?php if ($activity["category_name"] == "Paramédical - Biologie médical"){
            echo 'b-category-name-red';

        }elseif ($activity["category_name"] == "Économique & Social"){
            echo 'b-category-name-orange';
        
        }elseif ($activity["category_name"] == "Arts Appliqués"){
            echo 'b-category-name-green';
        
        }elseif ($activity["category_name"] == "Pédagogique"){
            echo 'b-category-name-blue';
        
        }elseif ($activity["category_name"] == "Technique"){
            echo 'b-category-name-purple';
        }  ?>">
            
                <p class="card-text text-left"><?php echo ($activity["activity_description"]); ?></p> 
                
                
            </div>
            <div class="card-body date-card-body">
                <p class="text-info">Le <?php echo $datevent; ?><br> de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></p>

            </div>
            <div class="card-footer">

                <?php


// si connecté 
if(isset($_SESSION["user"])){



if ($nombreinscriptions < $activity["activity_size"]) {


            // on va aussi aller voir si l'utilisateur connecté est déjà inscrit à l'activité
            $sql4 = "SELECT * FROM registrations WHERE activity_id = '$activityid' AND user_token = '$userid '";
            $results = $conn->query($sql4); 
            $rowcount=mysqli_num_rows($results); 
            echo '<div class="contenantboutoninscription">';
            if ($rowcount > 0) {
               
             // si oui, on lui propose de se désinscrire
             echo '<a href="#" class= "btn btn-danger   btn-block desinscriptionactvite text-white" data-activity="'.$activity["activity_id"].'">Je me désinscris</a>';
            } else {
           // si non, on lui propose de s'y inscrire
            echo '<a href="#" class= "btn btn-secondary  btn-block inscriptionactvite text-white" data-activity="'.$activity["activity_id"].'">Je m\'inscris</a>';
            }
            echo "</div>"; //#contenantboutoninscription

            

} else {

echo "COMPLET";
}

} // si connecté

else {
echo '<a href="#" class= "btn btn-secondary  btn-block inscriptionactvite text-white"   data-toggle="modal" data-target="#exampleModal">Je m\'inscris</a>';

}

?>

            </div>


        </div> <!-- end of card-->
    
    </div> 
  
 <?php } ?>
    






    </div> <!-- row-->

</div><!--  end of container-->




















</div><!--  end of activity ID-->

<?php require "footer.php"?>
