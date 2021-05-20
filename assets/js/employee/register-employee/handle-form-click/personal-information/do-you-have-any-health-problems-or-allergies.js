export default $(function(){
    $('input[name="have-health-problems-or-allergies"]').change( function() {
        if(this.value === 'Yes'){
            $('.describe-health-problems-allergies-container').css('display', 'block');
        } else {
            $('.describe-health-problems-allergies-container').css('display', 'none');
        }
    });
});