import { languages } from "../../../utilities/js/languages";
import { setFirstLetterUppercase } from "../../../utilities/js/set-first-letter-uppercase";

export function languagesCheckBox() {
    function languegesSpokenAtHome() {
        let countLanguage        = 0;
        let labelLanguage        = "";
        const languageList       = languages();
        const languagesParentDiv = document.querySelector(".languages-spoken-at-home");

        for(let i = 2; i < languageList.length; i++){
            let language = languageList[i];
            if(i === languageList.length - 1 ) {
                labelLanguage += `<label><input type="checkbox" name="${language}"/>${setFirstLetterUppercase(language)}</label>`;
                const divCountry = `<div>${labelLanguage}</div>`
                languagesParentDiv.innerHTML += divCountry;
            }
            else if(countLanguage < 3) {
                labelLanguage += `<label><input type="checkbox" name="${language}"/>${setFirstLetterUppercase(language)}</label> `; 
                countLanguage += 1;
            } else {
                labelLanguage += `<label><input type="checkbox" name="${language}"/>${setFirstLetterUppercase(language)}</label>`;
                const divCountry = `<div>${labelLanguage}</div>`;
                languagesParentDiv.innerHTML += divCountry;
                labelLanguage = "";
                countLanguage = 0;
            }
        }
    }
    function set() {
        languegesSpokenAtHome();
    }

    return {
        set: set
    }
}