export default $(function(){
    const aupairCB       = $('.looking-for-a-job-as-container #aupair');
    const nannyCB        = $('.looking-for-a-job-as-container #nanny');
    const grannyAupairCB = $('.looking-for-a-job-as-container #granny-aupair');
    
    if(aupairCB.attr('checked') || nannyCB.attr('checked') || grannyAupairCB.attr('checked')){
        $('.aupair-nanny-granny-aupair-container').css('display', 'block');
    }
});