export function checkEmptyAccountInformationFields(isThereEmptyFields){
    if($.trim($('.account-username').val()) === ""){
        isThereEmptyFields.push(true);
        $('.account-username').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Username cannot be left empty'));
    }
    if($.trim($('.email').val()) === ""){
        isThereEmptyFields.push(true);
        $('.email').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Email cannot be left empty'));
    }
    if($.trim($('.password').val()) === ""){
        isThereEmptyFields.push(true);
        $('.password').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Password cannot be left empty'));
    }
    if($.trim($('.confirm-password').val()) === ""){
        isThereEmptyFields.push(true);
        $('.confirm-password').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Confirm password cannot be left empty'));
    }
}