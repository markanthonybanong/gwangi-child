export function checkEmptyPersonalInformationFields(isThereEmptyFields){
    //What languages are spoken at home
    if(!$('.languages-spoken-at-home input:checked').length){
        isThereEmptyFields.push(true);
        $('.languages-spoken-at-home').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('What languages are spokent at home cannot be left empty'));
    }
    //Employment parent 1
    if($.trim($('.employment-parent-1').val()) === ""){
        isThereEmptyFields.push(true);
        $('.employment-parent-1').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('Employent (Parent 1) cannot be left empty'));
    }
    //How many people living in the house
    if($('.how-many-people-living-in-the-house').val() === ""){
        isThereEmptyFields.push(true);
        $('.how-many-people-living-in-the-house').addClass('required-border');
        $('.warning-msg').append($('<p id=\"required\"></p>').text('How many people living... cannot be left empty'));
    }
 
  
}