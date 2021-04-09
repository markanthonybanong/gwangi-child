import { religions } from "../../../utilities/js/religions";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";

export function religionCheckBox(){
    const religionList = religions();
    function personalInfoReligion(){
        const selectBox = document.querySelector(".religion-select-box");
        for (let i = 0; i < religionList.length; i++) {
            const option       = document.createElement("option");
            const religion     = religionList[i]; 
            option.value       = religion;
            option.textContent = setFirstLetterUppercase(religion);
            selectBox.append(option);
        }
    }
    function set(){
        personalInfoReligion();
    }

    return {
        set: set
    }
}