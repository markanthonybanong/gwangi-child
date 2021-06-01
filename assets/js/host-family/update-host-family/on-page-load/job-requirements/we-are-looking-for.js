export default $(function(){
    $('.we-are-looking-for input[type="checkbox"]').each(function(){
        if(this.checked){
            this.className = 'check';
        }
    });
    const checkCheckBox = $('.we-are-looking-for .check');
   if(checkCheckBox.length >= 2) {
        $('.we-are-looking-for .un-check').each(function (){
            this.disabled = true;
        });
    }
});