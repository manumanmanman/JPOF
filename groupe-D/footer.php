<!-- dans le footer on charge le modal qui contient le formulaire de login et enregistrement qui sera disponible sur toutes les pages -->
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Veuillez vous identifier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="inc/login.inc.php" method="post">
      <div class="form-group">
      <label for="login">Login</label>
        <input class="form-control"  type="text" name="login" placeholder="votre login">
        </div>
        <div class="form-group">
      <label for="mdp">Mot de passe</label>
        <input class="form-control"  type="password" name="mdp" placeholder="mot de passe">
        </div>
        <input type="submit" value="login" class="btn btn-success">
        </form> 
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pas encore de compte ? Veuillez en créer un.</h5>
        <p>afin de pouvoir bénéficir de toutes les fonctionalités</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="inc/register.inc.php" method="post">
      <div class="form-group">
      <label for="nom">Nom</label>
      <input class="form-control" type="text" name="nom" id="nom">
      </div>
      <div class="form-group">
      <label for="prenom">Prénom</label>
      <input class="form-control" type="text" name="prenom" id="prenom">
      </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="text" name="email" id="email">
      </div>
      <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input class="form-control" type="text" name="mdp" id="mdp">
      </div>
      <input class="btn btn-success"  type="submit" value="Inscription">
      </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

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
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
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
                
                <label for="login">Username</label>
                <input class="form-control"  type="text" name="login" placeholder="Votre username">
              </div>

              <div class="md-form form-sm mb-4">
                
                <label for="mdp">Mot de passe</label>
                <input class="form-control"  type="password" name="mdp" placeholder="Entrez mot de passe">
              </div>
              
            </div>
            </form> 
            <!--Footer-->
            <div class="modal-footer">
             
            <div class="text-center mt-2">
                <button class="btn btn-info">Log in </button>
              </div>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <form action="inc/register.inc.php" method="post">
              <div class="md-form form-sm mb-4">
                
              <label for="nom">Nom</label>
      <input class="form-control" type="text" name="nom"  placeholder="Votre nom">
              </div>

              <div class="md-form form-sm mb-4">
                
              <label for="prenom">Prénom</label>
      <input class="form-control" type="text" name="prenom"  placeholder="Votre prénom">
              </div>

              <div class="md-form form-sm mb-4">
                
              <label for="email">Email</label>
      <input class="form-control" type="text" name="email"  placeholder="Votre e-mail">
              </div>

              <div class="md-form form-sm mb-4">
                
          <label for="mdp">Mot de passe</label>
      <input class="form-control" type="text" name="mdp"  placeholder="Votre mot de passe">
              </div>

            

            </div>
            </form> 
            <!--Footer-->
            <div class="modal-footer">
            <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
             
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
    Modal LogIn/Register</a>
</div>

 
 <script src="js/jquery-3.5.1.min.js"></script> 
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/scripts.js"></script>
 
</body>
</html>