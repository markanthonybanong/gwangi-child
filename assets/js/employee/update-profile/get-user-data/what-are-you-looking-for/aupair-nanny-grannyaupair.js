export function aupairNannyGrannyAupair(userData){
    const aupair       = userData['looking_for_job_as_aupair'];
    const nanny        = userData['looking_for_job_as_nanny'];
    const grannyAupair = userData['looking_for_job_as_granny_aupair'];
    function iWilltakeCareOfChildrenFromAge(){
        $('.i-will-take-care-of-children-container').find('input[type="checkbox"]').each(function(){
            if(this.name ==='careChildrenZeroToOne' && userData['ang_takecare_children_age_zero_to_one'] === "1"){
                this.checked = true;
            } else if(this.name === 'careChildrenOneToFive' && userData['ang_takecare_children_age_one_to_five'] === "1"){
                this.checked = true;
            } else if(this.name === 'careChildrenSixToTen' && userData['ang_takecare_children_age_six_to_ten'] === "1"){
                this.checked = true;
            } else if(this.name === 'careChildrenElevenToFourteen' && userData['ang_takecare_children_age_eleven_to_fourteen'] === "1"){
                this.checked = true;
            } else if(this.name === 'careChildrenFifteenPlus' && userData['ang_takecare_children_age_fifteen_plus'] === "1"){
                this.checked = true;
            }
        });
    }
    function hoursOfChildCareExperienceInThePast24Months(){
        $('.hours-of-childcare-experience-container .hour-child-care-experience').val(userData['ang_hours_childcare_experience']);
    }
    function howManyChildrenPeopleWouldYouLikeToTakeCareOf(){
        $('.how-many-children-people-would-you-care-container .children-people-take-care').val(userData['ang_number_of_people_children_to_take_care']);
    }
    function wouldYouWorkForASingleParent(){
        $('.would-you-work-for-single-parent-container .work-for-single-parent').val(userData['ang_would_work_for_single_parent']);
    }
    function wouldYouTakeCareOfChildrenWithSpecialNeeds(){
        if(userData['ang_take_care_children_special_needs'] === 'Yes') {
            $('.take-care-children-special-needs-container #take-care-children-with-special-needs-yes').prop('checked', true);
        } else {
            $('.take-care-children-special-needs-container #take-care-children-with-special-needs-no').prop('checked', true);
        }
    }
    if(aupair === "1" || nanny === "1" || grannyAupair === "1") {
        $('.aupair-nanny-granny-aupair-container').css('display', 'block');
        iWilltakeCareOfChildrenFromAge();
        hoursOfChildCareExperienceInThePast24Months();
        howManyChildrenPeopleWouldYouLikeToTakeCareOf();
        wouldYouWorkForASingleParent();
        wouldYouTakeCareOfChildrenWithSpecialNeeds();
    }

}