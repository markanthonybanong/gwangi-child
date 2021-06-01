export default $(function (){
    let photoDescriptionCharlength = null;
    const maxLength                = $('.photo-description-container #photo-description').attr('maxlength');
    if($('.photo-description-container #photo-description').val().length){
        const length               = $('.photo-description-container #photo-description').val().length;
        photoDescriptionCharlength = maxLength - length;  
    } else {
        photoDescriptionCharlength = maxLength;
    }
    $('.photo-description-container #max').append(photoDescriptionCharlength);
    $('.photo-description-container #photo-description').on('input', function(){
        let currentLength = $(this).val().length;
        $('.photo-description-container #photo-description').focus();
        $('.photo-description-container #max').empty();
        $('.photo-description-container #max').append(maxLength - currentLength);
    });
});