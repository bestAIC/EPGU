// Inits
$(document).ready(function() {
  RetinaDisplay();  
});



// Retina
function RetinaDisplay() {

  var retina = window.devicePixelRatio > 1 ? true : false;
  
  if (retina) {
    $('html').addClass('retina');
  }
  
/*    
  $(window).load(function() {
    var images = $('img');
      images.each(function(i) {
        $(this).width($(this).width() / 2);
      });
  });
*/
  

}

