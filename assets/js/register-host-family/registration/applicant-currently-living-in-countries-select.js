export function applicantCurrentlyLivingInCountriesSelect() {
    function checkUncheckEUCountries(isCheck) {
        const checkboxes = document.querySelectorAll(".applicant-currently-living-in #eu-country");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheck;
        }
        if(isCheck) {
            document.querySelector("#a-c-l-no-preferences").checked = false;
        }
    }

    const insideEU = document.querySelector("#inside-eu-country").addEventListener("change", (e) => {
        if(e.target.checked) {
            checkUncheckEUCountries(true);
        } else {
            checkUncheckEUCountries(false);
        }
    });

    return {
        insideEU: insideEU
    }
}