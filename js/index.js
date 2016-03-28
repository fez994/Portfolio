$(function() {
  
    
    $('.toggle-nav').click(function() {
        
        toggleNav();
    });

  
});



function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        
        $('#site-wrapper').removeClass('show-nav');
    } else {
        
        $('#site-wrapper').addClass('show-nav');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}


$(document).ready(function (){
    $('#arrowcontainer').click(function(){
        $("html, body").animate ({
            scrollTop: $("#about").offset().top
        }, 'slow');
    });
});