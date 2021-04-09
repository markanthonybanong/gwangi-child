export function removeRequiredOnJobRequirementFields() {
        //We are looking for
        const weAreLookingCB = $('.we-are-looking-for input[type="checkbox"]').change(function(){
            if(this.checked && $('.we-are-looking-for').hasClass('required-border')) {
                $('.we-are-looking-for').removeClass('required-border');
            }
        });
        //Aupair Nanny & Granny Aupair
        const howOldAreTheChildrenCB = $('.take-care-of-children input[type="checkbox"]').change( function(){
            if(this.checked && $('.take-care-of-children').hasClass('required-border')) {
                $('.take-care-of-children').removeClass('required-border');
            }
        });
        const minimumRequiredChildcareSB = $('.hours-child-care-experience').change( function(){
            if($('.hours-child-care-experience').hasClass('required-border')){
                $('.hours-child-care-experience').removeClass('required-border');
            }
        });
        const howManyChildrenPeopleIF = $('.how-many-children-people-would').click( function(){
            if($('.how-many-children-people-would').hasClass('required-border')){
                $('.how-many-children-people-would').removeClass('required-border');
            }
        });
        const applicantTakeCareChildrenWithSpecialNeedsRB = $('input[name="take-care-children-with-special-needs"]').change( function(){
            if($('.take-care-children-with-special-needs').hasClass('required')){
                $('.take-care-children-with-special-needs').removeClass('required');
            }
        });
        const describeChildrenIF = $('.describe-children').click( function(){
            if($('.describe-children').hasClass('required-border')){
                $('.describe-children').removeClass('required-border');
            }
        });
        //Caregiver for elderly & Live in help
        const weNeedAssistanceCB = $('.we-need-assistance-support-in-cb input[type="checkbox"]').change( function(){
            if($('.we-need-assistance-support-in-cb').hasClass('required-border')){
                $('.we-need-assistance-support-in-cb').removeClass('required-border');
            }
        });
        const applicantTakeCarePeopleWithSpecialNeedsRB = $('input[name="take-care-people-with-special-needs"]').change( function(){
            if($('.take-care-people-with-special-needs').hasClass('required')){
                $('.take-care-people-with-special-needs').removeClass('required');
            }
        });
        //We need a tutor who can teach
        const weNeedATutorWhoCanTeachCB = $('.tutor-who-can-teach-cb input[type="checkbox"]').change( function(){
            if($('.tutor-who-can-teach-cb').hasClass('required-border')){
                $('.tutor-who-can-teach-cb').removeClass('required-border');
            }
        });
        //We need a tutor who can do the following activities 
        const weNeedTutorCanDoActivitiesCB = $('.tutor-who-can-do-activities-cb input[type="checkbox"]').change( function(){
            if($('.tutor-who-can-do-activities-cb').hasClass('required-border')){
                $('.tutor-who-can-do-activities-cb').removeClass('required-border');
            }
        });
        //How old are the students the tutor should teach
        const howOldStudentsToTeachCB = $('.student-age-group-tutor-would-teach-cb input[type="checkbox"]').change( function(){
            if($('.student-age-group-tutor-would-teach-cb').hasClass('required-border')){
                $('.student-age-group-tutor-would-teach-cb').removeClass('required-border');
            }
        });
        //Price per hour amount
        const amountIF = $('.amount').click( function(){
            if($('.amount').hasClass('required-border')){
                $('.amount').removeClass('required-border');
            }
        });
         //Price per hour currency
        const currencySB = $('.currency').change( function(){
            if($('.currency').hasClass('required-border')){
                $('.currency').removeClass('required-border');
            }
        });
        //Preferred Nationalites
        const preferredNationalitiesCB = $('.preferred-nationalities input[type="checkbox"]').change( function(){
            if($('.preferred-nationalities').hasClass('required-border')){
                $('.preferred-nationalities').removeClass('required-border');
            }
        });
        //Applicant currently living in
        const applicantLivingInCB = $('.applicant-currently-living-in input[type="checkbox"]').change( function(){
            if($('.applicant-currently-living-in').hasClass('required-border')){
                $('.applicant-currently-living-in').removeClass('required-border');
            }
        });
        //Earliest starting date month
        const earliestStartingDateMonthSB = $('.earliest-starting-date-month').change( function(){
            if($('.earliest-starting-date-month').hasClass('required-border')){
                $('.earliest-starting-date-month').removeClass('required-border');
            }
        });
         //Earliest starting date year
        const earliestStartinDateYearSB = $('.earliest-starting-date-year').change( function(){
            if($('.earliest-starting-date-year').hasClass('required-border')){
                $('.earliest-starting-date-year').removeClass('required-border');
            }
        });
        //Latest starting date month
        const latestStartingDateMonthSB = $('.latest-starting-date-month').change( function(){
            if($('.latest-starting-date-month').hasClass('required-border')){
                $('.latest-starting-date-month').removeClass('required-border');
            }
        });
         //Latest starting date year
        const latestStartingDateYearSB = $('.latest-starting-date-year').change( function(){
            if($('.latest-starting-date-year').hasClass('required-border')){
                $('.latest-starting-date-year').removeClass('required-border');
            }
        });
        //Duration of stay
        const durationOfStaySB = $('.duration-of-stay').change( function(){
            if($('.duration-of-stay').hasClass('required-border')){
                $('.duration-of-stay').removeClass('required-border');
            }
        });
        //Preferred gender
        const preferredGenderSB = $('.preferred-gender').change( function(){
            if($('.preferred-gender').hasClass('required-border')){
                $('.preferred-gender').removeClass('required-border');
            }
        });
        //Required language skills
        const requiredLangugeSB = $('.required-language-skills').change( function(){
            if($('.required-language-skills').hasClass('required-border')){
                $('.required-language-skills').removeClass('required-border');
            }
        });
        //Required education level
        const requiredEducationLevelSB = $('.require-education-level').change( function(){
            if($('.require-education-level').hasClass('required-border')){
                $('.require-education-level').removeClass('required-border');
            }
        });
        //Working hours per week
        const workingHoursPerWeekSB = $('.working-hours-per-week').change( function(){
            if($('.working-hours-per-week').hasClass('required-border')){
                $('.working-hours-per-week').removeClass('required-border');
            }
        }); 
        //Pecket monty per month
        const pocketMoneyIF = $('.pocket-money-permonth').click( function(){
            if($('.pocket-money-permonth').hasClass('required-border')){
                $('.pocket-money-permonth').removeClass('required-border');
            }
        }); 
        //Pecket monty per month currnecy
        const pocketMoneyCurrencySB = $('.pocket-money-permonth-currency').click( function(){
            if($('.pocket-money-permonth-currency').hasClass('required-border')){
                $('.pocket-money-permonth-currency').removeClass('required-border');
            }
        });  
        //Are you willing to pay for travel expenses
        const areYouWillingToPaySB = $('.pay-for-travel-expenses').change( function(){
            if($('.pay-for-travel-expenses').hasClass('required-border')){
                $('.pay-for-travel-expenses').removeClass('required-border');
            }
        });   
        //Are you willing to pay for visa
        const areYouWillingToPayForVisaSB = $('.pay-for-visa').change( function(){
            if($('.pay-for-visa').hasClass('required-border')){
                $('.pay-for-visa').removeClass('required-border');
            }
        });
        //Required age min
        const requiredAgeMinSB = $('.required-age-min').change( function(){
            if($('.required-age-min').hasClass('required-border')){
                $('.required-age-min').removeClass('required-border');
            }
        });
        //Required age max
        const requireAgeMaxSB = $('.required-age-max').change( function(){
            if($('.required-age-max').hasClass('required-border')){
                $('.required-age-max').removeClass('required-border');
            }
        });
        //Is smoking allowed
        const isSmokingAllowedSB = $('.is-smoking-allowed').change( function(){
            if($('.is-smoking-allowed').hasClass('required-border')){
                $('.is-smoking-allowed').removeClass('required-border');
            }
        });
        //Does the applicant have to take care of pets
        const applicantTakeCarePetsRB = $('input[name="applicant-take-care-of-pets"]').change( function(){
            if($('.applicant-take-care-of-pets').hasClass('required')){
                $('.applicant-take-care-of-pets').removeClass('required');
            }
        });
        //Does the applicant know how to swing
        const applicantKnowHowToSwimRB = $('input[name="applicant-know-how-to-swim"]').change( function(){
            if($('.applicant-know-how-to-swim').hasClass('required')){
                $('.applicant-know-how-to-swim').removeClass('required');
            }
        });
        //Does the applicant know how to ride a bike
        const applicantKnowHowToRideBikeRB = $('input[name="applicant-know-how-to-ride-bike"]').change( function(){
            if($('.applicant-know-how-to-ride-bike').hasClass('required')){
                $('.applicant-know-how-to-ride-bike').removeClass('required');
            }
        });
        //Do you expect that the applicant to attend first aid training
        const applicantAttendFirstAidTrainingRB = $('input[name="applicant-attend-first-aid-training"]').change( function(){
            if($('.applicant-attend-first-aid-training').hasClass('required')){
                $('.applicant-attend-first-aid-training').removeClass('required');
            }
        }); 
        //Do you expect the applicant to drive
        const applicantExpectToDriveRB = $('input[name="applicant-to-drive"]').change( function(){
            if($('.applicant-to-drive').hasClass('required')){
                $('.applicant-to-drive').removeClass('required');
            }
        }); 
        //Can the applicant attend language courses
        const applicantAttendLanguageCoursesRB = $('input[name="applicant-to-attend-language-courses"]').change( function(){
            if($('.applicant-to-attend-language-courses').hasClass('required')){
                $('.applicant-to-attend-language-courses').removeClass('required');
            }
        });
      
        return{
            weAreLookingCB: weAreLookingCB,
            howOldAreTheChildrenCB: howOldAreTheChildrenCB,
            minimumRequiredChildcareSB: minimumRequiredChildcareSB,
            howManyChildrenPeopleIF: howManyChildrenPeopleIF,
            applicantTakeCareChildrenWithSpecialNeedsRB: applicantTakeCareChildrenWithSpecialNeedsRB,
            describeChildrenIF: describeChildrenIF,
            weNeedAssistanceCB: weNeedAssistanceCB,
            applicantTakeCarePeopleWithSpecialNeedsRB: applicantTakeCarePeopleWithSpecialNeedsRB,
            weNeedATutorWhoCanTeachCB: weNeedATutorWhoCanTeachCB,
            weNeedTutorCanDoActivitiesCB: weNeedTutorCanDoActivitiesCB,
            howOldStudentsToTeachCB: howOldStudentsToTeachCB,
            amountIF: amountIF,
            currencySB: currencySB,
            preferredNationalitiesCB: preferredNationalitiesCB,
            applicantLivingInCB: applicantLivingInCB,
            earliestStartingDateMonthSB: earliestStartingDateMonthSB,
            earliestStartinDateYearSB: earliestStartinDateYearSB,
            latestStartingDateMonthSB: latestStartingDateMonthSB,
            latestStartingDateYearSB: latestStartingDateYearSB,
            durationOfStaySB: durationOfStaySB,
            preferredGenderSB: preferredGenderSB,
            requiredLangugeSB: requiredLangugeSB,
            requiredEducationLevelSB: requiredEducationLevelSB,
            workingHoursPerWeekSB: workingHoursPerWeekSB,
            pocketMoneyIF: pocketMoneyIF,
            pocketMoneyCurrencySB: pocketMoneyCurrencySB,
            areYouWillingToPaySB: areYouWillingToPaySB,
            areYouWillingToPayForVisaSB: areYouWillingToPayForVisaSB,
            requiredAgeMinSB: requiredAgeMinSB,
            requireAgeMaxSB: requireAgeMaxSB,
            isSmokingAllowedSB: isSmokingAllowedSB,
            applicantTakeCarePetsRB: applicantTakeCarePetsRB,
            applicantKnowHowToSwimRB: applicantKnowHowToSwimRB,
            applicantKnowHowToRideBikeRB: applicantKnowHowToRideBikeRB,
            applicantAttendFirstAidTrainingRB: applicantAttendFirstAidTrainingRB,
            applicantExpectToDriveRB: applicantExpectToDriveRB,
            applicantAttendLanguageCoursesRB: applicantAttendLanguageCoursesRB,
        }
}