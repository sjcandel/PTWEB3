/* ******************************************************************** */
/* menu hamburger */
/* ******************************************************************** */








$(document).ready(function () {
    var menu = $('#menu');
    var ouvrir = $('#open');
    var fermer = $('#close');    
    
    if ($(window).width() > 600) {
        fermer.hide();
        ouvrir.hide();
    }
    
    else {
        fermer.hide();
        menu.hide();
        
        ouvrir.click(function () {
            menu.slideToggle("slow", function () {
                ouvrir.hide();
                fermer.show();
            });
        });
        fermer.click(function () {
            menu.slideToggle("slow", function () {
                fermer.hide();
                ouvrir.show();
            });
        });
    }
    
});




/* ******************************************************************** */
/* menu dropdown */
/* ******************************************************************** */

$(function(){

    var config = {
         sensitivity: 3, // number = sensitivity threshold (must be 1 or higher)
         interval: 200,  // number = milliseconds for onMouseOver polling interval
         over: doOpen,   // function = onMouseOver callback (REQUIRED)
         timeout: 200,   // number = milliseconds delay before onMouseOut
         out: doClose    // function = onMouseOut callback (REQUIRED)
    };

    function doOpen() {
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    }

    function doClose() {
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    }

    $("ul.navigation li ul li:has(ul)").find("a:first").append(" &raquo; ");

});

    
/* ******************************************************************** */
/* onglets coulissants "lire la suite" */
/* ******************************************************************** */
$(document).ready(function() {

  $(".block-visible").click(function() {
     $(this).siblings(".block-hidden").slideToggle();
  });  
});

$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
