<footer id="navbar-footer">

<ul class="nav"><!--flex-column-->
    <li class="nav-item">
        <a class="nav-link active nav-link-footer" href="index.php">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="activites.php">Evénements</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="favoris.php">Favoris</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-footer" href="conferenciers.php">Profil</a>
    </li>
</ul>

<div class="heff-footer">Haute Ecole Francisco Ferrer</div>


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
            <input type="text" name="login" placeholder="votre login">
            <input type="password" name="mdp" placeholder="mot de passe">
            <input type="submit" value="login" class="btn btn-success">
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
<script src="js/custom.js"></script>

</footer>
</body>
</html>