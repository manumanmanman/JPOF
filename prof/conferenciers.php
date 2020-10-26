<?php 
$page = 'conferenciers';
require "header.php" ;

// 1) on récupère l'id de l'event qui est actif
$eventid = $_SESSION["eventid"];

?>

<div class="container">
<div class="row">

<?php 

// echo "<h1>".$eventid."</h1>";

// 2) on va chercher tous les speakers qui sont dans les activités de l'événement actif. 
$sql = " SELECT DISTINCT activity_speaker FROM activities 

LEFT JOIN speakers ON activities.activity_speaker = speakers.speaker_id
WHERE activities.event_id = '$eventid'";
$speakersid = $conn->query($sql);
foreach ($speakersid as $speakerid) {

    // 3) on récupère l'id du speaker  (il n'y aura pas de doublons car on a fait une query DISTINCT)
   $activity_speaker= $speakerid["activity_speaker"];





// 4) pendant qu'on est dans la boucle des speakers qui sont dans les événements actifs, on va récupérer le reste des infos du speaker sur base de don id $activity_speaker qu'on a récupéré à l'étape suivante
// boucle 
$sql = " SELECT * FROM speakers WHERE speaker_id = '$activity_speaker'";
$speakers = $conn->query($sql);


// 5) pour chaque speaker on va afficher les infos dans une div .conferencier
foreach ($speakers as $speaker) {


    
?>


<div class="col-12 col-md-6 conferencier">
<div class="row">
<div class="col-6 left">
<img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
</div> <!-- left -->
<div class="col-6 right">
<h1><a href="detail-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></a></h1>

<p><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
</div><!-- right -->

</div> <!-- row -->

</div> <!-- conferencier -->


<?php // fin de boucle 

}

} // for each DISTINCT  activity_speaker FROM activities 
?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>