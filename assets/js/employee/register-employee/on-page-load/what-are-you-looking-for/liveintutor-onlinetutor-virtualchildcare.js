export default $(function(){
    const liveInTutorCB      = $('.looking-for-job #live-in-tutor');
    const onlineTutorCB      = $('.looking-for-job #online-tutor');
    const virtualChildcareCB = $('.looking-for-job #virtual-childcare');
    const jobLabels          = [];
    function setDynamicLabel(label){
        const dynamicLabel = $('.r-e-dynamic-label');
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
        $('.r-e-preferred-subjects').css('display', 'block');
        $('.r-e-activities-with-kids').css('display', 'block');
        $('.r-e-preferred-student-age-group').css('display', 'block');
    }
    if(onlineTutorCB.attr('checked')){
        setDynamicLabel('Online Tutor');
        $('.r-e-preferred-subjects').css('display', 'block');
        $('.r-e-preferred-student-age-group').css('display', 'block');
        $('.r-e-price-per-hour').css('display', 'block');
    }
    if(virtualChildcareCB.attr('checked')){
        setDynamicLabel('Virtual Childcare')
        $('.r-e-activities-with-kids').css('display', 'block');
        $('.r-e-preferred-student-age-group').css('display', 'block');
        $('.r-e-price-per-hour').css('display', 'block');
    }
});