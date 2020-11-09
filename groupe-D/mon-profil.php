<?php require "header.php" ;
$userid = $_SESSION["userid"];

?>

<div id="bienvenue">
<h1>Mon profil</h1>
</div>
 

<div class="container">
 
<div class="row">
<div class="col-12">
<?php 


if (!isset($_SESSION["user"])) { // il n'est pas logué, on redirige vers la page d'accueil

  

    
  } else { // il est logué, on lui affiche ses infos et les activité dans ses favoris et auxquelles il est inscrit

    $sql = " SELECT  * FROM users WHERE user_id = '$userid'";
    $users = $conn->query($sql);
    foreach ($users as $user) {





 ?>
 <h1>Bienvenue : <?php echo $user["user_name"]; ?></h1>
 </div>

 <div class="col-12 col-md-6">
<h4>Activités dans vos favoris</h4>
<?php 
$sql = "SELECT  * FROM favorites 
        RIGHT JOIN  activities ON favorites.activity_id = activities.activity_id
        WHERE favorites.user_token = '$userid'";
$favorites = $conn->query($sql);
foreach ($favorites as $favorite) { ?>


<div class="favorisurprofil">
<h3><?php echo ($favorite["activity_name"]); ?></h3>
<div class="coeur"><a class="remove btn btn-danger" href="#" data-activity="<?php echo ($favorite["activity_id"]); ?>"><span class="texte">Retirer des favoris</span></a></div>
</div>


   <?php } //($favorites as $favorite) ?>
</div>
<div class="col-12 col-md-6">

<h4>Activités auxquelles vous êtes inscrit</h4>
<?php 
$sql = "SELECT  * FROM registrations 
        RIGHT JOIN  activities ON registrations.activity_id = activities.activity_id
        WHERE registrations.user_token = '$userid'";
$registrations = $conn->query($sql);
foreach ($registrations as $registration) { ?>


<div class="inscritsurprofil">
<h3><a href="detail-activite.php?activityid=<?php  echo $registration["activity_id"]; ?>"><?php echo ($registration["activity_name"]); ?></a></h3>
<div class="contenantboutoninscription"><a class="desinscriptionactvite  btn btn-danger" href="#" data-activity="<?php echo ($registration["activity_id"]); ?>"><span class="texte">Se désinscrire</span></a></div>
</div>


   <?php } //($favorites as $favorite) ?>




<?php 

} // foreach ($users as $user) {

} // si il est logué

?>
</div>
</div><!-- row -->

</div> <!-- container -->
<?php require "footer.php" ?>