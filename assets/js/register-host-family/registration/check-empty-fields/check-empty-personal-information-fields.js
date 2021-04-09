export function checkEmptyPersonalInformationFields(isThereEmptyFields){
    //What languages are spoken at home
    if(!$('.languages-spoken-at-home input:checked').lenght){
        isThereEmptyFields.push(true);
        $('.languages-spoken-at-home').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('What languages are spokent at home cannot be left empty'));
    }
    //Are you a single parent
    if($('.are-you-single-parent').val() === null){
        isThereEmptyFields.push(true);
        $('.are-you-single-parent').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Are you a single parent cannot be left empty'));
    }
    //Parents age group
    if($('.parents-age-group').val() === null){
        isThereEmptyFields.push(true);
        $('.parents-age-group').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Parents age group cannot be left empty'));
    }
    //Mother nationality
    if($('.mother-nationality-select-box').val() === null){
        isThereEmptyFields.push(true);
        $('.mother-nationality-select-box').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Mother nationality cannot be left empty'));
    }
    //Father nationality
    if($('.father-nationality-select-box').val() === null){
        isThereEmptyFields.push(true);
        $('.father-nationality-select-box').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Father nationality cannot be left empty'));
    }
    //Religion
    if($('.religion-select-box').val() === null){
        isThereEmptyFields.push(true);
        $('.religion-select-box').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Religion cannot be left empty'));
    }
    //Is religion important to you
    if($('.religion-important-to-you').val() === null){
        isThereEmptyFields.push(true);
        $('.religion-important-to-you').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Is religion important to you cannot be left empty'));
    }
    //Employment parent 1
    if($.trim($('.employment-parent-1').val()) === ""){
        isThereEmptyFields.push(true);
        $('.employment-parent-1').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Employent (Parent 1) cannot be left empty'));
    }
    //Employment parent 2
    if($.trim($('.employment-parent-2').val()) === ""){
        isThereEmptyFields.push(true);
        $('.employment-parent-2').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Employent (Parent 2) cannot be left empty'));
    }
    //How many people living in the house
    if($('.how-many-people-living-in-the-house').val() === ""){
        isThereEmptyFields.push(true);
        $('.how-many-people-living-in-the-house').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('How many people living... cannot be left empty'));
    }
    //Do you have any pets
    if($('input[name="have-pets"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.have-pets').addClass('required');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Do you have any pets cannot be left empty'));
    }
    //Where do you live
    if($('.where-do-you-live').val() === null){
        isThereEmptyFields.push(true);
        $('.where-do-you-live').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Where do you live cannot be left empty'));
    }
}