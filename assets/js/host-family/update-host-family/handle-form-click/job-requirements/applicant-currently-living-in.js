export default $(function(){
    $('.applicant-currently-living-in-container #no-preferences').change(function(){
        if(this.checked){
            $('.applicant-currently-living-in-container input[type="checkbox"]').prop('checked', false);
            $('.applicant-currently-living-in-container #no-preferences').prop('checked', true);
        }
    });
    $('.applicant-currently-living-in-container #inside-eu-countries').change(function(){
        let action = this.checked;
        $('.applicant-currently-living-in-container #eu-country').each(function(){
            this.checked = action;
        });
    });
});