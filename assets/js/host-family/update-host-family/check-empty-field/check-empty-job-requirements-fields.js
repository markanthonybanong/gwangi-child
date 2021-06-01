export function checkEmptyJobRequirementsFields(isThereEmptyFields){
    //We are looking for
    if(!$('.we-are-looking-for input:checked').length){
        isThereEmptyFields.push(true);
        $('.we-are-looking-for').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We are looking for cannot be left empty'));
    }
    //Aupair Nanny & Granny Aupair
    if($('.aupair-nanny-granny-aupair-container:visible').length){
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
            $('.warning-msg').append($('<p id=\"required\"></p>').text('How many children would you... cannot be left empty'));
        }
        if($('input[name="take-care-children-with-special-needs"]:checked').val() === undefined){
            isThereEmptyFields.push(true);
            $('.take-care-children-with-special-needs').addClass('required');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Does the applicant have to take care children... cannot be left empty'));
        }
        if($('.describe-children-special-needs-container:visible').length && $.trim($('.describe-children').val()) === ""){
            isThereEmptyFields.push(true);
            $('.describe-children').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Describe children cannot be left empty'));
        }
    }
    //Caregiver for elderly & Live in help
    if($('.caregiverforelderly-liveinhelp-container:visible').length){
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
        if($('.describe-people-special-needs-container:visible').length && $.trim($('.describe-people').val()) === ""){
            isThereEmptyFields.push(true);
            $('.describe-people').addClass('required-border');
            $('.warning-msg').append($('<p id=\"required\"></p>').text('Describe people cannot be left empty'));
        }
    }
    //We need a tutor who can teach
    if($('.tutor-who-can-teach-subject-container:visible').length && !$('.tutor-who-can-teach-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.tutor-who-can-teach-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We need a tutor who can teach cannot be left empty'));
    }
    //We need a tutor who can do the following activities 
    if($('.tutor-who-can-do-activities-container:visible').length && !$('.tutor-who-can-do-activities-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.tutor-who-can-do-activities-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('We need a tutor who can do following activities... cannot be left empty'));
    }
    //How old are the students the tutor should teach
    if($('.student-age-group-tutor-would-teach-container:visible').length && !$('.student-age-group-tutor-would-teach-cb input:checked').length){
        isThereEmptyFields.push(true);
        $('.student-age-group-tutor-would-teach-cb').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('How old are the students the... cannot be left empty'));
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
    //Salary
    if($('.salary-amount').val() === ""){
        isThereEmptyFields.push(true);
        $('.salary-amount').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Salary money cannot be left empty'));
    }
    //Required age min
    if($('.required-age-min').val() === ""){
        isThereEmptyFields.push(true);
        $('.required-age-min').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required age min cannot be left empty'));
    }
    //Required age max
    if($('.required-age-max').val() === ""){
        isThereEmptyFields.push(true);
        $('.required-age-max').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Required age max cannot be left empty'));
    }

}