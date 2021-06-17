
import {isGoingToAddConversationWithEntry} from "./is-going-to-add-conversation-with-entry";
import { io } from "socket.io-client";
import { insertMsgUserMeta } from "./insert-msg-user-meta";
import { updateOpenedStatus } from "./update-opened-status";
export default $(function(){
    $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
    const socket           = io("http://localhost:3000"); //url of the server and port
    let isFirstTimeSendMsg = false;
    let send_message       = null;
    
    socket.on('connect', () =>{
        insertMsgUserMeta(socket.id);
    });
    
    socket.on('receive-message', function(msg, lastInsertedMsgId) {
        const mark_up = `<div class='msg-parent-container receiver'>
                            <div class='msg-container'>
                                <p>${msg}</p>
                            </div>
                        </div>`;
        $('.chat-area').append(mark_up);
        updateOpenedStatus(lastInsertedMsgId);
        $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
    });
    function getReceiverRoomId(lastInsertedMsgId){
        $.ajax({
            type: 'GET',
            url: myAjax.restURL + 'activeAupair/v1/getReceiverMsgUserMeta',
            data: {
                receiverWpUserId: $('#to-send-msg-id').val(),
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                if(response.success){
                    socket.emit('send-message', send_message, response.data.room_id, lastInsertedMsgId);
                }
            }, 
            error: function (xhr, ajaxOptions, thrownError) {
            },
            complete: function(data){
            }
        });
    }

    $('#send-btn').click(function(){
        const message = $.trim($('#message-field').val());
        send_message  = message;
        if (message == "") return;
        if(isFirstTimeSendMsg === false) {
            isFirstTimeSendMsg = true;
            isGoingToAddConversationWithEntry();
        }
        $('#send-btn').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/addMessageEntry',
            data: {
                wpUserIdOne: $('#to-send-msg-id').val(),
                message: message
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                if(response.success){
                    $('.chat-area').append(response.data.mark_up);
                    $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
                    $("#message-field").val('');
                    getReceiverRoomId(response.data.last_inserted_id);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
            },
            complete: function(data){
                $('#send-btn').prop('disabled', false);
            }
        });
    });
});