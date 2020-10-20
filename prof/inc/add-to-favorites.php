<?php
require('connexion.inc.php'); 
session_start();
$iduser = $_SESSION["userid"];
$activity_id = $_GET["activity_id"];


// echo $idevenement;





$sql = "INSERT INTO favorites (activity_id, user_token) VALUES ('$activity_id', '$iduser')";

// // 4 exécuter la requête SQL
$favorites = $conn->query($sql);

 header("Location: ../index.php");

?>