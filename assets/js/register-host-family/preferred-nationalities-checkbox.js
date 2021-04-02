export function preferredNationalitiesCheckBox(){
    function checkUncheckNationalities(isCheck) {
        const checkboxes = document.querySelectorAll(".registraion-preferred-nationalities input[type='checkbox']");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheck;
        }
        if(isCheck) {
            document.querySelector("#p-n-no-preferences").checked = false;
        }
    }

    const selectAll = document.querySelector("#p-n-select-all").addEventListener("change", (e)=> {
        if(e.target.checked) {
            checkUncheckNationalities(true);
        } else {
            checkUncheckNationalities(false);
        }
    });

    return {
        selectAll: selectAll
    }
}