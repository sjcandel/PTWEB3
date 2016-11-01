/* ******************************************************************** */
/* tri des articles */
/* ******************************************************************** */

$(document).ready(function() {
    
   
    $(function () {
    var filterList = {
        init: function () {
            $('#archivesList').mixItUp({
                selectors: {
                    target: '.archives', 
                    filter: '.filter'
                }, 
                load: {
                    filter: '.2016'
                }
            });
        }
    };
    // Run the show!
    filterList.init();
});
});



/* ******************************************************************** */
/* menu hamburger */
/* ******************************************************************** */


$(document).ready(function() {
//    $('#open').click(function() {
//        $('#menu').css("display", "block");
//        $('#open').css("display", "none");
//        $('#close').css("display", "block");
//    });
//    
//    $('#close').click(function() {
//        $('#menu').css("display", "none");
//        $('#open').css("display", "block");
//        $('#close').css("display", "none");
//    });
     $('#close').hide();
     $("#open").click(function(){
         $("#menu").slideDown();
         $('#open').hide();
         $('#close').show();
         console.log("Open mobile nav");
      });

      $("#close").click(function(){
        $("#menu").slideUp();
        $('#close').hide();
        $('#open').show();
        console.log("Close mobile nav");
      });
    
    
    
    $(window).resize(function() {
    if( $(window).width() >= 600 ) {
      $("#menu:hidden").show();
    }
  });
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

  $(".bouton-jaune").click(function() {
     $(this).siblings(".block-hidden").slideToggle();
  }); 
    
  $(".bouton-jaune-smart").click(function(){
      $(this).siblings(".block-hidden-smart").slideToggle();
  });    
});


