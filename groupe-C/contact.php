<?php
$page = 'Contact';
require "header.php";
?>

<div class="container contact  mb-5 pb-5">

    <div class="row title-contact p-3 ">
        <div class="col-12 d-flex flex-column">
            <h1 class="text-dark" >Contact</h1>
            <h6 class="my-5 text-dark" >
                Afin de nous rejoindre, merci de bien vouloir remplir ce fourmulaire, et nous vous répondrons dans les plus bref délais.
            </h6>
        </div>
    </div>
    
    <div class="row justify-content-center p-3 d-flex ">
    <div class="col-12">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip01">Nom</label>
                    <input type="text" class="form-control" id="validationTooltip01"  required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <div class="invalid-tooltip">
                        Vous avez oublié de remplir votre Nom
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip02">Prénom</label>
                    <input type="text" class="form-control" id="validationTooltip02"   required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <div class="invalid-tooltip">
                        Vous avez oublié de remplir votre Prénom
                    </div>
                    
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip02">message</label>
                    <textarea class="form-control" id="validationTooltip02"   name="textarea" rows="4" cols="50" required></textarea>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <div class="invalid-tooltip ">
                        Vous avez oublié de remplir votre message
                    </div>
                    
                </div>
            </div>
            
            
            
            <button class="btn btn-lg btn-secondary btn-block mt-4 mb-1 submit" type="submit">Envoyer</button>
        </form>
        
    </div>
        
    </div>
    
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-1 mb-5">
        <div id="map"></div>
        </div>
    </div>
</div>




































<?php require "footer.php" ?>