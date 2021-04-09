export function preferredCountriesCheckBox() {
    function checkUncheckAllCountries(isCheck) {
        const checkboxes = document.querySelectorAll(".r-e-preferred-countries-div input[type='checkbox']");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheck;
        }
        if(isCheck) {
            document.querySelector("#select-eu").checked = false;
        }
    }
    function checkUncheckEUCountries(isCheck) {
        const checkboxes = document.querySelectorAll("#eu-country");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheck;            
        }
    }
    const selectAll = document.querySelector("#select-all").addEventListener("change", (e)=> {
        if(e.target.checked) {
            checkUncheckAllCountries(true);
        } else {
            checkUncheckAllCountries(false);
        }
    });

    const selectAllEU = document.querySelector("#select-eu").addEventListener("change", (e) => {
        if(e.target.checked) {
            checkUncheckEUCountries(true);
        } else {
            checkUncheckEUCountries(false);
        }
    });
    return {
        selectAll: selectAll,
        selectAllEU: selectAllEU
    }
}