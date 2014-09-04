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
  tableAsynchron();
  if($('.search_inp-ajax').length){
    selectRegion();
  }
  // ePrevent();
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

    /*выбор детского садика*/
    $('.map_list .jq-checkbox').on('click', function(){

      if($('.map_list .jq-checkbox.checked').length){
        $('.select_item_cover').slideDown();
      } else {
        $('.select_item_cover').slideUp();
      }

      if($('.map_list .jq-checkbox.checked').length==4){
        $('.map_list .jq-checkbox:not(.checked)').addClass('disabled'); 
      } else {
        $('.map_list .jq-checkbox').removeClass('disabled'); 
      }

      var root = $(this).parent();
      var currentIndex = root.parent().index();
      var item = root.parent().find('.pseudo').text();
      if (!$(this).hasClass('checked')){
        $('#cfp_'+ currentIndex).remove();
        if(!$('.select_item_list em .jq-radio.checked').length){

          $('.select_item_list em:first label').click();
        }        
      } else {
        $(".select_item_list").append('<em id="cfp_'+ currentIndex +'" class="wrapper l_100"><input type="radio" name="g_11" id="fp_'+ currentIndex +'"/><label for="fp_'+ currentIndex +'"><span class="pseudo">'+ item +'</span></label></em>');
        $('input').styler();
        if(!$('.select_item_list em .jq-radio.checked').length){

          $('.select_item_list em:first label').click();
        }

      }  
    });

    $(document).on('click','.map_list_item',function(e){
       $('.map_ballon_block').show();
    });

    $(document).on('click','.map_ballon_close',function(e){
       $('.map_ballon_block').hide();
    });

      


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

    $('#wrap').prepend('<div id="popup_fade"></div>'); 

    if ($message.css('display') != 'block') {
        $message.show();
        var firstClick = true;
        $(document).on('click', function(e) {
            if (!firstClick && $(e.target).closest('.popup').length == 0) {
                $message.hide();
                $(document).off('click');
                $('#popup_fade').remove();
            }
            $('.close_popup_x').click(function(){
              $('#'+choise).hide();
              $(document).off('click');
              $('#popup_fade').remove();
            });
            
            $('.popup .back, .popup .popup_map, .popup .popup_rules').click(function(e){
              e.preventDefault();
              $('#'+choise).hide();
              $(document).off('click');
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

  /*подача документов лично/представителем */
  $('.egrn .group_1 input, .mobile_egrn .group_1 input').change(function(){
    if($('#f_1-styler').hasClass('checked')){
      $('.v_2').hide();
      $('.v_1').show();
    } else {
      $('.v_1').hide();      
      $('.v_2').show();
    }
  });

  
  /*pay*/
  $('.selector li').click(function(){
    if($(this).attr('id') == 'pay'){
      $('.ticket').hide();
      $('.pay').show();
    } else if ($(this).attr('id') == 'not_pay') {
      $('.ticket').hide();
      $('.not_pay').show();
    } else {
      $('.ticket').show();
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


function tableAsynchron(){
  var $tbl = $('.asynchron-tbl'),
      $tblGroup = $('.asynchron-tbl_group'),
      $tblWrap = $('.asynchron-tbl_wrap'),
      $tbody = $('tbody', $tblGroup),
      $lnk = $('.js-asynchron-tbl button', $tblGroup),
      bodyPhone = +($('body').width());

    $lnk.on('click', function(e){
      e.preventDefault();
      $.ajax({
        url: "ajax/table.html",
        cache: false,
        success: function(html){
          $tbody.append(html);
            bodyHeight();  
            return;
        }
      });
    });

    function bodyHeight(e){
      var scrollToBlock = $tbl.height();
        if(bodyPhone > 640){
          $tblWrap.css('height', '550px');
        } else {
          $tblWrap.css('height', '462px');
        }
        $tblWrap.animate({
          scrollTop: scrollToBlock
        }, 400)
        return;
    }


    $(window).on('load', function(){
      if (bodyPhone <= 640 && $tblWrap.length === 1) {
        $tblWrap.css('height', '246px');
        function bodyHeightPhone(){
          var scrollToCurrent = $('.current', $tbl).position().top;
          $tblWrap.animate({
            scrollTop: scrollToCurrent
          })
        } 
        bodyHeightPhone();
      } 
    })
}

function selectRegion(){
  
  // var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });
  var citiesArray = $.map(cities, function (value, key) { return { value: value, data: key }; });



  // Initialize autocomplete with local lookup:
  $('.search_inp-ajax').autocomplete({
      lookup: citiesArray,
      minChars: 0,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
          obj.innerHTML = this.getAttribute('placeholder');
      },
      noSuggestionNotice: 'Нет подходящих результатов'
  });
}

// function ePrevent(){
//   var btn = $('.list.edit_list .lnk, .load_photo-btn .btn, .btn.plus, .btn-cont_inner .btn');

//   btn.on('click', function(e){
//     e.preventDefault()
//   })
// }