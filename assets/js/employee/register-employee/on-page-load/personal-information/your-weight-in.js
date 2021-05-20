export default $(function(){
    if($('.weight #weight-kg').prop('checked')){
        $('.weight-in-kg').css('display', 'block');
    } else {
        $('.weight-in-lbs').css('display', 'block');
    }
});