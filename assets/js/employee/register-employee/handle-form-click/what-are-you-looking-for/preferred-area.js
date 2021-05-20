export default $(function(){

    $('.r-e-preferred-area #preferred-area-select-all').change( function(){
        let isCheck = this.checked;
        $('.r-e-preferred-area input[type="checkbox"]').each(function(){
            this.checked = isCheck;
        });
    });
});