export default $(function (){
    //looking for a job
    $(".looking-for-job input[type=\"checkbox\"]").change(function (){
        if(this.checked && $(".looking-for-a-job-as-container").hasClass("required-border")) {
            $(".looking-for-a-job-as-container").removeClass("required-border");
        }
   });
    //aupair, nanny & granny aupair
    $(".i-will-take-care-of-children-container input[type=\"checkbox\"]").change(function () {
        if(this.checked && $(".i-will-take-care-of-children-container").hasClass('required-border')) {
            $('.i-will-take-care-of-children-container').removeClass('required-border');
        }
    });
    $('.hour-child-care-experience').change(function (){
        if($('.hour-child-care-experience').hasClass('required-border')){
            $('.hour-child-care-experience').removeClass('required-border');
        }
    });
    $('.children-people-take-care').change(function (){
        if($('.children-people-take-care').hasClass('required-border')){
            $('.children-people-take-care').removeClass('required-border');
        }
    });
    $('.work-for-single-parent').change(function (){
        if($('.work-for-single-parent').hasClass('required-border')){
            $('.work-for-single-parent').removeClass('required-border');
        }
    });
    $('input[name="take-care-children-with-special-needs"]').change(function (){
        if($('.take-care-children-with-special-needs').hasClass('required')){
            $('.take-care-children-with-special-needs').removeClass('required');
        }
    });
    //caregiver for elderly & live in help
    $('.i-can-assist-provide-support-to-elderly-container input[type="checkbox"]').change(function(){
        if(this.checked && $('.i-can-assist-provide-support-to-elderly-container').hasClass('required-border')) {
            $('.i-can-assist-provide-support-to-elderly-container').removeClass('required-border');
        }
    });
    $('input[name="take-care-people-with-special-needs"]').change(function (){
        if($('.take-care-people-with-special-needs').hasClass('required')){
            $('.take-care-people-with-special-needs').removeClass('required');
        }
    });
    //preferred subjects
    $('.preferred-subjects-container input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-subjects-container').hasClass('required-border')) {
            $('.preferred-subjects-container').removeClass('required-border');
        }
    });
    //activities with kids
    $('.activities-with-kids-container input[type="checkbox"]').change(function(){
        if(this.checked && $('.activities-with-kids-container').hasClass('required-border')) {
            $('.activities-with-kids-container').removeClass('required-border');
        }
    });
    //preferred student age group
    $('.preferred-student-age-group-container input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-student-age-group-container').hasClass('required-border')) {
            $('.preferred-student-age-group-container').removeClass('required-border');
        }
    });
    //amount
    $('.amount').click( function(){
        if($('.amount').hasClass('required-border')){
            $('.amount').removeClass('required-border');
        }
    });
    $('.currency').change( function (){
        if($('.currency').hasClass('required-border')){
            $('.currency').removeClass('required-border');
        }
    });
    //preferred countries
    $('.preferred-countries-container input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-countries-container').hasClass('required-border')){
            $('.preferred-countries-container').removeClass('required-border');
        }
    });
    //preferred area
     $('.preferred-area-container input[type="checkbox"]').change(function (){
        if(this.checked && $('.preferred-area-container').hasClass('required-border')){
            $('.preferred-area-container').removeClass('required-border');
        }
    });
     
});