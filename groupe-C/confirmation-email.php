<?php 

require('inc/connexion.inc.php');



//récupérer les variables
$email = $_GET['email'];
$token = $_GET['token'];

$sql = "SELECT * FROM visiteurs WHERE  email = '$email'";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()){

    if($token == $row["token"]){

        echo '<a href="connexion-visiteur.php">Votre email à été validé! Vous pouvez maintenant vous connecter </a>';

        $sql = "UPDATE visiteurs SET  validated = '1' WHERE email = '$email'";
        $visiteurs = $conn->query($sql);

    }else{
        echo "pas ok";
    }
} //while

?>