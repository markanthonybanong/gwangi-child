export default $(function(){
    const msg       = $('.upload-photo-warning-msg-container .msg');
    const uploadBtn = $('.upload-photo-container #upload-button');
    function getPhotoPrivacy(){
        return $('.photo-privacy-container input[name="photo-privacy"]:checked').val();
    }
    function getPhotoDescription(){
        return $.trim($('.photo-description-container #photo-description').val());
    }
    function updateEmployeePhoto(photo){
        $.ajax({
            type: 'POST',
            url: myAjax.restURL + 'activeAupair/v1/updateEmployeePhoto',
            data: {
                photo: photo,
                photoPrivacy: getPhotoPrivacy(),
                photoDescription: getPhotoDescription()
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
            },
            success: function(response){
                msg.empty();
                msg.append($('<p id="required"></p>').text('Updated'));
                uploadBtn.attr('value', 'Update');
                uploadBtn.attr('disabled', false);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            },
            complete: function(data){
               
            }
      });
    }

    uploadBtn.click( function (){
        uploadBtn.attr('disabled', true);
        const photo = $('.upload-photo-container #employee-photo').prop('files')[0];
        //if there is an image already and just want to update photo privacry or description
        if(photo === undefined){
            msg.empty();
            msg.append($('<p id="required"></p>').text('Updating...'));
            updateEmployeePhoto("null");
        } else {
              //array of array
            const formData = new FormData();
            formData.append('employeePhoto', photo);
            //to fetch new image every time
            formData.append('randomFiveDigits', Math.floor(Math.random() * 90000) + 10000);
            $.ajax({
                type: 'POST',
                url: myAjax.restURL + 'activeAupair/v1/uploadEmployeePhoto',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
                    msg.empty();
                    msg.append($('<p id="required"></p>').text('Updating...'));
                },
                success: function(response){
                    if(response.success){
                        updateEmployeePhoto(response.data);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                },
                complete: function(data){
                }
            });
        }
    });
});