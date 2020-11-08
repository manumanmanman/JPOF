<?php require "header.php" ;
$userid = $_SESSION["userid"];

?>
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
<h3>Bienvenue : <?php echo $user["user_name"]; ?></h3>

<h4>Activités dans vos favoris</h4>
<?php 
$sql = "SELECT  * FROM favorites 
        RIGHT JOIN  activities ON favorites.activity_id = activities.activity_id
        WHERE favorites.user_token = '$userid'";
$favorites = $conn->query($sql);

$sql = "SELECT * FROM activities ";
$activities = $conn->query($sql);


foreach ($favorites as $favorite) {


echo utf8_encode(' <div class="col-12 col-md-4 full-card '.<?php echo $activity["category_slug"]?> ">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo ($favorite["activity_img"])?>" alt="Card image cap">

    <div class="carre <?php echo $favorite["category_slug"]?>">
   <p class="icones"> <i class="far fa-bookmark"></i>  <?php echo  ($favorite["category_name"])?></i></p> <br>
   <p class="icones"><i class="far fa-calendar-alt"></i>  <?php echo utf8_encode ($favorite["activity_date"])?> </p></i> <br>
   <p class="icones"> <i class="fas fa-map-pin"></i> <?php echo ($favorite["building_name"])?></i></p> <br>
   <p class="icones"> <i class="fas fa-microphone-alt"></i> <?php echo ($favorite["speaker_name"])?> </p></i>

    </div>  <!-- FIN DU CARE -->

  <div class="card-body">
    <h5 class="card-title"> <a href="detail-activite.php?activityid=<?php echo $favorite["activity_id"];?>"> 
    <?php echo  ($favorite["activity_name"]);?></a></h5>
    <p class="card-text"><?php echo  ($favorite["activity_description"])?></p>'.'<div class="coeur"><a class="remove" href="#" data-activity="'.$favorite["activity_id"].'">Retirer des favoris</a></div><br>';

   
} //($favorites as $favorite) {


?>

    


<h4>Activités auxquelles vous êtes inscrit</h4>





<?php 

} // foreach ($users as $user) {

} // si il est logué

?>
</div>
</div><!-- row -->

</div> <!-- container -->
<?php require "footer.php" ?>