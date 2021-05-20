export default $(function(){
    if($('.e-r-have-health-problmes-allergies #have-health-problems-or-allergies-yes').prop('checked')){
        $('.describe-health-problems-allergies-container').css('display', 'block');
    }
});