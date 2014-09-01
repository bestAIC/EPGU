// Inits
$(document).ready(function() {
  MPopUp(); 
  MenuShowMobile();
  ResponseGallery(); // Slick Galery 
  EasterEggs(); 
  LoadPhoto();
});

lock = 0;

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
      // $('.limiter').removeClass('go_more');
      $('.map_list li').removeClass('go_more');
    } 

  }).resize(); 
  

  $('.limiter, .map_list').on('click', function(e) {
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

  /*проверка попапа для детского сада*/
  $('.map_list li').on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('go_more')){
      var inp = $(this).find('input').attr('id');
      $('#popup_map_address .ds_cover_btn').hide();
      $('#popup_map_address').find('.'+inp).show();
      if($('.map_list .jq-checkbox.checked').length==4){
        $('#popup_map_address').find('.'+inp+' label').addClass('disabled');
      } else {
        $('#popup_map_address').find('.'+inp+' label').removeClass('disabled');
      }
    } 
  });


  // попап для popup_map_address
  $('.map_list li').on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('go_more')){
      var $message = $('#popup_map_address');

          
      $('#wrap').prepend('<div id="popup_fade"></div>');
      if ($message.css('display') != 'block') {
          $message.show();
          var firstClick = true;
          $(document).bind('click.event', function(e) {
              e.preventDefault()
              if (!firstClick && $(e.target).closest('.popup_cover').length == 0) {
                  $message.hide();
                  $('#popup_fade').remove();                                    
                  $(document).unbind('click.event');
              }
              $('.close_popup_x, .popup .back').click(function(e){
                e.preventDefault()
                $message.hide(); 
                $('#popup_fade').remove();                                
                $(document).unbind('click.event');
              });           
              
              firstClick = false;
          });
      } 
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
      $contBottom = $('.col_bottom.load_photo_cols'),
      $back = $('.col_bottom .back', $contBottom),
      $btn = $('.btn', $contBottom);

      $(window).on('load resize', function(e){
        var $contRight = $('.col_right.load_photo_cols'),
            contRightWidth = $contRight.width(),
            $require = $('.require_wrap'),
            bodyPhone = parseInt($('body').width());

            $require.width(contRightWidth);

            $btn.on('click', function(){
              if($(this).hasClass('download_photo')){
                $('.download_photo, .change_photo').hide();
                $('.done_photo, .back_photo').show();
                $cont.addClass('uploader');
              } else if($(this).hasClass('back_photo')){
                $('.done_photo, .back_photo, .change_photo').hide();
                $('.download_photo').show();
                $cont.removeClass('uploader');
              } else if($(this).hasClass('done_photo')){
                $('.download_photo, .back_photo, .done_photo').hide();
                $('.change_photo, .advice.type_ok').show();
                $cont.find('.load_photo').addClass('upload');
              } else if($(this).hasClass('change_photo')){
                $('.download_photo, .change_photo, .advice.type_ok').hide();
                $('.done_photo, .back_photo').show();
                $cont.addClass('uploader');
                $cont.find('.load_photo').removeClass('upload');
              }
            });
          
        if(lock == 0){
          if(bodyPhone <= 640){
            $btn.on('click', function(){
              lock = 1;
              if($(this).hasClass('download_photo')){
                $cont.find('.require').slideUp();
                $cont.find('.edit_wrap').slideDown();
                $contBottom.find('.more_info').hide();
              } else if($(this).hasClass('back_photo')){
                $cont.find('.edit_wrap').slideUp();
                $cont.find('.require').slideDown();
                $contBottom.find('.more_info').show();
              } else if($(this).hasClass('done_photo')){
                $cont.find('.edit_wrap').slideUp();
                $cont.find('.require').slideUp();
                $contBottom.animate({'padding-top': '0'});
              } else if($(this).hasClass('change_photo')){
                $cont.find('.edit_wrap').slideDown();
                $contBottom.animate({'padding-top': '72px'})
              }
            }) 
          }
        }
      });
}




