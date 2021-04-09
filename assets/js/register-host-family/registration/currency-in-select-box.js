import { currencies } from "../../../utilities/js/currency";

export function currenyInSelectBox() {
    const currencyList = currencies();
    function pocketMoneyCurreny() {
        const selectBox = document.querySelector(".pocket-money-permonth-currency");
        for (let i = 0; i < currencyList.length; i++) {
            const option       = document.createElement("option");
            const curreny      = currencyList[i];
            option.value       = curreny; 
            option.textContent = curreny.toUpperCase();
            selectBox.append(option)
        }
    }
    function set() {
        pocketMoneyCurreny();
    }

    return {
        set: set
    }
}