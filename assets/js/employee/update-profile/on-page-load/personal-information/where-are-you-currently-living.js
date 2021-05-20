export default $(function (){
    if($('.where-are-you-currently-living-container #another-country').attr('checked')){
        $('.another-country-container').css('display', 'block');
    }
});