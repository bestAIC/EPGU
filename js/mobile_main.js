// Inits
$(document).ready(function() {
  RetinaDisplay(); 
  MenuShowMobile();   
});



// Retina
function RetinaDisplay() {

  var retina = window.devicePixelRatio > 1 ? true : false;
  
  if (retina) {
    $('html').addClass('retina');
  }
  
/*    
  $(window).load(function() {
    var images = $('img');
      images.each(function(i) {
        $(this).width($(this).width() / 2);
      });
  });
*/
  

}

// Top menu mobile

function MenuShowMobile(){

  $('#header .menu').on('click', function(){  
  	if ($(this).hasClass('closed')) {
      $(this).addClass('opened').removeClass('closed');  
      $('#wrap').animate({left:-250});
      $('.menu_btn_cover').animate({right:0});       
    } else {
      $(this).addClass('closed').removeClass('opened');
      $('#wrap').animate({left:0});
      $('.menu_btn_cover').animate({right:-250});       
    }   
  })
   
}

