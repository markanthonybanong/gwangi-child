import { countries } from "../../../utilities/js/countries";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";

export function countrySelectBox(){
    const countryList = countries().eu.concat(countries().normal);
    function contactInformationCountry() {
        const selectBox = document.querySelector(".country-select");
        for (let i = 0; i < countryList.length; i++) {
            const option       = document.createElement("option");
            const country      = countryList[i];
            option.value       = country;
            option.textContent = setFirstLetterUppercase(country);
            selectBox.append(option);    
        }
    }
    function set(){
        contactInformationCountry();
    }

    return {
        set: set
    }
}