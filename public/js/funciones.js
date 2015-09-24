//DECLARACÍON DE OBJETOS Y VARIABLES





//DECLARACÍON DE FUNCIONES






//ASIGNACIÓN DE EVENTOS
$(document).ready(function () { 
    var altura = $('.navbar').offset().top;
    
    $(window).on('scroll', function(){
      if ( $(window).scrollTop() > altura ){
        $('.navbar').addClass('menu-fixed');
      } else {
        $('.navbar').removeClass('menu-fixed');
      }
    });
});

