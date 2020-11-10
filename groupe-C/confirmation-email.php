<?php 

require('inc/connexion.inc.php');



//récupérer les variables
$email = $_GET['email'];
$token = $_GET['token'];

$sql = "SELECT * FROM users WHERE  user_email = '$email'";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()){

    if($token == $row["user_token"]){

        echo '<a href="index.php">Votre email à été validé! Vous pouvez maintenant vous connecter </a>';

        $sql2 = "UPDATE users SET  user_validated = '1' WHERE user_email = '$email'";
        $users2 = $conn->query($sql2);

    }else{
        echo "pas ok";
    }
} //while

?>