import {getFormData} from "../get-form-data";
export function addRegisteredEmployeePreferredCountries(wpUserId){
    const countries   = getFormData().preferredCountries();
    countries.forEach(country =>{
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/insertIntoRegisteredEmployeePreferredCountries',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            data: {
                wpUserID: wpUserId,
                country: country,
                isActivated: 0,
                yearCreated: new Date().getFullYear(),

            },
            success: function(response){
            }
        });
    });
}