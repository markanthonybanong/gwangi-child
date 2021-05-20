export default $(function(){
    $('input[name="where-are-you-currently-living"]').change(function(){
        if(this.value === "Another country"){
            $('.another-country').css('display', 'block');
        } else {
            $('.another-country').css('display', 'none');
        }
    });
});