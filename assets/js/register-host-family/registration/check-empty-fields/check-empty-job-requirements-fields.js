export function checkEmptyJobRequirementsFields(isThereEmptyFields){
    //We are looking for
    if(!$('.we-are-looking-for input:checked').length){
        isThereEmptyFields.push(true);
        $('.we-are-looking-for').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We are ooking for cannot be left empty'));
    }
    //Aupair Nanny & Granny Aupair
    if($('.aupair-nanny-granny-aupair:visible').length){
        if(!$('.take-care-of-children input:checked').length) {
            isThereEmptyFields.push(true);
            $('.take-care-of-children').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('How old are the children/people... cannot be left empty'));
        }
        if($('.hours-child-care-experience').val() === null){
            isThereEmptyFields.push(true);
            $('.hours-child-care-experience').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Minium required childcare experience... cannot be left empty'));
        }
        if($('.how-many-children-people-would').val() === ""){
            isThereEmptyFields.push(true);
            $('.how-many-children-people-would').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('How many children/people would you... cannot be left empty'));
        }
        if($('input[name="take-care-children-with-special-needs"]:checked').val() === undefined){
            isThereEmptyFields.push(true);
            $('.take-care-children-with-special-needs').addClass('required');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant have to take care children... cannot be left empty'));
        }
        if($('.yes-take-care-special-children:visible').length && $.trim($('.describe-children').val()) === ""){
            isThereEmptyFields.push(true);
            $('.describe-children').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Describe children cannot be left empty'));
        }
    }
    //Caregiver for elderly & Live in help
    if($('.we-need-assistance-support-in:visible').length){
        if(!$('.we-need-assistance-support-in-cb input:checked').length){
            isThereEmptyFields.push(true);
            $('.we-need-assistance-support-in-cb').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('We need assistance and support in... cannot be left empty'));
        }
        if($('input[name="take-care-people-with-special-needs"]:checked').val() === undefined) {
            isThereEmptyFields.push(true);
            $('.take-care-people-with-special-needs').addClass('required');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant have to take care people... cannot be left empty'));
        }
    }
    //We need a tutor who can teach
    if($('.tutor-who-can-teach:visible').length && !$('.tutor-who-can-teach-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.tutor-who-can-teach-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We need a tutor who can teach cannot be left empty'));
    }
    //We need a tutor who can do the following activities 
    if($('.tutor-who-can-do-activities:visible').length && !$('.tutor-who-can-do-activities-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.tutor-who-can-do-activities-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We need a tutor who can do following activities... cannot be left empty'));
    }
    //How old are the students the tutor should teach
    if($('.student-age-group-tutor-would-teach:visible').length && !$('.student-age-group-tutor-would-teach-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.student-age-group-tutor-would-teach-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('How old are the students the... cannot be left empty'));
    }
    if($('.price-per-hour:visible').length){
        if($('.amount').val() === ""){
            isThereEmptyFields.push(true);
            $('.amount').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Price per hour amount cannot be left empty'));
        }
        if($('.currency').val() === null){
            isThereEmptyFields.push(true);
            $('.currency').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Price per hour currency cannot be left empty'));
        }
    }
    //Preferred Nationalites
    if(!$('.preferred-nationalities input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-nationalities').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Preferred nationalities cannot be left empty'));
    }
    //Applicant currently living in
    if(!$('.applicant-currently-living-in input:checked').length){
        isThereEmptyFields.push(true);
        $('.applicant-currently-living-in').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Applicant currently living in cannot be left empty'));
    }
    //Earliest starting date month
    if($('.earliest-starting-date-month').val() === null){
        isThereEmptyFields.push(true);
        $('.earliest-starting-date-month').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Earliest starting date month cannot be left empty'));
    }
     //Earliest starting date year
     if($('.earliest-starting-date-year').val() === null){
        isThereEmptyFields.push(true);
        $('.earliest-starting-date-year').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Earliest starting date year cannot be left empty'));
    }
    //Latest starting date month
    if($('.latest-starting-date-month').val() === null){
        isThereEmptyFields.push(true);
        $('.latest-starting-date-month').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Latest starting date month cannot be left empty'));
    }
     //Latest starting date year
     if($('.latest-starting-date-year').val() === null){
        isThereEmptyFields.push(true);
        $('.latest-starting-date-year').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Latest starting date year cannot be left empty'));
    }
    //Duration of stay
    if($('.duration-of-stay').val() === null){
        isThereEmptyFields.push(true);
        $('.duration-of-stay').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Duration of stay cannot be left empty'));
    }
    //Preferred gender
    if($('.preferred-gender').val() === null){
        isThereEmptyFields.push(true);
        $('.preferred-gender').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Preferred gender cannot be left empty'));
    }
    //Required language skills
    if($('.required-language-skills').val() === null){
        isThereEmptyFields.push(true);
        $('.required-language-skills').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required language cannot be left empty'));
    }
    //Required education level
    if($('.require-education-level').val() === null){
        isThereEmptyFields.push(true);
        $('.require-education-level').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required education level cannot be left empty'));
    }
    //Working hours per week
    if($('.working-hours-per-week').val() === null){
        isThereEmptyFields.push(true);
        $('.working-hours-per-week').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Working hours per week cannot be left empty'));
    }
    //Pecket monty per month
    if($('.pocket-money-permonth').val() === ""){
        isThereEmptyFields.push(true);
        $('.pocket-money-permonth').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Pocket money cannot be left empty'));
    }
    //Pecket monty per month currnecy
    if($('.pocket-money-permonth-currency').val() === null){
        isThereEmptyFields.push(true);
        $('.pocket-money-permonth-currency').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Pocket money currency cannot be left empty'));
    }
    //Are you willing to pay for travel expenses
    if($('.pay-for-travel-expenses').val() === null){
        isThereEmptyFields.push(true);
        $('.pay-for-travel-expenses').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Are you willing to pay for travel expenses cannot be left'));
    }
    //Are you willing to pay for visa
    if($('.pay-for-visa').val() === null){
      isThereEmptyFields.push(true);
      $('.pay-for-visa').addClass('required-border');
      $('.warning-msg').append($('<p id=\"required\"></p>').text('Are you willing to pay for visa cannot be left empty'));
    }
    //Required age min
    if($('.required-age-min').val() === null){
        isThereEmptyFields.push(true);
        $('.required-age-min').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required age min cannot be left empty'));
    }
    //Required age max
    if($('.required-age-max').val() === null){
        isThereEmptyFields.push(true);
        $('.required-age-max').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required age max cannot be left empty'));
    }
    //Is smoking allowed
    if($('.is-smoking-allowed').val() === null){
        isThereEmptyFields.push(true);
        $('.is-smoking-allowed').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Is smoking allowed cannot be left empty'));
    }
    //Does the applicant have to take care of pets
    if($('input[name="applicant-take-care-of-pets"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-take-care-of-pets').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant have to take... cannot be left empty'));
    }
    //Does the applicant know how to swing
    if($('input[name="applicant-know-how-to-swim"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-know-how-to-swim').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant know how to swim cannot be left empty'));
    }
    //Does the applicant know how to ride a bike
    if($('input[name="applicant-know-how-to-ride-bike"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-know-how-to-ride-bike').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant know how to ride a bike cannot be left empty'));
    }
    //Do you expect that the applicant to attend first aid training
    if($('input[name="applicant-attend-first-aid-training"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-attend-first-aid-training').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Do you expect that the applicant... cannot be left empty'));
    }
    //Do you expect the applicant to drive
    if($('input[name="applicant-to-drive"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-to-drive').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Do you expect the applicant to drive cannot be left empty'));
    }
    //Can the applicant attend language courses
    if($('input[name="applicant-to-attend-language-courses"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.applicant-to-attend-language-courses').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Can the applicant attend language courses cannot be left empty'));
    }

}