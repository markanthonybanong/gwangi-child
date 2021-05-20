export function removeRequiredBorderOnFields() {
    //looking for a job
    const lookingForAJobCB = $(".looking-for-job input[type=\"checkbox\"]").change(function (){
        if(this.checked && $(".looking-for-job").hasClass("required-border")) {
            $(".looking-for-job").removeClass("required-border");
        }
    });
    //aupair, nanny & granny aupair
    const iWillTakeCareChildrenCB = $(".take-care-children input[type=\"checkbox\"]").change(function () {
        if(this.checked && $(".take-care-children").hasClass('required-border')) {
            $('.take-care-children').removeClass('required-border');
        }
    });
    const hoursOfChildCareSB = $('.hour-child-care-experience').change(function(){
        if($('.hour-child-care-experience').hasClass('required-border')){
            $('.hour-child-care-experience').removeClass('required-border');
        }
    });
    const childrenPeopleTakeSB = $('.children-people-take-care').change(function(){
        if($('.children-people-take-care').hasClass('children-people-take-care')){
            $('.children-people-take-care').removeClass('required-border');    
        }
    });
    const workForSingleSB = $('.work-for-single-parent').change(function(){
        if($('.work-for-single-parent').hasClass('required-border')){
            $('.work-for-single-parent').removeClass('required-border');
        }
    });
    const takeCareChildrenRB = $('input[name="take-care-children-with-special-needs"]').change(function(){
        if($('.take-care-children-with-special-needs').hasClass('required')){
            $('.take-care-children-with-special-needs').removeClass('required');
        }
    });
    //caregiver for elderly & live in help
    const iCanAssistAndProvideCB = $('.i-can-assist-provide-support-to-elderly-in input[type="checkbox"]').change(function(){
        if(this.checked && $('.i-can-assist-provide-support-to-elderly-in').hasClass('required-border')) {
            $('.i-can-assist-provide-support-to-elderly-in').removeClass('required-border');
        }
    });
    const wouldYouTakeCarePeopleRB = $('input[name="take-care-people-with-special-needs"]').change(function(){
        if($('.take-care-people-with-special-needs').hasClass('required')){
            $('.take-care-people-with-special-needs').removeClass('required');
        }
    });
    //preferred subjects
    const preferredSubjectsCB = $('.preferred-subjects input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-subjects').hasClass('required-border')) {
            $('.preferred-subjects').removeClass('required-border');
        }
    });
    //activities with kids
    const activitiesWithKidsCB = $('.activities-with-kids input[type="checkbox"]').change(function(){
        if(this.checked && $('.activities-with-kids').hasClass('required-border')) {
            $('.activities-with-kids').removeClass('required-border');
        }
    });
    //preferred student age group
    const preferredStudentAgeGroupCB = $('.preferred-student-age-group input[type="checkbox"]').change(function(){
        if(this.checked && $('.preferred-student-age-group').hasClass('required-border')) {
            $('.preferred-student-age-group').removeClass('required-border');
        }
    });
    //amount
    const amountIF = $('.amount').click( function(){
        if($('.amount').hasClass('required-border')){
            $('.amount').removeClass('required-border');
        }
    });
    //currency
    const currenySB = $('.currency').change(function(){
        if($('.currency').hasClass('required-border')){
            $('.currency').removeClass('required-border');
        }
    });
    //preferred countries
    const prefferedCountriesCB = $('.registration-countries input[type="checkbox"]').change(function(){
        if(this.checked && $('.registration-countries').hasClass('required-border')){
            $('.registration-countries').removeClass('required-border');
        }
    });
    //preferred area
    const prefferedAreaCB = $('.r-e-preferred-area input[type="checkbox"]').change(function (){
        if(this.checked && $('.r-e-preferred-area').hasClass('required-border')){
            $('.r-e-preferred-area').removeClass('required-border');
        }
    });
    //earliest starting date month
    const earlistStartingDateMonthSB = $('.r-e-earliest-starting-date-month').change(function(){
        if($('.r-e-earliest-starting-date-month').hasClass('required-border')){
            $('.r-e-earliest-starting-date-month').removeClass('required-border');
        }
    });
    //earliest starting date year
    const earlistStartingDateYearSB = $('.r-e-earliest-starting-date-year').change(function(){
        if($('.r-e-earliest-starting-date-year').hasClass('required-border')){
            $('.r-e-earliest-starting-date-year').removeClass('required-border');
        }
    });
    //latest starting date month
    const latestStartingDateMonthSB = $('.r-e-latest-starting-date-month').change(function(){
        if($('.r-e-latest-starting-date-month').hasClass('required-border')){
            $('.r-e-latest-starting-date-month').removeClass('required-border');
        }
    });
    //latest starting date year
    const latestStartingDateYearSB = $('.r-e-latest-starting-date-year').change(function(){
        if($('.r-e-latest-starting-date-year').hasClass('required-border')){
            $('.r-e-latest-starting-date-year').removeClass('required-border');
        }
    });
    //duration of stay
    const durationOfStaySB = $('.duration-of-stay').change(function(){
        if($('.duration-of-stay').hasClass('required-border')){
            $('.duration-of-stay').removeClass('required-border');
        }
    });
    //what kind of work are you looking for
    const whatKindOfWorkAreYouLookingForRB = $('input[name="kind-of-work-looking"]').change(function(){
        if($('.kind-of-work-looking').hasClass('required')){
            $('.kind-of-work-looking').removeClass('required');
        }
    });
    //accomodation
    const accomodatationSB = $('.accomodation').change(function(){
        if($('.accomodation').hasClass('required-border')){
            $('.accomodation').removeClass('required-border');
        }
    });
    //would you live family with pets
    const wouldYouLiveFamilyWithPetsRB = $('input[name="live-family-with-pets"]').change(function(){
        if($('.live-family-with-pets').hasClass('required')){
            $('.live-family-with-pets').removeClass('required');
        }
    });
    //would you take care of pets
    const wouldYouTakeCareOfPetsRB = $('input[name="take-care-pets"]').change(function(){
        if($('.take-care-pets').hasClass('required')){
            $('.take-care-pets').removeClass('required');
        }
    });
    //would you work extra to earn some
    const wouldYouWorkExtraToEarnRB = $('input[name="work-extra-to-earn-additional-money"]').change(function(){
        if($('.work-extra-to-earn-additional-money').hasClass('required')){
            $('.work-extra-to-earn-additional-money').removeClass('required');
        }
    });
    //gender
    const genderRB = $('input[name="gender"]').change(function(){
        if($('.gender').hasClass('required')){
            $('.gender').removeClass('required');
        }
    });
    //date of birth month
    const dateOfBirthMonthSB = $('.r-e-date-of-birth-month').change(function(){
        if($('.r-e-date-of-birth-month').hasClass('required-border')){
            $('.r-e-date-of-birth-month').removeClass('required-border');
        }
    });
    //date of birth year
    const dateOfBirthYearSB = $('.r-e-date-of-birth-year').change(function(){
        if($('.r-e-date-of-birth-year').hasClass('required-border')){
            $('.r-e-date-of-birth-year').removeClass('required-border');
        }
    });
    //your weight in
    const yourWeightInRB = $('input[name="weight"]').change(function(){
        if($('.weight').hasClass('required')){
            $('.weight').removeClass('required');
        }
    });
    //weight in kg
    const weightKgIF = $('.weight-kg').click( function(){
        if($('.weight-in-kg:visible').length && $('.weight-kg').hasClass('required-border')){
            $('.weight-kg').removeClass('required-border');
        }
    });
    //weight in lbs
    const weightLbsIF = $('.weight-lbs').click( function(){
        if($('.weight-in-lbs:visible').length && $('.weight-lbs').hasClass('required-border')){
            $('.weight-lbs').removeClass('required-border');
        }
    });
    //your height in
    const yourHeightInRB = $('input[name="height"]').change(function(){
        if($('.height').hasClass('required')){
            $('.height').removeClass('required');
        }
    });
    //height in cm
    const heightCmIF = $('.height-cm').click( function(){
        if($('.height-in-cm:visible').length && $('.height-cm').hasClass('required-border')){
            $('.height-cm').removeClass('required-border');
        }
    });
    //height in ft
    const heightFtIF = $('.height-ft').click( function(){
        if($('.height-in-ft:visible').length && $('.height-ft').hasClass('required-border')){
            $('.height-ft').removeClass('required-border');
        }
    });
    //nationality
    const nationalitySB = $('.r-e-nationality-select-input').change(function(){
        if($('.r-e-nationality-select-input').hasClass('required-border')){
            $('.r-e-nationality-select-input').removeClass('required-border');
        }
    });
    //I have a passport from
    const iHaveApassportFromSB = $('.r-e-have-a-passport-from-select').change(function(){
        if($('.r-e-have-a-passport-from-select').hasClass('required-border')){
            $('.r-e-have-a-passport-from-select').removeClass('required-border');
        }
    });
    //where are you currently living
    const currentlyLivingRB = $('input[name="currently-living"]').change(function(){
        if($('.currently-living').hasClass('required')){
            $('.currently-living').removeClass('required');
        }
    });
    //living in
    const livingInSB = $('.currently-living-select').change(function(){
        if($('.another-country:visible').length && $('.currently-living-select').hasClass('required-border')){
            $('.currently-living-select').removeClass('required-border');
        }
    });
    //visa status
    const visaStatusSB = $('.visa-status-select').change(function(){
        if($('.another-country:visible').length && $('.visa-status-select').hasClass('required-border')){
            $('.visa-status-select').removeClass('required-border');
        }
    });
    //education
    const educationSB = $('.education').change(function(){
        if($('.education').hasClass('required-border')){
            $('.education').removeClass('required-border');
        }
    });
    //name of school college & university
    const nameOfSchoolCollegeUniIF = $('.name-of-school-college-university').click(function(){
        if($('.name-of-school-college-university').hasClass('required-border')){
            $('.name-of-school-college-university').removeClass('required-border');
        }
    });
    //profession
    const professionIF = $('.profession').click(function(){
        if($('.profession').hasClass('required-border')){
            $('.profession').removeClass('required-border');
        }
    });
    //marital status
    const maritalStatusSB = $('.marital-status').change(function(){
        if($('.marital-status').hasClass('required-border')){
            $('.marital-status').removeClass('required-border');
        }
    });
    //do you have children of your own
    const haveOwnChildrenRB = $('input[name="have-own-children"]').change(function(){
        if($('.have-own-children').hasClass('required')){
            $('.have-own-children').removeClass('required');
        }
    });
    //do you have any siblings
    const haveAnySiblingsRB = $('input[name="have-siblings"]').change(function(){
        if($('.have-siblings').hasClass('required')){
            $('.have-siblings').removeClass('required');
        }
    });
    //do you have a traning in healthcare
    const haveHealthCareTraningRB = $('input[name="healthcare-training"]').change(function(){
        if($('.healthcare-training').hasClass('required')){
            $('.healthcare-training').removeClass('required');
        }
    });
    //did you attend first aid traning
    const attendFirstAidTraningRB = $('input[name="have-first-aid-traning"]').change(function(){
        if($('.have-first-aid-traning').hasClass('required')){
            $('.have-first-aid-traning').removeClass('required');
        }
    });
    //did you have criminal record
    const haveCriminalRecordRB = $('input[name="have-criminal-record"]').change(function(){
        if($('.have-criminal-record').hasClass('required')){
            $('.have-criminal-record').removeClass('required');
        }
    });
    //special diet consideration
    const specialDietConsiderationSB = $('.special-diet-consideration').change(function(){
        if($('.special-diet-consideration').hasClass('required-border')){
            $('.special-diet-consideration').removeClass('required-border');
        }
    });
    //have health problems or allergies
    const haveAnyHealthProbemsAllergiesRB = $('input[name="have-health-problems-or-allergies"]').change(function(){
        if($('.have-health-problems-or-allergies').hasClass('required')){
            $('.have-health-problems-or-allergies').removeClass('required');
        }
    });
    //describe health problems or allergies
    const describeHealthProblemsAllergiesIF = $('.describe-health-problems-or-allergies').click(function(){
        if($('.describe-health-problems-or-allergies').hasClass('required-border')){
            $('.describe-health-problems-or-allergies').removeClass('required-border');
        }
    });
    //do you smoke
    const doYouSmokeSB = $('.do-you-smoke').change(function(){
        if($('.do-you-smoke').hasClass('required-border')){
            $('.do-you-smoke').removeClass('required-border');
        }
    });
    //can you swim well
    const canSwimWellRB = $('input[name="can-swim-well"]').change(function(){
        if($('.can-swim-well').hasClass('required')){
            $('.can-swim-well').removeClass('required');
        }
    });
    //can you ride a bike
    const canRideBikeRB = $('input[name="can-ride-bike"]').change(function(){
        if($('.can-ride-bike').hasClass('required')){
            $('.can-ride-bike').removeClass('required');
        }
    });
    //do you have a drivers license
    const haveDriversLicenseSB = $('.have-drivers-license').change(function(){
        if($('.have-drivers-license').hasClass('required-border')){
            $('.have-drivers-license').removeClass('required-border');
        }
    });
    //sports
    const sportsIF = $('.sports').click(function(){
        if($('.sports').hasClass('required-border')){
            $('.sports').removeClass('required-border');
        }
    });
    //religion
    const religionSB = $('.e-r-religion-select').change(function(){
        if($('.e-r-religion-select').hasClass('required-border')){
            $('.e-r-religion-select').removeClass('required-border');
        }
    });
    //religion for you is
    const religionForYouIsSB = $('.religion-for-you-is').change(function(){
        if($('.religion-for-you-is').hasClass('required-border')){
            $('.religion-for-you-is').removeClass('required-border');
        }
    });
    //firstname
    const firstNameIF = $('.firstname').click(function(){
        if($('.firstname').hasClass('required-border')){
            $('.firstname').removeClass('required-border');
        }
    });
    //lastname
    const lastNameIF = $('.lastname').click(function(){
        if($('.lastname').hasClass('required-border')){
            $('.lastname').removeClass('required-border');
        }
    });
    //address
    const addressIF = $('.address').click(function(){
        if($('.address').hasClass('required-border')){
            $('.address').removeClass('required-border');
        }
    });
    //zipcode
    const zipCodeIF = $('.zip-code').click(function(){
        if($('.zip-code').hasClass('required-border')){
            $('.zip-code').removeClass('required-border');
        }
    });
    //city
    const cityIF = $('.city').click(function(){
        if($('.city').hasClass('required-border')){
            $('.city').removeClass('required-border');
        }
    });
    //state/region
    const stateRegionIF = $('.state-region').click(function(){
        if($('.state-region').hasClass('required-border')){
            $('.state-region').removeClass('required-border');
        }
    });
    //country
    const countrySB = $('.e-r-country-select').change(function(){
        if($('.e-r-country-select').hasClass('required-border')){
            $('.e-r-country-select').removeClass('required-border');
        }
    });
    //mobile phone no
    const mobilePhoneIF = $('.mobile-number').click(function(){
        if($('.mobile-number').hasClass('required-border')){
            $('.mobile-number').removeClass('required-border');
        }
    });
    //letter
    const letterTA = $('.letter-to-the-family').click(function(){
        if($('.letter-to-the-family').hasClass('required-border')){
            $('.letter-to-the-family').removeClass('required-border');
        }
    });

    //email
    const emailIF = $('.email').click(function(){
        if($('.email').hasClass('required-border')){
            $('.email').removeClass('required-border');
        }
    });
    //confirm-email
    const confirmEmailIF = $('.confirm-email').click(function(){
        if($('.confirm-email').hasClass('required-border')){
            $('.confirm-email').removeClass('required-border');
        }
    });
    //password
    const passwordIF = $('.password').click(function(){
        if($('.password').hasClass('required-border')){
            $('.password').removeClass('required-border');
        }
    });
    //confirm password
    const confirmPasswordIF = $('.confirm-password').click(function(){
        if($('.confirm-password').hasClass('required-border')){
            $('.confirm-password').removeClass('required-border');
        }
    });
    return {
        lookingForAJobCB: lookingForAJobCB,
        iWillTakeCareChildrenCB: iWillTakeCareChildrenCB,
        hoursOfChildCareSB: hoursOfChildCareSB,
        childrenPeopleTakeSB: childrenPeopleTakeSB,
        workForSingleSB: workForSingleSB,
        takeCareChildrenRB: takeCareChildrenRB,
        iCanAssistAndProvideCB: iCanAssistAndProvideCB,
        wouldYouTakeCarePeopleRB: wouldYouTakeCarePeopleRB,
        preferredSubjectsCB: preferredSubjectsCB,
        activitiesWithKidsCB: activitiesWithKidsCB,
        preferredStudentAgeGroupCB: preferredStudentAgeGroupCB,
        amountIF: amountIF,
        currenySB: currenySB,
        prefferedCountriesCB: prefferedCountriesCB,
        prefferedAreaCB: prefferedAreaCB,
        earlistStartingDateMonthSB: earlistStartingDateMonthSB,
        earlistStartingDateYearSB: earlistStartingDateYearSB,
        latestStartingDateMonthSB: latestStartingDateMonthSB,
        latestStartingDateYearSB: latestStartingDateYearSB,
        durationOfStaySB: durationOfStaySB,
        whatKindOfWorkAreYouLookingForRB: whatKindOfWorkAreYouLookingForRB,
        accomodatationSB: accomodatationSB,
        wouldYouLiveFamilyWithPetsRB: wouldYouLiveFamilyWithPetsRB,
        wouldYouTakeCareOfPetsRB: wouldYouTakeCareOfPetsRB,
        wouldYouWorkExtraToEarnRB: wouldYouWorkExtraToEarnRB,
        genderRB: genderRB,
        dateOfBirthMonthSB: dateOfBirthMonthSB,
        dateOfBirthYearSB: dateOfBirthYearSB,
        yourWeightInRB: yourWeightInRB,
        weightKgIF: weightKgIF,
        weightLbsIF: weightLbsIF,
        yourHeightInRB: yourHeightInRB,
        heightCmIF: heightCmIF,
        heightFtIF: heightFtIF,
        nationalitySB: nationalitySB,
        iHaveApassportFromSB: iHaveApassportFromSB,
        currentlyLivingRB: currentlyLivingRB,
        livingInSB: livingInSB,
        visaStatusSB: visaStatusSB,
        educationSB: educationSB,
        nameOfSchoolCollegeUniIF: nameOfSchoolCollegeUniIF,
        professionIF: professionIF,
        maritalStatusSB: maritalStatusSB,
        haveOwnChildrenRB: haveOwnChildrenRB,
        haveAnySiblingsRB: haveAnySiblingsRB,
        haveHealthCareTraningRB: haveHealthCareTraningRB,
        attendFirstAidTraningRB: attendFirstAidTraningRB,
        haveCriminalRecordRB: haveCriminalRecordRB,
        specialDietConsiderationSB: specialDietConsiderationSB,
        haveAnyHealthProbemsAllergiesRB: haveAnyHealthProbemsAllergiesRB,
        describeHealthProblemsAllergiesIF: describeHealthProblemsAllergiesIF,
        doYouSmokeSB: doYouSmokeSB,
        canSwimWellRB: canSwimWellRB,
        canRideBikeRB: canRideBikeRB,
        haveDriversLicenseSB: haveDriversLicenseSB,
        sportsIF: sportsIF,
        religionSB: religionSB,
        religionForYouIsSB: religionForYouIsSB,
        firstNameIF: firstNameIF,
        lastNameIF: lastNameIF,
        addressIF: addressIF,
        zipCodeIF: zipCodeIF,
        cityIF: cityIF,
        stateRegionIF: stateRegionIF,
        countrySB: countrySB,
        mobilePhoneIF: mobilePhoneIF,
        letterTA: letterTA,
        confirmEmailIF: confirmEmailIF,
        emailIF: emailIF,
        passwordIF: passwordIF,
        confirmPasswordIF: confirmPasswordIF,
    }

}