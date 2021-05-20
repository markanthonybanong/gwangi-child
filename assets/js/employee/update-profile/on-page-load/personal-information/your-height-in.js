export default $(function(){
    if($('.your-height-in-container #height-cm').attr('checked')){
        $('.height-in-cm-container').css('display','block');
    } else {
        $('.height-in-ft-container').css('display','block');
    }
});