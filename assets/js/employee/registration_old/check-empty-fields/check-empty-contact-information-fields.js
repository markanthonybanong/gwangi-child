export function checkEmptyContactInformationFields(isThereEmptyFields){
    if($.trim($('.firstname').val()) === ""){
        isThereEmptyFields.push(true);
        $('.firstname').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('First name cannot be left empty'));
    }
    if($.trim($('.lastname').val()) === ""){
        isThereEmptyFields.push(true);
        $('.lastname').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Last name cannot be left empty'));
    }
    if($.trim($('.address').val()) === ""){
        isThereEmptyFields.push(true);
        $('.address').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Address cannot be left empty'));
    }
    if($.trim($('.zip-code').val()) === ""){
        isThereEmptyFields.push(true);
        $('.zip-code').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Zip code cannot be left empty'));
    }
    if($.trim($('.city').val()) === ""){
        isThereEmptyFields.push(true);
        $('.city').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('City cannot be left empty'));
    }
    if($.trim($('.state-region').val()) === ""){
        isThereEmptyFields.push(true);
        $('.state-region').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('State/Region cannot be left empty'));
    }
    if($('.e-r-country-select').val() === null){
        isThereEmptyFields.push(true);
        $('.e-r-country-select').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Country cannot be left empty'));
    }
    if($('.mobile-number').val() === ""){
        isThereEmptyFields.push(true);
        $('.mobile-number').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Mobile phone number be left empty'));
    }
}