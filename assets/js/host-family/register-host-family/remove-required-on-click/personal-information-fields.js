export default $(function(){
    //What languages are spoken at home
    $('.languages-spoken-at-home input[type="checkbox"]').change(function(){
        if(this.checked && $('.languages-spoken-at-home').hasClass('required-border')){
            $('.languages-spoken-at-home').removeClass('required-border');
        }
    });
    //Nationality
    $('.nationality').change(function(){
        if($('.nationality').hasClass('required-border')){
            $('.nationality').removeClass('required-border');
        }
    });
    //Are you a single parent
    $('.are-you-single-parent').change(function(){
        if($('.are-you-single-parent').hasClass('required-border')){
            $('.are-you-single-parent').removeClass('required-border');
        }
    });
    //Parent\'s age group
    $('.parents-age-group').change(function(){
        if($('.parents-age-group').hasClass('required-border')){
            $('.parents-age-group').removeClass('required-border');
        }
    });
    //Mother Nationality
    $('.mother-nationality-select-box').change(function(){
        if($('.mother-nationality-select-box').hasClass('required-border')){
            $('.mother-nationality-select-box').removeClass('required-border');
        }
    });
    //Father nationality
    $('.father-nationality-select-box').change(function(){
        if($('.father-nationality-select-box').hasClass('required-border')){
            $('.father-nationality-select-box').removeClass('required-border');
        }
    });
    //Religion
    $('.religion-select-box').change(function(){
        if($('.religion-select-box').hasClass('required-border')){
            $('.religion-select-box').removeClass('required-border');
        }
    });
    //Is religion important to you
    $('.religion-important-to-you').change(function(){
        if($('.religion-important-to-you').hasClass('required-border')){
            $('.religion-important-to-you').removeClass('required-border');
        }
    });
    //Employment parent 1
    $('.employment-parent-1').click(function(){
        if($('.employment-parent-1').hasClass('required-border')){
            $('.employment-parent-1').removeClass('required-border');
        }
    });
    //How many people living in the house
    $('.how-many-people-living-in-the-house').click(function(){
        if($('.how-many-people-living-in-the-house').hasClass('required-border')){
            $('.how-many-people-living-in-the-house').removeClass('required-border');
        }
    });
    //Do you have any pets
    $('input[name="have-pets"]').change(function(){
        if($('.have-pets').hasClass('required')){
            $('.have-pets').removeClass('required');
        }
    });
    //Where do you live
    $('.where-do-you-live').change(function(){
        if($('.where-do-you-live').hasClass('required-border')){
            $('.where-do-you-live').removeClass('required-border');
        }
    });
});