import {dateOfBirthYears} from "../../../utilities/js/date-of-birth-years";
import {earliestStartingDateYears} from "../../../utilities/js/earliest-starting-date-years";
import {latestStartingDateYears} from "../../../utilities/js/latest-starting-date-years";
export function yearInSelectBox(){
    
    function earliestStartingDateYear() {
        const selectBox = document.querySelector(".r-e-earliest-starting-date-year");
        const yearList  = earliestStartingDateYears();
        for (let i = 0; i < yearList.length; i++) {
            const year       = document.createElement("option");
            year.value       = yearList[i];
            year.textContent = yearList[i];
            selectBox.appendChild(year);
        }
    }
    function latestStartingDateYear() {
        const selectBox = document.querySelector(".r-e-latest-starting-date-year");
        const yearList  = latestStartingDateYears();
        for (let i = 0; i < yearList.length; i++) {
            const year       = document.createElement("option");
            year.value       = yearList[i];
            year.textContent = yearList[i];
            selectBox.appendChild(year);
        }
    }
    function dateOfBirthYear() {
        const selectBox = document.querySelector(".r-e-date-of-birth-year")
        for(let i = dateOfBirthYears().current; i >= dateOfBirthYears().last; i--) {
            const option       = document.createElement("option");
            option.value       = i;
            option.textContent = i;
            selectBox.appendChild(option);
        }
    }
    function set() {
        earliestStartingDateYear();
        latestStartingDateYear();
        dateOfBirthYear();
    }
    return {
        set: set
    }
}