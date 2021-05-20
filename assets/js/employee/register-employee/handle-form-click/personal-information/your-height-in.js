export default $(function(){
    const heightCm = $('.height-in-cm');
    const heightFt = $('.height-in-ft');

    $('input[name="height"]').change(function(){
        if(this.value === "cm"){
            heightFt.css('display', 'none');
            heightCm.css('display', 'block');
        } else {
            heightCm.css('display', 'none');
            heightFt.css('display', 'block');
        }
    });
});