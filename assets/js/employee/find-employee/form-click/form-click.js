export default $(function(){
    $('#form').change(function(){
       $('#form').trigger('submit');
    });
    $(".employee-applying-for-container input[value='EU/EØS/SCHENGEN Countries']").change(function(){
        if(this.checked){
            $(".employee-applying-for-container .eu-country").prop("checked", true);
        } else {
            $(".employee-applying-for-container .eu-country").prop("checked", false);
        }
    });
    $(".currently-living-in-container input[value='EU/EØS/SCHENGEN Countries']").change(function(){
        if(this.checked){
            $(".currently-living-in-container .eu-country").prop("checked", true);
        } else {
            $(".currently-living-in-container .eu-country").prop("checked", false);
        }
    });
});