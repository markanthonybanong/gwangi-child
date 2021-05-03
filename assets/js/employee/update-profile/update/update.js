import { checkEmptyWhatAreYouLookingForFields } from "../check-empty-fields/check-empty-what-are-you-looking-for-fields";
import { checkEmptyPersonalInformationFields } from "../check-empty-fields/check-empty-personal-information-fields";
import { checkEmptyContactInformationFields} from "../check-empty-fields/check-empty-contact-information-fields";
import { checkEmptyLetterToFamilyField} from "../check-empty-fields/check-empty-letter-to-family";
import { whatAreYouLookingForData} from "../get-form-data/what-are-you-looking-for-data";
import { personalInformationData} from "../get-form-data/personal-information-data";
import { contactInformationData} from "../get-form-data/contact-information-data";
import { deleteUserCountriesAndInsertNew} from "./delete-user-countries-and-insert-new";

export default $(function(){
    function employeeData(){
        const data  = {};
        whatAreYouLookingForData().lookingForJobAs(data);
        whatAreYouLookingForData().aupairNannyGrannyAupairFields(data);
        whatAreYouLookingForData().caregiverForElderlyAndLiveInHelpFields(data);
        whatAreYouLookingForData().loPrefferedSubjects(data);
        whatAreYouLookingForData().lvActivityWithKids(data);
        whatAreYouLookingForData().lovPreferredStudentAgeGroup(data);
        whatAreYouLookingForData().preferredArea(data);
        whatAreYouLookingForData().fields(data);
        personalInformationData().fields(data);
        contactInformationData().fields(data);
        return data;
    }
  
    $('#update-btn').click((e) =>{
        e.preventDefault();
        const isThereEmptyFields = [];
        $('.warning-msg').empty();
        $('.warning-msg-btm').empty();
        $('#update-btn').prop('disabled', true);
        checkEmptyWhatAreYouLookingForFields(isThereEmptyFields);
        checkEmptyPersonalInformationFields(isThereEmptyFields);
        checkEmptyContactInformationFields(isThereEmptyFields);
        checkEmptyLetterToFamilyField(isThereEmptyFields);
        if(isThereEmptyFields.includes(true)){
            $('html').animate({scrollTop: $('.warning-msg').offset().top -250});
            $('#update-btn').prop('disabled', false);
        } else {
            //wont update if there is no updated columns in table
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/updateEmployee',
                data: employeeData(),
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                success: function(response){
                    deleteUserCountriesAndInsertNew();
                    console.log('the response', response);
                    $('.warning-msg-btm').append($('<p id="required"></p>').text("Updated Employee"));
                    $('#update-btn').prop('disabled', false);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                },
                complete: function(data){
                   
                }
            });
         
        }
    });
});