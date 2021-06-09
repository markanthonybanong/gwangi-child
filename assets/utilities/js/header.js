(function($) { // Begin jQuery
    $(function() { // DOM ready
      // $('.menu-item-has-children>a').append('<span class="arrow down"></span>');
      $('#nav-toggle').on('click', function() {
        $('.menu').slideToggle();
        // Hamburger to X toggle
        this.classList.toggle('active');
      });
      $('li').click( function(){
        const subMenu = $(this).children('.sub-menu');
        $(subMenu).toggle();
        //hide other sub menu siblings if open
        // const siblings = $(this).siblings();
        // siblings.children('.sub-menu:visible').hide();
        $(this).find('span').toggleClass('up down');
      });
      if($(window).width() >= 992){
        $('li .up').removeClass('up').addClass('down');
      }
    }); // end DOM ready
  })(jQuery); // end jQuery