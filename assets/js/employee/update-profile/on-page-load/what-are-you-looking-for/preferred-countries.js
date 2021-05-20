export default $(function(){
    if($('.preferred-countries-container #select-all').attr('checked')){
        console.log('SELECT ALL TRUE');
        $('.preferred-countries-container').find('input[type=checkbox]').each(function(){
            this.checked = true;
       });
        $('.preferred-countries-container  #select-eu').prop('checked', false);
    }
    if($('.preferred-countries-container #select-eu').attr('checked')){
        $('.preferred-countries-container #eu-country').each(function (){
            this.checked = true;
        });
    }
});