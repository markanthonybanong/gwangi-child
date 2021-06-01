export default $(function(){
    $('input[name="take-care-children-with-special-needs"]').change(function(){
        const container = $('.describe-children-special-needs-container');
        if(this.value === "Yes"){
            container.css('display', 'block');
        } else {
            container.css('display', 'none');
        }
    });
});