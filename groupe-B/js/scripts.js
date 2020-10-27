$( document ).ready(function() {
    console.log( "ready!" );

    // if ("geolocation" in navigator){ //check geolocation available 
    //   //try to get user current location using getCurrentPosition() method
    //   navigator.geolocation.getCurrentPosition(function(position){ 
    //       console.log("Found your location : Lat : "+position.coords.latitude+" - Lang :"+ position.coords.longitude);
    //     });
    // }else{
    //   console.log("Browser doesn't support geolocation!");
    // }

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
            
            
            $(coeurparent).html(data);  

           } // success
         
       }); // $.ajax function

    }); // click

    $('.coeur').on('click', '.add',function() {
        // $('.add').click(function() {


        var activityid = $(this).attr('data-activity');
        console.log("add: "+activityid) ;
        var coeurparent =  $(this).parent();

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
            
            
            $(coeurparent).html(data);   
            // $(current).hide();
           
           } // success
   
       }); // $.ajax function

    }); // click

});//ready