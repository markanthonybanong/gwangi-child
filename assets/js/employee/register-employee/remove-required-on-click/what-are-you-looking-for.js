export default $(function(){
     //looking for a job
     $(".looking-for-job input[type=\"checkbox\"]").change(function (){
        if(this.checked && $(".looking-for-job").hasClass("required-border")) {
            $(".looking-for-job").removeClass("required-border");
        }
    });
    //aupair, nanny & granny aupair
    $(".take-care-children input[type=\"checkbox\"]").change(function () {
        if(this.checked && $(".take-care-children").hasClass('required-border')) {
            $('.take-care-children').removeClass('required-border');
        }
    });
    $('.hour-child-care-experience').change(function(){
        if($('.hour-child-care-experience').hasClass('required-border')){
            $('.hour-child-care-experience').removeClass('required-border');
        }
    });
    $('.children-people-take-care').change(function(){
        if($('.children-people-take-care').hasClass('children-people-take-care')){
            $('.children-people-take-care').removeClass('required-border');    
        }
    });
    $('.work-for-single-parent').change(function(){
        if($('.work-for-single-parent').hasClass('required-border')){
            $('.work-for-single-parent').removeClass('required-border');
        }
    });
    $('input[name="take-care-children-with-special-needs"]').change(function(){
        if($('.take-care-children-with-special-needs').hasClass('required')){
            $('.take-care-children-with-special-needs').removeClass('required');
        }
    });
    //caregiver for elderly & live in help
    $('.i-can-assist-provide-support-to-elderly-in input[type="checkbox"]').change(function(){
        if(this.checked && $('.i-can-assist-provide-support-to-elderly-in').hasClass('required-border')) {
            $('.i-can-assist-provide-support-to-elderly-in').removeClass('required-border');
        }
    });
    $('input[name="take-care-people-with-special-needs"]').change(function(){
        if($('.take-care-people-with-special-needs').hasClass('required')){
            $('.take-care-people-with-special-needs').removeClass('required');
        }
    });
    //preferred subjects
    $('.preferred-subjects input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-subjects').hasClass('required-border')) {
            $('.preferred-subjects').removeClass('required-border');
        }
    });
    //activities with kids
    $('.activities-with-kids input[type="checkbox"]').change(function(){
        if(this.checked && $('.activities-with-kids').hasClass('required-border')) {
            $('.activities-with-kids').removeClass('required-border');
        }
    });
    //preferred student age group
    $('.preferred-student-age-group input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-student-age-group').hasClass('required-border')) {
            $('.preferred-student-age-group').removeClass('required-border');
        }
    });
    //amount
    $('.amount').click( function(){
        if($('.amount').hasClass('required-border')){
            $('.amount').removeClass('required-border');
        }
    });
    //currency
    $('.currency').change(function(){
        if($('.currency').hasClass('required-border')){
            $('.currency').removeClass('required-border');
        }
    });
    //preferred countries
    $('.registration-countries input[type="checkbox"]').change(function(){
        if(this.checked && $('.registration-countries').hasClass('required-border')){
            $('.registration-countries').removeClass('required-border');
        }
    });
    //preferred area
    $('.r-e-preferred-area input[type="checkbox"]').change(function (){
        if(this.checked && $('.r-e-preferred-area').hasClass('required-border')){
            $('.r-e-preferred-area').removeClass('required-border');
        }
    });
    //earliest starting date month
    $('.r-e-earliest-starting-date-month').change(function(){
        if($('.r-e-earliest-starting-date-month').hasClass('required-border')){
            $('.r-e-earliest-starting-date-month').removeClass('required-border');
        }
    });
    //earliest starting date year
    $('.r-e-earliest-starting-date-year').change(function(){
        if($('.r-e-earliest-starting-date-year').hasClass('required-border')){
            $('.r-e-earliest-starting-date-year').removeClass('required-border');
        }
    });
    //latest starting date month
    $('.r-e-latest-starting-date-month').change(function(){
        if($('.r-e-latest-starting-date-month').hasClass('required-border')){
            $('.r-e-latest-starting-date-month').removeClass('required-border');
        }
    });
    //latest starting date year
    $('.r-e-latest-starting-date-year').change(function(){
        if($('.r-e-latest-starting-date-year').hasClass('required-border')){
            $('.r-e-latest-starting-date-year').removeClass('required-border');
        }
    });
    //duration of stay
    $('.duration-of-stay').change(function(){
        if($('.duration-of-stay').hasClass('required-border')){
            $('.duration-of-stay').removeClass('required-border');
        }
    });
    //what kind of work are you looking for
    $('input[name="kind-of-work-looking"]').change(function(){
        if($('.kind-of-work-looking').hasClass('required')){
            $('.kind-of-work-looking').removeClass('required');
        }
    });
    //accomodation
    $('.accomodation').change(function(){
        if($('.accomodation').hasClass('required-border')){
            $('.accomodation').removeClass('required-border');
        }
    });
    //would you live family with pets
    $('input[name="live-family-with-pets"]').change(function(){
        if($('.live-family-with-pets').hasClass('required')){
            $('.live-family-with-pets').removeClass('required');
        }
    });
    //would you take care of pets
    $('input[name="take-care-pets"]').change(function(){
        if($('.take-care-pets').hasClass('required')){
            $('.take-care-pets').removeClass('required');
        }
    });
    //would you work extra to earn some
    $('input[name="work-extra-to-earn-additional-money"]').change(function(){
        if($('.work-extra-to-earn-additional-money').hasClass('required')){
            $('.work-extra-to-earn-additional-money').removeClass('required');
        }
    });
}); 