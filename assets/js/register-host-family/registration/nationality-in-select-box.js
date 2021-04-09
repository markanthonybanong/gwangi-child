import { nationalities } from "../../../utilities/js/nationalities";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";

export function nationalityInSelectBox() {
    const nationalityList = nationalities();
    function motherNationalityInSelectBox(){
        const selectBox = document.querySelector(".mother-nationality-select-box");
        for (let i = 0; i < nationalityList.length; i++) {
            const option       = document.createElement("option");
            const nationality  = nationalityList[i];
            option.value       = nationality;
            option.textContent = setFirstLetterUppercase(nationality);
            selectBox.append(option);              
        }
    }
    function fatherNationalityInSelectBox(){
        const selectBox = document.querySelector(".father-nationality-select-box");
        for (let i = 0; i < nationalityList.length; i++) {
            const option       = document.createElement("option");
            const nationality  = nationalityList[i];
            option.value       = nationality;
            option.textContent = setFirstLetterUppercase(nationality);
            selectBox.append(option);              
        }
    }
    function set(){
        motherNationalityInSelectBox();
        fatherNationalityInSelectBox();
    }
    return {
        set: set
    }
}