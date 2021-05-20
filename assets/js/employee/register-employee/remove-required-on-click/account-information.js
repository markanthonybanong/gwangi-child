export default $(function(){
    //email
    $('.email').click(function(){
        if($('.email').hasClass('required-border')){
            $('.email').removeClass('required-border');
        }
    });
    //confirm-email
    $('.confirm-email').click(function(){
        if($('.confirm-email').hasClass('required-border')){
            $('.confirm-email').removeClass('required-border');
        }
    });
    //password
    $('.password').click(function(){
        if($('.password').hasClass('required-border')){
            $('.password').removeClass('required-border');
        }
    });
    //confirm password
    $('.confirm-password').click(function(){
        if($('.confirm-password').hasClass('required-border')){
            $('.confirm-password').removeClass('required-border');
        }
    });
});