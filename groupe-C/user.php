<?php 

require('inc/connexion.inc.php');



//récupérer les variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

//token

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$token = substr(str_shuffle($permitted_chars), 0, 20);

$sql = "INSERT INTO users (user_surname, user_name, user_email, user_pwd, user_validated, user_token)
VALUES ('$nom','$prenom','$email','$mdp','0','$token')";

$users = $conn->query($sql);


echo 'Vous allez recevoir un mail ';

$to = $email;
$subject = 'Veuillez valider votre adresse email';
$message = 'Bonjour'.$nom.' '.$prenom.',<br> <a href="http://localhost:8888/jpof-gc/confirmation-email.php?email='.$email.'&token='.$token.'">Veuillez valider votre email</a>';
$headers = "From no-reply@heff.ovh"."\r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to,$subject,$message,$headers);

if ( mail($to,$subject,$message,$headers)) {
    echo("Email successfully sent to $to...");
  } else {
    echo("Email sending failed...");
  }

?>