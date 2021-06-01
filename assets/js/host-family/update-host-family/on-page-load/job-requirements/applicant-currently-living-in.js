export default $(function(){
    if($('#inside-eu-countries').attr('checked')){
        $('.applicant-currently-living-in #eu-country').each(function(){
            this.checked = true;
        });
    }
});