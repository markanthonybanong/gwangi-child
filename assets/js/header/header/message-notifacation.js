import { io } from "socket.io-client";
export default $(function(){
    const socket = io("http://localhost:3000"); //url of the server and port
    if($('#unopened-msgs').text() > 0 ){
        $('i[id=unopened-msgs]').each(function(){
            $(this).css('display', 'block');
        });
    }
    socket.on('notification-message', function(receiverWpUserId){
        const currentUserId = $('#current-user-id').val(); 
        if(currentUserId == receiverWpUserId){
            $.ajax({
                type: 'GET',
                url: myAjax.restURL + 'activeAupair/v1/getUnOpenedMsgs',
                data: {
                    wpUserId: currentUserId,
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                },
                success: function(response){
                    if(response.data.length){
                        const unreadMsgs = response.data.length;
                        $('i[id=unopened-msgs]').text(unreadMsgs);
                        $('#unopened-msgs').css('display', 'block');
                    }
                }, 
                error: function (xhr, ajaxOptions, thrownError) {
                },
                complete: function(data){
                    console.log("COMPLETE ", data);
                }
            });
        }
    });
});