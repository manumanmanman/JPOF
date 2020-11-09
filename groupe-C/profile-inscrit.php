<?php 
$page = 'activites';
$fuserid = $_GET["fuserid"];
$current = $_SESSION["userid"];
require "header.php" ;
?>

<div id="profile">
<div class="container px-0">
<div class="row">
<?php 


if (!isset($_SESSION["user"])) { // il n'est pas logué, on redirige vers la page d'accueil

  

    
  } else { // il est logué, on lui affiche ses infos et les activité dans ses favoris et auxquelles il est inscrit

    $sql = " SELECT  * FROM users WHERE user_id = '$fuserid'";
    $users = $conn->query($sql);
    foreach ($users as $user) {

 ?>

 <div class="col-12  px-4 mb-5">
     <h1 class="text-dark mb-4 pb-2 px-3 border-bottom">Bienvenue : <?php echo $user["user_name"]; ?></h1>
     <h4 class="text-danger mt-5 pb-2 px-3">Activités auxquelles vous êtes inscrit</h4>
 </div>

<?php }}
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, "fr_FR"); 


if(isset($_SESSION["user"])){
    // s'il est logué, je vais faire une query dans la table favorites
    $userreg = "SELECT  * FROM registrations 
    RIGHT JOIN  activities ON registrations.activity_id = activities.activity_id
    WHERE registrations.user_token = '$fuserid'";

    

   $results = $conn->query($userreg); 
   $rowcount=mysqli_num_rows($results); 
   if ($rowcount > 0) {
    foreach($results as $result){

    $datevent = strtotime( $result['activity_date'] );
    // $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));
    $datevent = utf8_encode(strftime("%A %d %B %G ", $datevent ));

    $heuredebut = strtotime( $result['activity_start'] );
    $heuredebut = strftime("%Hh%M", $heuredebut);

    $heurefin = strtotime( $result['activity_end'] );
    $heurefin = strftime("%Hh%M", $heurefin);

    $activityid = $result["activity_id"];



 ?>




   
    
<div class="col-12 col-lg-4 col-md-6 mb-5 mx-0 pb-5 d-flex justify-content-center">

    
    <div class="card " style="width: 20rem;">
        
        <div class="card-header bg-white">
            <h4 class="card-title hover-link text-dark card-title"><?php echo ($result["activity_name"]); ?></h4>
        </div>
        <div class="main-card-body">
            <img src="<?php echo utf8_encode($result['activity_img']); ?>" class="card-img-top" alt="<?php echo utf8_encode($result["activity_name"]); ?>">
        </div>
        
        
        <!-- <h6>Campus: <?php //echo ($result["building_name"]); ?></h6>
        <h6>Local: <?php //echo ($result["room_name"]); ?></h6> -->
        
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
        
        <p class="card-text text-left"><?php echo ($result["activity_description"]); ?></p> 
        
        
        
    </div>
    <div class="card-body date-card-body">
        <p class="text-info">Le <?php echo $datevent; ?><br> de <?php echo $heuredebut; ?> à <?php echo $heurefin; ?></p>
        
    </div>
    
    <div class="card-footer">
    <div class="contenantboutoninscription"><a class="desinscriptionactvite  btn btn-danger text-white btn-block" href="#" data-activity="<?php echo ($result["activity_id"]); ?>"><span class="texte">Se désinscrire</span></a></div>
    </div>


</div>

</div><!-- end of col-->














<?php }//end of boucle foreach

}//end of if rowcount
}// end of if isset

?>

<div class="col-12 px-4">
<a href="Profile.php?fuserid=<?php echo $fuserid?>" type="button" class="btn btn-secondary btn-lg btn-block mb-5">Retour</a>
</div>

</div><!--end of row-->
</div> <!--end of Containr fluid-->
</div> <!--end of profile Id-->


<?php require "footer.php" ?>