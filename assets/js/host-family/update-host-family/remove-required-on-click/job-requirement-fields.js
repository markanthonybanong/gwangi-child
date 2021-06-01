export default $(function(){
    $('.we-are-looking-for input[type="checkbox"]').change(function(){
        if(this.checked && $('.we-are-looking-for').hasClass('required-border')) {
            $('.we-are-looking-for').removeClass('required-border');
        }
    });
    //Aupair Nanny & Granny Aupair
    $('.take-care-of-children input[type="checkbox"]').change( function(){
        if(this.checked && $('.take-care-of-children').hasClass('required-border')) {
            $('.take-care-of-children').removeClass('required-border');
        }
    });
    $('.hours-child-care-experience').change( function(){
        if($('.hours-child-care-experience').hasClass('required-border')){
            $('.hours-child-care-experience').removeClass('required-border');
        }
    });
    $('.how-many-children-people-would').click( function(){
        if($('.how-many-children-people-would').hasClass('required-border')){
            $('.how-many-children-people-would').removeClass('required-border');
        }
    });
    $('input[name="take-care-children-with-special-needs"]').change( function(){
        if($('.take-care-children-with-special-needs').hasClass('required')){
            $('.take-care-children-with-special-needs').removeClass('required');
        }
    });
    $('.describe-children').click( function(){
        if($('.describe-children').hasClass('required-border')){
            $('.describe-children').removeClass('required-border');
        }
    });
    //Caregiver for elderly & Live in help
    $('.we-need-assistance-support-in-cb input[type="checkbox"]').change( function(){
        if($('.we-need-assistance-support-in-cb').hasClass('required-border')){
            $('.we-need-assistance-support-in-cb').removeClass('required-border');
        }
    });
    $('input[name="take-care-people-with-special-needs"]').change( function(){
        if($('.take-care-people-with-special-needs').hasClass('required')){
            $('.take-care-people-with-special-needs').removeClass('required');
        }
    });
    $('.describe-people').click( function(){
        if($('.describe-people').hasClass('required-border')){
            $('.describe-people').removeClass('required-border');
        }
    });
    //We need a tutor who can teach
   $('.tutor-who-can-teach-cb input[type="checkbox"]').change( function(){
        if($('.tutor-who-can-teach-cb').hasClass('required-border')){
            $('.tutor-who-can-teach-cb').removeClass('required-border');
        }
    });
    //We need a tutor who can do the following activities 
    $('.tutor-who-can-do-activities-cb input[type="checkbox"]').change( function(){
        if($('.tutor-who-can-do-activities-cb').hasClass('required-border')){
            $('.tutor-who-can-do-activities-cb').removeClass('required-border');
        }
    });
    //How old are the students the tutor should teach
   $('.student-age-group-tutor-would-teach-cb input[type="checkbox"]').change( function(){
        if($('.student-age-group-tutor-would-teach-cb').hasClass('required-border')){
            $('.student-age-group-tutor-would-teach-cb').removeClass('required-border');
        }
    });
    //Preferred Nationalites
    $('.preferred-nationalities input[type="checkbox"]').change( function(){
        if($('.preferred-nationalities').hasClass('required-border')){
            $('.preferred-nationalities').removeClass('required-border');
        }
    });
    //Applicant currently living in
    $('.applicant-currently-living-in input[type="checkbox"]').change( function(){
        if($('.applicant-currently-living-in').hasClass('required-border')){
            $('.applicant-currently-living-in').removeClass('required-border');
        }
    });
      //Salary amount
      $('.salary-amount').click( function(){
        if($('.salary-amount').hasClass('required-border')){
            $('.salary-amount').removeClass('required-border');
        }
    }); 
    //Pecket money per month
    $('.pocket-money-permonth').click( function(){
        if($('.pocket-money-permonth').hasClass('required-border')){
            $('.pocket-money-permonth').removeClass('required-border');
        }
    }); 
    //Required age min
    $('.required-age-min').click( function(){
        if($('.required-age-min').hasClass('required-border')){
            $('.required-age-min').removeClass('required-border');
        }
    });
    //Required age max
    $('.required-age-max').click( function(){
        if($('.required-age-max').hasClass('required-border')){
            $('.required-age-max').removeClass('required-border');
        }
    });
});