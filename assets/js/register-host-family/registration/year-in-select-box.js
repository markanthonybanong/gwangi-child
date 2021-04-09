import {earliestStartingDateYears} from "../../../utilities/js/earliest-starting-date-years";
import {latestStartingDateYears} from "../../../utilities/js/latest-starting-date-years";
export function yearInSelectBox(){
    function earliestStartingDateYear() {
        const selectBox = document.querySelector(".earliest-starting-date-year");
        const yearList  = earliestStartingDateYears();
        for (let i = 0; i < yearList.length; i++) {
            const year       = document.createElement("option");
            year.value       = yearList[i];
            year.textContent = yearList[i];
            selectBox.appendChild(year);
        }
    }
    function latestStartingDateYear() {
        const selectBox = document.querySelector(".latest-starting-date-year");
        const yearList  = latestStartingDateYears();
        for (let i = 0; i < yearList.length; i++) {
            const year       = document.createElement("option");
            year.value       = yearList[i];
            year.textContent = yearList[i];
            selectBox.appendChild(year);
        }
    }
    function set() {
        earliestStartingDateYear();
        latestStartingDateYear();
    }
    return {
        set: set
    }
}