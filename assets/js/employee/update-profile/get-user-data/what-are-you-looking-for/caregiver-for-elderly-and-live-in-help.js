export function careGiverForElderlyAndLiveInHelp(userData){
    const careGiverForElderly = userData['looking_for_job_as_caregiver_for_elderly'];
    const liveInHelp          = userData['looking_for_job_as_live_in_help'];
    function iCanAssistAndProvideSupportToElderlyIn(){
        $('.caregiver-for-elderly-and-live-in-help-container').find('input[type="checkbox"]').each(function(){
            if(this.name === 'assistSupportWalksOutings' && userData['cl_assist_provide_support_in_walks_outings'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportMobilitySupport' && userData['cl_assist_provide_support_in_mobility_support'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportDriving' && userData['cl_assist_provide_support_in_driving'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportErrandShopping' && userData['cl_assist_provide_support_in_errands_shopping'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportCleaningLaundry' && userData['cl_assist_provide_support_in_cleaning_laundry'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportLightDomesticWork' && userData['cl_assist_provide_support_in_light_domestic_work'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportCookingMeals' && userData['cl_assist_provide_support_in_cooking_meals'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportWashingDressing' && userData['cl_assist_provide_support_in_washing_dressing'] === "1"){
                this.checked = true;
            } else if(this.name === 'assistSupportCompanionshipConvo' && userData['cl_assist_provide_support_in_companionship_conversation'] === "1"){
                this.checked =  true;
            }
        });
    }
    function wouldYouTakeCareOfPeopleWithSpecialNeeds(){
        if(userData['cl_take_care_people_with_special_needs'] === 'Yes'){
            $('.would-you-take-care-of-people-with-special-needs-container #take-care-people-with-special-needs-yes').prop('checked', true);
        } else {
            $('.would-you-take-care-of-people-with-special-needs-container #take-care-people-with-special-needs-no').prop('checked', true);
        }
    }
    if(careGiverForElderly === "1" || liveInHelp === "1") {
        $('.caregiver-for-elderly-and-live-in-help-container').css('display', 'block');
        iCanAssistAndProvideSupportToElderlyIn();
        wouldYouTakeCareOfPeopleWithSpecialNeeds();
    }
}