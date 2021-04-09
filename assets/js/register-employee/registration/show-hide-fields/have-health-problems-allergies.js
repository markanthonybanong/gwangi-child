export function haveHealthProblemsAllergiesRB(){
    const toggle = $('input[name="have-health-problems-or-allergies"]').change( function() {
        if(this.value === 'Yes'){
            $('.describe-health-problems-allergies-container').css('display', 'block');
        } else {
            $('.describe-health-problems-allergies-container').css('display', 'none');
        }
    });
    return {
        toggle: toggle
    }
}