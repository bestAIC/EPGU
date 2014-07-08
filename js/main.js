// Inits
$(document).ready(function() {
  SForm(); 
  PopUp();
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