export default $(function(){
    const liveInTutorCB      = $('.looking-for-a-job-as-container #live-in-tutor');
    const onlineTutorCB      = $('.looking-for-a-job-as-container #online-tutor');
    const virtualChildcareCB = $('.looking-for-a-job-as-container #virtual-childcare');
    const jobLabels          = [];
    function setDynamicLabel(label){
        const dynamicLabel = $('.l-o-v-dynamic-label');
        jobLabels.push(label);
        if(jobLabels.length === 2){
            dynamicLabel.text(`${jobLabels[0]} & ${jobLabels[1]}`);
        } else {
            dynamicLabel.text(`${jobLabels[0]}`);
        }
        dynamicLabel.css('display', 'block');
    }
    if(liveInTutorCB.attr('checked')){
        setDynamicLabel('Live in Tutor');
        $('.preferred-subjects-container').css('display', 'block');
        $('.activities-with-kids-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
    }
    if(onlineTutorCB.attr('checked')){
        setDynamicLabel('Online Tutor');
        $('.preferred-subjects-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
        $('.price-per-hour-container').css('display', 'block');
    }
    if(virtualChildcareCB.attr('checked')){
        setDynamicLabel('Virtual Childcare')
        $('.activities-with-kids-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
        $('.price-per-hour-container').css('display', 'block');
    }
});