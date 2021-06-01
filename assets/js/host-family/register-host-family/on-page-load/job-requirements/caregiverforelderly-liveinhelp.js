export default $(function(){
    const caregiverForElderlyCB = $('.we-are-looking-for #caregiver-for-elderly');
    const liveInHelpCB          = $('.we-are-looking-for #live-in-help');

    if(caregiverForElderlyCB.attr('checked') || liveInHelpCB.attr('checked')){
        $('.caregiverforelderly-liveinhelp-container').css('display', 'block');
        if($('input[name="take-care-people-with-special-needs"]:checked').val() === "Yes"){
            $('.describe-people-special-needs-container').css('display', 'block');
        }
    }
});