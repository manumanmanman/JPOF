<?php
$page = 'apropos';
include("header.php");?>

<div id="bienvenue">
<h1>A propos</h1>
</div>

<div class="container">
<div class="about">

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia itaque vel
provident magnam veritatis voluptatibus harum magni aliquam. Sit iusto velit ex 
voluptatem mollitia soluta, ducimus perspiciatis voluptas nulla suscipit.
</div>
</div>

<div class="container campus">
    <div class="row">
     
<?php
 
        $sql = " SELECT * FROM buildings";
        $buildings = $conn->query($sql);
        foreach ($buildings as $building) {?>

    <div class="col-6 col-md-4 rcampus">

        <b><?php echo $building["building_name"]."</b> <br> ".$building["building_street"]." ".$building["building_number"]." <br>".$building["building_cp"]."  ".$building["building_city"].
        "<br>" ; ?>

</div>
        <?php }
        
        
        
        ?>

 </div>

</div>





<?php include("footer.php");?>