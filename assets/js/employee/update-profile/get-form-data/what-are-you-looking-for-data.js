export function whatAreYouLookingForData(){
    function lookingForJobAs(data){
        $('.looking-for-job input').each(function(){
            if($(this).is(':checked')) {
                data[$(this).attr('name')] = 1;
            } else {
                data[$(this).attr('name')] = 0;
            }
        });
    }
    function aupairNannyGrannyAupairFields(data){
        if($('.aupair-nanny-granny-aupair-container:visible').length){
            $('.i-will-take-care-of-children-container input').each(function(){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                } else {
                    data[$(this).attr('name')] = 0;
                }
            });
            data.hoursChildCareExperience       = $('.hour-child-care-experience').val();
            data.numberPeopleChildrenToTakeCare = $('.children-people-take-care').val();
            data.workForSingleParent            = $('.work-for-single-parent').val();
            data.careChildrenWithSpecialNeeds   = $('input[name="take-care-children-with-special-needs"]:checked').val();
        }
    }
    function caregiverForElderlyAndLiveInHelpFields(data){
        if($('.caregiver-for-elderly-and-live-in-help-container:visible').length){
            $('.caregiver-for-elderly-and-live-in-help-container input').each(function(){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                } else {
                    data[$(this).attr('name')] = 0;
                }
            });
            data.takeCarePeopleWithSpecialNeeds = $('input[name="take-care-people-with-special-needs"]:checked').val();
        }  
    }
    function loPrefferedSubjects(data){
        if($('.preferred-subjects-container:visible').length){
            $('.preferred-subjects-container input').each(function(){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            });
        }
    }
    function lvActivityWithKids(data){
        if($('.activities-with-kids-container:visible').length){
            $('.activities-with-kids-container input').each(function(){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            });
        }
    }
    function lovPreferredStudentAgeGroup(data){
        if($('.preferred-student-age-group-container:visible').length){
            $('.preferred-student-age-group-container input').each(function(){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            });
        }
    }
    function selectedOtherCountry(){
        let   selectedOtherCountry = false;
        const normalCountries      = $('.preferred-countries-container #normal-country');
        if(normalCountries.length){
            for (let i = 0; i < normalCountries.length; i++) {
                if(normalCountries[i].checked){
                    selectedOtherCountry    = true;
                    break;
                }
            }
        }
        return selectedOtherCountry;
    }
    function preferredCountries() {
        let countries = [];
        if($('.preferred-countries-container #select-all').is(':checked')) {
            countries.push('All Countries');
        } else if($('.preferred-countries-container #select-eu').is(':checked') && selectedOtherCountry() === false) {
            countries.push('EU Countries');
        } else if($('.preferred-countries-container #select-eu').is(':checked') && selectedOtherCountry() === true){
            countries.push('EU Countries');
            $('.preferred-countries-container #normal-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
        } else {
            $('.preferred-countries-container #eu-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
            $('.preferred-countries-container #normal-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
        }
        return countries;
    }
    function preferredArea(data){
        $('.preferred-area-container input').each(function(){
            if($(this).is(':checked')) {
                data[$(this).attr('name')] = 1;
            }else {
                data[$(this).attr('name')] = 0;
            }
        });
    }
    function fields(data){
        //price per hour
        if($('.price-per-hour-container:visible').length){
            data.pricePerHourAmount   = $('.amount').val();
            data.pricePerHourCurrency = $('.currency').val();
        }
        data.earliestStartingDateMonth     = $('.earliest-starting-date-month').val();
        data.earliestStartingDateYear      = $('.earliest-starting-date-year').val();
        data.latestStartingDateMonth       = $('.latest-starting-date-month').val();
        data.latestStartingDateYear        = $('.latest-starting-date-year').val();
        data.durationOfStay                = $('.duration-of-stay').val();
        data.kindOfWorkLooking             = $('input[name="kind-of-work-looking"]:checked').val();
        data.accomodation                  = $('.accomodation').val();
        data.wouldLiveFamilyWithPets       = $('input[name="live-family-with-pets"]:checked').val();
        data.wouldTakeCareOfPets           = $('input[name="take-care-pets"]:checked').val();
        data.wouldWorkExtraToEarn          = $('input[name="work-extra-to-earn-additional-money"]:checked').val();
    }
    return {
        lookingForJobAs: lookingForJobAs,
        aupairNannyGrannyAupairFields: aupairNannyGrannyAupairFields,
        caregiverForElderlyAndLiveInHelpFields: caregiverForElderlyAndLiveInHelpFields,
        loPrefferedSubjects: loPrefferedSubjects,
        lvActivityWithKids: lvActivityWithKids,
        lovPreferredStudentAgeGroup: lovPreferredStudentAgeGroup,
        preferredCountries: preferredCountries,
        preferredArea: preferredArea,
        fields: fields
    }
}