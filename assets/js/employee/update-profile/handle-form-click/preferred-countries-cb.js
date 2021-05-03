export default $(function(){
    const selectAllCheckBox = $('#select-all');
    const selectEUCheckBox  = $('#select-eu');
    function checkUncheckAllCountries(isCheck) {
        $('.preferred-countries-container').find('input[type=checkbox]').each(function(){
             this.checked = isCheck;
        });
        if(isCheck) {
            selectEUCheckBox.prop('checked', false);
        }
    }
    function checkUncheckEUCountries(isCheck) {
        $('.preferred-countries-container').find('input[id=eu-country]').each(function(){
            this.checked = isCheck;
        });
    }

    selectAllCheckBox.change(function (){
        if(this.checked){
            checkUncheckAllCountries(true);
        } else {
            checkUncheckAllCountries(false);
        }
    });

    selectEUCheckBox.change(function (){
        if(this.checked){
            checkUncheckEUCountries(true);
        } else {
            checkUncheckEUCountries(false);
        }
    });
});