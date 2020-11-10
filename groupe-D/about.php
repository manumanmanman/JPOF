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
 
   

 <div class="col-12 col-lg-6 rcampus">
 <div class="row">
<?php
     
        $sql = " SELECT * FROM buildings";
        $buildings = $conn->query($sql);
        
        foreach ($buildings as $building) {?>

 

   
<div class="col-6 bat">
            <?php
            if ($building["building_name"] == 'Lemonnier') {

                echo '<img src="img/lemonnier.jpg" alt=""><br>';
            }

            elseif($building["building_name"] == 'Anneessens'){

            echo '<img src="img/annessens.jpg" alt=""><br>';
            
            }
            elseif($building["building_name"] == 'Palais du midi'){

            echo '<img src="img/palais_du_midi.jpg" alt=""><br>';
            
            }
            elseif($building["building_name"] == 'Terre-Neuve'){

            echo '<img src="img/terre-neuve.jpg" alt=""><br>';
            
            }
            elseif($building["building_name"] == 'Brugmann'){

            echo '<img src="img/brugmann.jpg" alt=""><br>';
            
            }


?>
        <b><?php echo $building["building_name"]."</b> <br> ".$building["building_street"]." ".$building["building_number"]." <br>".$building["building_cp"]."  ".$building["building_city"].
        "<br>" ; ?>


 </div>


        <?php }
        
        
        
        ?>
         </div>


</div>


<div class="col-12 col-lg-6 rcampus">

<div id="mappy"></div>
<div id="contenu"></div>

 </div>
 

 </div>

</div>





<?php include("footer.php");?>