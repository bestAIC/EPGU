// Inits
$(document).ready(function() {
  RetinaDisplay(); 
  MenuShowMobile();
  ResponseGallery(); // Slick Galery 
  EasterEggs();   
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
    $('.menu_btn_cover').removeClass('hide');   
  	if ($(this).hasClass('closed')) {     
      $(this).addClass('opened').removeClass('closed');  
      $('#wrap').animate({left:-250});
      $('.menu_btn_cover').animate({right:0});       
    } else { 
      $(this).addClass('closed').removeClass('opened');
      $('#wrap').animate({left:0});
      $('.menu_btn_cover').animate({right:-250});       
    }   
  });
  
  $(window).on('resize', function(){
    $('.menu_btn_cover').addClass('hide');   
    if ($('#header .menu').hasClass('opened')) {  
      $(this).addClass('closed').removeClass('opened');
      $('#wrap').css({left:0});
      $('.menu_btn_cover').css({right:-250});         
    }      
  }).resize();  
   
}

// question ico mobile
function ResponseGallery(){
  var cont = $('.js-q'),
      wrap = $('.js-q_slick_wrap'),
      lnk = $('.js-q_ico'),
      gallery = $('.js-q_slick');

  // $('html').click(function(){
  //   cont.addClass('closed').removeClass('opened');
  // });

  lnk.on('click', function(){
    cont.css({'z-index': 101})
    if(cont.hasClass('closed')){
      cont.addClass('opened').removeClass('closed');
    } else {
      cont.addClass('closed').removeClass('opened');
    }
    if(cont.hasClass('opened')){
      wrap.show();
      gallery.slick({
            dots: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1
      });
      
      $('.dots-length').remove();

      var dots = $('.slick-dots'),
          dotsLng = $('.slick-dots li', cont).length;
          
          dots.append('<li class="dots-length">' + dotsLng + '</li>');

    } else if (cont.hasClass('closed')) {
      gallery.unslick();
    }
  });
}

// Easter Eggs

function EasterEggs(){

$('#intro .ee').click(function() {
    var $div = $(this);
    $div.toggleClass('go');
    if ($div.hasClass('go')) {
        var img = document.createElement('img');
        img.src = "img/mobile/epgu_animation.gif";
        $(img).load(function(){
            $div.css({backgroundImage: "url("+img.src+")"});
        });    
    } else {
       $div.css({backgroundImage: "none"});
    }
})
 
   
}

