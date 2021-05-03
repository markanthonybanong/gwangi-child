export function whereAreYouCurrentlyLiving(userData){
    const currentlyLiving = userData['currently_living'];
    $('.where-are-you-currently-living-container input[value="'+currentlyLiving+'"]').prop('checked', true);
    if(currentlyLiving === 'Another country'){
        $('.another-country-container').css('display', 'block');
        $('.another-country-container .living-in .select').val(userData['living_in']);
        $('.another-country-container .visa-status-select').val([userData['visa_status']]);
    }

}