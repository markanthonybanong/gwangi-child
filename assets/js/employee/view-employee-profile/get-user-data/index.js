import { jobInformation } from './job-information';

export default $(function(){
    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getLoginUserData',
        cache: false,
        data: {
            tableName: 'aupair_registered_employee'
        },
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            console.log('USER DATA ', response);
            if(response.success){
                jobInformation(response.data[0]);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {},
        complete: function(data){}
    });
});