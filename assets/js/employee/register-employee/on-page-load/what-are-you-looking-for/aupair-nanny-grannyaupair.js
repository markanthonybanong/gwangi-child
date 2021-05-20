export default $(function(){
    const aupairCB       = $('.looking-for-job #aupair');
    const nannyCB        = $('.looking-for-job #nanny');
    const grannyAupairCB = $('.looking-for-job #granny-aupair');
    
    if(aupairCB.attr('checked') || nannyCB.attr('checked') || grannyAupairCB.attr('checked')){
        $('.aupair-nanny-granny-aupair').css('display', 'block');
    }
});