export function heightRadioButton() {
    const heightInCm = document.querySelector(".height-in-cm");
    const heightInFt = document.querySelector(".height-in-ft");

    const cm = document.getElementById("height-cm").addEventListener("change", (e) => {
        heightInFt.style.display = "none";
        heightInCm.style.display = "block";
    }); 
    
    const ft = document.getElementById("height-ft").addEventListener("change", (e) => {
        heightInCm.style.display = "none";
        heightInFt.style.display = "block";
    });
    return {
        cm: cm,
        ft: ft
    }
}