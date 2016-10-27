$(document).ready(function($){
    console.log('Emoji Diams');
    
    var bouton = $('.controlplay, video');
    var video = $('video');
   
    
    var isplaying = false;
    
    bouton.click(function(a){
        console.log('EMOJI CAMION')
        //video[0].play();
        if(isplaying == false) {
            video[0].play();
            isplaying = true;
            console.log('la video joue ? '+isplaying);
            bouton.text('❚❚');
        } else {
            video[0].pause();
            isplaying = false;
            console.log('la video joue ?'+isplaying);
            bouton.text('▶');
        }
    });
    
});