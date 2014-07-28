// Inits
$(document).ready(function() {
  SForm(); 
  PopUp();
  HideShow();
  SwitchPoint();  
  PlaceSmall();
  MenuShow();
});



// Styler
function SForm() {

	$(function() {
    /*стилизация элементов*/
		$('input, select').styler();
    /*маска ввода даты*/    
    $(".format_date").mask("99.99.9999",{placeholder:"_"});

    /*выпадающие поля при выборе пункта*/                
    $('.jq-radio').click(function(){
      
      var root = $(this).parent();
      var currentIndex = root.index();              
      var group = root.parent().children().eq(currentIndex+1);
      
      if(!$(this).hasClass('lock')){            
        root.parent().find('.jq-radio').removeClass('lock');     
        root.parent().find('.fields_cover').slideUp();              
        if(group.hasClass('fields_cover')){
          group.slideDown();
        }                  
      }
            
      $(this).addClass('lock');             
    });
                    
    $('.jq-radio.checked').click();           

     
    
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
      
}

function SwitchPoint(){
  $('.selector li').click(function(){
    $(this).parent().find('li').removeClass('active');
    $(this).addClass('active');
  });
  
  $('.switcher').click(function(){
    if($(this).hasClass('active')){
      $(this).find('.cover').animate({left:-55}, 200);
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





