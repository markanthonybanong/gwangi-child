export default $(function(){
    const aupairCB       = $('.we-are-looking-for #aupair');
    const nannyCB        = $('.we-are-looking-for #nanny');
    const grannyAupairCB = $('.we-are-looking-for #granny-aupair');
    if(aupairCB.attr('checked') || nannyCB.attr('checked') || grannyAupairCB.attr('checked')){
        $('.aupair-nanny-granny-aupair-container').css('display', 'block');
        if($('input[name="take-care-children-with-special-needs"]:checked').val() === "Yes"){
            $('.describe-children-special-needs-container').css('display', 'block');
        }
    }
});