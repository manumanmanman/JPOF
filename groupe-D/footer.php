<footer>

<div class="container">
<div class="row">

<div class="col-12 col-md-4 footer">
<h5>coordonnées</h5>
<p>Rue de la fontaine 4<br>
   1000 Bruxelles<br><br>
   Tél : +32 2 279 58 10<br>
   Fax : +32 2 279 58 29</p>
</div>

<div class="col-12 col-md-4 footer">
<h5>contact</h5>
<p>Du lundi au vendredi<br>
   Horaire : 10h - 18h <br>
   ferrer@mail.eu<br>
   www.he-ferrer.eu</p>
</div>

<div class="col-12 col-md-4 footer">
<h5>suivez-nous</h5>
<!-- Facebook -->
<p>
<a href="https://fr-fr.facebook.com/HauteEcoleFranciscoFerrer/" target="_blank">
  <i class="fab fa-facebook-f fa-lg"> </i>
</a>
 <!--Linkedin -->
 <a href="https://www.linkedin.com/company/haute-ecole-francisco-ferrer" target="_blank">
  <i class="fab fa-linkedin-in fa-lg"> </i>
</a>
<!-- Twitter -->
<a href="https://twitter.com/hefferrer?lang=fr" target="_blank">
  <i class="fab fa-twitter fa-lg"> </i>
</a>
</p>
</div>

</div>
</div>

</footer>



<div class="mod">
<!-- dans le footer on charge le modal qui contient le formulaire de login et enregistrement qui sera disponible sur toutes les pages -->
   <!-- Modal -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="examplemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              CONNEXION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              S'inscrire</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
            <form action="inc/login.inc.php" method="post">
              <div class="md-form form-sm mb-5">
                
                <label for="login"></label>
                <input class="form-control"  type="text" name="login" placeholder="Votre username">
              </div>

              <div class="md-form form-sm mb-4">
                
                <label for="mdp"></label>
                <input class="form-control"  type="password" name="mdp" placeholder="Entrez mot de passe">
              </div>
              
            </div>
            
            <!--Footer-->
            
             
            <div class="text-center mt-2">
                <button class="btn btn-info">connexion</button>
              </div>
            
</form> 
          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <form action="inc/register.inc.php" method="post">
              <div class="md-form form-sm mb-4">
                
              <label for="nom"></label>
      <input class="form-control" type="text" name="nom"  placeholder="Votre nom">
              </div>

              <div class="md-form form-sm mb-4">
                
              <label for="prenom"></label>
      <input class="form-control" type="text" name="prenom"  placeholder="Votre prénom">
              </div>

              <div class="md-form form-sm mb-4">
                
              <label for="email"></label>
      <input class="form-control" type="text" name="email"  placeholder="Votre e-mail">
              </div>

              <div class="md-form form-sm mb-4">
                
          <label for="mdp"></label>
      <input class="form-control" type="text" name="mdp"  placeholder="Votre mot de passe">
              </div>

            

            </div>
            </form> 
            <!--Footer-->
           
            <div class="text-center form-sm mt-2">
                <button class="btn btn-info">s'inscire<i class="fas fa-sign-in ml-1"></i></button>
              </div>
             
           
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
</div>

 <script src="js/jquery-3.5.1.min.js"></script> 
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/scripts.js"></script>
 

</body>
</html>