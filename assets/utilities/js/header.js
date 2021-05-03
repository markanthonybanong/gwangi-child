(function($) { // Begin jQuery
    $(function() { // DOM ready
      $('.menu-item-has-children>a').append('<span class="arrow down"></span>')
      $('#nav-toggle').on('click', function() {
        $('.menu').slideToggle();
        // Hamburger to X toggle
        this.classList.toggle('active');
      });
      if($(window).width() >= 992){
       
        $('li').hover( function(){
          const subMenu = $(this).children('.sub-menu');
          $(subMenu).toggle();
        });
      }
    }); // end DOM ready
  })(jQuery); // end jQuery