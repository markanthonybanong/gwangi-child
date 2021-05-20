export function checkEmptyWhatAreYouLookingForFields(isThereEmptyFields){
    //Looking for a job
    if(!$(".looking-for-job input:checked").length){
        isThereEmptyFields.push(true);
        $(".looking-for-job").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Looking for a job cannot be left empty"));
    }
    //Aupair, Nanny, Granny Aupair Fields
    if($(".aupair-nanny-granny-aupair:visible").length && !$(".take-care-children input:checked").length){
        isThereEmptyFields.push(true);
        $(".take-care-children").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("I will take care of children... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair:visible").length && $(".hour-child-care-experience").val() === null) {
        isThereEmptyFields.push(true);
        $(".hour-child-care-experience").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Hours of child care experience... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair:visible").length && $(".children-people-take-care").val() === null) {
        isThereEmptyFields.push(true);
        $(".children-people-take-care").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("How many children/people would... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair:visible").length && $(".work-for-single-parent").val() === null) {
        isThereEmptyFields.push(true);
        $(".work-for-single-parent").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Would you work for a single parent... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair:visible").length && $('input[name="take-care-children-with-special-needs"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.take-care-children-with-special-needs').addClass("required");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Would you take care of children... cannot be left empty"));
    }
    //Caregiver for elderly & Live in help
    if($('.r-e-i-can-assist:visible').length && !$('.i-can-assist-provide-support-to-elderly-in input:checked').length) {
        isThereEmptyFields.push(true);
        $('.i-can-assist-provide-support-to-elderly-in').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('I can assist and provide support to... cannot be left empty'));
    }
    if($('.r-e-would-you-take:visible').length && $('input[name="take-care-people-with-special-needs"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.take-care-people-with-special-needs').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Would you take care of people with... cannot be left empty'));
    }
    //Prefered subjects
    if($('.r-e-preferred-subjects:visible').length && !$('.preferred-subjects input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-subjects').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred subjects cannot be left empty'));
    }
    //Activities with kids
    if($('.r-e-activities-with-kids:visible').length && !$('.activities-with-kids input:checked').length){
        isThereEmptyFields.push(true);
        $('.activities-with-kids').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Activities with kids cannot be left empty'));
    }
    //Preferred student age group
    if($('.r-e-preferred-student-age-group:visible').length && !$('.preferred-student-age-group input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-student-age-group').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred student age group cannot be left empty'));
    }
    //Price per hour fields
    if($('.r-e-price-per-hour:visible').length && $.trim($('.amount').val()) === ""){
        isThereEmptyFields.push(true);
        $('.amount').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Price per hour amount cannot be left empty'));
    }
    if($('.r-e-price-per-hour:visible').length && $('.currency').val() === null){
        isThereEmptyFields.push(true);
        $('.currency').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Price per hour currency cannot be left empty'));
    }
    //Preferred Countries
    if(!$('.registration-countries input:checked').length){
        isThereEmptyFields.push(true);
        $('.registration-countries').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred countries cannot be left empty'));
    }
    //Preferred Area
    if(!$('.r-e-preferred-area input:checked').length) {
        isThereEmptyFields.push(true);
        $('.r-e-preferred-area').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred area cannot be left empty'));
    }
    //Earliest starting date
    if($('.r-e-earliest-starting-date-month').val() === null) {
        isThereEmptyFields.push(true);
        $('.r-e-earliest-starting-date-month').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Earliest starting date month cannot be left empty'));
    }
    if($('.r-e-earliest-starting-date-year').val() === null) {
        isThereEmptyFields.push(true);
        $('.r-e-earliest-starting-date-year').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Earliest starting date year cannot be left empty'));
    }
    //Latest starting date
    if($('.r-e-latest-starting-date-month').val() === null) {
        isThereEmptyFields.push(true);
        $('.r-e-latest-starting-date-month').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Latest starting date month cannot be left empty'));
    }
    if($('.r-e-latest-starting-date-year').val() === null) {
        isThereEmptyFields.push(true);
        $('.r-e-latest-starting-date-year').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Latest starting date year cannot be left empty'));
    }
    //Duration of stay
    if($('.duration-of-stay').val() === null){
        isThereEmptyFields.push(true);
        $('.duration-of-stay').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Duration of stay cannot be left empty'));
    }
    //What kind of work
    if($('input[name="kind-of-work-looking"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.kind-of-work-looking').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('What kind of work.. cannot be left empty'));
    }
    //Accomodation
    if($('.accomodation').val() === null){
        isThereEmptyFields.push(true);
        $('.accomodation').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Accomodation cannot be left empty'));
    }
    //Would you live family with pets
    if($('input[name="live-family-with-pets"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.live-family-with-pets').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Would you live family... cannot be left empty'));
    }
    //Would you take care of pets
    if($('input[name="take-care-pets"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.take-care-pets').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Would you take of pets cannot be left empty'));
    }
    //Would you work extra to earn addiotinal
    if($('input[name="work-extra-to-earn-additional-money"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.work-extra-to-earn-additional-money').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Would you work extra to earn... cannot be left empty'));
    }
}