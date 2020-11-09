<?php require "header.php" ?>
<div id="screensize"></div>
<br>

<div class="container-fluid bi-nav-body">
<div class="container divactivite1">
        <div class="row">

        <div class="col-12 filtre">
            <div class="filtre-tout">

            <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtrer les activitées
            </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
      <div class="tout">
    <span>Trier par </span>
                <div class="custom-select departement">
                    <select>
                        <option value="0">département :</option>
                        <option value="1">Tout</option>
                        <option value="1">Technique graphique</option>
                        <option value="2">Pédagolique</option>
                        <option value="3">Art appliqués</option>
                        <option value="4">Paramédical</option>
                        <option value="5">Economie / social</option>
                    </select>
                </div><!--departement fin -->

                <div class="custom-select heure">
                    <select>
                        <option value="0">horaire :</option>
                        <option value="1">Tout</option>
                        <option value="1">8h - 10h</option>
                        <option value="2">10h - 12h</option>
                        <option value="3">12h - 14h</option>
                        <option value="4">14h - 16h</option>
                        <option value="5">16h - 18h</option>
                    </select>
                </div><!--heure fin -->



                <div class="custom-select implantation">
                    <select>
                        <option value="0">implantation :</option>
                        <option value="1">Tout</option>
                        <option value="1">Aneessens</option>
                        <option value="2">Palais du midi</option>
                        <option value="3">Brugmann</option>
                        <option value="4">Terre-Neuve</option>
                        <option value="5">Lemonnier</option>
                    </select>
                </div><!--implantation fin -->


                <div class="custom-select jour">
                    
                    <input type="date" id="start" name="trip-start"
                    value="2021-10-28"
                    min="2021-01-01" max="2021-12-31">
                    
                </div><!--jour fin -->




            </div>
    </div> <!--card fin -->
</div> <!--collapse fin -->

         </div> <!--filtre-tout fin -->
        </div><!--filtre fin -->




            <h1 class="col-12 activite">Activitées de la journée Ferrer 2021</h1>

            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->

            <div class="col-lg-6 card-entier paramedical">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Paramedical</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
                
            </div> <!-- card fin -->


            <div class="col-lg-6 card-entier">
              
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>Techniques graphiques</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
                
            </div> <!-- card fin -->

            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->


            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->



            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->




            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->



            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->




            <div class="col-lg-6 card-entier pedagogique">
                
                    <div class="cartes row">
                    <div class="carte card-left col-6">
                        <img src="img/escape-room-escape-game-orleans.jpg" alt="escape-room">
                        <h2>pedagogique</h2>
                    </div>
                    <div class="col-6 carte card-right">
                        <h1>Atelier Ecape Game</h1>
                        <h4>De 11h à 13h</h4>
                        <a class= "coeur" href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="gray" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg></a>
                        <p>Dans cette atelier, vous allez dévelloper vos sens et votre logique en vous laissant dans des enigmes ...</p>

                        <span>Aneessens</span>
                        <h5>local 140</h5>

                        
                        <a href="#" class= "btn btn-success inscription">Je m'inscris</a>
                    </div>
                    </div>
                
            </div> <!--  card fin -->

        </div> <!-- row fin -->
    </div> <!-- container fin -->
</div><!-- container-fluid fin -->



<?php require "footer.php" ?>
