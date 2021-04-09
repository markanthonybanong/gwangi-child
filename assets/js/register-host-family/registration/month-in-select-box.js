import { months } from "../../../utilities/js/months";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";

export function monthInSelectBox(){
    const monthList = months();
    function earliestStartingDateMonth() {
        const selectBox = document.querySelector(".earliest-starting-date-month");
        for (let i = 0; i < monthList.length; i++) {
            const option = document.createElement("option");
            const month  = monthList[i];
            option.value = month;   
            option.textContent = setFirstLetterUppercase(month);
            selectBox.append(option);  
        }
    }
    function latestStartingDateMonth() {
        const selectBox = document.querySelector(".latest-starting-date-month");
        for (let i = 0; i < monthList.length; i++) {
            const option = document.createElement("option");
            const month  = monthList[i];
            option.value = month;   
            option.textContent = setFirstLetterUppercase(month);
            selectBox.append(option);  
        }
    }
    function set(){
        earliestStartingDateMonth();
        latestStartingDateMonth();
    }
    return {
        set: set
    }
}