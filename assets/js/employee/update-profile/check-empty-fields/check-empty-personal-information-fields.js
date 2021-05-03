export function checkEmptyPersonalInformationFields(isThereEmptyFields){
    if($('.weight-in-kg-container:visible').length && $.trim($('.weight-kg').val()) === ""){
        isThereEmptyFields.push(true);
        $('.weight-kg').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Weight in kg cannot be left empty'));
    }
    if($('.weight-in-lbs-container:visible').length && $.trim($('.weight-lbs').val()) === ""){
        isThereEmptyFields.push(true);
        $('.weight-lbs').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Weight in lbs cannot be left empty'));
    }
    if($('.height-in-cm-container:visible').length && $.trim($('.height-cm').val()) === ""){
        isThereEmptyFields.push(true);
        $('.height-cm').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Height in cm cannot be left empty'));
    }
    if($('.height-in-ft-container:visible').length && $.trim($('.height-ft').val()) === ""){
        isThereEmptyFields.push(true);
        $('.height-ft').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Height in ft cannot be left empty'));
    }
    if($.trim($('.name-of-school-college-university').val()) === ""){
        isThereEmptyFields.push(true);
        $('.name-of-school-college-university').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Name of school, college... cannot be left empty'));
    }
    if($.trim($('.profession').val()) === ""){
        isThereEmptyFields.push(true);
        $('.profession').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Profession cannot be left empty'));
    }
    if($('.describe-your-health-problems-or-allergies-container:visible').length && $.trim($('.describe-your-health-problems-or-allergies-container #field').val()) === ""){
        isThereEmptyFields.push(true);
        $('.describe-your-health-problems-or-allergies-container #field').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Describe your health problems... cannot be left empty'));
    }
    if($.trim($('.sports').val()) === ""){
        isThereEmptyFields.push(true);
        $('.sports').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Sports cannot be left empty'));
    }
}