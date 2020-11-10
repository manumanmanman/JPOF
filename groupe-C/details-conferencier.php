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
    <div class="row ">
        <div class="col-lg-6 col-12 mb-5 mh">
            <div class="col-12">

                <img class="img-conf pb-3" src="<?php echo $speaker['speaker_pfp'] ?>" alt="<?php echo $speaker['speaker_name'] ?>">
                <h1><?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?></h1>

                <p class="pt-4"><a href="img/pngfind.com-linkedin-png-533449.png<?php echo $speaker['speaker_linkedin'] ?>" target="_blank" title="Profil Linkedin de <?php echo utf8_encode($speaker['speaker_surname'])." ".$speaker['speaker_name'] ?>"><img src="img/pngfind.com-linkedin-png-533449.png"></a></p>

            </div>
        </div>
        <div class="col-lg-6 col-12 mh">
            <div class="col-12">

                <p class="des-conf p-5 bg-white text-conferencier"><?php echo utf8_encode($speaker['speaker_description']); ?></p>
                <a href="conferenciers.php" class="btn btn-secondary btn-lg btn-block my-5 btn-retour">Retour</a>

            </div>
        </div>     
    </div>
</div>  <!-- container -->

<?php }  // fin bouccle ?>


<?php require "footer.php" ; ?>