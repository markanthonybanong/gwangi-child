export default $(function(){
    $('.looking-for-a-job-as-container input[type="checkbox"]').each(function(){
        if(this.checked){
            this.className = 'check';
        }
    });
    const checkCheckBox = $('.looking-for-a-job-as-container .check');
   if(checkCheckBox.length >= 2) {
        $('.looking-for-a-job-as-container .un-check').each(function (){
            this.disabled = true;
        });
    }
    
});