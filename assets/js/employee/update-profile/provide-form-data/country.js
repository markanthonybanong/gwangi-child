import {countries} from "../../../../utilities/js/countries";
import {setCountryName} from "../../../../utilities/js/set-country-name";

export default $(function(){
    const countryList = countries().eu.concat(countries().normal);
    countryList.forEach(country => {
        $('.country-container .select').append($('<option/>', {
            value: setCountryName(country),
            text: setCountryName(country)
        }));
    });
});