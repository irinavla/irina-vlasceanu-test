$(document).ready(function(){
    var menuIcon    = $('.menu-icon'),
        menu        = $('.nav-menu'),
        menuLink    = $('.nav-menu a');
    
    menuIcon.on('click', function() {
       $(this).toggleClass('open'); 
       menu.toggleClass('is-visible'); 
    });
    
    menuLink.on('click', function() {
        menuIcon.removeClass('open');
        menu.removeClass('is-visible');
    });
    
    $('.slider').each(function (id) { 
      $(this).slick({
        nextArrow: '<span class="nav-arrow fa-icon fa-angle-right"></span>',
        prevArrow: '<span class="nav-arrow fa-icon fa-angle-left"></span>'
      });
    });
});
