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
}



}); //click





}); //ready
