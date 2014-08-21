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
  FieldSlide();
});

// Styler
function SForm() {

  $(function() {
    /*стилизация элементов*/
    $('input, select').styler({
      selectSearchLimit: 13,
      selectSmartPositioning: false
    });
    
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
    
    $('fieldset .jq-radio').click(function(){      
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

    $('fieldset .jq-checkbox').on('click', function(){      
      var root = $(this).parent();
      var currentIndex = root.index();              
      var group = root.parent().children().eq(currentIndex+1);    

      if($(this).hasClass('checked')){
        if(group.hasClass('fields_cover_inner')){
          group.slideDown();
        }
      } else {
        if(group.hasClass('fields_cover_inner')){
          group.slideUp();
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

  $(document).on('keyup', function(d) {
    if (d.keyCode == 27) {
      $('.popup').hide();
      $(document).off('click');
      $('#popup_fade').remove();
    }
  });
 
  $('.popup_link').on('click', function(e) {
    
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
      $block = $('.map_ballon_block'),
      $close = $('.map_ballon_close', $block),
      bodyPhone = parseInt($('body').width());


    // $(window).on('load resize', function(){
    //   if(bodyPhone > 640){
        // console.log('Больше: ' + bodyPhone);
        $lnk.each(function(i,e){
            $(this).on('click', function(e){
                e.preventDefault();
                $lnk.parent().toggleClass('active');
                $block.fadeIn();
                $close.on('click', function(){
                  e.preventDefault();
                  $block.fadeOut();
                })
            });
        });
    //   }
    // });
}

function FieldSlide(){
  var $wrap = $('.js-field_slide-wrap'),
      $close = $('.close', $wrap),
      $cont = $('.filed_slide', $wrap);

    $close.on('click', function(){
        var contLength = $('.filed_slide', $wrap).length - 1;

        if(contLength <= 1){
          $close.slideUp(400, function(){
            $(this).remove();
          })
        }
    });

    

    $('.btn.plus', $('.btn_add-slide')).on('click', function(e){
        e.preventDefault();
        var count = $cont.length + 1;
        for(var i = count; i < count+1; i++){    
            $cont.eq(0).clone().addClass('filed_slide-clone').appendTo($wrap);
          }

            function getRandomArbitary(min, max) {
              return Math.floor(Math.random() * (max - min + 1)) + min;
            }

              var $inp = $('input, select', $cont);
              function checkId(){
                $inp.each(function(){
                    var idRandom = $(this).attr('id', getRandomArbitary(1, 1000));
                        return idRandom;
                    var idNew = $(this).attr('id'),
                        label = $(this).parents('.wrapper').find('label').attr('for', idNew);
                        return label;


                  if($(':radio, :checkbox')){
                    var that = $(this),
                        group = that.attr('name', function(i, val){
                          return that.attr('name') + '_2';
                        });

                      that.parent().attr('id', function(i, val){
                        return that.attr('id') + '-styler';
                      });
                  }
                });
              }

              checkId();

              $('input', '.filed_slide').on('click', function(){
                $(this).styler();
                console.log('id: ' + ($(this).attr('id')));
              })

              $('label', '.filed_slide').on('click', function(){
                console.log('for: ' + ($(this).attr('for')));
              })      

              $wrap.find('.filed_slide').each(function(){
                var that = $(this),
                    $close = $('.close', that);

                  $close.on('click', function(e){
                    e.preventDefault();
                    that.slideUp(400, function(){
                      that.remove();
                    });
                });
    })
  });
}




