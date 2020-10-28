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
<div class="row">
    <div class="col-12">
        <h1 class="h1_home">Informations</h1>
	</div> 
	<div class="col-md-4">
            <div class="card">
				<img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
            <div class="card-body">
				<h3><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h3>
				<p><?php echo utf8_encode($speaker['speaker_description']); ?></p>
                <p class="text-justify"><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
			</div> <!-- /card -->
			</div> <!-- /card-body -->
    </div> <!-- /col-md-4 -->	

		
	<div class="col-md-8">	
			<h3>Ses évènements</h3>
				<div class="card-group">
					<div class="card">
						<img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
					<div class="card-body">
						<button type="button" class="add btn btn-light btn-circle float-right">+</button> 
						<p class="card-text"><small class="text-muted">jeu, 24 mai, 12:30</small></p>
						<h5 class="card-title">La sécurité avant TOUT!</h5>
					</div> <!-- /card-body -->
					</div> <!-- /card -->
				
					<div class="card">
						<img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
					<div class="card-body">
						<button type="button" class="add btn btn-light btn-circle float-right">+</button> 
						<p class="card-text"><small class="text-muted">jeu, 24 mai, 12:30</small></p>
						<h5 class="card-title">La sécurité avant TOUT!</h5>
					</div> <!-- /card-body -->
					</div> <!-- /card -->
				
					<div class="card">
						<img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
					<div class="card-body">
						<button type="button" class="add btn btn-light btn-circle float-right">+</button> 
						<p class="card-text"><small class="text-muted">jeu, 24 mai, 12:30</small></p>
						<h5 class="card-title">La sécurité avant TOUT!</h5>
					</div> <!-- /card-body -->
					</div> <!-- /card -->


				</div> <!-- /card-group -->
	</div> <!-- /col-md-8 -->
			
			
</div> <!-- /row -->
</div> <!-- /container -->



<?php }  // fin bouccle ?>

<?php require "footer.php" ?>

