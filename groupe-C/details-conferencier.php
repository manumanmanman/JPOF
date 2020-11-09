<?php 

$page = 'Conférenciers';
require "header.php" ;
$idconferencier = $_GET["conferencierid"];

// echo $idconferencier;

$sql = " SELECT * FROM speakers WHERE speaker_id = '$idconferencier '";
$speakers = $conn->query($sql);
foreach ($speakers as $speaker) {


?>

<div id="conferencier" class="container mb-5">

<img class="img-conf rounded pb-3" src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
<h1><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h1>

<p class="pt-4"><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
<p class="des-conf p-5 rounded bg-white"><?php echo utf8_encode($speaker['speaker_description']); ?></p>
<a href="conferenciers.php" class="btn btn-secondary btn-lg btn-block my-5">Retour</a>


</div>  <!-- container -->

<?php }  // fin bouccle ?>


<?php require "footer.php" ; ?>