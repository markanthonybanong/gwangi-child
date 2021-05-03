export function yourHeightIn(userData){
    const height = userData['your_height_in'];
    $('.your-height-in-container input[value="'+height+'"]').prop('checked', true);
    if(height === 'cm'){
        $('.height-in-cm-container').css('display','block');
        $('.height-in-cm-container .height-cm').val(userData['height_in_cm']);
    } else {
        $('.height-in-ft-container').css('display','block');
        $('.height-in-ft-container .height-ft').val(userData['height_in_ft']);
    }
}