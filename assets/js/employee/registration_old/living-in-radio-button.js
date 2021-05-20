export function livingInRadioButton() {
    const anotherCountryFields = document.querySelector(".another-country");
    const yes = document.getElementById("home-country").addEventListener("change", (e) => {
              anotherCountryFields.style.display = "none";
    });
    const no = document.getElementById("another-country").addEventListener("change", (e) => {
              anotherCountryFields.style.display = "block";
    });
    return {
        yes: yes,
        no: no
    }
}