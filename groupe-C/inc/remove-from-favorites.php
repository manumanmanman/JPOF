<?php
require('connexion.inc.php'); 
session_start();
$iduser = $_SESSION["userid"];
$activity_id = $_GET["activity_id"];


// echo $idevenement;

$sql = "DELETE FROM favorites WHERE activity_id=$activity_id AND user_token = $iduser";



// // 4 exécuter la requête SQL
$favorites = $conn->query($sql);

//  header("Location: ../index.php");

echo '<a class="add" href="#" data-activity="'.$activity_id.'">pas inscrit favoris</a>';

?>