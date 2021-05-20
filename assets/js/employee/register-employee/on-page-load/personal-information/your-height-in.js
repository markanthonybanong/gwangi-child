export default $(function(){
    if($('.height #height-cm').prop('checked')){
        $('.height-in-cm').css('display', 'block');
    } else {
        $('.height-in-ft').css('display', 'block');
    }
});