export function checkEmptyAccountInformationFields(isThereEmptyFields){
    //Email
    if($.trim($('.email').val()) === ""){
        isThereEmptyFields.push(true);
        $('.email').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Email cannot be left empty'));
    }
    //Confrim Email
    if($.trim($('.confirm-email').val()) === ""){
        isThereEmptyFields.push(true);
        $('.confirm-email').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Confirm Email cannot be left empty'));
    }
    //Password
    if($.trim($('.password').val()) === ""){
        isThereEmptyFields.push(true);
        $('.password').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Password cannot be left empty'));
    }
    //Confirm Password
    if($.trim($('.confirm-password').val()) === ""){
        isThereEmptyFields.push(true);
        $('.confirm-password').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Confirm password cannot be left empty'));
    }
}