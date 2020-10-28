<?php 
$page = 'conferenciers';
require "header.php" ;

// 1) on récupère l'id de l'event qui est actif
$eventid = $_SESSION["eventid"];

?>

<div class="container">
<div class="row">
    <div class="col-12">
        <h1 class="h1_home">Conférenciers</h1>
    </div> 

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
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
            <div class="card-body">
                <h3><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h3>
                <p class="text-justify"><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
                <a href="detail-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></a>
            </div><!-- /card-body-->
        </div><!-- /col-md-4-->

<?php } // for each  foreach ($speakers as $speaker) ?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>