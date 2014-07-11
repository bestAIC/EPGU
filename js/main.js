// Inits
$(document).ready(function() {
  SForm(); 
  PopUp();
  HideShow();
  AccordiOn();
  SwitchPoint();  
  PlaceSmall();  
});



// Styler
function SForm() {

	$(function() {
    /*стилизация элементов*/
		$('input, select').styler();
    /*маска ввода даты*/    
    $(".format_date").mask("99.99.9999",{placeholder:"_"});


    
	}); 

}

// Popup
function PopUp() {
 
 
       
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

function AccordiOn(){
  $('.accordion dt').click(function(){
    var root = $(this).parent();
    if($(this).hasClass('active')){
      root.find('dd').slideUp();
      root.find('dt').removeClass('active');
    } else {
      var currentIndex = $(this).index();
      root.find('dd').slideUp();
      root.find('dt').removeClass('active');
      $(this).addClass('active');
      root.children().eq(currentIndex+1).slideDown();
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


  $('em.wrapper input:disabled').each(function(indx, element){
      var psmall = $(this).attr('placeholder'); 
      $(this).parent().prepend('<div class="placeholder_small">'+ psmall +'</div>'); 
  });
  
  lock_phs = 0;  
 
  $('em.wrapper input').keyup(function(){

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
  

  $('em.wrapper input').blur(function(){
    if (this.value == '') {
      lock_phs = 0;
      $(this).parent().find('.placeholder_small').remove();  
    }
  });
    
   
       
}