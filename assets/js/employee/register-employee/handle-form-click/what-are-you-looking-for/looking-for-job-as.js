export default $(function(){
    const jobLabels                              = [];
    let onFreshLoad                              = true;
    //containers
    const dynamicLabel                           = $('.r-e-dynamic-label');
    const aupairNannyGrannyAupairContainer       = $('.aupair-nanny-granny-aupair');
    const caregiverForElderlyLiveInHelpContainer = $('.caregiverforelderly-liveinhelp-fields');
    const preferredSubjectsContainer             = $('.r-e-preferred-subjects');
    const activitiesWithKidsContainer            = $('.r-e-activities-with-kids');
    const preferredStudentAgeGroupContainer      = $('.r-e-preferred-student-age-group');
    const pricePerHourContainer                  = $('.r-e-price-per-hour');
    //checkboxes
    const aupairCB                               = $('.looking-for-job #aupair');
    const nannyCB                                = $('.looking-for-job #nanny');
    const grannyAupairCB                         = $('.looking-for-job #granny-aupair');
    const caregiverForElderlyCB                  = $('.looking-for-job #caregiver-for-elderly');
    const liveInHelpCB                           = $('.looking-for-job #live-in-help');
    const liveInTutorCB                          = $('.looking-for-job #live-in-tutor');
    const onlineTutorCB                          = $('.looking-for-job #online-tutor');
    const virtualChildcareCB                     = $('.looking-for-job #virtual-childcare');

  //split and push job label to joblabels array to handle it properly
    function splitJobLabelIfItIsFreshLoad(){
        const foundLabel =  $.trim(dynamicLabel.text());
        const labels     = foundLabel.split('&');
        labels.forEach(label => {
            jobLabels.push($.trim(label));
        });
        dynamicLabel.css('display', 'block');
    }
    function setDynamicLabel(label, isCheck) {
        onFreshLoad && $.trim(dynamicLabel.text()).length ? splitJobLabelIfItIsFreshLoad() : null;
        onFreshLoad = false;
        if(isCheck) {
            jobLabels.push(label);
            if(jobLabels.length === 1) {
                dynamicLabel.text(jobLabels[0]);
                dynamicLabel.css('display', 'block');
            } else {
                dynamicLabel.text(`${jobLabels[0]} & ${jobLabels[1]}`);
            }
        } else {
            for (let i = 0; i < jobLabels.length; i++) {
                if(label === jobLabels[i]) {
                    //i = index to remove, 1 = number of element to remove
                    jobLabels.splice(i, 1);
                }
            }
            if(jobLabels.length === 1) {
                dynamicLabel.text(jobLabels[0]);
            } else {
                dynamicLabel.css('display','none');
            }
        }
    }
    function disableUncheckBoxIfMax(){
        const checkCheckBox = $('.looking-for-job .check');
        if(checkCheckBox.length >= 2) {
            const uncheckCheckBox = $('.looking-for-job .un-check');
            for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = true;
            }
        }
    }
    function enableUncheckBox() {
        const uncheckCheckBox = $('.looking-for-job .un-check');
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
            caregiverForElderlyLiveInHelpContainer.css('display', 'block');
        } else if(liveInHelpCB.prop('checked') === false){
            caregiverForElderlyLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInHelpCB.change(function(){
        alterCheckBox(this);
        if(this.checked){
            caregiverForElderlyLiveInHelpContainer.css('display', 'block');
        } else if(caregiverForElderlyCB.prop('checked') === false){
            caregiverForElderlyLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInTutorCB.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Live in Tutor', this.checked);
        if(this.checked){
            preferredSubjectsContainer.css('display', 'block');
            activitiesWithKidsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
        } 
        else {
            if(onlineTutorCB.prop('checked') === false){
                preferredSubjectsContainer.css('display', 'none');
            }
            if(virtualChildcareCB.prop('checked') === false){
                activitiesWithKidsContainer.css('display', 'none');
            }
            if(onlineTutorCB.prop('checked') === false && virtualChildcareCB.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
        }
    });

    onlineTutorCB.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Online Tutor', this.checked);
        if(this.checked) {
            preferredSubjectsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
            pricePerHourContainer.css('display', 'block')
        } else {
            if(liveInTutorCB.prop('checked') === false){
                preferredSubjectsContainer.css('display', 'none');
            }
            if(liveInTutorCB.prop('checked') === false && virtualChildcareCB.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
            if(virtualChildcareCB.prop('checked') === false){
                pricePerHourContainer.css('display', 'none')
            }
        }
    });

    virtualChildcareCB.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Virtual Childcare', this.checked);
        if(this.checked){
            activitiesWithKidsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
            pricePerHourContainer.css('display', 'block');
        } else {
            if(liveInTutorCB.prop('checked') === false){
                activitiesWithKidsContainer.css('display', 'none');
            }
            if(liveInTutorCB.prop('checked') === false && onlineTutorCB.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
            if(onlineTutorCB.prop('checked') === false){
                pricePerHourContainer.css('display', 'none');
            }
        }
    });
});