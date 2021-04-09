import {checkEmptyJobRequirementsFields} from "./check-empty-fields/check-empty-job-requirements-fields";
import {checkEmptyPersonalInformationFields} from "./check-empty-fields/check-empty-personal-information-fields";
import {checkEmptyContactInformationFields} from "./check-empty-fields/check-empty-contact-information-fields";
import {checkEmptyAccountInformationFields} from "./check-empty-fields/check-empty-account-information-fields";
export function formRegister(){
    const click = $('#register-btn').click((e)=>{
        e.preventDefault();
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.login-warning-msg').empty();
        checkEmptyJobRequirementsFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyAccountInformationFields(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250}); 
        }
    });

    return {
        click: click
    }
}