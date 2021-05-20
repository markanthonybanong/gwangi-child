export default $(function(){
    if($('.do-you-have-any-health-problems-or-allergies-container #have-health-problems-or-allergies-yes').attr('checked')){
        $('.describe-your-health-problems-or-allergies-container').css('display', 'block');
    }
});