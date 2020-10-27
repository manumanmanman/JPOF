<?php 

$page = 'conferencier';
require "header.php" ;
$idconferencier = $_GET["conferencierid"];

// echo $idconferencier;

$sql = " SELECT * FROM speakers WHERE speaker_id = '$idconferencier '";
$speakers = $conn->query($sql);
foreach ($speakers as $speaker) {


?>
<div class="container">
<img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
<h1><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h1>

<p><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
<?php echo utf8_encode($speaker['speaker_description']); ?>



</div>  <!-- container -->

<?php }  // fin bouccle ?>


<?php require "footer.php" ; ?>