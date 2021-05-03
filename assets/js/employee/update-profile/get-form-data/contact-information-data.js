import {interNationalTelephoneInput} from "../../../../utilities/js/international-tel-input";
export function contactInformationData(){
    function fields(data){
        data.firstName      = $.trim($('.firstname').val());
        data.lastName       = $.trim($('.lastname').val());
        data.address        = $.trim($('.address').val());
        data.zipcode        = $.trim($('.zip-code').val());
        data.city           = $.trim($('.city').val());
        data.stateRegion    = $.trim($('.state-region').val());
        data.country        = $('.country-container .select').val();
        data.mobilePhoneNo  = interNationalTelephoneInput().iti.getNumber();
        data.letter         = $.trim($('.letter-to-the-family').val());
    }
    return{
        fields: fields
    }
}