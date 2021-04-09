import { nationalities } from "../../../utilities/js/nationalities";
import {setCountryName} from "../../../utilities/js/set-country-name";
export function preferredNationalities(){
    function set() {
        let countNationality  = 0;
        let labelCountry      = "";
        const nationalityList = nationalities();
        const preferredNationality = document.querySelector(".preferred-nationalities");

        for(let i = 2; i < nationalityList.length; i++){
            let nationality = nationalityList[i];
            if(i === nationalityList.length - 1 ) {
                labelCountry += `<label><input type="checkbox" name="${nationality}"/>${setCountryName(nationality)}</label>`;
                const divCountry = `<div>${labelCountry}</div>`
                preferredNationality.innerHTML += divCountry;
            }
            else if(countNationality < 3) {
                labelCountry += `<label><input type="checkbox" name="${nationality}"/>${setCountryName(nationality)}</label> `; 
                countNationality += 1;
            } else {
                labelCountry += `<label><input type="checkbox" name="${nationality}"/>${setCountryName(nationality)}</label>`;
                const divCountry = `<div>${labelCountry}</div>`;
                preferredNationality.innerHTML += divCountry;
                labelCountry        = "";
                countNationality = 0;
            }
        }
    }
    return {
        set: set
    }
}