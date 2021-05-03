export default $(function (){
    function checkUncheckCheckBoxes(isCheck) {
        $('.preferred-area-container').find('input[type=checkbox]').each(function(){
            this.checked = isCheck;
        });
    }
    
    $('.preferred-area-container #select-all').change(function(){
        if(this.checked){
            checkUncheckCheckBoxes(true);
        } else {
            checkUncheckCheckBoxes(false);
        }
    });
});