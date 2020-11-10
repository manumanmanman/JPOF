<?php 
$page = 'conferenciers';
require "header.php" ;
?>

<div id="bienvenue">
<h1>Conférenciers</h1>
</div>

<div class="container conf">
<div class="row">

<?php 

// boucle 
$sql = " SELECT * FROM speakers ";
$speakers = $conn->query($sql);
foreach ($speakers as $speaker) {

?>


<div class="col-sm-6 col-md-4 col-lg-3 conferencier">
<a  href="detail-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>">
<img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">

<h1><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></a></h1>

</div><!-- col -->




<?php // fin de boucle 

}
?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>