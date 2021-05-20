export default $(function(){
    if($('.your-weight-in-container #weight-kg').attr('checked')){
        $('.weight-in-kg-container').css('display', 'block');
    } else {
        $('.weight-in-lbs-container').css('display', 'block');
    }
});