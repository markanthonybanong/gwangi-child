export default $(function (){
    const describeYourHealthProblemsOrAllergiesContainer = $('.describe-your-health-problems-or-allergies-container');
    $('input[name="have-health-problems-or-allergies"]').change( function() {
        if(this.value === 'Yes'){
            describeYourHealthProblemsOrAllergiesContainer.css('display', 'block');
        } else {
            describeYourHealthProblemsOrAllergiesContainer.css('display', 'none');
        }
    });
});