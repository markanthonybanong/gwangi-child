import intlTelInput from './international-tel-input/intlTelInput';
import utilsScript from './international-tel-input/utils';
export function interNationalTelephoneInput(){
    const input = document.querySelector('.mobile-number');
    const iti   = intlTelInput(input, {
        utilsScript: utilsScript,
        formatOnDisplay: false,
        customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
            return '+'+selectedCountryData.dialCode;
        }
    });
    return {
        iti: iti
    }
}