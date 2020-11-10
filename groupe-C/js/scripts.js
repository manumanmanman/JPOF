function initMap() {
    const heffPM = { lat: 50.840618, lng: 4.342705 };
    const heffAN = { lat: 50.844217, lng: 4.343909 };
    const heffBG = { lat: 50.886461, lng: 4.333386 };
    const heffTN = { lat: 50.840553, lng: 4.345729 };
    const heffLM = { lat: 50.842849, lng: 4.345430 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: heffLM,
    });
    const markerPM = new google.maps.Marker({
      position: heffPM,
      map: map,
    });
    
    const markerAN = new google.maps.Marker({
      position: heffAN,
      map: map,
    });
    const markerBG = new google.maps.Marker({
      position: heffBG,
      map: map,
    });
    const markerTN = new google.maps.Marker({
      position: heffTN,
      map: map,
    });
    const markerLM = new google.maps.Marker({
      position: heffLM,
      map: map,
    });

  }

$( document ).ready(function() {
  console.log( "ready!" );




  // désinscription des favoris
  $('.coeur').on('click', '.remove',function() {

      var activityid = $(this).attr('data-activity');
      console.log("remove"+activityid) ;
      var coeurparent =  $(this).parent();

      $.ajax({
          // 1) on définit le fichier vers lequel on envoye la requête POST
         url : 'inc/remove-from-favorites.php',
      
      // 2/ on spécifie la méthode  
         type : 'GET', // Le type de la requête HTTP, ici  POST
      
      // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
        data : { 
          activity_id: activityid
              }, // On fait passer nos variables au script coucou.php
       
       // 4) format de retour du fichier php dans "data"()
         dataType : 'html',
         
         // 5) fonction à effectuer en cas de succès
         success : function(data){ //  contient le HTML renvoyé
                     
          // $(coeurparent).html(data); 
          $(coeurparent).children().removeClass("remove").addClass("add");   
          $(coeurparent).children().children().attr("fill","gray"); 

          // uniquement pour sur la page mon profil!
          $(coeurparent).parent(".favorisurprofil").remove();   

         
         } // success    
     }); // $.ajax function
  }); // click désinscription des favoris




// inscription des favoris
  $('.coeur').on('click', '.add',function() {
      // $('.add').click(function() {
      var activityid = $(this).attr('data-activity');
      console.log("add: "+activityid) ;
      var coeurparent =  $(this).parent();
      // var current = $(this).find(".bi-heart-fill");

      $.ajax({
          // 1) on définit le fichier vers lequel on envoye la requête POST
         url : 'inc/add-to-favorites.php',
      
      // 2/ on spécifie la méthode  
         type : 'GET', // Le type de la requête HTTP, ici  POST
      
      // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
        data : { 
          activity_id: activityid
         
              }, // On fait passer nos variables au script coucou.php
       
       // 4) format de retour du fichier php dans "data"
         dataType : 'html',
         
         // 5) fonction à effectuer en cas de succès
         success : function(data){ //  contient le HTML renvoyé
          
          //var myVar = $(this).find('.bi-heart-fill');
          // $(coeurparent).html(data);   
          $(coeurparent).children().removeClass("add").addClass("remove");   
          $(coeurparent).children().children().attr("fill","red");   

         } // success
     }); // $.ajax function
  }); // click inscription favoris


// inscription à une activité
$('.contenantboutoninscription').on('click', '.inscriptionactvite',function() {
// $('.add').click(function() {
var activityid = $(this).attr('data-activity');
var disponible = $(this).parent().siblings("h5").children().text();
// console.log("add: "+activityid) ;
console.log(disponible) ;
var parent =  $(this).parent();

          $.ajax({
            // 1) on définit le fichier vers lequel on envoye la requête POST
          url : 'inc/add-to-registrations.php',

        // 2/ on spécifie la méthode  
          type : 'GET', // Le type de la requête HTTP, ici  POST

        // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
          data : { 
            activity_id: activityid
          
                }, // On fait passer nos variables au script coucou.php
        
        // 4) format de retour du fichier php dans "data"
          dataType : 'html',
          
          // 5) fonction à effectuer en cas de succès
          success : function(data){ //  contient le HTML renvoyé
            
            //var myVar = $(this).find('.bi-heart-fill');
            // $(coeurparent).html(data);   
            $(parent).children().removeClass("inscriptionactvite btn-success").addClass("desinscriptionactvite btn-danger");   
            $(parent).children().html("Je me désinscris");   

            disponible = disponible -1;
            $(parent).siblings("h5").children().text(disponible);

          } // success
        }); // $.ajax function

}); // click inscription registration activité




// désinscription d'une activité
$('.contenantboutoninscription').on('click', '.desinscriptionactvite',function() {
// $('.add').click(function() {
var activityid = $(this).attr('data-activity');
var disponible = $(this).parent().siblings("h5").children().text();
// console.log("add: "+activityid) ;
console.log(disponible) ;
var parent =  $(this).parent();

          $.ajax({
            // 1) on définit le fichier vers lequel on envoye la requête POST
          url : 'inc/remove-from-registrations.php',

        // 2/ on spécifie la méthode  
          type : 'GET', // Le type de la requête HTTP, ici  POST

        // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
          data : { 
            activity_id: activityid
          
                }, // On fait passer nos variables au script coucou.php
        
        // 4) format de retour du fichier php dans "data"
          dataType : 'html',
          
          // 5) fonction à effectuer en cas de succès
          success : function(data){ //  contient le HTML renvoyé
            
            //var myVar = $(this).find('.bi-heart-fill');
            // $(coeurparent).html(data);   
            $(parent).children().removeClass("desinscriptionactvite  btn-danger").addClass("inscriptionactvite  btn-secondary");   
            $(parent).children().html("Je m\'inscris");   

            disponible = disponible -(-1);
            $(parent).siblings("h5").children().text(disponible);
            // uniquement pour sur la page mon profil!
          $(parent).parent(".inscritsurprofil").remove();  

          } // success
        }); // $.ajax function

}); // click désinscription registration activité




// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$(".filtre").click(function(){
console.log("filtré");
  $(this).children().toggleClass("fa-chevron-up fa-chevron-down");

});






});//ready


















