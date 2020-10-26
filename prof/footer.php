   
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
   
   
   <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>