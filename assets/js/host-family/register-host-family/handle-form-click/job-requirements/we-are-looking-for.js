export default $(function(){
    //containers
    const aupairNannyGrannyAupairContainer        = $('.aupair-nanny-granny-aupair-container');
    const careGiverForElderlyLiveInHelpContainer  = $('.caregiverforelderly-liveinhelp-container');
    const tutorWhoCanTeachSubjectContainer        = $('.tutor-who-can-teach-subject-container');
    const tutorWhoCanDoActivitiesContainer        = $('.tutor-who-can-do-activities-container');
    const studendAgeGroupTutorWouldTeachContainer = $('.student-age-group-tutor-would-teach-container');
    //checkboxes
    const aupairCB                                = $('.we-are-looking-for #aupair');
    const nannyCB                                 = $('.we-are-looking-for #nanny');
    const grannyAupairCB                          = $('.we-are-looking-for #granny-aupair');
    const caregiverForElderlyCB                   = $('.we-are-looking-for #caregiver-for-elderly');
    const liveInHelpCB                            = $('.we-are-looking-for #live-in-help');
    const liveInTutorCB                           = $('.we-are-looking-for #live-in-tutor');
    function disableUncheckBoxIfMax(){
        const checkCheckBox = $('.we-are-looking-for .check');
        if(checkCheckBox.length >= 2) {
            const uncheckCheckBox = $('.we-are-looking-for .un-check');
            for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = true;
            }
        }
    }
    function enableUncheckBox() {
        const uncheckCheckBox = $('.we-are-looking-for .un-check');
        for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = false;
        }
    }
    function alterCheckBox(checkbox) {
        if(checkbox.checked === true) {
            checkbox.className = "check";
            disableUncheckBoxIfMax();
        } else {
            checkbox.className = "un-check";
            enableUncheckBox();
        }
    }
    
    aupairCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAupairContainer.css('display', 'block');
        } else if(nannyCB.prop('checked') === false && grannyAupairCB.prop('checked') === false){
            aupairNannyGrannyAupairContainer.css('display', 'none');
        }
    });

    nannyCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAupairContainer.css('display', 'block');
        }else if(aupairCB.prop('checked') === false && grannyAupairCB.prop('checked') === false){
            aupairNannyGrannyAupairContainer.css('display', 'none');
        }
    });

    grannyAupairCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAupairContainer.css('display', 'block');
        } else if(aupairCB.prop('checked') === false && nannyCB.prop('checked') === false){
            aupairNannyGrannyAupairContainer.css('display', 'none');
        }
    });

    caregiverForElderlyCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            careGiverForElderlyLiveInHelpContainer.css('display', 'block');
        } else if(liveInHelpCB.prop('checked') === false){
            careGiverForElderlyLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInHelpCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            careGiverForElderlyLiveInHelpContainer.css('display', 'block');
        } else if(caregiverForElderlyCB.prop('checked') === false){
            careGiverForElderlyLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInTutorCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            tutorWhoCanTeachSubjectContainer.css('display', 'block');
            tutorWhoCanDoActivitiesContainer.css('display', 'block');
            studendAgeGroupTutorWouldTeachContainer.css('display', 'block');
        } 
        else {
            tutorWhoCanTeachSubjectContainer.css('display', 'none');
            tutorWhoCanDoActivitiesContainer.css('display', 'none');
            studendAgeGroupTutorWouldTeachContainer.css('display', 'none');
        }
    });
});