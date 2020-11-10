<?php $page = 'contact'; require "header.php";
$eventid = $_SESSION["eventid"];?>


<div class="container">
<div class="row">
<div class="col-12 col-md-6 left">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753253!2d4.340286716179844!3d50.840603279531074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603795511723!5m2!1sfr!2sbe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div><!-- left -->
<div class="col-12 col-md-6 right">
<?php 

$sql = " SELECT  * FROM buildings";
$buildings = $conn->query($sql);
foreach ($buildings as $building) { ?>

<?php echo $building["building_name"]." - ".$building["building_street"]." - ".$building["building_number"]." - ".$building["building_cp"]." - ".$building["building_city"]."<br>" ;   ?>

<?php } ?>
</div><!-- right -->
</div><!-- row -->

</div> <!-- container -->



<?php require "footer.php" ?>





<?php $page = 'contact'; require "header.php";
$eventid = $_SESSION["eventid"];?>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753253!2d4.340286716179844!3d50.840603279531074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603795511723!5m2!1sfr!2sbe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div><!-- left -->

        <div class="col-12 col-md-6 right">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
        </div><!-- right -->
    </div><!-- row -->
</div><!-- container --> 



<?php require "footer.php" ?>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 left">
            <!-- the div element for the map -->
            <div id="map"></div>
            <div id="contenu"></div>
        </div><!-- left -->

        <div class="col-12 col-md-6 right">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Batiment</th>
                <th scope="col">Rue</th>
                <th scope="col">Numéro</th>
                <th scope="col">Ville</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Palais du midi</th>
                <td>Rue de la fontaine</td>
                <td>4</td>
                <td>1000 Bruxelles</td>
                </tr>
                <tr>
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
                </tr>
            </tbody>
            </table>
        </div><!-- right -->
    </div><!-- row -->
</div><!-- container --> 