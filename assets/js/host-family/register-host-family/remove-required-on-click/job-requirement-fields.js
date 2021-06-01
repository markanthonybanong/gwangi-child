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
    //Salary currencies
    $('.salary-currency').click( function(){
        if($('.salary-currency').hasClass('required-border')){
            $('.salary-currency').removeClass('required-border');
        }
    });  
    //Earliest starting date month
    $('.earliest-starting-date-month').change( function(){
        if($('.earliest-starting-date-month').hasClass('required-border')){
            $('.earliest-starting-date-month').removeClass('required-border');
        }
    });
     //Earliest starting date year
    $('.earliest-starting-date-year').change( function(){
        if($('.earliest-starting-date-year').hasClass('required-border')){
            $('.earliest-starting-date-year').removeClass('required-border');
        }
    });
    //Latest starting date month
    $('.latest-starting-date-month').change( function(){
        if($('.latest-starting-date-month').hasClass('required-border')){
            $('.latest-starting-date-month').removeClass('required-border');
        }
    });
     //Latest starting date year
    $('.latest-starting-date-year').change( function(){
        if($('.latest-starting-date-year').hasClass('required-border')){
            $('.latest-starting-date-year').removeClass('required-border');
        }
    });
    //Duration of stay
    $('.duration-of-stay').change( function(){
        if($('.duration-of-stay').hasClass('required-border')){
            $('.duration-of-stay').removeClass('required-border');
        }
    });
    //Preferred gender
    $('.preferred-gender').change( function(){
        if($('.preferred-gender').hasClass('required-border')){
            $('.preferred-gender').removeClass('required-border');
        }
    });
    //Required language skills
    $('.required-language-skills').change( function(){
        if($('.required-language-skills').hasClass('required-border')){
            $('.required-language-skills').removeClass('required-border');
        }
    });
    //Required education level
    $('.required-education-level').change( function(){
        if($('.required-education-level').hasClass('required-border')){
            $('.required-education-level').removeClass('required-border');
        }
    });
    //Working hours per week
    $('.working-hours-per-week').change( function(){
        if($('.working-hours-per-week').hasClass('required-border')){
            $('.working-hours-per-week').removeClass('required-border');
        }
    }); 

    //Are you willing to pay for travel expenses
    $('.pay-for-travel-expenses').change( function(){
        if($('.pay-for-travel-expenses').hasClass('required-border')){
            $('.pay-for-travel-expenses').removeClass('required-border');
        }
    });   
    //Are you willing to pay for visa
    $('.pay-for-visa').change( function(){
        if($('.pay-for-visa').hasClass('required-border')){
            $('.pay-for-visa').removeClass('required-border');
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
    //Is smoking allowed
    $('.is-smoking-allowed').change( function(){
        if($('.is-smoking-allowed').hasClass('required-border')){
            $('.is-smoking-allowed').removeClass('required-border');
        }
    });
    //Does the applicant have to take care of pets
    $('input[name="applicant-take-care-of-pets"]').change( function(){
        if($('.applicant-take-care-of-pets').hasClass('required')){
            $('.applicant-take-care-of-pets').removeClass('required');
        }
    });
    //Does the applicant know how to swing
    $('input[name="applicant-know-how-to-swim"]').change( function(){
        if($('.applicant-know-how-to-swim').hasClass('required')){
            $('.applicant-know-how-to-swim').removeClass('required');
        }
    });
    //Does the applicant know how to ride a bike
    $('input[name="applicant-know-how-to-ride-bike"]').change( function(){
        if($('.applicant-know-how-to-ride-bike').hasClass('required')){
            $('.applicant-know-how-to-ride-bike').removeClass('required');
        }
    });
    //Do you expect the applicant to drive
    $('input[name="applicant-to-drive"]').change( function(){
        if($('.applicant-to-drive').hasClass('required')){
            $('.applicant-to-drive').removeClass('required');
        }
    });
    //Do you expect that the Applicant have training in Healthcare
    $('input[name="applicant-have-training-in-healthcare"]').change( function(){
        if($('.applicant-have-training-in-healthcare').hasClass('required')){
            $('.applicant-have-training-in-healthcare').removeClass('required');
        }
    }); 
    //Do you expect that the applicant to attend first aid training
    $('input[name="applicant-attend-first-aid-training"]').change( function(){
        if($('.applicant-attend-first-aid-training').hasClass('required')){
            $('.applicant-attend-first-aid-training').removeClass('required');
        }
    }); 
});