export default $(function(){
    //Firstname
    $('.firstname').click(function(){
        if($('.firstname').hasClass('required-border')){
            $('.firstname').removeClass('required-border');
        }
    });
    //Lastname
    $('.lastname').click(function(){
        if($('.lastname').hasClass('required-border')){
            $('.lastname').removeClass('required-border');
        }
    });
    //Address
    $('.address').click(function(){
        if($('.address').hasClass('required-border')){
            $('.address').removeClass('required-border');
        }
    });
    //Zip code
    $('.zip-code').click(function(){
        if($('.zip-code').hasClass('required-border')){
            $('.zip-code').removeClass('required-border');
        }
    });
    //City
    $('.city').click(function(){
        if($('.city').hasClass('required-border')){
            $('.city').removeClass('required-border');
        }
    });
    //State region
    $('.state-region').click(function(){
        if($('.state-region').hasClass('required-border')){
            $('.state-region').removeClass('required-border');
        }
    });
    //Country
    $('.country-select').click(function(){
        if($('.country-select').hasClass('required-border')){
            $('.country-select').removeClass('required-border');
        }
    });
    //Mobile Phone No
    $('.mobile-number').click(function(){
        if($('.mobile-number').hasClass('required-border')){
            $('.mobile-number').removeClass('required-border');
        }
    });
    
});