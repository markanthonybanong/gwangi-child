export default $(function(){
    const anotherCountryContainer = $('.another-country-container');
    $('input[name=currently-living]').change(function(){
        if(this.value === 'Another country'){
            anotherCountryContainer.css('display', 'block');
        } else {
            anotherCountryContainer.css('display', 'none');
        }
    });
});