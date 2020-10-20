<?php 


include("connexion.inc.php"); 

$login = $_POST["login"];
$passintroduit = md5($_POST["mdp"]);

$sql = "SELECT * FROM users WHERE user_name = '$login'";
$results = $conn->query($sql); 
foreach ($results as $result) {

$passdb =  $result["user_pwd"];
// $validated =  $result["validated"];

}
// puis  je compare


        // if ($passintroduit == $passdb && $validated == 1) {
        if ($passintroduit == $passdb ) {

            session_start();
            // Set session variables
            $_SESSION["user"] = $result["user_name"];
            $_SESSION["userid"] = $result["user_id"];
            
        echo "Bienvenue <strong>" . $_SESSION["user"]. "</strong> vous êtes maintenant connecté ! votre id est ".$_SESSION["userid"];
        header("location: ../index.php");

        } else {

        echo 'veuillez recommencer';
        } // fin if else  passwords ok



?>