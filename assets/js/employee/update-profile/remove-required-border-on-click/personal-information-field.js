export default $(function (){
    //weight in kg
     $('.weight-kg').click( function(){
        if($('.weight-kg').hasClass('required-border')){
            $('.weight-kg').removeClass('required-border');
        }
    });
    //weight in lbs
    $('.weight-lbs').click( function(){
        if($('.weight-lbs').hasClass('required-border')){
            $('.weight-lbs').removeClass('required-border');
        }
    });
    //height in cm
    $('.height-cm').click( function(){
        if($('.height-cm').hasClass('required-border')){
            $('.height-cm').removeClass('required-border');
        }
    });
    //height in ft
    $('.height-ft').click( function(){
        if($('.height-ft').hasClass('required-border')){
            $('.height-ft').removeClass('required-border');
        }
    });     
    //name of school college & university
    $('.name-of-school-college-university').click(function(){
        if($('.name-of-school-college-university').hasClass('required-border')){
            $('.name-of-school-college-university').removeClass('required-border');
        }
    });
    //profession
    $('.profession').click(function(){
        if($('.profession').hasClass('required-border')){
            $('.profession').removeClass('required-border');
        }
    });
    //describe health problems or allergies
    $('.describe-health-problems-or-allergies').click(function(){
        if($('.describe-health-problems-or-allergies').hasClass('required-border')){
            $('.describe-health-problems-or-allergies').removeClass('required-border');
        }
    });
    //sports
    $('.sports').click(function(){
        if($('.sports').hasClass('required-border')){
            $('.sports').removeClass('required-border');
        }
    });
});