<?php require "header.php" ;
$userid = $_SESSION["userid"];

?>
<div class="pageprofil">
<div id="bienvenue">
<h1>Mon profil</h1>
</div>
 

<?php 


if (!isset($_SESSION["user"])) { // il n'est pas logué, on redirige vers la page d'accueil

  

    
  } else { // il est logué, on lui affiche ses infos et les activité dans ses favoris et auxquelles il est inscrit

    $sql = " SELECT  * FROM users WHERE user_id = '$userid'";
    $users = $conn->query($sql);
    foreach ($users as $user) {

 ?>
 <div class=" profil text-center">
<h1> <i class="fas fa-user mr-1"> <?php echo $user["user_name"];?><a class="btn btn-secondary ml-5" href="inc/logout.inc.php" role="button">Se déconnecter</a><br><?php echo $user["user_email"];?>
</i></h1>
<h4>Activités dans vos favoris</h4>
</div>



<div class="container favoriprofil">
 
<div class="row">

<?php 
$sql = "SELECT  * FROM favorites 
        RIGHT JOIN  activities ON favorites.activity_id = activities.activity_id
        LEFT JOIN buildings ON activities.building_id = buildings.building_id
        LEFT JOIN categories ON activities.category_id = categories.category_id
        LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id
        WHERE favorites.user_token = '$userid'";
$favorites = $conn->query($sql);
foreach ($favorites as $favorite) { ?>


<div class="favorisurprofil full-card col-md-6 col-lg-4 <?php echo $activity["category_slug"]?>">
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo ($favorite["activity_img"])?>" alt="Card image cap">

    <div class="carre <?php echo $favorite["category_slug"]?>">
   <p class="icones"> <i class="far fa-bookmark"></i>  <?php echo  ($favorite["category_name"])?></i></p> <br>
   <p class="icones"><i class="far fa-calendar-alt"></i>  <?php echo  ($favorite["activity_date"])?> </p></i> <br>
   <p class="icones"> <i class="fas fa-map-pin"></i> <?php echo  ($favorite["building_name"])?></i></p> <br>
   <p class="icones"> <i class="fas fa-microphone-alt"></i> <?php echo ($favorite["speaker_name"])?> </p></i>

    </div>  <!-- FIN DU CARE -->

  <div class="card-body">
    <h5 class="card-title"> <a href="detail-activite.php?activityid=<?php echo $favorite["activity_id"];?>"> 
    <?php echo ($favorite["activity_name"]);?></a></h5>
    <p class="card-text"><?php echo ($favorite["activity_description"])?></p>
<div class="coeur"><a class="remove btn btn-danger" href="#" data-activity="<?php echo ($favorite["activity_id"]); ?>"><span class="texte">Retirer des favoris</span></a></div>
</div>


</div><!-- FIN DU CARD-BODY -->
</div><!-- FIN DU FULL-CARD -->



   <?php } //($favorites as $favorite) ?>



</div><!-- row -->

</div> <!-- container -->




<div class=" profil text-center">

<h4>Activités auxquelles vous êtes inscrit</h4>
</div>



<div class="container inscritprofil">
 
<div class="row">

<?php 

$sql = "SELECT  * FROM registrations 
        RIGHT JOIN  activities ON registrations.activity_id = activities.activity_id
        LEFT JOIN buildings ON activities.building_id = buildings.building_id
        LEFT JOIN categories ON activities.category_id = categories.category_id
        LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id
        WHERE registrations.user_token = '$userid'";
$registrations = $conn->query($sql);
foreach ($registrations as $registration) { ?>



<div class="inscritsurprofil full-card col-md-4  <?php echo $activity["category_slug"]?>">
<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo ($registration["activity_img"])?>" alt="Card image cap">

    <div class="carre <?php echo $registration["category_slug"]?>">
   <p class="icones"> <i class="far fa-bookmark"></i>  <?php echo  ($registration["category_name"])?></i></p> <br>
   <p class="icones"><i class="far fa-calendar-alt"></i>  <?php echo  ($registration["activity_date"])?> </p></i> <br>
   <p class="icones"> <i class="fas fa-map-pin"></i> <?php echo  ($registration["building_name"])?></i></p> <br>
   <p class="icones"> <i class="fas fa-microphone-alt"></i> <?php echo ($registration["speaker_name"])?> </p></i>

    </div>  <!-- FIN DU CARE -->

  <div class="card-body">
    <h5 class="card-title"> <a href="detail-activite.php?activityid=<?php echo $registration["activity_id"];?>"> 
    <?php echo ($registration["activity_name"]);?></a></h5>
    <p class="card-text"><?php echo ($registration["activity_description"])?></p>
    <div class="contenantboutoninscription"><a class="desinscriptionactvite  btn btn-danger" href="#" data-activity="<?php echo ($registration["activity_id"]); ?>"><span class="texte">Se désinscrire</span></a></div>
</div>



</div><!-- FIN DU CARD-BODY -->
</div><!-- FIN DU FULL-CARD -->



   <?php } //($registrations as $registration) ?>



</div><!-- row -->

</div> <!-- container -->



   <?php } //($favorites as $favorite) ?>




<?php 

} // foreach ($users as $user) {



?>
</div>





</div> 
<!-- fin page profil -->

<?php require "footer.php" ?>