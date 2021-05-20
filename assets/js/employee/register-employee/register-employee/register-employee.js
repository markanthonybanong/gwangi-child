import {checkEmptyWhatAreYouLookingForFields} from "../check-empty-field/what-are-you-looking-for";
import {checkEmptyPersonalInformationFields} from "../check-empty-field/personal-information";
import {checkEmptyContactInformationFields} from "../check-empty-field/contact-information";
import {checkEmptyLetterToFamilyField} from "../check-empty-field/letter-to-family";
import {checkEmptyAccountInformationFields} from "../check-empty-field/accont-information";
import {isTwoStringMatch, isValidEmail} from "../../../../utilities/js/boolean";
import {interNationalTelephoneInput} from "../../../../utilities/js/international-tel-input";

export default $(function(){
 
    $('#register-btn').click((e) =>{
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        checkEmptyWhatAreYouLookingForFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToFamilyField(isThereEmptyFields);
        checkEmptyAccountInformationFields(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            e.preventDefault();
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
        } else if(isTwoStringMatch($('.email').val(), $('.confirm-email').val()) === false){
            e.preventDefault();
            $('.warning-msg-btm').append($('<p id="required"></p>').text('Email doesnt match')); 
        } else if(isTwoStringMatch($('.password').val(), $('.confirm-password').val()) === false){
            e.preventDefault();
            $('.warning-msg-btm').append($('<p id="required"></p>').text('Password doesnt match')); 
        } else if(isValidEmail($('.email').val()) === false){
            e.preventDefault();
            $('.warning-msg-btm').append($('<p id="required"></p>').text('Please enter valid email')); 
        } else if(interNationalTelephoneInput().isValidNumber() === false){
            e.preventDefault();
            $('.warning-msg-btm').append($('<p id="required"></p>').text('Please enter valid mobile number')); 
        }
        else {
            $('.warning-msg-btm').append($('<p id="required">Loading ...</p>'));
        }
    });
}); 