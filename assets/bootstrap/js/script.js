$(function(){
  
    $('navbar nav').hover(function(){
      $(this).find('.nav-link').slideDown();
    },function(){
        $(this).find('.nav-link').slideUp();

    });
    
    

});