export function checkEmptyPersonalInformationFields(isThereEmptyFields){
    if($('input[name="gender"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.gender').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Gender cannot be left empty'));
    }
    if($('.r-e-date-of-birth-month').val() === null){
        isThereEmptyFields.push(true);
        $('.r-e-date-of-birth-month').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Date of birth month cannot be left empty'));
    }
    if($('.r-e-date-of-birth-year').val() === null){
        isThereEmptyFields.push(true);
        $('.r-e-date-of-birth-year').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Date of birth year cannot be left empty'));
    }
    if($('input[name="weight"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.weight').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Your weight in? cannot be left empty'));
    }
    if($('.weight-in-kg:visible').length && $.trim($('.weight-kg').val()) === ""){
        isThereEmptyFields.push(true);
        $('.weight-kg').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Weight in kg cannot be left empty'));
    }
    if($('.weight-in-lbs:visible').length && $.trim($('.weight-lbs').val()) === ""){
        isThereEmptyFields.push(true);
        $('.weight-lbs').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Weight in lbs cannot be left empty'));
    }
    if($('input[name="height"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.height').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Your height in? cannot be left empty'));
    } 
    if($('.height-in-cm:visible').length && $.trim($('.height-cm').val()) === ""){
        isThereEmptyFields.push(true);
        $('.height-cm').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Height in cm cannot be left empty'));
    }
    if($('.height-in-ft:visible').length && $.trim($('.height-ft').val()) === ""){
        isThereEmptyFields.push(true);
        $('.height-ft').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Height in ft cannot be left empty'));
    }
    if($('.r-e-nationality-select-input').val() === null){
        isThereEmptyFields.push(true);
        $('.r-e-nationality-select-input').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Nationality cannot be left empty'));
    }
    if($('.r-e-have-a-passport-from-select').val() === null){
        isThereEmptyFields.push(true);
        $('.r-e-have-a-passport-from-select').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('I have a passport from cannot be left empty'));
    }
    if($('input[name="currently-living"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.currently-living').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Where are you currently... cannot be left empty'));
    }
    if($('.another-country:visible').length && $('.currently-living-select').val() === null){
        isThereEmptyFields.push(true);
        $('.currently-living-select').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Currently living country cannot be left empty'));
    }
    if($('.another-country:visible').length && $('.visa-status-select').val() === null){
        isThereEmptyFields.push(true);
        $('.visa-status-select').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Visa status cannot be left empty'));
    }
    if($('.education').val() === null){
        isThereEmptyFields.push(true);
        $('.education').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Education cannot be left empty'));
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
    if($('.marital-status').val() === null){
        isThereEmptyFields.push(true);
        $('.marital-status').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Marital status cannot be left empty'));
    }
    if($('input[name="have-own-children"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.have-own-children').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have children... cannot be left empty'));
    }
    if($('input[name="have-siblings"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.have-siblings').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have any siblings cannot be left empty'));
    }
    if($('input[name="healthcare-training"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.healthcare-training').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have a traning.. cannot be left empty'));
    }
    if($('input[name="have-first-aid-traning"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.have-first-aid-traning').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Did you attend first... cannot be left empty'));
    }
    if($('input[name="have-criminal-record"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.have-criminal-record').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have a criminal record cannot be left empty'));
    }
    if($('.special-diet-consideration').val() === null){
        isThereEmptyFields.push(true);
        $('.special-diet-consideration').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Special diet considerations cannot be left empty'));
    }
    if($('input[name="have-health-problems-or-allergies"]:checked').val() === undefined) {
        isThereEmptyFields.push(true);
        $('.have-health-problems-or-allergies').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have any health problems... cannot be left empty'));
    }
    if($('.describe-health-problems-allergies-container:visible').length && $.trim($('.describe-health-problems-or-allergies').val()) === ""){
        isThereEmptyFields.push(true);
        $('.describe-health-problems-or-allergies').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Describe your health problems... cannot be left empty'));
    }
    if($('.do-you-smoke').val() === null){
        isThereEmptyFields.push(true);
        $('.do-you-smoke').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you smoke cannot be left empty'));
    }
    if($('input[name="can-swim-well"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.can-swim-well').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Can you swim well cannot be left empty'));
    }
    if($('input[name="can-ride-bike"]:checked').val() === undefined){
        isThereEmptyFields.push(true);
        $('.can-ride-bike').addClass('required');
        $('.warning-msg').append($('<p id="required"></p>').text('Can you ride a bike cannot be left empty'));
    }
    if($('.have-drivers-license').val() === null){
        isThereEmptyFields.push(true);
        $('.have-drivers-license').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Do you have a drivers... cannot be left empty'));
    }
    if($.trim($('.sports').val()) === ""){
        isThereEmptyFields.push(true);
        $('.sports').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Sports cannot be left empty'));
    }
    if($('.e-r-religion-select').val() === null){
        isThereEmptyFields.push(true);
        $('.e-r-religion-select').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Religion cannot be left empty'));
    }
    if($('.religion-for-you-is').val() === null){
        isThereEmptyFields.push(true);
        $('.religion-for-you-is').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Religion for you... cannot be left empty'));
    }
}