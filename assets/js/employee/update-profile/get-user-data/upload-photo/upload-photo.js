export function uploadPhoto(userData){
    if(userData.photo !== null){
        //in the first place cant update, if there is no photo
        $('.upload-photo-container #upload-button').attr('disabled', false);
        $('.upload-photo-container #upload-button').attr('value', 'Update');
    }  
    $('.photo-privacy-container input[value="'+userData['photo_privacy']+'"]').prop('checked', true);
    $('.photo-description-container #photo-description').val(userData['photo_description']);

}