export default $(function(){
    const liveInTutorCB = $('.we-are-looking-for #live-in-tutor');
    if(liveInTutorCB.attr('checked')){
        $('.tutor-who-can-teach-subject-container').css('display', 'block');
        $('.tutor-who-can-do-activities-container').css('display', 'block');
        $('.student-age-group-tutor-would-teach-container').css('display', 'block');
    }
});