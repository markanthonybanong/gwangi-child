export default $(function(){
     //gender
     $('input[name="gender"]').change(function(){
        if($('.gender').hasClass('required')){
            $('.gender').removeClass('required');
        }
    });
    //date of birth month
    $('.r-e-date-of-birth-month').change(function(){
        if($('.r-e-date-of-birth-month').hasClass('required-border')){
            $('.r-e-date-of-birth-month').removeClass('required-border');
        }
    });
    //date of birth year
    $('.r-e-date-of-birth-year').change(function(){
        if($('.r-e-date-of-birth-year').hasClass('required-border')){
            $('.r-e-date-of-birth-year').removeClass('required-border');
        }
    });
    //your weight in
    $('input[name="weight"]').change(function(){
        if($('.weight').hasClass('required')){
            $('.weight').removeClass('required');
        }
    });
    //weight in kg
    $('.weight-kg').click( function(){
        if($('.weight-in-kg:visible').length && $('.weight-kg').hasClass('required-border')){
            $('.weight-kg').removeClass('required-border');
        }
    });
    //weight in lbs
    $('.weight-lbs').click( function(){
        if($('.weight-in-lbs:visible').length && $('.weight-lbs').hasClass('required-border')){
            $('.weight-lbs').removeClass('required-border');
        }
    });
    //your height in
    $('input[name="height"]').change(function(){
        if($('.height').hasClass('required')){
            $('.height').removeClass('required');
        }
    });
    //height in cm
    $('.height-cm').click( function(){
        if($('.height-in-cm:visible').length && $('.height-cm').hasClass('required-border')){
            $('.height-cm').removeClass('required-border');
        }
    });
    //height in ft
    $('.height-ft').click( function(){
        if($('.height-in-ft:visible').length && $('.height-ft').hasClass('required-border')){
            $('.height-ft').removeClass('required-border');
        }
    });
    //nationality
    $('.r-e-nationality-select-input').change(function(){
        if($('.r-e-nationality-select-input').hasClass('required-border')){
            $('.r-e-nationality-select-input').removeClass('required-border');
        }
    });
    //I have a passport from
    $('.r-e-have-a-passport-from-select').change(function(){
        if($('.r-e-have-a-passport-from-select').hasClass('required-border')){
            $('.r-e-have-a-passport-from-select').removeClass('required-border');
        }
    });
    //where are you currently living
    $('input[name="where-are-you-currently-living"]').change(function(){
        if($('.currently-living').hasClass('required')){
            $('.currently-living').removeClass('required');
        }
    });
    //living in
    $('.currently-living-select').change(function(){
        if($('.another-country:visible').length && $('.currently-living-select').hasClass('required-border')){
            $('.currently-living-select').removeClass('required-border');
        }
    });
    //visa status
    $('.visa-status-select').change(function(){
        if($('.another-country:visible').length && $('.visa-status-select').hasClass('required-border')){
            $('.visa-status-select').removeClass('required-border');
        }
    });
    //education
    $('.education').change(function(){
        if($('.education').hasClass('required-border')){
            $('.education').removeClass('required-border');
        }
    });
    //name of school college & university
    $('.name-of-school-college-university').click(function(){
        if($('.name-of-school-college-university').hasClass('required-border')){
            $('.name-of-school-college-university').removeClass('required-border');
        }
    });
    //profession
    $('.profession').click(function(){
        if($('.profession').hasClass('required-border')){
            $('.profession').removeClass('required-border');
        }
    });
    //marital status
    $('.marital-status').change(function(){
        if($('.marital-status').hasClass('required-border')){
            $('.marital-status').removeClass('required-border');
        }
    });
    //do you have children of your own
    $('input[name="have-own-children"]').change(function(){
        if($('.have-own-children').hasClass('required')){
            $('.have-own-children').removeClass('required');
        }
    });
    //do you have any siblings
    $('input[name="have-siblings"]').change(function(){
        if($('.have-siblings').hasClass('required')){
            $('.have-siblings').removeClass('required');
        }
    });
    //do you have a traning in healthcare
    $('input[name="healthcare-training"]').change(function(){
        if($('.healthcare-training').hasClass('required')){
            $('.healthcare-training').removeClass('required');
        }
    });
    //did you attend first aid traning
    $('input[name="have-first-aid-traning"]').change(function(){
        if($('.have-first-aid-traning').hasClass('required')){
            $('.have-first-aid-traning').removeClass('required');
        }
    });
    //did you have criminal record
    $('input[name="have-criminal-record"]').change(function(){
        if($('.have-criminal-record').hasClass('required')){
            $('.have-criminal-record').removeClass('required');
        }
    });
    //special diet consideration
    $('.special-diet-consideration').change(function(){
        if($('.special-diet-consideration').hasClass('required-border')){
            $('.special-diet-consideration').removeClass('required-border');
        }
    });
    //have health problems or allergies
    $('input[name="have-health-problems-or-allergies"]').change(function(){
        if($('.have-health-problems-or-allergies').hasClass('required')){
            $('.have-health-problems-or-allergies').removeClass('required');
        }
    });
    //describe health problems or allergies
    $('.describe-health-problems-or-allergies').click(function(){
        if($('.describe-health-problems-or-allergies').hasClass('required-border')){
            $('.describe-health-problems-or-allergies').removeClass('required-border');
        }
    });
    //do you smoke
    $('.do-you-smoke').change(function(){
        if($('.do-you-smoke').hasClass('required-border')){
            $('.do-you-smoke').removeClass('required-border');
        }
    });
    //can you swim well
    $('input[name="can-swim-well"]').change(function(){
        if($('.can-swim-well').hasClass('required')){
            $('.can-swim-well').removeClass('required');
        }
    });
    //can you ride a bike
    $('input[name="can-ride-bike"]').change(function(){
        if($('.can-ride-bike').hasClass('required')){
            $('.can-ride-bike').removeClass('required');
        }
    });
    //do you have a drivers license
    $('.have-drivers-license').change(function(){
        if($('.have-drivers-license').hasClass('required-border')){
            $('.have-drivers-license').removeClass('required-border');
        }
    });
    //sports
    $('.sports').click(function(){
        if($('.sports').hasClass('required-border')){
            $('.sports').removeClass('required-border');
        }
    });
    //religion
    $('.e-r-religion-select').change(function(){
        if($('.e-r-religion-select').hasClass('required-border')){
            $('.e-r-religion-select').removeClass('required-border');
        }
    });
    //religion for you is
    $('.religion-for-you-is').change(function(){
        if($('.religion-for-you-is').hasClass('required-border')){
            $('.religion-for-you-is').removeClass('required-border');
        }
    });
});