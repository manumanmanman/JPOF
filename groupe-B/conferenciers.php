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
        <input id="myInput" type="text" placeholder="Trouvez votre conférencier">
        <div class="menu_even">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Tous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Arts appliqués</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Economique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Paramédical</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Pédagogique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Technique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-even" href="#">Social</a>
                </li>
            </ul>
        </div> <!-- menu_even -->
    </div> <!-- col-12 -->


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
            <div class="card" id="myDIV">
                <img src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
            <div class="card-body">
                <h3><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h3>
                <p class="text-justify"><a href="https://www.linkedin.com/in/<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="http://elastik.eu/img/linkedin-logo.png"></a></p>
                <a href="detail-conferencier.php?conferencierid=<?php echo $speaker['speaker_id'] ?>"><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></a>
            </div><!-- /card-body -->
            </div><!-- /card -->
        </div><!-- /col-md-4 -->

<?php } // for each  foreach ($speakers as $speaker) ?>

</div> <!-- row -->
</div>  <!-- container -->

<?php require "footer.php" ; ?>





<!-- rechercher un conférencier via barre de recherche -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>