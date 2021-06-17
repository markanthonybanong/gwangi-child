export function isGoingToAddConversationWithEntry(){
    function addEntry(){
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/addConversationWith',
            data: {
                wpUserIdOne: $('#to-send-msg-id').val(),
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
            },
            error: function (xhr, ajaxOptions, thrownError) {
            },
            complete: function(data){
            }
        });
    }

    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getConversationWith',
        data: {
            wpUserIdOne: $('#to-send-msg-id').val()
        },
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            //only add one entry 
            if(response.success === false ){
                addEntry();
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
        },
        complete: function(data){
        }
    });
}