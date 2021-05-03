export function preferredCountries(){
    function checkAllCountries(){
        $('.preferred-countries-container').find('input[type="checkbox"]').each(function(){
            this.checked = true;
        });
        $('#select-all').prop('checked', true);
    }
    function checkEUCountries(){
        $('.preferred-countries-container').find('input[id="eu-country"]').each(function(){
            this.checked = true;
        });
        $('#select-eu').prop('checked', true);
    }
    function checkCountry(country){
        $(".preferred-countries-container input[name='"+country+"']").prop('checked', true);
    }
    function selectedCountries(userData){
        for (let i = 0; i < userData.length; i++) {
            const country = userData[i].country;
            if(country === 'All Countries'){
                checkAllCountries();
            } else if(country === 'EU Countries'){
                checkEUCountries();
            } else {
                checkCountry(country);
            }
        }
    }

    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getUserPreferredCountriesData',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            if(response.success){
                selectedCountries(response.data);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            
        },
        complete: function(data){
            
        }
    });
}