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
foreach ($favorites as $favorite) {


echo utf8_encode($favorite["activity_name"]).'<div class="coeur"><a class="remove" href="#" data-activity="'.$favorite["activity_id"].'">Retirer des favoris</a></div><br>';

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

