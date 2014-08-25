// Inits
$(document).ready(function() {
  MPopUp(); 
  MenuShowMobile();
  ResponseGallery(); // Slick Galery 
  EasterEggs(); 
  LoadPhoto();
  MMapShow();
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

function EasterEggs() {

  $('#intro .ee').click(function() {
    var $div = $(this);
    $div.toggleClass('go');
    if ($div.hasClass('go')) {
      var img = document.createElement('img');
      img.src = "img/mobile/epgu_animation.gif";
      $(img).load(function() {
        $div.css({
          backgroundImage: "url(" + img.src + ")"
        });
      });
    } else {
      $div.css({
        backgroundImage: "none"
      });
    }
  })
}



function LoadPhoto(){
  var $cont = $('.load_photo-wrap'),
      $contBottom = $('.col_bottom.load_photo_cols'),
      $contLeft = $('.col_left.load_photo_cols'),
      $contRight = $('.col_right.load_photo_cols'),
      $back = $('.col_bottom .back', $contBottom),
      $btn = $('.btn', $contBottom);

      $(window).on('load resize', function(e){
        var $contRight = $('.col_right.load_photo_cols'),
            contRightWidth = $contRight.width(),
            $require = $('.require_wrap'),
            bodyPhone = parseInt($('body').width());


            // $require.width(contRightWidth);

            if(bodyPhone > 640){
              if($('.download_photo:visible').length || $('.change_photo:visible').length){
                $('.more_info', $contBottom).hide();
                $('.more_info', $contRight).show();
              } 
              if($('.change_photo:visible').length){
                $('.require', $contRight).append($('.require_wrap'));
                $contBottom.append($('.change_photo').parent(), $('.advice.type_ok').parent());
              }
            } else if (bodyPhone < 640 && !$cont.hasClass('uploader')){
              if($('.download_photo:visible').length || $('.change_photo:visible').length){
                $('.more_info', $contBottom).show();
                $('.more_info', $contRight).hide();
                $contBottom.css({'padding-top': '72px'});
              } 
              if($('.change_photo:visible').length){
                $cont.append($('.require_wrap'));
                $contLeft.append($('.change_photo').parent(), $('.advice.type_ok').parent()).addClass('load_photo-face');
              } 
            }

              $btn.on('click', function(){
                var that = $(this).data('class');

                switch(that) {

                  case 'download_photo':
                    $('.done_photo, .back_photo, .edit_wrap').show();
                    $('.download_photo, .change_photo, .require').hide();
                    $cont.addClass('uploader');
                      if(bodyPhone <= 640){
                        $('.require', $cont).hide();
                        $('.edit_wrap', $cont).show();
                        $('.more_info', $contBottom).hide();
                      }
                    break;

                  case 'back_photo':
                    $('.done_photo, .back_photo, .change_photo', $contBottom).hide();
                    $('.edit_wrap').hide();
                    $('.download_photo, .require, .require_wrap').show();
                    $cont.removeClass('uploader');
                      if(bodyPhone <= 640){
                        $('.edit_wrap', $cont).hide();
                        $('.require, .require_wrap', $cont).show();
                        $('.more_info', $contBottom).show();
                        $('.more_info', $contRight).hide();
                      } else if (bodyPhone > 640){
                        $('.more_info', $contBottom).hide();
                        $('.more_info', $contRight).show();
                      }
                    break;

                  case 'done_photo':
                    $('.download_photo, .back_photo, .done_photo, .edit_wrap').hide();
                    $('.change_photo, .advice.type_ok, .require_wrap').show();
                    $cont.removeClass('uploader');
                    $('.load_photo, .advice.type_not', $cont).addClass('upload');
                    $('.require').show();
                    if(bodyPhone <= 640){
                      $('.edit_wrap', $cont).hide();
                      $contBottom.css({'padding-top': '0'});
                      $cont.append($('.require_wrap'));
                      $contLeft.append($('.change_photo').parent(), $('.advice.type_ok').parent()).addClass('load_photo-face');
                      $('.more_info', $contBottom).show();
                      $('.require_wrap .more_info').hide();
                    } else if (bodyPhone > 640){
                      $('.require', $contRight).append($('.require_wrap'));
                      $contBottom.append($('.change_photo').parent(), $('.advice.type_ok').parent());
                      $('.more_info', $contBottom).hide();
                    }
                    break;

                  case 'change_photo':
                    $('.download_photo, .change_photo, .advice.type_ok, .require_wrap').hide();
                    $('.done_photo, .back_photo, .edit_wrap').show();
                    $cont.addClass('uploader');
                    $('.load_photo', $cont).removeClass('upload');
                    $('.require', $contRight).append($('.require_wrap'));
                    $contBottom.append($('.change_photo').parent(), $('.advice.type_ok').parent());
                    $contLeft.removeClass('load_photo-face');
                    if(bodyPhone <= 640){
                      $('.edit_wrap', $cont).show();
                      $contBottom.css({'padding-top': '72px'});
                      $('.more_info', $contBottom).hide();
                    }
                    break;

                  default:
                    alert(111);
                    break;
                }
              });
      });
}

function MMapShow(){
  $(window).on('load resize', function(){  
    var bodyPhone = parseInt($('body').width()),
        $mapItem = $('.map_list_item');

      $mapItem.each(function(e) {
        var that = $(this);
        if(bodyPhone <= 640){
            that.addClass('popup_link');
            that.children().first().addClass('popup_map_adress');
        } else {
            that.removeClass('popup_link');
            that.children().first().removeClass('popup_map_adress');
        }
      });
    });
    $('.map_list_item').on('click', function(e) {
      if($(this).hasClass('popup_link')){
        var choise = "";
      
        choise = $(this).children().attr('class');
      
        var $message = $('#'+choise);
        
        if ($message.css('display') != 'block') {
            $message.show();
            var firstClick = true;
            $(document).on('click', function(e) {
              $('#wrap').prepend('<div id="popup_fade"></div>');
                if (!firstClick && $(e.target).closest('.popup_cover').length == 0) {
                    $message.hide();
                    $(document).off('click');
                    $('#popup_fade').remove();
                }
                $('.close_popup_x').click(function(){
                  $('#'+choise).hide();
                  $(document).off('click');
                  $('#popup_fade').remove();
                });
                
                $('.popup .back').click(function(e){
                  e.preventDefault();
                  $('#'+choise).hide();
                  $(document).off('click');
                  $('#popup_fade').remove();
                });             
            });
        }
        e.preventDefault();
      }
    }); 
}
