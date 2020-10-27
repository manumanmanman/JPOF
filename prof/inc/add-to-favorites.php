<?php
require('connexion.inc.php'); 
session_start();
$iduser = $_SESSION["userid"];
$activity_id = $_GET["activity_id"];


// echo $idevenement;





$sql = "INSERT INTO favorites (activity_id, user_token) VALUES ('$activity_id', '$iduser')";

// // 4 exécuter la requête SQL
$favorites = $conn->query($sql);

//  header("Location: ../index.php");

// echo ' <a class="remove" href="#" data-activity="'.$activity_id.'"><img src="img/image-coeur-png-1.png" title="Retirer des favoris"></a>';

echo ' <a class="remove" href="#" data-activity="'.$activity_id.'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="red" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                  </svg></a>'

?>