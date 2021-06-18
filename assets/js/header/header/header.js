export default $(function(){
      $('#nav-toggle').on('click', function() {
        $('.menu').slideToggle();
        // Hamburger to X toggle
        this.classList.toggle('active');
      });
      
      $('li').click( function(){
        const subMenu = $(this).children('.sub-menu');
        $(subMenu).toggle();
        // -hide other sub menu siblings if open
        // -const siblings = $(this).siblings();
        // -siblings.children('.sub-menu:visible').hide();
        $(this).find('span').toggleClass('up down');
      });

      if($(window).width() >= 992){
        $('li .up').removeClass('up').addClass('down');
      }
});