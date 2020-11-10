<div class="container-fluid footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-6">
                    <h2>COORDONNÉES</h2>

                    <p>Siège social
                    rue de la Fontaine 4
                    1000 BRUXELLES<p>

                    <p>Tél : +32 2 279 58 10<p>
                    <p>Fax : +32 2 279 58 29<p>

                    <a href="#" target= "_blank">Nos implantations</a>

                </div>


                <div class="col-lg-3 col-6">
                    <h2>PRATIQUE</h2>

                    <a href="#" target= "_blank">Contact</a><br>
                    <a href="#" target= "_blank">Partenaires</a><br>
                    <a href="#" target= "_blank">Offres d'emploi</a><br>
                    <a href="#" target= "_blank">Newsletter</a><br>
                    <a href="#" target= "_blank">Mentions légales</a><br>
                    <a href="#" target= "_blank">Plan du site</a><br>
                    <a href="#" target= "_blank">Accessibilité</a><br>
                </div>


                <div class="col-lg-3 col-6">
                    <a href="#" target= "_blank">Facebook</a><br>
                    <a href="#" target= "_blank">Twitter </a><br>
                    <a href="#" target= "_blank">LinkedIn </a><br>
                    <a href="#" target= "_blank">Flickr </a><br>
                    <a href="#" target= "_blank">RSS</a><br>
                </div>


                <div class="col-lg-3 col-6">
                    <img src="img/bxl_logo.png" alt="logo ville de Bruxelles">
                </div>

 
                
            </div> <!-- row fin -->
        </div> <!-- container fin -->
</div> <!-- container-fluid fin -->



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body tout-form">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <form action="admin/includes/sign.inc.php" class="form-connection" method="post">
      <h5>Connexion</h5>
      <div class="form-group d-flex flex-column">
        <label for="user_email">Adresse mail</label>
        <input class="insert" type="text" name="user_email">
        <!-- <small id="emailHelp" class="form-text text-muted">Identifiant incorrect ou inexistant</small> -->
      </div>
      <div class="form-group d-flex flex-column">
        <label for="user_pwd">Mot de passe</label>
        <input class="insert" type="password" name="user_pwd">
        <!-- <small id="emailHelp" class="form-text text-muted">Mot de passe incorrect.</small> -->
      </div>
      <a class="toggle-in-up" href="#">pas de compte ? inscrivez-vous !</a>
      <button type="submit" value="signin" name="signin-submit" class="btn mt-3 btn-success seconnecter">Se connecter</button>
      </form>
      <form action="admin/inclues/sign.inc.php" class="form-inscription" method="post">
      <h5>Inscription</h5>
      <div class="form-group d-flex flex-column">
        <label for="login">Adresse mail</label>
        <input class="insert" type="mail" name="mail-inscri">
        <!-- <small id="emailHelp" class="form-text text-muted">Identifiant existe déjà</small> -->
      </div>
      <div class="form-group d-flex flex-column">
        <label for="login">Mot de passe</label>
        <input class="insert fin-input" type="password" name="mdp-inscri">
        <!-- <small id="emailHelp" class="form-text text-muted">Mot de passe incorrect</small> -->
      </div>
      <div class="form-group d-flex flex-column">
        <label for="login">Confirmation mot de passe</label>
        <input class="insert fin-input" type="password" name="mdp-inscri-bis">
        <!-- <small id="emailHelp" class="form-text text-muted">Let mots de passe ne correspondent pas</small> -->
      </div>
        <a class="toggle-up-in" href="#">déjà inscrit ? connectez-vous !</a>
        <button type="submit" value="signup" name="signup-submit" class="btn mt-3 btn-success creer">S'inscrire</button>
      </form>
    
      </div>
    </div>
  </div>
</div>


    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
</body>
</html>