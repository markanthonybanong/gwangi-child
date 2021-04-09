import { months } from "../../../utilities/js/months";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";
export function monthInSelectBox(){
    const monthList = months();
    function earliestStartingDateMonth() {
        const selectBox = document.querySelector(".r-e-earliest-starting-date-month");
        for (let i = 0; i < monthList.length; i++) {
            const option       = document.createElement("option");
            const month        = monthList[i]
            option.value       = setFirstLetterUppercase(month);
            option.textContent = setFirstLetterUppercase(month);
            selectBox.append(option);
        }
    }
    function latestStartingDateMonth() {
        const selectBox = document.querySelector(".r-e-latest-starting-date-month");
        for (let i = 0; i < monthList.length; i++) {
            const option       = document.createElement("option");
            const month        = monthList[i]
            option.value       = setFirstLetterUppercase(month);
            option.textContent = setFirstLetterUppercase(month);
            selectBox.append(option);
        }
    }
    function dateOfBirthMonth() {
        const selectBox = document.querySelector(".r-e-date-of-birth-month");
        for (let i = 0; i < monthList.length; i++) {
            const option       = document.createElement("option");
            const month        = monthList[i]
            option.value       = setFirstLetterUppercase(month);
            option.textContent = setFirstLetterUppercase(month);
            selectBox.append(option);
        }
    }
    function set() {
        earliestStartingDateMonth();
        latestStartingDateMonth();
        dateOfBirthMonth();
    }   
    return {
        set: set
    }     
}