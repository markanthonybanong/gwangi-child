export function checkEmptyLetterToTheApplicantField(isThereEmptyFields){
    if($.trim($('.letter-to-the-applicant').val()) === ""){
        isThereEmptyFields.push(true);
        $('.letter-to-the-applicant').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Letter to the applicant cannot be left empty'));
    }
}