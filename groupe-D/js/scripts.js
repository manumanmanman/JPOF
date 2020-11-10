$(document).ready(function(){
console.log( "ready" );


$('.coeur').on('click', '.remove',function(event){
    event.preventDefault();

    var activityid = $(this).attr('data-activity');
    console.log("remove"+activityid) ;

    var coeurparent = $(this).parent();
    
    
    $.ajax({

        url : 'inc/remove-from-favorites.php',
    
        type : 'GET',
    
        data : { 
    
            activity_id: activityid
        },
    
        dataType : 'html',
    
        success : function(data){
    
    $(coeurparent).html(data);
    
        } //success
       
    
    }); //ajax
    
    
}); //ready



$('.coeur').on('click', '.add', function(event) {
    event.preventDefault();

var activityid = $(this).attr('data-activity');
console.log("add: "+activityid) ;

var coeurparent = $(this).parent();

$.ajax({

    url : 'inc/add-to-favorites.php',

    type : 'GET',

    data : { 

        activity_id: activityid
    },

    dataType : 'html',

    success : function(data){

$(coeurparent).html(data);

    } //success
   

}); //ajax


}); //click


$(".filtres li a").click(function(e) {
e.preventDefault();
var category = $(this).attr("data-category");
console.log(category);

if (category == 'all') {

$('.full-card').fadeIn();


} else {

    $(".full-card:not(."+category+")").fadeOut();
    $('.'+category).fadeIn(1000);}



}); //click


// inscription à une activité
$('.contenantboutoninscription').on('click', '.inscriptionactvite',function(event) {
    event.preventDefault();
    // $('.add').click(function() {
    var activityid = $(this).attr('data-activity');
    var disponible = $(this).parent().siblings("h6").children().text();
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
                $(parent).siblings("h6").children().text(disponible);
  
              } // success
            }); // $.ajax function
  
  }); // click inscription registration activité
  
  
  
  
   // désinscription d'une activité
   $('.contenantboutoninscription').on('click', '.desinscriptionactvite',function(event) {
    event.preventDefault();
    // $('.add').click(function() {
    var activityid = $(this).attr('data-activity');
    var disponible = $(this).parent().siblings("h6").children().text();
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
                $(parent).siblings("h6").children().text(disponible);
                // uniquement pour sur la page mon profil!
              $(parent).parent(".inscritsurprofil").remove();  
  
              } // success
            }); // $.ajax function
  
  }); // click désinscription registration activité





}); //ready


