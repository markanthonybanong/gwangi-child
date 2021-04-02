export function preferredAreaCheckbox() {
    function checkUncheckCheckBoxes(isCheck) {
        const checkboxes = document.querySelectorAll(".r-e-preferred-area input[type='checkbox']");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheck;
        }
    }
    const selectAll = document.querySelector("#preferred-area-select-all").addEventListener("change", (e)=> {
        if(e.target.checked) {
            checkUncheckCheckBoxes(true);
        } else {
            checkUncheckCheckBoxes(false);
        }
    });
    return {
        selectAll: selectAll 
    }
}