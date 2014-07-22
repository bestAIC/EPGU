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
  $('html').click(function(){
    $('#menu_top_btn').addClass('closed').removeClass('opened');
  })
/*
  $('.exit_phone').on('click', function(){
    event.stopPropagation();
    if ($('#menu_top_btn').hasClass('closed')) {
      $('#menu_top_btn').addClass('opened').removeClass('closed').animate({right: '0px'});
      $('#wrap').animate({left: '-244px'}); 
    } else {
      $('#menu_top_btn').addClass('closed').removeClass('opened').animate({right: '-244px'}); 
      $('#wrap').animate({left: '0'});
    }
  })

  $(window).on('resize', function(){
    $('#menu_top_btn').css({right: '0'});
  })
*/  
  
}

