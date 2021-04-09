import { countries } from "../../../utilities/js/countries";
import { setCountryName } from "../../../utilities/js/set-country-name";

export function applicantCurrentlyLivingInCountries(){
    const applicantCurrentlyLivingIn = document.querySelector(".applicant-currently-living-in");
    const countryList        = countries();
    function eu() {
        let countEuCountry   = 0;
        let labelEuCountry   = "";
        const euCountries    = countryList.eu
        for(let i = 2; i < euCountries.length; i++){
            let countryName = euCountries[i];
            //last country
            if(i === euCountries.length - 1 ) {
                labelEuCountry                += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}" id="eu-country"/>${setCountryName(countryName)}</label>`;
                const divCountry              = `<div class="end-eu-countries-border-bottom">${labelEuCountry}</div>`
                applicantCurrentlyLivingIn.innerHTML  += divCountry;
            } else if(countEuCountry < 3) {
                labelEuCountry += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}" id="eu-country"/>${setCountryName(countryName)}</label> `; 
                countEuCountry += 1;
            } else {
                labelEuCountry               += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}" id="eu-country"/>${setCountryName(countryName)}</label>`;
                const divCountry             = `<div>${labelEuCountry}</div>`;
                applicantCurrentlyLivingIn.innerHTML += divCountry;
                labelEuCountry               = "";
                countEuCountry               = 0;
            }
        }
    }
    function normal() {
        let countCountry      = 0;
        let labelCountry      = "";
        const normalCountries = countryList.normal; 
        for(let i = 0; i < normalCountries.length; i++){
            let countryName = normalCountries[i];
            if(i === normalCountries.length - 1 ) {
                labelCountry += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}"/>${setCountryName(countryName)}</label>`;
                const divCountry = `<div>${labelCountry}</div>`
                applicantCurrentlyLivingIn.innerHTML += divCountry;
            }
            else if(countCountry < 3) {
                labelCountry += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}"/>${setCountryName(countryName)}</label> `; 
                countCountry += 1;
            } else {
                labelCountry += `<label><input type="checkbox" name="applicant-living-in[]" value="${countryName}"/>${setCountryName(countryName)}</label>`;
                const divCountry = `<div>${labelCountry}</div>`;
                applicantCurrentlyLivingIn.innerHTML += divCountry;
                labelCountry        = "";
                countCountry = 0;
            }
        }
    }
    function set(){

        eu();
        normal();
    }
    return{
        set: set
    }
}