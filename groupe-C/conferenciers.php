<?php 
$page = 'Conférenciers';
require "header.php" ;

// 1) on récupère l'id de l'event qui est actif
$eventid = $_SESSION["eventid"];

?>

<div id="conferenciers" class="container">
<div class="row">

<?php 



// 2) on va chercher tous les conférenciers (pour pouvoir ordonner par nom de famille) puis on fait un RIGHT JOIN pour ne prendre que ceux qui sont présents dans l'activité de l'évnement actif
$sql = "SELECT  * FROM speakers 
        RIGHT JOIN  activities ON speakers.speaker_id = activities.activity_speaker
        WHERE activities.event_id = '$eventid'
        GROUP BY activities.activity_speaker
        -- GROUP BY speakers.speaker_id 
         ORDER BY  'speakers.speaker_name'
";



$speakers = $conn->query($sql);


// 3) on fait la boucle
foreach ($speakers as $speaker) {

        $speakerid= $speaker["speaker_id"]; // on stocke son id dans $speakerid


    
?>


<div   class="col-12 col-md-6 conferencier ">
    <div class="row hv ">
    <div class="col-6 left d-flex justify-content-center mb-5">
    <a href="details-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>"></a> 
    </div> <!-- left -->
    <div class="col-6 right pt-4">
    <h2><a class="text-dark hover-link" href="details-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><span data-content="<?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></span></a></h2>

    <p><a class="text-secondary" href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
    </div><!-- right -->

    </div> <!-- row -->

</div> <!-- conferencier -->


<?php 

} // for each  foreach ($speakers as $speaker) 
?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>