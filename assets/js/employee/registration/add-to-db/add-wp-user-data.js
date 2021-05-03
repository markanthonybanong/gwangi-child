import {checkEmptyLetterToFamilyField} from "../check-empty-fields/check-empty-letter-to-family-field";
import {checkEmptyAccountInformationFields} from "../check-empty-fields/check-accont-information-fields";
import {checkEmptyContactInformationFields} from "../check-empty-fields/check-empty-contact-information-fields";
import {checkEmptyPersonalInformationFields} from "../check-empty-fields/check-empty-personal-information-fields";
import {checkEmptyWhatAreYouLookingForFields} from "../check-empty-fields/check-empty-what-are-you-looking-for-fields";
import { isEmailValid } from "../../../../utilities/js/is-email-valid";
import {interNationalTelephoneInput} from "../../../../utilities/js/international-tel-input";
import {addRegisteredEmployeeData} from "./add-registered-employee-data";
import {addRegisteredEmployeePreferredCountries} from "./add-registered-employee-preferred-countries";
export function addWpUserData() {
    function isValidPhoneNo(){
        let isValid = false;
        if(interNationalTelephoneInput().iti.isValidNumber()){
            isValid = true;
        } else {
            $('.login-warning-msg').append($('<p id="required"></p>').text('Invalid phone number')); 
        }
        return isValid;
    }
    function isPasswordMatch(){
        let isMatch = false;
        if($('.password').val() === $('.confirm-password').val()){
            isMatch = true;
        } else {
            $('.login-warning-msg').append($('<p id="required"></p>').text('Password doesnt match')); 
        }
        return isMatch;
    }
    function isEmailMatch(){
        let isMatch = false;
        if($('.email').val() === $('.confirm-email').val()){
            isMatch = true;
        } else {
            $('.login-warning-msg').append($('<p id="required"></p>').text('Email doesnt match')); 
        }
        return isMatch;
    }

    function wpUserData() {
        const data     = {};
        data.email     = $.trim($('.email').val());
        data.password  = $.trim($('.password').val());
        return data;
    }

    const add = $('#register-btn').click((e)=>{
        e.preventDefault();
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        checkEmptyWhatAreYouLookingForFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToFamilyField(isThereEmptyFields);
        checkEmptyAccountInformationFields(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
        }
        if(!isThereEmptyFields.includes(true) && isPasswordMatch() && isEmailValid($('.email').val(), '.login-warning-msg') && isEmailMatch() && isValidPhoneNo()){
            $('#register-btn').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/insertWpUser',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                data: wpUserData(),
                success: function(response){
                    if(response.success) {
                        addRegisteredEmployeeData(response.data);
                        addRegisteredEmployeePreferredCountries(response.data);
                        $('.warning-msg-btm').append($('<p id="required"></p>').text("We have sent a verification link to your email address. Please check your inbox or spam."));
                    } else {
                        $('.warning-msg-btm').append($('<p id="required"></p>').text(response.data));
                    }
                    $('#register-btn').prop('disabled', false);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                },
                complete: function(data){
                }
            });
        }
    });
    return {
        add: add
    }
}