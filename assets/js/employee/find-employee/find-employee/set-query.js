import { displayEmployee } from "./display-employee";

export default $(function (){
 
    function findEmployees(){
        $.ajax({
            type: 'GET',
            url: myAjax.restURL + 'activeAupair/v1/findEmployee',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            data: {
                query: "SELECT * FROM aupair_registered_employee WHERE user_type=\'employee\'",
            },
            success: function(response){
                if(response.success){
                    displayEmployee(response.data);
                    $('.page-loading').css('display', 'none');
                    $('.aupair-two-column-container').css('display', 'block');
                  
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {},
            complete: function(data){}
        });
    }
    findEmployees();
});