export default $(function(){
    $('.letter-to-the-applicant').click(function(){
        if($('.letter-to-the-applicant').hasClass('required-border')){
            $('.letter-to-the-applicant').removeClass('required-border');
        }
    });
});