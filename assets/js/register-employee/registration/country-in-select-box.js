import {countries} from "../../../utilities/js/countries";
import {setCountryName} from "../../../utilities/js/set-country-name";
export function countryInSelectBox() {
    const countryList     = countries();
    const mergedCountries = countryList.eu.concat(countryList.normal);
    function IhaveApassportFromSelectBox(){
        const selectBox = document.querySelector(".r-e-have-a-passport-from-select");
        for (let i = 0; i < mergedCountries.length; i++) {
            const option          = document.createElement("option");
            const country         = mergedCountries[i];
            option.value          = setCountryName(country);
            option.textContent    = setCountryName(country);
            selectBox.appendChild(option);
        }
    }
    function countrySelectBox(){
        const selectBox = document.querySelector(".e-r-country-select");
        for (let i = 0; i < mergedCountries.length; i++) {
            const option          = document.createElement("option");
            const country         = mergedCountries[i];
            option.value          = setCountryName(country);
            option.textContent    = setCountryName(country);
            selectBox.appendChild(option);
        }
    }
    function currentlyLivingSelectBox(){
        const selectBox = document.querySelector(".currently-living-select");
        for (let i = 0; i < mergedCountries.length; i++) {
            const option          = document.createElement("option");
            const country         = mergedCountries[i];
            option.value          = setCountryName(country);
            option.textContent    = setCountryName(country);
            selectBox.appendChild(option);
        }
    }
    function set() {
        IhaveApassportFromSelectBox();
        countrySelectBox();
        currentlyLivingSelectBox();
    }
    return{
        set: set
    }
}