export default $(function(){
    //Email
    $('.email').click(function(){
        if($('.email').hasClass('required-border')){
            $('.email').removeClass('required-border')
        }
    });
    //Confirm Email
    $('.confirm-email').click(function(){
        if($('.confirm-email').hasClass('required-border')){
            $('.confirm-email').removeClass('required-border')
        }
    });
    //Password
    $('.password').click(function(){
        if($('.password').hasClass('required-border')){
            $('.password').removeClass('required-border')
        }
    });
    //Confirm Password
    $('.confirm-password').click(function(){
        if($('.confirm-password').hasClass('required-border')){
            $('.confirm-password').removeClass('required-border')
        }
    });
});