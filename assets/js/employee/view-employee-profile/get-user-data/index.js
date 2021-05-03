import {employeeAccount} from './employee-account';
import { jobInformation } from './job-information';
import {personalInformation} from './personal-information';
import {leterToTheFamily} from './letter-to-the-family';
import {contactInformation} from './contact-information';

export default $(function(){
    function show(){
        $('.page-loading-container').css('display', 'none');
        $('.active-aupair-container').css('display', 'block');
        $('.personal-information-parent-container').css('display', 'block');
        $('.job-information-parent-container').css('display', 'block');
        $('.letter-to-the-family-parent-container').css('display', 'block');
        $('.contact-information-parent-container').css('display', 'block');
    }
    function getPreferredCountries(userData){
        $.ajax({
            type: 'GET',
            url: myAjax.restURL + 'activeAupair/v1/getUserPreferredCountriesData',
            cache: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                if(response.success){
                    employeeAccount(userData, response.data);
                    personalInformation(userData);
                    jobInformation(userData, response.data);
                    leterToTheFamily(userData);
                    contactInformation(userData);
                    show();
                }
            },
        });
    }

    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getUserData',
        cache: false,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            if(response.success){
                const userData = response.data[0];
                getPreferredCountries(userData);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {},
        complete: function(data){}
    });
});