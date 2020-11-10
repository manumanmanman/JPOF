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


//--------------------------------------------- MAP ------------------------------------------------
 // Initialize and add the map
 function initMap() {
  // The location of ville du choix
  const bruxelles = { lat: 50.841781, lng: 4.343971};
  const monicone = 'img/visit.png';
 
      
  // CrÃ©ation de la map centrÃ©e sur la ville de notre choix, ou position GPS
  const map = new google.maps.Map(document.getElementById("mappy"), {
    zoom: 14,
    center: bruxelles,
  });  
              // 1) dÃ©finir les coordonnÃ©es gps d'un lieu
              const midi = { lat: 50.841910, lng: 4.343638};
              
              // 2) crÃ©er un marker et le positionner sur la map
              const markermidi = new google.maps.Marker({
              position: midi,
              map: map,
              icon: monicone
              });
      
              // 3) crÃ©er une infowindow
              const infowindowmidi= new google.maps.InfoWindow({
                  content: "<h5>Palais du midi</h5><br><h6>Rue de la fontaine, 4	<br>1000, Bruxelles</h6>"
              });
      
              // 4) dÃ©tecter le click sur le marker et ouvrir l'infowindow correspondante
              markermidi.addListener("click", () => {
                  infowindowmidi.open(map, markermidi);
                  
              });   
              
              //anneessens
              const anneessens = { lat: 50.844275, lng: 4.343480};
              
              const markeranneessens = new google.maps.Marker({
              position: anneessens,
              map: map,
              icon: monicone
              });
      
              const infowindowanneessens = new google.maps.InfoWindow({
                  content: "<h5>Anneessens</h5><br><h6>Place Anneessens, 11	<br>1000, Bruxelles</h6>"
              });
      
              markeranneessens.addListener("click", () => {
                  infowindowanneessens.open(map, markeranneessens);
                  
              });   


              //brugmann
              const brugmann = { lat: 50.887583, lng: 4.331456};
              
              const markerbrugmann = new google.maps.Marker({
              position: brugmann,
              map: map,
              icon: monicone
              });
      
              const infowindowbrugmann = new google.maps.InfoWindow({
                  content: "<h5>Brugmann</h5><br><h6>Place Van Gehuchten,	4	<br>1020, Bruxelles</h6>"
              });
      
              markerbrugmann.addListener("click", () => {
                  infowindowbrugmann.open(map, markerbrugmann);
                  
              }); 
              

              //terre-neuve
              const terre = { lat: 50.840472, lng: 4.345289};
    
              const markerterre = new google.maps.Marker({
              position: terre,
              map: map,
              icon: monicone
              });
      
              const infowindowterre = new google.maps.InfoWindow({
                  content: "<h5>Terre-Neuve</h5><br><h6>Rue Terre-Neuve,	114<br>1020, Bruxelles</h6>"
              });
      
              markerterre.addListener("click", () => {
                  infowindowterre.open(map, markerterre);
                  
              }); 
              


                //lemonnier
                const lemonnier = { lat: 50.842931, lng: 4.345065};
              
                const markerlemonnier = new google.maps.Marker({
                position: lemonnier,
                map: map,
                icon: monicone
                });
        
                const infowindowlemonnier = new google.maps.InfoWindow({
                    content: "<h5>Lemonnier</h5><br><h6>Place Rouppe,	28<br>1020, Bruxelles</h6>"
                });
        
                markerlemonnier.addListener("click", () => {
                    infowindowlemonnier.open(map, markerlemonnier);
                }); 

} //function initMap()
