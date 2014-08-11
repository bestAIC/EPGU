// Inits
$(document).ready(function() {
  SForm(); 
  PopUp();
  HideShow();
  SwitchPoint();  
  PlaceSmall();
  MenuShow();
  MapShow();
  MapControls();
});



// Styler
function SForm() {

  $(function() {
    /*стилизация элементов*/
    $('input, select').styler();
    
    /*маска ввода даты*/    
    $(".format_date").mask("99.99.9999",{placeholder:"_"});

    /* placeholder  для select */
    $('.select_choice').change(function(){
      var select = parseInt($('.select_choice option:selected').val());
      $('.jq-selectbox__select-text').css({
        color: 'black'
      });
    });
    
    /*выпадающие поля при выборе пункта*/ 
    
    $('.fields_cover .jq-radio').click(function(){      
      var root = $(this).parent();
      var currentIndex = root.index();              
      var group = root.parent().children().eq(currentIndex+1);    

      if(!$(this).hasClass('lock')){
        root.parent().find('.jq-radio').removeClass('lock');     
        root.parent().find('.fields_cover_inner').slideUp();
        if(group.hasClass('fields_cover_inner')){
          group.slideDown();
        }                                                               
      }           
    });
     
    $('.jq-radio').click(function(){
      
      var root = $(this).parent();
      var currentIndex = root.index();              
      var group = root.parent().children().eq(currentIndex+1);
      
      var mobile_root = root.parent();
      var mobile_currentIndex = mobile_root.index();              
      var mobile_group = mobile_root.parent().children().eq(mobile_currentIndex+1);       
 
      if(!$(this).hasClass('lock')){
        if(mobile_root.hasClass('limiter')){            
          mobile_root.parent().find('.jq-radio').removeClass('lock');     
          mobile_root.parent().find('.fields_cover').slideUp();
          if(mobile_group.hasClass('fields_cover')){
            mobile_group.slideDown();
          }             
        } else {
          root.parent().find('.jq-radio').removeClass('lock');     
          root.parent().find('.fields_cover').slideUp();
          if(group.hasClass('fields_cover')){
            group.slideDown();
          }                                        
        }                        
      }
            
      $(this).addClass('lock');             
    });                                     

    $('.jq-radio.checked').click(); 

    $(function() {
        if (window.PIE) {
            $('.edit_list .icomoon, .social a, .btn, .q, .jq-selectbox, .jq-selectbox__select, .catalog_btn, #menu_btn, .movable, .switcher .left, .switcher .right, .info_block, .selector LI.first, .selector LI.last, .popup').each(function() {
                PIE.attach(this);
            });
        }
    });      
    
  }); 
   

}


// Popup
function PopUp() {

  $(document).keyup(function(d) {
    if (d.keyCode == 27) {
      $('.popup').hide();
      $(document).unbind('click.event');
      $('#popup_fade').remove();
    }
  });
 
  $('.popup_link').click(function(e) {
  
    var choise = "";
  
    choise = $(this).children().attr('class');
  
    var $message = $('#'+choise);
    $('#wrap').prepend('<div id="popup_fade"></div>');
    if ($message.css('display') != 'block') {
        $message.show();
        var firstClick = true;
        $(document).bind('click.event', function(e) {
            if (!firstClick && $(e.target).closest('.popup_cover').length == 0) {
                $message.hide();
                $(document).unbind('click.event');
                $('#popup_fade').remove();
            }
            $('.close_popup_x').click(function(){
              $('#'+choise).hide();
              $(document).unbind('click.event');
              $('#popup_fade').remove();
            });
            
            $('.popup .back').click(function(){
              $('#'+choise).hide();
              $(document).unbind('click.event');
              $('#popup_fade').remove();
            });            
            
            firstClick = false;
        });
    }
    e.preventDefault();
  }); 
       
}



// Hide show
function HideShow(){
  $('.more_info .pseudo').click(function(){
    $(this).parent().find('.hide_show').slideToggle();
    var down = $(this).parent().find('.slide_down'); 
    var up = $(this).parent().find('.slide_up');
    
    if(down.is(':visible')){
      down.hide();
    } else {
      down.show();
    }
    
    if(down.is(':visible')){
      up.hide();
    } else {
      up.show();
    }    
  
  });
  
  $('.select_choice').change(function(){
    if($('#new_auto').attr('selected') == 'selected'){
      $('.new_auto').slideDown();
    } else {
      $('.new_auto').slideUp();
    }
  });   
      
}

// Switch Point
function SwitchPoint(){
  $('.selector li').click(function(){
    $(this).parent().find('li').removeClass('active');
    $(this).addClass('active');
  });
  
  $('.switcher').click(function(){
    var width = $(this).find('.left').width();
    if($(this).hasClass('active')){
      $(this).find('.cover').animate({left:-width}, 200);
      $(this).removeClass('active');          
    } else {
      $(this).find('.cover').animate({left:0}, 200);
      $(this).addClass('active'); 
    }
  });  
}


// Placeholder small
function PlaceSmall() {


  $('em.wrapper input:text:disabled').each(function(indx, element){
      var psmall = $(this).attr('placeholder'); 
      $(this).parent().prepend('<div class="placeholder_small">'+ psmall +'</div>'); 
  });
  
  lock_phs = 0;
  
  $('em.wrapper input:text').focus(function(){
    lock_phs = 0;
  });    
 
  $('em.wrapper input:text').keyup(function(){
  
      var phs = $(this).attr('placeholder');
    
      if (this.value != '') { 
        if(lock_phs == 0){
          lock_phs = 1;     
          $(this).parent().prepend('<div class="placeholder_small">'+ phs +'</div>'); 
        }       
      } else {
        lock_phs = 0; 
        $(this).parent().find('.placeholder_small').remove();    
      }

  });
  

  $('em.wrapper input:text').blur(function(){
    if (this.value == '') {
      lock_phs = 0;
      $(this).parent().find('.placeholder_small').remove();  
    }
  });


  $('option.selected_one').each(function(indx, element){
    if($(this).attr('selected') == 'selected'){
      lock_phs = 0; 
      $(this).parent().parent().find('.placeholder_small').remove();  
    } else {
      var psmall = $(this).text();
      if(lock_phs == 0){
        lock_phs = 1;           
        $(this).parent().parent().prepend('<div class="placeholder_small">'+ psmall +'</div>');
      }    
    }   
  });

  $('.select_choice').change(function(){
    if($(this).find('.selected_one').attr('selected') == 'selected'){
      lock_phs = 0;  
      $(this).parent().find('.placeholder_small').remove();
    } else {
      var psmall = $(this).find('.selected_one').text();
      if(lock_phs == 0){
        lock_phs = 1;           
        $(this).parent().prepend('<div class="placeholder_small">'+ psmall +'</div>');
      }      
    }
  });    
       
}


// Top menu 

function MenuShow() {

  $('html').click(function(){
    $('#menu_btn').addClass('closed').removeClass('opened');
  })
  
  $('#menu_btn .exit').click(function(event){
    event.stopPropagation();
    if ($('#menu_btn').hasClass('closed')) {
      $('#menu_btn').addClass('opened').removeClass('closed');
    } else {
      $('#menu_btn').addClass('closed').removeClass('opened');
    }
  })
  
  $('#menu_btn').click(function(event){
    event.stopPropagation();
  })

}


function MapShow(){
  if($('#map').length){
    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(init);
  }
  
  function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    var myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [55.76, 37.64], // Москва
        zoom: 10,
        controls: []
      });
      



    var myPlacemark = new ymaps.Placemark([55.758007, 37.844264], {
        // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
        balloonContentHeader: "<p><strong>МИФНС России №46 по г. Москве</strong></p> <p>В составе ИФНС России № 1 по г. Москве</p>",
        balloonContentBody: "<p>Адрес: Москва, Походный пр-д, 3, стр. 2<br/>Режим работы: Пн-Пт: 9:00 - 18:00,<br/>Обед: 12:30 - 13:30<br/>Телефон: +7 (495) 913-00-09<br/>Как добраться:<br/>Ближайшее метро - Волоколамская,<br/>Мякинино, Тушинская<br/>E-mail: i010500@r01.nalog.ru</p>",
        balloonContentFooter: "Подвал",
        hintContent: "Хинт метки",
        balloonMaxWidth: 250,
        balloonMinWidth: 250
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'img/ico_1.png',
        iconImageSize: [38, 54],
        iconImageOffset: [-10, -42]
    }, {
        balloonContentBody: [
          '<address>',
          '<strong>Офис Яндекса в Москве</strong>',
          '<br/>',
          'Адрес: 119021, Москва, ул. Льва Толстого, 16',
          '<br/>',
          'Подробнее: <a href="http://company.yandex.ru/">http://company.yandex.ru</a>',
          '</address>'
        ]
    });
    
    myMap.geoObjects.add(myPlacemark);
  }
}

function MapControls(){
  var $cont = $('.map_nav'),
      $lnk = $('.map_list_item', $cont),
      $block = $('.map_ballon_block');
      $close = $('.map_ballon_close', $block);


      $lnk.each(function(i,e){
        $(this).on('click', function(e){
          $lnk.parent().toggleClass('active');
          e.preventDefault();
          $block.fadeIn();
          $close.on('click', function(){
            e.preventDefault();
            $block.fadeOut();
          })
        });
      });
}
