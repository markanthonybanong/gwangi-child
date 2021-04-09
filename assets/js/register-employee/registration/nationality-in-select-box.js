import {nationalities} from "../../../utilities/js/nationalities";
import {setFirstLetterUppercase} from "../../../utilities/js/set-first-letter-uppercase";
export function nationalityInSelectBox(){
    function set() {
        const nationalityList = nationalities();
        const selectBox       = document.querySelector(".r-e-nationality-select-input");
        for (let i = 0; i < nationalityList.length; i++) {
            const option       = document.createElement("option");
            const nationality  = nationalityList[i];
            option.value       = setFirstLetterUppercase(nationality);
            option.textContent = setFirstLetterUppercase(nationality);
            selectBox.appendChild(option);
        }
    }
    return {
        set: set
    }
}