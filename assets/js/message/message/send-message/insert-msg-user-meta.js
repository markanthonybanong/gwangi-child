//each user that is connected to a socket has a room id/user id
export function insertMsgUserMeta(roomId){
    $.ajax({
        type: 'POST',
        url: myAjax.restURL + 'activeAupair/v1/insertMsgUserMeta',
        data: {
            toWpUserId: $('#to-send-msg-id').val(),
            roomId: roomId
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