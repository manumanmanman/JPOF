<?php 
$page = 'conferenciers';
require "header.php" ;
?>

<div id="bienvenue">
<h1>Conférenciers</h1>
</div>

<div class="container">
<div class="row">

<?php 

// boucle 
$sql = " SELECT * FROM speakers ";
$speakers = $conn->query($sql);
foreach ($speakers as $speaker) {

?>


<div class="col-12 col-md-4 conferencier">
<div class="row">
<div class="left">
<img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
</div> <!-- left -->
<div class="right">
<h1><a  href="detail-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></a></h1>

<p><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
</div><!-- right -->

</div> <!-- row -->

</div> <!-- conferencier -->


<?php // fin de boucle 

}
?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>