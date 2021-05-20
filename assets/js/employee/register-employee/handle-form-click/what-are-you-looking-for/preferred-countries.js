export default $(function(){
    function checkUncheckAllCountries(isCheck) {
        $('.r-e-preferred-countries-div input[type="checkbox"]').each(function(){
            this.checked = isCheck;
        });
        if(isCheck) {
            $('#select-eu').prop('checked', false);
        }
    }
    function checkUncheckEUCountries(isCheck) {
        $('input[id="eu-country"]').each(function(){
            this.checked = isCheck;
        });
    }

    $('.registration-countries #select-all').change(function(){
        if(this.checked){
            checkUncheckAllCountries(true);
        } else {
            checkUncheckAllCountries(false);
        }
    });

    $('.registration-countries #select-eu').change(function(){
        if(this.checked){
            checkUncheckEUCountries(true);
        } else {
            checkUncheckEUCountries(false);
        }
    });

});