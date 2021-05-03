export function checkEmptyWhatAreYouLookingForFields(isThereEmptyFields){
    //Looking for job
    if(!$(".looking-for-a-job-as-container input:checked").length){
        isThereEmptyFields.push(true);
        $(".looking-for-a-job-as-container").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Looking for a job cannot be left empty"));
    }
    //Aupair, Nanny, Granny Aupair Fields
    if($(".aupair-nanny-granny-aupair-container:visible").length && !$(".i-will-take-care-of-children-container input:checked").length){
        isThereEmptyFields.push(true);
        $(".i-will-take-care-of-children-container").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("I will take care of children... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair-container:visible").length && $('.hour-child-care-experience').val() === null){
        isThereEmptyFields.push(true);
        $(".hour-child-care-experience").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Hours of child care experience... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair-container:visible").length && $(".children-people-take-care").val() === null) {
        isThereEmptyFields.push(true);
        $(".children-people-take-care").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("How many children/people would... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair-container:visible").length && $(".work-for-single-parent").val() === null) {
        isThereEmptyFields.push(true);
        $(".work-for-single-parent").addClass("required-border");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Would you work for a single parent... cannot be left empty"));
    }
    if($(".aupair-nanny-granny-aupair-container:visible").length && $('input[name="take-care-children-with-special-needs"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.take-care-children-with-special-needs').addClass("required");
        $(".warning-msg").append($("<p id=\"required\"></p>").text("Would you take care of children... cannot be left empty"));
    }
    //Caregiver for elderly & Live in help
    if($('.caregiver-for-elderly-and-live-in-help-container:visible').length && !$('.i-can-assist-provide-support-to-elderly-container input:checked').length) {
        isThereEmptyFields.push(true);
        $('.i-can-assist-provide-support-to-elderly-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('I can assist and provide support to... cannot be left empty'));
    }
    if($('.caregiver-for-elderly-and-live-in-help-container:visible').length && $('input[name="take-care-people-with-special-needs"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.take-care-people-with-special-needs').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Would you take care of people with... cannot be left empty'));
    }
    //Prefered subjects
       if($('.preferred-subjects-container:visible').length && !$('.preferred-subjects-container input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-subjects-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred subjects cannot be left empty'));
    }
    //Activities with kids
    if($('.activities-with-kids-container:visible').length && !$('.activities-with-kids-container input:checked').length){
        isThereEmptyFields.push(true);
        $('.activities-with-kids-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Activities with kids cannot be left empty'));
    }
    //Preferred student age group
    if($('.preferred-student-age-group-container:visible').length && !$('.preferred-student-age-group-container input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-student-age-group-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred student age group cannot be left empty'));
    }
    //Price per hour fields
    if($('.price-per-hour-container:visible').length && $.trim($('.price-per-hour-container .amount').val()) === ""){
        isThereEmptyFields.push(true);
        $('.amount').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Price per hour amount cannot be left empty'));
    }
    if($('.price-per-hour-container:visible').length && $('.currency').val() === null){
        isThereEmptyFields.push(true);
        $('.currency').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Price per hour currency cannot be left empty'));
    }
    //Preferred Countries
    if(!$('.preferred-countries-container input:checked').length){
        isThereEmptyFields.push(true);
        $('.preferred-countries-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred countries cannot be left empty'));
    }
    //Preferred Area
    if(!$('.preferred-area-container input:checked').length) {
        isThereEmptyFields.push(true);
        $('.preferred-area-container').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Preferred area cannot be left empty'));
    }
     
}