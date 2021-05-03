export default $(function(){
    const msg = $('.upload-photo-warning-msg-container .msg');
    let isUploadedValidPhoto    = false;
 

    function enableUploadBtn(){
        const photoPrivacy = $('.photo-privacy-container input[name="photo-privacy"]:checked').val();
        if(isUploadedValidPhoto && photoPrivacy !== undefined) {
            $('.upload-photo-container #upload-button').attr('disabled', false);
        }
    }
    $('.upload-photo-container #employee-photo').on('change', function(){
        const photo        = this.files[0];
        const photoExt     = photo.name.split('.').pop().toLowerCase();
        const supportedExt = ['png','jpg','jpeg'];
       if(!supportedExt.includes(photoExt)){
          $('.upload-photo-container #upload-button').attr('disabled', true);
          msg.append($('<p id="required"></p>').text('Uploaded Photo Invalid'));
       } else if(photo.size >  2000000) {
          $('.upload-photo-container #upload-button').attr('disabled', true);
          msg.append($('<p id="required"></p>').text('Uploaded Photo Exceed Maximum Size'));
       } else {
          isUploadedValidPhoto = true;
          enableUploadBtn();
          const reader = new FileReader();
          reader.onload = function (e) {
            $('.employee-photo-container #user-photo').attr('src', e.target.result);
          }
          reader.readAsDataURL(photo);
       }
    });
    $('.photo-privacy-container input[name="photo-privacy"]').change(function(){
        enableUploadBtn();
    });
});