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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Veuillez vous identfier.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body tout-form">

      <form action="inc/login.inc.php" class="form-connection" method="post">
      <h5>Se connecter</h5>
        <input class="insert" type="text" name="login" placeholder="votre login">
        <input class="insert" type="password" name="mdp" placeholder="mot de passe">
        <input type="submit" value="se connecter" class="btn btn-success seconnecter">
      </form>
<hr>

      <h5>S'inscrire</h5>
      <form action="inc/inscription.inc.php" class="form-inscription" method="post">
        <input class="insert" type="mail" name="mail-inscri" placeholder="adresse mail">
        <input class="insert" type="text" name="login-inscri" placeholder="votre login">
        <input class="insert fin-input" type="password" name="mdp-inscri" placeholder="mot de passe">
        <input type="submit" value="s'inscrire" class="btn btn-success creer">
      </form>


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
</body>
</html>