export function personalInformationData(){
    function fields(data){
        //weight in kg
        if($('.weight-in-kg-container:visible').length){
            data.weightInKg = $('.weight-kg').val();
        }
        //weight in lbs
        if($('.weight-in-lbs-container:visible').length){
            data.weightInLbs = $('.weight-lbs').val();
        }
        //height in cm
        if($('.height-in-cm-container:visible').length){
            data.heightInCm = $('.height-cm').val();
        }
        //height in ft
        if($('.height-in-ft-container:visible').length){
            data.heightInFt = $('.height-ft').val();
        }
        //living in, visa status
        if($('.another-country-container:visible').length){
            data.livingIn   = $('.living-in .select').val();
            data.visaStatus = $('.visa-status-select').val();
        }
        if($('.describe-your-health-problems-or-allergies-container:visible').length){
            data.describehealthProblemsAllergy = $.trim($('.describe-health-problems-or-allergies').val());
        }
        data.gender                        = $('input[name="gender"]:checked').val();
        data.dateOfBirthMonth              = $('.date-of-birth-month').val();
        data.dateOfBirthYear               = $('.date-of-birth-year').val();
        data.yourWeightIn                  = $('input[name="weight"]:checked').val();
        data.yourHeightIn                  = $('input[name="height"]:checked').val();
        data.nationality                   = $('.nationality-container #field').val();
        data.haveAPassportFrom             = $('.i-have-a-passport-from-container #field').val();
        data.currentlyLiving               = $('input[name="currently-living"]:checked').val();
        data.education                     = $('.education-container #field').val();
        data.nameOfSchoolCollegeUni        = $.trim($('.name-of-school-college-university').val());
        data.profession                    = $.trim($('.profession').val());
        data.maritalStatus                 = $('.marital-status').val();
        data.haveOwnChildren               = $('input[name="have-own-children"]:checked').val();
        data.haveAnySiblings               = $('input[name="have-siblings"]:checked').val();
        data.haveTrainingInHealthCare      = $('input[name="healthcare-training"]:checked').val();
        data.attendFirstAidTraining        = $('input[name="have-first-aid-traning"]:checked').val();
        data.haveCriminalRecord            = $('input[name="have-criminal-record"]:checked').val();
        data.specialDietConsiderations     = $('.special-diet-consideration-container #field').val();
        data.haveHealthProblemsAllergy     = $('input[name="have-health-problems-or-allergies"]:checked').val();
        data.doYouSmoke                    = $('.do-you-smoke').val();
        data.canSwimWell                   = $('input[name="can-swim-well"]:checked').val();
        data.canRideBike                   = $('input[name="can-ride-bike"]:checked').val();
        data.haveDriversLicense            = $('.have-drivers-license').val();
        data.sports                        = $.trim($('.sports').val());
        data.religion                      = $('.religion-container #field').val();
        data.religionForYouIs              = $('.religion-for-you-is').val();
    }
    return{
        fields: fields
    }
}