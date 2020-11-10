<!-- Footer -->

<style>
footer h5, footer p {text-align: center;}
footer a {color: #ffffff;}
footer p {font-size: larger;}
footer i {    margin: 10px;}</style>

<footer class="page-footer font-small text-white bg-dark pt-4 footer" style="">

  <div class="container-fluid text-center text-md-left">

    <!-- row -->
    <div class="row">
      <div class="col-md-1 mt-md-0 mt-none">
      </div>

      <!-- column -->
      <div class="col-md-4 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold text-uppercase">coordonées</h5>
        <p>Rue de la fontaine 4<br>
        1000 Bruxelles<br><br>
        Tél : +32 2 279 58 10<br>
        Fax : +32 2 279 58 10</p>

      </div>
      <!-- column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- column -->
      <div class="col-md-4 mb-md-0 mb-1">

        <!-- Content -->
        
        <p>Du lundi au vendredi<br>
        Horaire : 10h - 18h
        ferrer@mail.eu<br>
        www.he-ferrer.eu</p>

      </div>
       <!-- column -->

      <hr class="clearfix w-100 d-md-none pb-3">
      
      <!-- column -->
            <div class="col-md-3 mb-md-0 mb-3 justify-content-center">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold text-uppercase">Suivez-nous</h5>

          <!-- Facebook -->
          <p>
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text"> </i>
          </a>
           <!--Linkedin -->
           <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text"> </i>
          </a>
          </p>
      </div>
      <div class="col-md-1 mt-md-0 mt-none">
      </div>
      <!-- column -->

    </div>
    <!-- row -->

  </div>

</footer>
<!-- Footer -->



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
            
            <!--Footer-->
            <div class="modal-footer">
             
            <div class="text-center mt-2">
                <button class="btn btn-info">Log in </button>
              </div>
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
<!--
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
    Modal LogIn/Register</a>
</div>-->




 <script src="js/jquery-3.5.1.min.js"></script> 
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/scripts.js"></script>
 

</body>
</html>