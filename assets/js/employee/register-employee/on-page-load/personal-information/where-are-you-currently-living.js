export default $(function(){
    if($('.living-in-own-country-or-outside #another-country').prop('checked')){
        $('.another-country').css('display', 'block');
    }
});