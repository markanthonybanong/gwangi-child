export default $(function(){
    $('.preferred-nationalities-container #no-preferences').change(function(){
        if(this.checked){
            $('.preferred-nationalities-container input[type="checkbox"]').prop('checked', false);
            $('.preferred-nationalities-container #no-preferences').prop('checked', true);
        }
    });
});