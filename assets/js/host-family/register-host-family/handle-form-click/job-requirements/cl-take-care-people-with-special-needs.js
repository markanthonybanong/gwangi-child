export default $(function(){
    $('input[name="take-care-people-with-special-needs"]').change(function(){
        const container = $('.describe-people-special-needs-container');
        if(this.value === "Yes"){
            container.css('display', 'block');
        } else {
            container.css('display', 'none');
        }
    });
});