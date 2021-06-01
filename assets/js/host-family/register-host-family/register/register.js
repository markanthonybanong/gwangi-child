import {checkEmptyJobRequirementsFields} from '../check-empty-field/check-empty-job-requirements-fields';
import {checkEmptyPersonalInformationFields} from '../check-empty-field/check-empty-personal-information-fields';
import {checkEmptyContactInformationFields} from '../check-empty-field/check-empty-contact-information-fields';
import {checkEmptyLetterToTheApplicantField} from '../check-empty-field/check-empty-letter-to-the-applicant-field';
import {checkEmptyAccountInformationFields} from '../check-empty-field/check-empty-account-information-fields';
import {isTwoStringMatch, isValidEmail} from "../../../../utilities/js/boolean";
import {interNationalTelephoneInput} from '../../../../utilities/js/international-tel-input';

export default $(function(){
    $('#register-btn').click((e) =>{
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        checkEmptyJobRequirementsFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToTheApplicantField(isThereEmptyFields);
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