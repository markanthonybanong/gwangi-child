export default $(function(){
    $('#form').change(function(){
       $('#form').trigger('submit');
    });
    $(".host-family-country-container input[value='EU/EØS/SCHENGEN Countries']").change(function(){
        if(this.checked){
            $(".host-family-country-container .eu-country").prop("checked", true);
        } else {
            $(".host-family-country-container .eu-country").prop("checked", false);
        }
    });
});