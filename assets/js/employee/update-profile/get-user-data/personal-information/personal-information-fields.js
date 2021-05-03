export function personalInformationFields(userData) {
    //gender
    $('.gender-container input[value="'+userData['gender']+'"]').prop('checked', true);
    //date of birth month
    $('.date-of-birth-container .date-of-birth-month').val(userData['date_of_birth_month']);
    //date of birth year
    $('.date-of-birth-container .date-of-birth-year').val(userData['date_of_birth_year']);
    //nationality
    $('.nationality-container .nationality').val(userData['nationality']);
    //I have a passport from
    $('.i-have-a-passport-from-container .select').val(userData['have_a_passport_from']);
    //education
    $('.education-container .select').val(userData['education']);
    //name of school, college and university
    $('.name-of-school-college-and-university-container #field').val(userData['name_of_school_college_university']);
    //profession
    $('.profession-container #field').val(userData['profession']);
    //marital status
    $('.marital-status-container #field').val(userData['marital_status']);
    //do you have children of your own
    $('.do-you-have-children-of-your-own-container input[value="'+userData['have_own_children']+'"]').prop('checked', true);
    //do you have any siblings
    $('.do-you-have-any-siblings-container input[value="'+userData['have_any_siblings']+'"]').prop('checked', true);
    //do you have any training in healthcare
    $('.do-you-have-a-training-in-healthcare-container input[value="'+userData['have_traning_in_healthcare']+'"]').prop('checked', true);
    //did you attend first aid training
    $('.did-you-attend-first-aid-training-container input[value="'+userData['attend_first_aid_training']+'"]').prop('checked', true);
    //do you have any criminal record
    $('.do-you-have-criminal-record-container input[value="'+userData['have_criminal_record']+'"]').prop('checked', true);
    //special diet considerations
    $('.special-diet-consideration-container .select').val(userData['special_diet_considerations']);
    //do you smoke
    $('.do-you-smoke-container #field').val(userData['do_you_smoke']);
    //can you swim well
    $('.can-you-swim-well-container input[value="'+userData['can_swim_well']+'"]').prop('checked', true);
    //can you ride a bike
    $('.can-you-ride-a-bike-container input[value="'+userData['can_ride_bike']+'"]').prop('checked', true);
    //do you have a drivers license
    $('.do-you-a-drivers-license-container #field').val(userData['have_drivers_license']);
    //sports
    $('.sports-container #field').val(userData['sports']);
    //religion
    $('.religion-container #field').val(userData['religion']);
    //religion for you is
    $('.religion-for-you-is-container #field').val(userData['religion_for_you_is']);
}