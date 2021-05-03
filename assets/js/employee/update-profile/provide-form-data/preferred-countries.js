import {countries} from "../../../../utilities/js/countries";
import { setCountryName } from "../../../../utilities/js/set-country-name";

export default $(function(){
    const countriesContainer = $('.preferred-countries-container .countries');
    const countryList        = countries();
    function eu(){
        let countEuCountry   = 0;
        let labelEuCountry   = "";
        const euCountries    = countryList.eu
        for(let i = 2; i < euCountries.length; i++){
            let name = setCountryName(euCountries[i]);
            //last country
            if(i === euCountries.length - 1 ) {
                labelEuCountry                += `<label><input type="checkbox" name="${name}" id="eu-country"/>${name}</label>`;
                const divCountry              = `<div class="end-eu-countries-border-bottom">${labelEuCountry}</div>`
                countriesContainer.append(divCountry);
            } else if(countEuCountry < 3) {
                labelEuCountry += `<label><input type="checkbox" name="${name}" id="eu-country"/>${name}</label> `; 
                countEuCountry += 1;
            } else {
                labelEuCountry               += `<label><input type="checkbox" name="${name}" id="eu-country"/>${name}</label>`;
                const divCountry             = `<div>${labelEuCountry}</div>`;
                countriesContainer.append(divCountry);
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
            let name =  setCountryName(normalCountries[i]);
            if(i === normalCountries.length - 1 ) {
                labelCountry += `<label><input type="checkbox" name="${name}" id="normal-country"/>${name}</label>`;
                const divCountry = `<div>${labelCountry}</div>`
                countriesContainer.append(divCountry);
            }
            else if(countCountry < 3) {
                labelCountry += `<label><input type="checkbox" name="${name}" id="normal-country"/>${name}</label> `; 
                countCountry += 1;
            } else {
                labelCountry += `<label><input type="checkbox" name="${name}" id="normal-country"/>${name}</label>`;
                const divCountry = `<div>${labelCountry}</div>`;
                countriesContainer.append(divCountry);
                labelCountry        = "";
                countCountry = 0;
            }
        }
    }
    eu();
   normal();
});