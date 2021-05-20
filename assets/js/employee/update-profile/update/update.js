import { checkEmptyWhatAreYouLookingForFields } from "../check-empty-fields/check-empty-what-are-you-looking-for-fields";
import { checkEmptyPersonalInformationFields } from "../check-empty-fields/check-empty-personal-information-fields";
import { checkEmptyContactInformationFields} from "../check-empty-fields/check-empty-contact-information-fields";
import { checkEmptyLetterToFamilyField} from "../check-empty-fields/check-empty-letter-to-family";

export default $(function(){
  
    $('#update-btn').click((e) =>{
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        
        checkEmptyWhatAreYouLookingForFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToFamilyField(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
            e.preventDefault();
        } else {
            $('.warning-msg-btm').append($('<p id="required"></p>').text("Updating..."));
        } 
    });
});