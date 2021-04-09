import {educations} from "../../../utilities/js/educations";
import {setFirstLetterUppercase} from "../../../utilities/js/set-first-letter-uppercase";
export function educationInSelectBox() {
    function set() {
        const educationList = educations();
        const selectBox     = document.querySelector(".education");
        for (let i = 0; i < educationList.length; i++) {
            const option       = document.createElement("option"); 
            const education    = educationList[i];
            option.value       = setFirstLetterUppercase(education);
            option.textContent = setFirstLetterUppercase(education);
            selectBox.appendChild(option);
        }
    }
    return {
        set: set
    }
}