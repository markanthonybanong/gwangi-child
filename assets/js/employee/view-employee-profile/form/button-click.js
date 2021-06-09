export default $(function(){
    $('#block-unblock').attr('disabled', true);
    //remove the entry in "aupair_block_message_from", table
    function deleteBlockUser(){
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/deleteBlockUser',
            data: {
                wpUserIdOne: $('#employee-id').val()
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                $('#block-unblock').attr('disabled', false);
                $('.action-response').remove();
            },
        });
    }
    function blockUser(){
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/blockUser',
            data: {
                wpUserIdOne: $('#employee-id').val()
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                $('#block-unblock').attr('disabled', false);
                $('.action-response').remove();
            },
        });
    }
    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getBlockUser',
        data: {
            wpUserIdOne: $('#employee-id').val()
        },
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
           //host family have block this employee already
           if(response.success){
                $('#block-unblock').val("UnBlock");
           } else {
                $('#block-unblock').val("Block");
           }
           $('#block-unblock').attr('disabled', false);
        },
    });

    $('#block-unblock').click(function(e){
        e.preventDefault();
        $('#block-unblock').attr('disabled', true);
        $('.column-two').append("<p class='action-response required'>Loading...</p>")
        if(this.value === "UnBlock"){
            deleteBlockUser();
            $('#block-unblock').val("Block");
        } else {
            blockUser();
            $('#block-unblock').val("UnBlock");
        }
     
    });
   

});