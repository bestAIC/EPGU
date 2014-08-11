// Inits
$(document).ready(function() {
  MPopUp(); 
  MenuShowMobile();
  ResponseGallery(); // Slick Galery 
  EasterEggs(); 
  LoadPhoto();
});



// Popup
function MPopUp() {
  $(window).on('resize', function(){
    if($('#content .ticket .popup_link:hidden, #content .map_list .popup_link:hidden').length){  
      $('#content .ticket .popup_link, #content .map_list_item').parent().addClass('go_more');
    } else { 
      $('.limiter, .map_list').removeClass('go_more');
    } 

    if($('#map:hidden').length){  
      $('.map_list li').addClass('go_more');
    } else { 
      $('.limiter').removeClass('go_more');
    } 

  }).resize(); 
  

  $('.limiter, .map_list.go_more').on('click', function(e) {
    if($(this).hasClass('go_more')){
      var $message = $('#popup_more_info');
          
      $('#wrap').prepend('<div id="popup_fade"></div>');
      if ($message.css('display') != 'block') {
          $message.show();
          var firstClick = true;
          $(document).bind('click.event', function(e) {
              if (!firstClick && $(e.target).closest('.popup_cover').length == 0) {
                  $message.hide();
                  $('#popup_fade').remove();                                    
                  $(document).unbind('click.event');
              }
              $('.close_popup_x, .popup .back').click(function(){
                $message.hide(); 
                $('#popup_fade').remove();                                
                $(document).unbind('click.event');
              });           
              
              firstClick = false;
          });
      }
      e.preventDefault(); 
    }
  });

  $('.map_list li').on('click', function(e) {
    if($(this).hasClass('go_more')){
      var $message = $('#popup_map_address');
          
      $('#wrap').prepend('<div id="popup_fade"></div>');
      if ($message.css('display') != 'block') {
          $message.show();
          var firstClick = true;
          $(document).bind('click.event', function(e) {
              if (!firstClick && $(e.target).closest('.popup_cover').length == 0) {
                  $message.hide();
                  $('#popup_fade').remove();                                    
                  $(document).unbind('click.event');
              }
              $('.close_popup_x, .popup .back').click(function(){
                $message.hide(); 
                $('#popup_fade').remove();                                
                $(document).unbind('click.event');
              });           
              
              firstClick = false;
          });
      }
      e.preventDefault(); 
    }
  });        
          
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
  var cont = $('.js-q_slick'),
      wrap = $('.js-q_slick_wrap').parent(),
      lnk = $('.js-q'),
      gallery = $('.js-q_slick');

  // $('html').click(function(){
  //   cont.addClass('closed').removeClass('opened');
  // });
    lnk.on('click', function(){
      $(this).toggleClass('active');
      cont.css({'z-index': 101})
      if($('.q_slick_cont:visible')){
        wrap.slideToggle();
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

      }
    })
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



function LoadPhoto(){
  var $cont = $('.load_photo-wrap'),
      $lnk = $('.load_photo-btn', $cont);

      $(window).on('load resize', function(e){
        var $contRight = $('.col_right.load_photo_cols'),
            $contRightWidth = $('.col_right.load_photo_cols').width(),
            $require = $('.require_wrap');
            
        $require.width($contRightWidth);
      })

      $lnk.on('click', function(e){
        e.preventDefault();
        $cont.addClass('upload');
        $cont.find('.col_right.load_photo_cols').toggleClass('current');
      })
}