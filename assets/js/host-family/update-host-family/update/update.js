import {checkEmptyJobRequirementsFields} from '../check-empty-field/check-empty-job-requirements-fields';
import {checkEmptyPersonalInformationFields} from '../check-empty-field/check-empty-personal-information-fields';
import {checkEmptyContactInformationFields} from '../check-empty-field/check-empty-contact-information-fields';
import {checkEmptyLetterToTheApplicantField} from '../check-empty-field/check-empty-letter-to-the-applicant-field';
 

export default $(function(){
    $('#update-btn').click((e) =>{
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        checkEmptyJobRequirementsFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToTheApplicantField(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            e.preventDefault();
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
        }  
        else {
            $('.warning-msg-btm').append($('<p id="required">Loading ...</p>'));
        }
    });
});