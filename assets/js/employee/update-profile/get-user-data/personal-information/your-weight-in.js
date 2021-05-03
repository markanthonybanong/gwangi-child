export function yourWeightIn(userData) {
    const weight = userData['your_weight_in'];
    $('.your-weight-in-container input[value="'+weight+'"]').prop('checked', true);
    if(weight === 'kg'){
        $('.weight-in-kg-container').css('display', 'block');
        $('.weight-in-kg-container .weight-kg').val(userData['weight_in_kg']);
    } else {
        $('.weight-in-lbs-container').css('display', 'block');
        $('.weight-in-lbs-container .weight-lbs').val(userData['weight_in_lbs']);
    }
}