export default $(function(){
    $('.looking-for-job input[type="checkbox"]').each(function(){
        if(this.checked){
            this.className = 'check';
        }
    });
    const checkCheckBox = $('.looking-for-job .check');
   if(checkCheckBox.length >= 2) {
        $('.looking-for-job .un-check').each(function (){
            this.disabled = true;
        });
    }
});