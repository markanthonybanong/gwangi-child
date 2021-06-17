export function updateOpenedStatus(lastInsertedMsgId){
    $.ajax({
        type: 'POST',
        url: myAjax.restURL + 'activeAupair/v1/updateOpenedStatus',
        data: {
            id: lastInsertedMsgId,
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