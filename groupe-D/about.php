<?php
$page = 'apropos';
include("header.php");?>

<div id="bienvenue">
<h1>A propos</h1>
</div>

<div class="container">
    <div class="row">

    <div class="col-12 col-md-6 about">
        <img id="illu" src="img/illu.png" alt="">

    </div>


<div class="col-12 col-md-6 about">
<p>
Chaque année, la Haute École organise une Journée Ferrer. Celle-ci a pour but de rendre hommage à Francisco Ferrer. Au-delà de l'homme qu'il fut, les valeurs qu'il a défendues nous tiennent à cœur et guident notre action: ouverture, liberté d'esprit, désir de justice sociale et d'émancipation de tous, pour en citer quelques-unes.

Cette année, ce n'est pas moins de 50 activités qui prendront place sur 4 implantations de la Haute École.

</p>
</div>
</div>
</div>

<div class="campus">
<h3>Les campus</h3>
</div>

<div class="container campus">
    <div class="row">
 
    <div class="col-12 col-md-6 rcampus">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753203!2d4.340286716032571!3d50.84060327953117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603795659574!5m2!1sfr!2sbe" 
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
 
<?php
     
        $sql = " SELECT * FROM buildings";
        $buildings = $conn->query($sql);
        foreach ($buildings as $building) {?>

 

   <div class="col-12 col-md-6 rcampus">

        <b><?php echo $building["building_name"]."</b> <br> ".$building["building_street"]." ".$building["building_number"]." <br>".$building["building_cp"]."  ".$building["building_city"].
        "<br>" ; ?>


</div>

        <?php }
        
        
        
        ?>

 </div>

</div>





<?php include("footer.php");?>