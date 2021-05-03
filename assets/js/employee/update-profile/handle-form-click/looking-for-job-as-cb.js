export default $(function(){ // DOM ready
    const jobLabels                                 = [];
    let onFreshLoad                                 = true;
    //containers
    const dynamicLabel                               = $('.l-o-v-dynamic-label');
    const aupairNannyGrannyAuPairContainer          = $('.aupair-nanny-granny-aupair-container');
    const careGiverForElderlyAndLiveInHelpContainer = $('.caregiver-for-elderly-and-live-in-help-container');
    const preferredSubjectsContainer                = $('.preferred-subjects-container');
    const activitiesWithKidsContainer               = $('.activities-with-kids-container');
    const preferredStudentAgeGroupContainer         = $('.preferred-student-age-group-container');
    const pricePerHourContainer                     = $('.price-per-hour-container');
    //checkboxes
    const aupairCheckBox                            = $('#aupair');
    const nannyCheckBox                             = $('#nanny');
    const grannyAupairCheckBox                      = $('#granny-aupair');
    const careGiverForElderlyCheckBox               = $('#caregiver-for-elderly');
    const liveInHelpCheckBox                        = $('#live-in-help');
    const liveInTutorCheckBox                       = $('#live-in-tutor');
    const onlineTutorCheckBox                       = $('#online-tutor');
    const virtualChildCareCheckBox                  = $('#virtual-childcare');
    function disableUncheckBoxIfMax(){
        const checkCheckBox = $('.looking-for-a-job-as-container .check');
        if(checkCheckBox.length >= 2) {
            const uncheckCheckBox = $('.looking-for-a-job-as-container .un-check');
            for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = true;
            }
        }
    }
    function enableUncheckBox() {
        const uncheckCheckBox = $('.looking-for-a-job-as-container .un-check');
        for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = false;
        }
    }
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
    function alterCheckBox(checkbox) {
        if(checkbox.checked === true) {
            checkbox.className = "check";
            disableUncheckBoxIfMax();
        } else {
            checkbox.className = "un-check";
            enableUncheckBox();
        }
    }

    aupairCheckBox.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAuPairContainer.css('display', 'block');
        } else if(nannyCheckBox.prop('checked') === false && grannyAupairCheckBox.prop('checked') === false){
            aupairNannyGrannyAuPairContainer.css('display', 'none');
        }
    });

    nannyCheckBox.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAuPairContainer.css('display', 'block');
        } else if(aupairCheckBox.prop('checked') === false && grannyAupairCheckBox.prop('checked') === false){
            aupairNannyGrannyAuPairContainer.css('display', 'none');
        }
    });

    grannyAupairCheckBox.change(function(){
        alterCheckBox(this);
        if(this.checked){
            aupairNannyGrannyAuPairContainer.css('display', 'block');
        } else if(aupairCheckBox.prop('checked') === false && nannyCheckBox.prop('checked') === false){
            aupairNannyGrannyAuPairContainer.css('display', 'none');
        } 
    });

    careGiverForElderlyCheckBox.change(function(){
        alterCheckBox(this);
        if(this.checked){
            careGiverForElderlyAndLiveInHelpContainer.css('display', 'block');
        } else if(liveInHelpCheckBox.prop('checked') === false){
            careGiverForElderlyAndLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInHelpCheckBox.change(function(){
        alterCheckBox(this);
        if(this.checked){
            careGiverForElderlyAndLiveInHelpContainer.css('display', 'block');
        } else if(careGiverForElderlyCheckBox.prop('checked') === false) {
            careGiverForElderlyAndLiveInHelpContainer.css('display', 'none');
        }
    });

    liveInTutorCheckBox.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Live in Tutor', this.checked);
        if(this.checked){
            preferredSubjectsContainer.css('display', 'block');
            activitiesWithKidsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
        } 
        else {
            if(onlineTutorCheckBox.prop('checked') === false){
                preferredSubjectsContainer.css('display', 'none');
            }
            if(virtualChildCareCheckBox.prop('checked') === false){
                activitiesWithKidsContainer.css('display', 'none');
            }
            if(onlineTutorCheckBox.prop('checked') === false && virtualChildCareCheckBox.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
        }
    });

    onlineTutorCheckBox.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Online Tutor', this.checked);
        if(this.checked) {
            preferredSubjectsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
            pricePerHourContainer.css('display', 'block')
        } else {
            if(liveInTutorCheckBox.prop('checked') === false){
                preferredSubjectsContainer.css('display', 'none');
            }
            if(liveInTutorCheckBox.prop('checked') === false && virtualChildCareCheckBox.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
            if(virtualChildCareCheckBox.prop('checked') === false){
                pricePerHourContainer.css('display', 'none')
            }
        }
    });

    virtualChildCareCheckBox.change(function(){
        alterCheckBox(this);
        setDynamicLabel('Virtual Childcare', this.checked);
        if(this.checked){
            activitiesWithKidsContainer.css('display', 'block');
            preferredStudentAgeGroupContainer.css('display', 'block');
            pricePerHourContainer.css('display', 'block');
        } else {
            if(liveInTutorCheckBox.prop('checked') === false){
                activitiesWithKidsContainer.css('display', 'none');
            }
            if(liveInTutorCheckBox.prop('checked') === false && onlineTutorCheckBox.prop('checked') === false){
                preferredStudentAgeGroupContainer.css('display', 'none');
            }
            if(onlineTutorCheckBox.prop('checked') === false){
                pricePerHourContainer.css('display', 'none');
            }
        }
    });
});
 


