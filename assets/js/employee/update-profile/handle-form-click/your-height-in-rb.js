export default $(function(){
    const heightInCmContainer = $('.height-in-cm-container');
    const heightInFtContainer = $('.height-in-ft-container');

    $('.your-height-in-container input[name=height]').change(function(){
        if(this.value === 'cm'){
            heightInFtContainer.css('display', 'none');
            heightInCmContainer.css('display', 'block');
        } else {
            heightInCmContainer.css('display', 'none');
            heightInFtContainer.css('display', 'block');
        }
    });

});