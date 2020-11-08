<footer id="navbar-footer">

<ul class="nav"><!--flex-column-->
    <li class="nav-item">
        <a class="nav-link active nav-link-footer" href="index.php">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="conferenciers.php">Conférenciers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="about.php">A propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="mon-profil.php">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="contact.php">Contact</a>
    </li>
</ul>

<div class="heff-footer">Haute Ecole Francisco Ferrer</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Veuillez vous identifier</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      
      <div class="modal-body">
        <form action="inc/login.inc.php" method="post">
            <!-- <input type="text" name="login" placeholder="votre login">
            <input type="password" name="mdp" placeholder="mot de passe">
            <input type="submit" value="login" class="btn btn-success"> -->
            <div class="form-group">
              <label for="login">Identifiant</label>
              <input class="form-control"  type="text" name="login" placeholder="Votre login">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe</label>
              <input class="form-control"  type="password" name="mdp" placeholder="Votre mot de passe">
            </div>
              <input type="submit" value="Connexion" class="btn btn-success">
        </form>
      </div>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pas encore de compte ? </h5> 
        <h6 id="modal-title-h6">Veuillez en créer un afin de pouvoir bénéficier de toutes nos fonctionalités.</h6>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
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

<script src="js/jquery-3.4.1.min.js"></script>	
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</footer>
</body>
</html>