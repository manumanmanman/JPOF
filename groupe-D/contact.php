<?php 
$page = 'contact';
include("header.php");?>
 
<div id="bienvenue">
<h1>Contact</h1>
</div>
 
<div class="container contact">

<h3>contactez-nous</h3>

<form action="">

<input type="text" id="nom" name="fname" placeholder="NOM">
<input type="text" id="prenom" name="fname" placeholder="PRENOM"><br>
<input type="email" id="email" name="email" placeholder="EMAIL"><br>
<textarea id="mess" rows="8" cols="58" name="comment" form="usrform" placeholder="MESSAGE">
</textarea> <br>
<button type="button" class="envoyer">ENVOYER</button>
</form>



</div>

 
<?php include("footer.php");?>