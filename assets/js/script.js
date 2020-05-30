$(function(){

  $('.nav-item.dropdown').mouseenter(function(){
      $(this).find('.dropdown-menu').slideToggle();
  });

  $('.dropdown-menu > .dropdown-item').click(function(){
        $('.dropdown-menu').slideUp();
  });

});
