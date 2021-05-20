import {religions} from "../../../utilities/js/religions";
import {setFirstLetterUppercase} from "../../../utilities/js/set-first-letter-uppercase";
export function religionInSelectBox() {
    function set() {
        const religionList = religions();
        const selectBox    = document.querySelector(".e-r-religion-select");
        for (let i = 0; i < religionList.length; i++) {
            const option       = document.createElement("option");
            const religion     = religionList[i];
            option.value       = setFirstLetterUppercase(religion);
            option.textContent = setFirstLetterUppercase(religion);
            selectBox.appendChild(option);
        }
    } 
    return {
        set: set
    }
}