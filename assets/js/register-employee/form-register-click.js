import {checkEmptyLetterToFamilyField} from "./check-empty-fields/check-empty-letter-to-family-field";
import {checkEmptyAccountInformationFields} from "./check-empty-fields/check-accont-information-fields";
import {checkEmptyContactInformationFields} from "./check-empty-fields/check-empty-contact-information-fields";
import {checkEmptyPersonalInformationFields} from "./check-empty-fields/check-empty-personal-information-fields";
import {checkEmptyWhatAreYouLookingForFields} from "./check-empty-fields/check-empty-what-are-you-looking-for-fields";
import { isEmailValid } from "../../utilities/js/is-email-valid";
import {getFormData} from "./get-form-data";
export function formRegisterClick() {
    function isPasswordMatch(){
        let isMatch = false;
        if($('.password').val() === $('.confirm-password').val()){
            isMatch = true;
        } else {
            $('.login-warning-msg').append($('<p id="required"></p>').text('Password doesnt match')); 
        }
        return isMatch;
    }
    function wpUserData() {
        const data     = {};
        data.email     = $.trim($('.email').val());
        data.password  = $.trim($('.password').val());
        data.userLogin = $.trim($('.account-username').val());
        return data;
    }
    function aupairRegisteredEmployeeData(wpUserId) {
        const data    = {};
        data.wpUserID = wpUserId;
        getFormData().lookingForJobAs(data);
        getFormData().angTakeCareChildrenFromAge(data);
        getFormData().clAssistProdiveSuppToElderlyIn(data);
        getFormData().loPrefferedSubjects(data);
        getFormData().lvActivityWithKids(data);
        getFormData().lovPreferredStudentAgeGroup(data);
        getFormData().preferredArea(data);
        getFormData().fields(data);
        return data;
       
    }
 
    function insertIntoAupairRegisteredEmployee(wpUserId) {
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/insertIntoAupairRegisteredEmployee',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            data: aupairRegisteredEmployeeData(wpUserId), 
            success: function(response){
                console.log("CREATED THE REGISTERED EMPLOYEE ".response);
            }
        });
    }

    function insertIntoRegisteredEmployeePreferredCountries(wpUserId) {
        const countries = getFormData().preferredCountries();
        countries.forEach(country =>{
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/insertIntoRegisteredEmployeePreferredCountries',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                data: {
                    wpUserID: wpUserId,
                    country: country    
                },
                success: function(response){
                    console.log("CREATED THE REGISTERED EMPLOYEE ".response);
                }
            });
        });
    }
    
    const set = $('#register-btn').click((e)=>{
        e.preventDefault();
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.login-warning-msg').empty();
        checkEmptyWhatAreYouLookingForFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToFamilyField(isThereEmptyFields);
        checkEmptyAccountInformationFields(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
        }
        if(!isThereEmptyFields.includes(true) && isPasswordMatch() && isEmailValid($('.email').val(), '.login-warning-msg')){
            $('.warning-msg').empty();
            $('#register-btn').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/insertWpUser',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                data: wpUserData(),
                success: function(response){
                    console.log("CREATED THE USER IN WP", response);
                    if(response.success) {
                        insertIntoAupairRegisteredEmployee(response.data);
                        insertIntoRegisteredEmployeePreferredCountries(response.data)
                        $('.login-warning-msg').append($('<p id="required"></p>').text("We have sent a verification link to your email address. Please check your inbox or spam."));
                    } else {
                        $('.login-warning-msg').append($('<p id="required"></p>').text(response.data));
                    }
                    $('#register-btn').prop('disabled', false);
                }
            });
        }
    });

    return {
        set: set
    }
}