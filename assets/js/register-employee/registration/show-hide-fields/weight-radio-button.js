export function weightRadioButton() {
    const weightInLbs = document.querySelector(".weight-in-lbs");
    const weightInKg  = document.querySelector(".weight-in-kg");
    const kg  = document.querySelector("#weight-kg").addEventListener("change", (e) => {
        weightInLbs.style.display = "none";
        weightInKg.style.display  = "block";
    });
    const lbs = document.querySelector("#weight-lbs").addEventListener("change", (e) => {
        weightInKg.style.display  = "none";
        weightInLbs.style.display = "block";
    });
    return {
        kg: kg,
        lbs: lbs
    }
}