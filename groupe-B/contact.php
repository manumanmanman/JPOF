<?php $page = 'contact'; require "header.php";
$eventid = $_SESSION["eventid"];?>


    <div class="container">
    <div class="row">
        <div class="col-12 ">
        <h1>Tous nos sites</h1>
            <!-- the div element for the map -->
            <div id="map"></div>
            <div id="contenu"></div>
        </div><!-- left -->

        <div class="col-12 ">
            <table class="table table-striped">
                
            <thead>
                <tr> <style>tr{text-align:center;}</style>
                <th scope="col">Batiment</th>
                <th scope="col">Rue</th>
                <th scope="col">Numéro</th>
                <th scope="col">Ville</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                $sql = " SELECT  * FROM buildings";
                $buildings = $conn->query($sql);
                foreach ($buildings as $building) { ?>

                <tr>
                <th scope="row"><?php echo $building["building_name"]?> </th>
                <td><?php echo $building["building_street"]?></td>
                <td><?php echo $building["building_number"]?></td>
                <td><?php echo $building["building_cp"]?> , <?php echo $building["building_city"]."<br>" ;   ?></td>
                </tr>
                <!-- <tr>
                <th scope="row">Anneessens</th>
                <td>Place Anneessens</td>
                <td>11</td>
                <td>1000 Bruxelles</td>
                </tr>
                <tr>
                <th scope="row">Brugmann</th>
                <td>Place Van Gehuchten</td>
                <td>4</td>
                <td>1000 Bruxelles</td>
                </tr>
                <tr>
                <th scope="row">Lemonnier</th>
                <td>Place Rouppe</td>
                <td>28</td>
                <td>1000 Bruxelles</td>
                </tr> -->


                <?php } ?>
            </tbody>
            </table>
        </div><!-- right -->
    </div><!-- row -->
</div><!-- container --> 


    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8SD8wn9r2ZHnc4ET1aVaIFLCT50f14lU&callback=initMap&libraries=&v=weekly"
        defer >
    </script>  
<?php require "footer.php" ?>