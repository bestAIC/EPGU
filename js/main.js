/* Author:
AIC http://aic.ru/
*/

$(document).ready(function() {
  breadCrumbsWidth();
  SForm(); // стилизация элементов форм 
  PopUp(); 
  HideShow();
  SwitchPoint();  
  PlaceSmall();
  MenuShow();
  MapShow(); // инициализая Ya карты
  MapControls(); // попап для карты
  FieldSlide(); // hide/show блоков при клике на кнопку добавить/удалить (страница: zagran_pasport_nov_18_plus.php)
  tableAsynchron(); // асинхронная подгрузка содержимого в табилцу (страница: detskiy_sad_proverka_ocheredy_3.php)
  if($('.search_inp-ajax').length){
    selectRegion();
    // вызывает ajax search autocomplete 
  }
  radioGroup(); // смена содержимого формы, при клике на радиобаттны
  if($('.form-group').length){
    bootstrapValidator();
  }
  if($('.file_uploader-inp').length){
    fileUpload();
  }
});

function breadCrumbsWidth(){
  var cont = $('#header'),
      item = $('ul.breadcrumbs li:not(.first, .last)', cont);
      item.each(function(){
        if($(this).width() >= 180){
          $(this).addClass('overflow')
        }
      })     
}

// Form Styler
function SForm() {

  $(function() {
    /*стилизация элементов*/
    $('input[type="checkbox"],input[type="radio"], select').styler({
      selectSearchLimit: 13,
      selectSmartPositioning: false
    });

    $('.radio_ico-list .jq-checkbox').on('click', function() {
      if ($(this).hasClass('checked')){
        $(this).parent().find('.icomoon').addClass('on');
      } else {
        $(this).parent().find('.icomoon').removeClass('on');
      }
    });

    $('.radio_ico-list .jq-radio').on('click', function() {
        $(this).parent().parent().find('.icomoon').removeClass('on');
        $(this).parent().find('.icomoon').addClass('on');
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


function radioGroup(){
  var that = $('input.switcher_group'),
      thatWrap = $('input', 'fieldset.group_1'),
      cont = $('div.switcher_n');


      var identArr = that.map(function(i, el) {
        return $(el).attr('data-for');
      }).get();

      var uniqueEl = [];
      $.each(identArr, function(index, el){
        if($.inArray(el, uniqueEl) == -1){
          uniqueEl.push(el);
        }
      })
      cont.map(function(index, el){
        $(el).addClass(uniqueEl[index]);
      })

      
      that.on('change', function(event){

        var thatLast = $('.fields_cover', 'fieldset.group_1').prev('.wrapper').last().children(that),
            thatSubFirst = $('.fields_cover', 'fieldset.group_1').find('.wrapper:first-child .switcher_group'),
            cnt = thatLast.parent('.wrapper').next($('.fields_cover', 'fieldset.group_1'));
          
          if(cnt.is(':visible')){
            $('.switcher_group', cnt).removeClass('checked').removeAttr('checked');
            thatLast.on('click', function(i){
              thatSubFirst.addClass('checked').attr('checked', 'checked');
            })
          } else if(cnt.is(':hidden')){
            thatSubFirst.addClass('checked').attr('checked', 'checked');
          }

        var thatID = $(this).attr('data-for');
        cont.hide();
        $('.main').find('.' + thatID).show();
        event.preventDefault();
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

  $('.intro .close').click(function(){
    $(this).parent().parent().slideToggle();  
  });  
  
  $('.select_choice').change(function(){
    if($('#new_auto').attr('selected') == 'selected'){
      $('.new_auto').slideDown();
    } else {
      $('.new_auto').slideUp();
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
    ymaps.ready(init1);
  } 
  if($('#map_moscow').length){
    ymaps.ready(init2);
  } 
  if($('#map_piter').length){
    ymaps.ready(init3);
  }
  
  function init1 () {
    var moscowMap = new ymaps.Map('map', {
        center: [55.76, 37.64], // Москве
        zoom: 10,
        controls: []
      });

    var myPlacemark1 = new ymaps.Placemark([55.758007, 37.844264], {
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
    });

    moscowMap.geoObjects.add(myPlacemark1);
  }


  function init2 () {
    var moscowMap2 = new ymaps.Map('map_moscow', {
        center: [55.76, 37.64], // Москве
        zoom: 10,
        controls: []
      });

    var myPlacemark2 = new ymaps.Placemark([55.758007, 37.844264], {
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
    });

    moscowMap2.geoObjects.add(myPlacemark2);
  }


  function init3 () {
    var piterMap = new ymaps.Map('map_piter', {
        center: [59.952677, 29.938116], // Питерский
        zoom: 10,
        controls: []
      });

    var myPlacemark3 = new ymaps.Placemark([59.939222,30.329030], {
        // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
        balloonContentHeader: "<p><strong>МИФНС России №46 по г. Санкт-Петербург</strong></p> <p>В составе ИФНС России № 1 по г. Санкт-Петербург</p>",
        balloonContentBody: "<p>Адрес: Санкт-Петербург, Невский пр-кт, 3, стр. 2<br/>Режим работы: Пн-Пт: 9:00 - 18:00,<br/>Обед: 12:30 - 13:30<br/>Телефон: +7 (495) 913-00-09<br/>Как добраться:<br/>Ближайшее метро - Волоколамская,<br/>Мякинино, Тушинская<br/>E-mail: i010500@r01.nalog.ru</p>",
        balloonContentFooter: "Подвал",
        hintContent: "Хинт метки",
        balloonMaxWidth: 250,
        balloonMinWidth: 250
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'img/ico_1.png',
        iconImageSize: [38, 54],
        iconImageOffset: [-10, -42]
    });

    piterMap.geoObjects.add(myPlacemark3);
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
        ifModified: true,
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


function bootstrapValidator(){
  $('#profileForm').bootstrapValidator({
          feedbackIcons: {
              valid: 'icomoon icomoon-ok',
              invalid: 'icomoon icomoon-remove',
              validating: 'icomoon icomoon-refresh'
          },
          fields: {
              email: {
                  validators: {
                      notEmpty: {
                          message: 'Адрес электронной почты обязателен для заполнения'
                      },
                      emailAddress: {
                          message: 'Адрес электронной почты заполнен не верно'
                      }
                  }
              },
              username: {
                validators: {
                  message: "Имя пользователя не валидно",
                  notempty: {
                    message: "Имя пользователя обязательно и не может оставаться пустым"
                  },
                  regexp: {
                    message: "Имя пользователя может содержать символы, цифры и подчеркивания"
                  }
                }  
              }

          }
      });
}

function fileUpload(){
  // Initialize the jQuery File Upload widget:
  $('.fileupload').each(function(){
    $(this).fileupload({
          // Uncomment the following to send cross-domain cookies:
          //xhrFields: {withCredentials: true},
          url: 'server/php/',
          add: function (e, data) {
            $.getJSON('server/php/', function (result) {
                data.formData = result; // e.g. {id: 123}
                data.submit();
            });
          },
          maxFileSize: 500,
          acceptFileTypes : /(\.|\/)(gif|jpe?g|png|doc?x|pdf|xls?x)$/i,
          autoUpload: false,
          filesContainer: $('.file_upload-present .files'),
          uploadTemplateId: null,
          downloadTemplateId: null,
          bitrateInterval: 0,
          downloadTemplate: function (o) {
            console.time('Benchmarks');
            var cont = $();
            $.each(o.files, function (index, file) {
                var contRow = $('<div class="template-download fade">' +
                    '<button class="btn btn-danger delete"><i class="icomoon icomoon-trash">(</i></button>' +
                    '<span class="name"></span>' +
                    '<span class="size"></span>' +
                    '<span class="progress progress-striped active role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0""><span class="progress-bar progress-bar-success" style="width:0%;"></span></span>' +
                    (file.error ? '<span class="error"></span>' : '') +
                    '</div>');
                contRow.find('.size').text(o.formatFileSize(file.size));
                if (file.error) {
                    contRow.find('.name').text(file.name);
                    contRow.find('.error').text(file.error);
                } else {
                    contRow.find('.name').append($('<b></b>').text(file.name));
                    console.time('Delete Benchmarks');
                    contRow.find('.delete button')
                        .attr('data-type', file.delete_type)
                        .attr('data-url', file.delete_url);
                    console.timeEnd('Delete Benchmarks');
                }
                cont = cont.add(contRow);
            });
            console.timeEnd('Benchmarks');
            return cont;
          }
    });

    $(this).bind('fileuploadprogressall', function(e, data){
        var progress = parseInt(data.loaded / data.total * 100, 10);
        setTimeout(function(){
            $('.progress-striped .progress-bar').css('width', progress + '%');
        }, 1000)
    });
  });
}


/* DropZone for fileUploader */
$(document).bind('dragover', function (e) {
    var dropZone = $('#dropzone'),
        timeout = window.dropZoneTimeout;
    if (!timeout) {
        dropZone.addClass('in');
    } else {
        clearTimeout(timeout);
    }
    var found = false,
        node = e.target;
    do {
        if (node === dropZone[0]) {
            found = true;
            break;
        }
        node = node.parentNode;
    } while (node != null);
    if (found) {
        dropZone.addClass('hover');
    } else {
        dropZone.removeClass('hover');
    }
    window.dropZoneTimeout = setTimeout(function () {
        window.dropZoneTimeout = null;
        dropZone.removeClass('in hover');
    }, 100);
});
