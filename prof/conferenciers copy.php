<?php 
$page = 'conferenciers';
require "header.php" ;

// 1) on récupère l'id de l'event qui est actif
$eventid = $_SESSION["eventid"];

?>

<div class="container">
<div class="row">

<?php 



// 2) on va chercher tous les conférenciers
$sql = " SELECT * FROM speakers ORDER BY  'speaker_name'";
$speakers = $conn->query($sql);


// 3) pour chaque conferencier on récupère son id
foreach ($speakers as $speaker) {

        $speakerid= $speaker["speaker_id"]; // on stocke son id dans $speakerid

        //4) puis on vérifie si son id est bien présent dans les activités qui font partie de l'événement actif
        $sql = " SELECT * FROM activities WHERE activity_speaker = '$speakerid' AND event_id = '$eventid'";
        $results = $conn->query($sql); 
        $rowcount=mysqli_num_rows($results); 

        // 5) s'il y a un résultat, on l'affiche !
        if ($rowcount > 0) {

    
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


<?php 



        } // if ($rowcount > 0)

} // for each  foreach ($speakers as $speaker) 
?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>