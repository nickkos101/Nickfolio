jQuery(document).ready(function($){


  $('.logo img').hover(function(){
    var orig_state = String($(this).attr('src'));
    var hover_state = String($(this).attr('data-hover-state'));

    $(this).fadeOut('fast',function(){
        $(this).attr('src', hover_state);
        $(this).attr('data-hover-state', orig_state);
        $(this).fadeIn('fast');
    });
 }, function(){
       var orig_state = String($(this).attr('src'));
       var hover_state = String($(this).attr('data-hover-state'));

       $(this).fadeOut('fast',function(){
           $(this).attr('src', hover_state);
           $(this).attr('data-hover-state', orig_state);
           $(this).fadeIn('fast');
       });
  });




});
