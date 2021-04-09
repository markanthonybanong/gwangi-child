import { requiredAges } from "../../../utilities/js/required-age";
export function requiredAgesInSelectBox() {
    const ageList = requiredAges();
    function requiredAgeMin() {
        const selectBox = document.querySelector(".required-age-min");
        for (let i = 0; i < ageList.length; i++) {
            const option       = document.createElement("option");
            const age          = ageList[i];
            option.value       = age;
            option.textContent = age;
            selectBox.append(option);
        }
    }
    function requiredAgeMax() {
        const selectBox = document.querySelector(".required-age-max");
        for (let i = 0; i < ageList.length; i++) {
            const option       = document.createElement("option");
            const age          = ageList[i];
            option.value       = age;
            option.textContent = age;
            selectBox.append(option);
        }
    }
    function set () {
        requiredAgeMin();
        requiredAgeMax();
    }
    return {
        set: set
    }
}