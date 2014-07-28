// Inits
$(document).ready(function() {
  RetinaDisplay(); 
  MenuShowMobile();
  ResponseGallery(); // Slick Galery    
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

// question ico mobile
function ResponseGallery(){
  var cont = $('.js-q')
      lnk = $('.js-q_ico'),
      gallery = $('.js-q_slick');

  lnk.on('click', function(){
    if(cont.hasClass('closed')){
      cont.addClass('opened').removeClass('closed');
    } else {
      cont.addClass('closed').removeClass('opened');
    }
    if(cont.hasClass('opened')){
      gallery.slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
      });
    } else if (cont.hasClass('closed')) {
      gallery.unslick();
    }
  });
}

