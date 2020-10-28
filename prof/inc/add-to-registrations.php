<?php
require('connexion.inc.php'); 
session_start();
$iduser = $_SESSION["userid"];
$activity_id = $_GET["activity_id"];


// echo $idevenement;





$sql = "INSERT INTO registrations (activity_id, user_token) VALUES ('$activity_id', '$iduser')";

// // 4 exécuter la requête SQL
$registrations = $conn->query($sql);

//  header("Location: ../index.php");

// echo ' <a class="remove" href="#" data-activity="'.$activity_id.'"><img src="img/image-coeur-png-1.png" title="Retirer des favoris"></a>';

// echo ' <a href="#" class= "btn btn-danger desinscriptionactvite" data-activity="'.$registrations["activity_id"].'">Je me désinscris</a>';

?>