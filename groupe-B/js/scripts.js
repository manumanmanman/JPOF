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
            $(parent).children().removeClass("desinscriptionactvite  btn-danger").addClass("inscriptionactvite  btn-success");   
            $(parent).children().html("Je m\'inscris");   

            disponible = disponible -(-1);
            $(parent).siblings("h5").children().text(disponible);

          } // success
        }); // $.ajax function

}); // click désinscription registration activité




});//ready
