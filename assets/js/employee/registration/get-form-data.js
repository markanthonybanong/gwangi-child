import {interNationalTelephoneInput} from "../../../utilities/js/international-tel-input";
export function getFormData(){
    function lookingForJobAs(data){
        $('.looking-for-job input').each(function(){
            if($(this).is(':checked')) {
                data[$(this).attr('name')] = 1;
            } else {
                data[$(this).attr('name')] = 0;
            }
        });
    }
    function angTakeCareChildrenFromAge(data){
        $('.take-care-children input').each(function(){
            if($('.aupair-nanny-granny-aupair:visible').length){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                } else {
                    data[$(this).attr('name')] = 0;
                }
            }
        });
    }
    function clAssistProdiveSuppToElderlyIn(data){
        $('.i-can-assist-provide-support-to-elderly-in input').each(function(){
            if($('.r-e-i-can-assist:visible').length){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                } else {
                    data[$(this).attr('name')] = 0;
                }
            }  
        });
    }
    function loPrefferedSubjects(data){
        $('.preferred-subjects input').each(function(){
            if($('.r-e-preferred-subjects:visible').length){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            }
        });
    }
    function lvActivityWithKids(data){
        $('.activities-with-kids input').each(function(){
            if($('.r-e-activities-with-kids:visible').length){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            }
        });
    }
    function lovPreferredStudentAgeGroup(data){
        $('.preferred-student-age-group input').each(function(){
            if($('.r-e-preferred-student-age-group:visible').length){
                if($(this).is(':checked')) {
                    data[$(this).attr('name')] = 1;
                }else {
                    data[$(this).attr('name')] = 0;
                }
            }
        });
    }
    function selectedOtherCountry(){
        let   selectedOtherCountry = false;
        const normalCountries      = $('.registration-countries #normal-country');
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
        if($('.registration-countries #select-all').is(':checked')) {
            countries.push('All Countries');
        } else if($('.registration-countries #select-eu').is(':checked') && selectedOtherCountry() === false) {
            countries.push('EU Countries');
        } else if($('.registration-countries #select-eu').is(':checked') && selectedOtherCountry() === true){
            countries.push('EU Countries');
            $('.registration-countries #normal-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
        } else {
            $('.registration-countries #eu-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
            $('.registration-countries #normal-country').each(function(){
                if($(this).is(':checked')) {
                    countries.push($(this).attr('name'));
                } 
            });
        }
        return countries;
    }
    function preferredArea(data){
        $('.r-e-preferred-area input').each(function(){
            if($(this).is(':checked')) {
                data[$(this).attr('name')] = 1;
            }else {
                data[$(this).attr('name')] = 0;
            }
        });
    }
    function fields(data){
        //hours of child care experience
        if($('.aupair-nanny-granny-aupair:visible').length) {
            data.hoursChildCareExperience       = $('.hour-child-care-experience').val();
            data.numberPeopleChildrenToTakeCare = $('.children-people-take-care').val();
            data.workForSingleParent            = $('.work-for-single-parent').val();
            data.careChildrenWithSpecialNeeds   = $('input[name="take-care-children-with-special-needs"]:checked').val();
        }
        //would you take care of people with special needs
        if($('.r-e-would-you-take:visible').length) {
            data.takeCarePeopleWithSpecialNeeds = $('input[name="take-care-people-with-special-needs"]:checked').val();
        }
        //price per hour
        if($('.r-e-price-per-hour:visible').length){
            data.pricePerHourAmount   = $('.amount').val();
            data.pricePerHourCurrency = $('.currency').val();
        }
        //weight in kg
        if($('.weight-in-kg:visible').length){
            data.weightInKg = $('.weight-kg').val();
        }
        //weight in lbs
        if($('.weight-in-lbs:visible').length){
            data.weightInLbs = $('.weight-lbs').val();
        }
        //height in cm
        if($('.height-in-cm:visible').length){
            data.heightInCm = $('.height-cm').val();
        }
        //height in ft
        if($('.height-in-ft:visible').length){
            data.heightInFt = $('.height-ft').val();
        }
        //living in, visa status
        if($('.another-country:visible').length){
            data.livingIn   = $('.currently-living-select').val();
            data.visaStatus = $('.visa-status-select').val();
        }
        //what are you looking for
        data.earliestStartingDateMonth     = $('.r-e-earliest-starting-date-month').val();
        data.earliestStartingDateYear      = $('.r-e-earliest-starting-date-year').val();
        data.latestStartingDateMonth       = $('.r-e-latest-starting-date-month').val();
        data.latestStartingDateYear        = $('.r-e-latest-starting-date-year').val();
        data.durationOfStay                = $('.duration-of-stay').val();
        data.kindOfWorkLooking             = $('input[name="kind-of-work-looking"]:checked').val();
        data.accomodation                  = $('.accomodation').val();
        data.wouldLiveFamilyWithPets       = $('input[name="live-family-with-pets"]:checked').val();
        data.wouldTakeCareOfPets           = $('input[name="take-care-pets"]:checked').val();
        data.wouldWorkExtraToEarn          = $('input[name="work-extra-to-earn-additional-money"]:checked').val();
        //personal information    
        data.gender                        = $('input[name="gender"]:checked').val();
        data.dateOfBirthMonth              = $('.r-e-date-of-birth-month').val();
        data.dateOfBirthYear               = $('.r-e-date-of-birth-year').val();
        data.yourWeightIn                  = $('input[name="weight"]:checked').val();
        data.yourHeightIn                  = $('input[name="height"]:checked').val();
        data.nationality                   = $('.r-e-nationality-select-input').val();
        data.haveAPassportFrom             = $('.r-e-have-a-passport-from-select').val();
        data.currentlyLiving               = $('input[name="currently-living"]:checked').val();
        data.education                     = $('.education').val();
        data.nameOfSchoolCollegeUni        = $.trim($('.name-of-school-college-university').val());
        data.profession                    = $.trim($('.profession').val());
        data.maritalStatus                 = $('.marital-status').val();
        data.haveOwnChildren               = $('input[name="have-own-children"]:checked').val();
        data.haveAnySiblings               = $('input[name="have-siblings"]:checked').val();
        data.haveTrainingInHealthCare      = $('input[name="healthcare-training"]:checked').val();
        data.attendFirstAidTraining        = $('input[name="have-first-aid-traning"]:checked').val();
        data.haveCriminalRecord            = $('input[name="have-criminal-record"]:checked').val();
        data.specialDietConsiderations     = $('.special-diet-consideration').val();
        data.haveHealthProblemsAllergy     = $('input[name="have-health-problems-or-allergies"]:checked').val();
        data.describehealthProblemsAllergy = $.trim($('.describe-health-problems-or-allergies').val());
        data.doYouSmoke                    = $('.do-you-smoke').val();
        data.canSwimWell                   = $('input[name="can-swim-well"]:checked').val();
        data.canRideBike                   = $('input[name="can-ride-bike"]:checked').val();
        data.haveDriversLicense            = $('.have-drivers-license').val();
        data.sports                        = $.trim($('.sports').val());
        data.religion                      = $('.e-r-religion-select').val();
        data.religionForYouIs              = $('.religion-for-you-is').val();
        //contact information    
        data.firstName                     = $.trim($('.firstname').val());
        data.lastName                      = $.trim($('.lastname').val());
        data.address                       = $.trim($('.address').val());
        data.zipcode                       = $.trim($('.zip-code').val());
        data.city                          = $.trim($('.city').val());
        data.stateRegion                   = $.trim($('.state-region').val());
        data.country                       = $('.e-r-country-select').val();
        data.mobilePhoneNo                 = interNationalTelephoneInput().iti.getNumber();
        data.letter                        = $.trim($('.letter-to-the-family').val());
    }
    return {
        lookingForJobAs: lookingForJobAs,
        angTakeCareChildrenFromAge: angTakeCareChildrenFromAge,
        clAssistProdiveSuppToElderlyIn: clAssistProdiveSuppToElderlyIn,
        loPrefferedSubjects: loPrefferedSubjects,
        lvActivityWithKids: lvActivityWithKids,
        lovPreferredStudentAgeGroup: lovPreferredStudentAgeGroup,
        preferredCountries: preferredCountries,
        preferredArea: preferredArea,
        fields: fields
    }
}