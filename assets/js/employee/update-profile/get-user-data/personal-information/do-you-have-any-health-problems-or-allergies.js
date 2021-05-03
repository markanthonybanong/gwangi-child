export function doYouHaveAnyHealthProblemsOrAllergies(userData){
    const healthProblemsOrAllergies = userData['have_health_problems_allergy'];
    $('.do-you-have-any-health-problems-or-allergies-container input[value="'+healthProblemsOrAllergies+'"]').prop('checked', true);
    if(healthProblemsOrAllergies === 'Yes'){
        $('.describe-your-health-problems-or-allergies-container').css('display', 'block');
        $('.describe-your-health-problems-or-allergies-container #field').val(userData['describe_health_problems_allergies']);
    }
}