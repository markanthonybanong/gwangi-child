export function whatAreYouLookingForFields(userData){
    //earliest starting date month
    $('.earliest-starting-date-container .earliest-starting-date-month').val(userData['earliest_starting_date_month']);
    //earliest starting date year
    $('.earliest-starting-date-container .earliest-starting-date-year').val(userData['earliest_starting_date_year']);
    //latest starting date month
    $('.latest-starting-date-container .latest-starting-date-month').val(userData['latest_starting_date_month']);
    //earliest starting date year
    $('.latest-starting-date-container .latest-starting-date-year').val(userData['latest_starting_date_year']);
    //duration of stay
    $('.duration-of-stay-container .duration-of-stay').val(userData['duration_of_stay']);
    //what kind of work are you looking for
    $('.what-kind-of-work-are-you-looking-container input[value="'+userData['kind_of_work_looking']+'"]').prop('checked', true);
    //accomodation 
    $('.accomodation-container .accomodation').val(userData['accomodation']);
    //would you live family with pets
    $('.would-you-live-family-with-pets-container input[value="'+userData['would_live_family_with_pets']+'"]').prop('checked', true);
    //would you take care of pets
    $('.would-you-take-care-of-pets-container input[value="'+userData['would_take_care_of_pets']+'"]').prop('checked', true);
    //would you work extra to earn some addiotional money
    $('.would-work-extra-to-earn-additional-money-container input[value="'+userData['would_work_extra_to_earn']+'"]').prop('checked', true);
}