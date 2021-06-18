export default $(function(){
   $('span[id=unopened-msgs]').each(function(){
    if($(this).text() > 0){
            $(this).css('display', 'block');
        }
   });
   $('.messages-container a:last-child .msg-row').addClass('last-msg');
   if($('.messages-container').children().length > 0){
      $('#delete-msg').css('display', 'block');
   } else {
      $('#no-msgs').css('display', 'block');
   }

});