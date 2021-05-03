import {whatAreYouLookingForData} from "../get-form-data/what-are-you-looking-for-data";
export function deleteUserCountriesAndInsertNew(){
    function insertNewCountries(){
        const countries = whatAreYouLookingForData().preferredCountries();
        countries.forEach(country => {
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/insertIntoRegisteredEmployeePreferredCountries',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                data: {
                    wpUserID: "null",
                    country: country,
                    isActivated: 1,
                    yearCreated: new Date().getFullYear(),
                },
                error: function (xhr, ajaxOptions, thrownError) {
                },
                complete: function(data){
                }
            });
        });
    }

    $.ajax({
        type: 'DELETE',
        url: myAjax.restURL + 'activeAupair/v1/deleteEmployeeCountries',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            if(response.success){
               insertNewCountries();
            } 
        },
        error: function (xhr, ajaxOptions, thrownError) {
        },
        complete: function(data){
        }
    });

}