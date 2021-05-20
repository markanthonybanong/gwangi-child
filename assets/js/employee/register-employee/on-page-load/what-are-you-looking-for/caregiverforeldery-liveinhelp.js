export default $(function(){
    const caregiverForElderlyCB = $('.looking-for-job #caregiver-for-elderly');
    const liveInHelpCB          = $('.looking-for-job #live-in-help');

    if(caregiverForElderlyCB.attr('checked') || liveInHelpCB.attr('checked')){
        $('.caregiverforelderly-liveinhelp-fields').css('display', 'block');
    }
});