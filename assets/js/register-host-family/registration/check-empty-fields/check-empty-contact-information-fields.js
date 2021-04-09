export function checkEmptyContactInformationFields(isThereEmptyFields){
    //Firstname
    if($.trim($('.firstname').val()) === ""){
        isThereEmptyFields.push(true);
        $('.firstname').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Firstname cannot be left empty'));
    }
    //Lastname
    if($.trim($('.lastname').val()) === ""){
        isThereEmptyFields.push(true);
        $('.lastname').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Lastname cannot be left empty'));
    }
    //Address
    if($.trim($('.address').val()) === ""){
        isThereEmptyFields.push(true);
        $('.address').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Address cannot be left empty'));
    }
    //Zip code
    if($.trim($('.zip-code').val()) === ""){
        isThereEmptyFields.push(true);
        $('.zip-code').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Zip code cannot be left empty'));
    }
    //City
    if($.trim($('.city').val()) === ""){
        isThereEmptyFields.push(true);
        $('.city').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('City cannot be left empty'));
    }
    //State region
    if($.trim($('.state-region').val()) === ""){
        isThereEmptyFields.push(true);
        $('.state-region').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('State/Region cannot be left empty'));
    }
    //Country
    if($.trim($('.country-select').val()) === ""){
        isThereEmptyFields.push(true);
        $('.country-select').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Country cannot be left empty'));
    }
    if($.trim($('.letter-to-the-applicant').val()) === ""){
        isThereEmptyFields.push(true);
        $('.letter-to-the-applicant').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Letter to the applicant cannot be left empty'));
    }
}