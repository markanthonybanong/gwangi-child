export default $(function(){
    const msg              = $('.upload-photo-warning-msg-container .msg');
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
         msg.empty();
         $('.upload-photo-container #upload-button').attr('disabled', false);
          const reader = new FileReader();
          reader.onload = function (e) {
            $('.employee-photo-container #user-photo').attr('src', e.target.result);
          }
          reader.readAsDataURL(photo);
       }
    });
});