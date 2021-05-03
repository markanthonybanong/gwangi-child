import {interNationalTelephoneInput} from "../../../../../utilities/js/international-tel-input";
export function contactInformationFields(userData){
    //firstname
    $('.firstname-container #field').val(userData['firstname']);
    //lastname
    $('.lastname-container #field').val(userData['lastname']);
    //address
    $('.address-container #field').val(userData['address']);
    //zip code
    $('.zip-code-container #field').val(userData['zipcode']);
    //city
    $('.city-container #field').val(userData['city']);
    //state region
    $('.state-container #field').val(userData['state_region']);
    //country
    $('.country-container #field').val(userData['country']);
    //mobile phone no
    interNationalTelephoneInput().iti.setNumber(userData['mobile_phone_no']);
    //letter
    $('.letter-to-the-family-container #text-area').val(userData['letter']);
}