export default $(function(){
    const careGiverForElderlyCB = $('.looking-for-a-job-as-container #caregiver-for-elderly');
    const liveInHelpCB          = $('.looking-for-a-job-as-container #live-in-help');

    if(careGiverForElderlyCB.attr('checked') || liveInHelpCB.attr('checked')){
        $('.caregiver-for-elderly-and-live-in-help-container').css('display', 'block');
    }
});