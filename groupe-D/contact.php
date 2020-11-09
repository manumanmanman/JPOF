<?php 
$page = 'contact';
include("header.php");?>
 
<div id="bienvenue">
<h1>Contact</h1>
</div>
 
<div class="tout">
 
</div><!-- tout -->
 
<div class="container contacta">
  <div class="row justify-content-md-center">
    <div class="col-12 col-md-6 left">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4903577753203!2d4.340286716032571!3d50.84060327953117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c470f84554f5%3A0x94c79c309d9e1e21!2sRue%20de%20la%20Fontaine%204%2C%201000%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1603795659574!5m2!1sfr!2sbe" 
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 
        
 
    </div> <!-- left -->
    <div class="col-12 col-md-6 right">
    <div id="contact">
    
    <h2>contactez-nous</h2>
        <div>
            <input type="text" id="nom" name="user_nom" placeholder="Nom"/><input type="text" id="prenom" name="user_prenom" placeholder="Prenom"/>
        </div>
        <div>
            <input type="email" id="mail" name="user_email" placeholder="Email"/>
        </div>
        <div>
            <textarea id="msg" name="user_message" placeholder="Message"></textarea>
        </div>
 
        <div class="button">
        <button type="submit">Envoyer</button></div>
</div> <!-- contact -->
    </div>
  </div>
</div>
 
<?php include("footer.php");?>