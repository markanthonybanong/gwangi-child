export function checkEmptyLetterToFamilyField(isThereEmptyFields){
    if($.trim($('.letter-to-the-family').val()) === ""){
        isThereEmptyFields.push(true);
        $('.letter-to-the-family').addClass('required-border');
        $('.warning-msg').append($('<p id="required"></p>').text('Letter to the family cannot be left empty'));
    }
}