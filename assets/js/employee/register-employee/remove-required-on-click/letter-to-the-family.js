export default $(function(){
    $('.letter-to-the-family').click(function(){
        if($('.letter-to-the-family').hasClass('required-border')){
            $('.letter-to-the-family').removeClass('required-border');
        }
    });
});