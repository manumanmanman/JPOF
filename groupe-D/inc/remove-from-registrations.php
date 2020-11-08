<?php
require('connexion.inc.php'); 
session_start();
$iduser = $_SESSION["userid"];
$activity_id = $_GET["activity_id"];


// echo $idevenement;

$sql = "DELETE FROM registrations WHERE activity_id=$activity_id AND user_token = $iduser";



// // 4 exécuter la requête SQL
$favorites = $conn->query($sql);

//  header("Location: ../index.php");

// echo '<a class="add" href="#" data-activity="'.$activity_id.'"><img src="img/image-coeur-png-blanc.png" title="Ajouter aux favoris"></a>';

// echo ' <a href="#" class= "btn btn-success inscriptionactvite" data-activity="'.$registrations["activity_id"].'">Je m\'inscris</a>';

?>