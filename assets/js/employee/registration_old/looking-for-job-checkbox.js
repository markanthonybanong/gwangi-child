export function lookingForJobCheckBox() {
    const jobLabels = [];
    let isCheckBoxRecentlyDisabled = false;
    function disableUncheckBoxIfMax() {
        const checkCheckBox = document.querySelectorAll(".check");
        if(checkCheckBox.length >= 2) {
            const uncheckCheckBox = document.querySelectorAll(".un-check");
            for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = true;
            }
            isCheckBoxRecentlyDisabled = true;
        }
    }
    function enableUncheckBox() {
        if(isCheckBoxRecentlyDisabled) {
            const uncheckCheckBox = document.querySelectorAll(".un-check");
            for(let i = 0; i < uncheckCheckBox.length; i++) {
            uncheckCheckBox[i].disabled = false;
            }
            isCheckBoxRecentlyDisabled = false;
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
    function setDynamicLabel(label, isCheck) {
        const dynamicLabel = document.querySelector(".r-e-dynamic-label");
      
        if(isCheck) {
            jobLabels.push(label);
         
            if(jobLabels.length === 1) {
            dynamicLabel.innerHTML     = jobLabels[0];
            dynamicLabel.style.display = "block";
            } else {
            dynamicLabel.innerHTML = `${jobLabels[0]} & ${jobLabels[1]}`;
            }
        } else {
            for (let i = 0; i < jobLabels.length; i++) {
            if(label === jobLabels[i]) {
                jobLabels.splice(i, 1);
            }
            }
            if(jobLabels.length === 1) {
            dynamicLabel.innerHTML = jobLabels[0];
            } else {
            dynamicLabel.style.display = "none";
            }
        }
    }

    const aupair = document.querySelector("#aupair").addEventListener("change", (e) => {
        const isCheck                       = e.target.checked;
        const aupairNannyGrannyAupairFields = document.querySelector(".aupair-nanny-granny-aupair");
        const nannyCheckBox                 = document.querySelector("#nanny");
        const grannyAupairCheckBox          = document.querySelector("#granny-aupair");
        alterCheckBox(document.querySelector("#aupair"));
        if(isCheck === true) {
            aupairNannyGrannyAupairFields.style.display = "block";
        } else if (nannyCheckBox.checked === false && grannyAupairCheckBox.checked === false ) {
            aupairNannyGrannyAupairFields.style.display = "none";
        }
    });
    
    const nanny = document.querySelector("#nanny").addEventListener("change", (e) => {
        const isCheck                       = e.target.checked;
        const aupairNannyGrannyAupairFields = document.querySelector(".aupair-nanny-granny-aupair");
        const aupairCheckBox                = document.querySelector("#aupair");
        const grannyAupairCheckBox          = document.querySelector("#granny-aupair");
        alterCheckBox( document.querySelector("#nanny"));
        if(isCheck === true) {
            aupairNannyGrannyAupairFields.style.display = "block";
        } else if(aupairCheckBox.checked === false && grannyAupairCheckBox.checked === false ) {
            aupairNannyGrannyAupairFields.style.display = "none";
        }
    });

    const grannyAupair = document.querySelector("#granny-aupair").addEventListener("change", (e) =>{
        const isCheck                       = e.target.checked;
        const aupairNannyGrannyAupairFields = document.querySelector(".aupair-nanny-granny-aupair");
        const aupairCheckBox                = document.querySelector("#aupair");
        const nannyCheckBox                 = document.querySelector("#nanny");
        
        alterCheckBox(document.querySelector("#granny-aupair"));
        if(isCheck === true) {
            aupairNannyGrannyAupairFields.style.display = "block";
        } else if(aupairCheckBox.checked === false && nannyCheckBox.checked === false ) {
            aupairNannyGrannyAupairFields.style.display = "none";
        }
    });

    const careGiverForElderly = document.querySelector("#caregiver-for-elderly").addEventListener("change", (e) => {
        const isCheck            = e.target.checked;
        const iCanAssist         = document.querySelector(".r-e-i-can-assist");
        const wouldYouTake       = document.querySelector(".r-e-would-you-take");
        const liveInHelpCheckBox = document.querySelector("#live-in-help") ;
        alterCheckBox(document.querySelector("#caregiver-for-elderly"));
        if(isCheck === true) {
            iCanAssist.style.display   = "block";
            wouldYouTake.style.display = "block";
        } else if(liveInHelpCheckBox.checked === false) {
            iCanAssist.style.display   = "none";
            wouldYouTake.style.display = "none";
        }
    });
 
    const liveInHelp = document.querySelector("#live-in-help").addEventListener("change", (e) => {
        const isCheck                     = e.target.checked;
        const iCanAssist                  = document.querySelector(".r-e-i-can-assist");
        const wouldYouTake                = document.querySelector(".r-e-would-you-take");
        const careGiverForElderlyCheckBox = document.querySelector("#caregiver-for-elderly") ;
        alterCheckBox(document.querySelector("#live-in-help"));
        if(isCheck === true) {
            iCanAssist.style.display   = "block";
            wouldYouTake.style.display = "block";
        } else if(careGiverForElderlyCheckBox.checked === false) {
            iCanAssist.style.display   = "none";
            wouldYouTake.style.display = "none";
        }
    });
        
    const liveInTutor = document.querySelector("#live-in-tutor").addEventListener("change", (e)=> {
        const isCheck                  = e.target.checked;
        const preferredSubjects        = document.querySelector(".r-e-preferred-subjects");
        const activitiesWithKids       = document.querySelector(".r-e-activities-with-kids");
        const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
        const onlineTutorCheckBox      = document.querySelector("#online-tutor");
        const virtualChildCare         = document.querySelector("#virtual-childcare")
        alterCheckBox(document.querySelector("#live-in-tutor"));
        setDynamicLabel('Live in Tutor', isCheck);
        if(isCheck === true) {
            preferredSubjects.style.display        = "block";
            activitiesWithKids.style.display       = "block";
            preferredStudentAgeGroup.style.display = "block";
        } else {
            if(onlineTutorCheckBox.checked === false) {
            preferredSubjects.style.display = "none";
            } 
            if(virtualChildCare.checked === false) {
            activitiesWithKids.style.display = "none";
            }
            if(onlineTutorCheckBox.checked === false && virtualChildCare.checked === false) {
            preferredStudentAgeGroup.style.display = "none";
            }
        }
    });
  
    const onlineTutor = document.querySelector("#online-tutor").addEventListener("change", (e) => {
        const isCheck                  = e.target.checked;
        const preferredSubjects        = document.querySelector(".r-e-preferred-subjects");
        const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
        const pricePerHour             = document.querySelector(".r-e-price-per-hour");
        const liveInTutorCheckBox      = document.querySelector("#live-in-tutor");
        const virtualChildCareCheckBox = document.querySelector("#virtual-childcare");
        alterCheckBox(document.querySelector("#online-tutor"));
        setDynamicLabel('Online Tutor', isCheck);
        if(isCheck === true) {
            preferredSubjects.style.display        = "block";
            preferredStudentAgeGroup.style.display = "block";
            pricePerHour.style.display             = "block";
        } else {
            if(liveInTutorCheckBox.checked === false) {
            preferredSubjects.style.display = "none";
            }
            if(liveInTutorCheckBox.checked === false && virtualChildCareCheckBox.checked === false ) {
            preferredStudentAgeGroup.style.display = "none";
            }
            if(virtualChildCareCheckBox.checked === false) {
            pricePerHour.style.display = "none";
            }
        }
    });
    
    const virtualChildcare = document.querySelector("#virtual-childcare").addEventListener("change", (e)=> {
        const isCheck                  = e.target.checked;
        const activitiesWithKids       = document.querySelector(".r-e-activities-with-kids");
        const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
        const pricePerHour             = document.querySelector(".r-e-price-per-hour");
        const liveInTutorCheckBox      = document.querySelector("#live-in-tutor");
        const onlineTutorCheckBox      = document.querySelector("#online-tutor");
        alterCheckBox(document.querySelector("#virtual-childcare"));
        setDynamicLabel('Virtual Childcare', isCheck);
        if(isCheck === true) {
            activitiesWithKids.style.display       = "block";
            preferredStudentAgeGroup.style.display = "block";
            pricePerHour.style.display             = "block";
        } else {
            if(liveInTutorCheckBox.checked === false) {
            activitiesWithKids.style.display = "none";
            }
            if(liveInTutorCheckBox.checked === false && onlineTutorCheckBox.checked === false) {
            preferredStudentAgeGroup.style.display = "none";
            }
            if(onlineTutorCheckBox.checked === false){
            pricePerHour.style.display = "none";
            }
        }
    });
    
    function showHideFields(checkBoxValue) {
        if(checkBoxValue === 'aupair' || checkBoxValue === 'nanny' || checkBoxValue === 'granny aupair') {
            document.querySelector(".aupair-nanny-granny-aupair").style.display = "block";
        }
        if(checkBoxValue === 'caregiver for elderly' || checkBoxValue === 'live in help') {
            document.querySelector(".r-e-i-can-assist").style.display   = "block";
            document.querySelector(".r-e-would-you-take").style.display = "block";
        }
        if(checkBoxValue === 'live in tutor') {
            document.querySelector(".r-e-dynamic-label").style.display               = "block";
            document.querySelector(".r-e-preferred-subjects").style.display          = "block";
            document.querySelector(".r-e-activities-with-kids").style.display        = "block";
            document.querySelector(".r-e-preferred-student-age-group").style.display = "block";
        }
        if(checkBoxValue === 'online tutor') {
            document.querySelector(".r-e-dynamic-label").style.display               = "block";
            document.querySelector(".r-e-preferred-subjects").style.display          = "block";
            document.querySelector(".r-e-preferred-student-age-group").style.display = "block";
            document.querySelector(".r-e-price-per-hour").style.display              = "block";
        }
        if(checkBoxValue === 'virtual childcare') {
            document.querySelector(".r-e-dynamic-label").style.display               = "block";
            document.querySelector(".r-e-activities-with-kids").style.display        = "block";
            document.querySelector(".r-e-preferred-student-age-group").style.display = "block";
            document.querySelector(".r-e-price-per-hour").style.display              = "block";
        }
    }
    const startUp = function () {
        const checkBoxes = document.querySelectorAll(".looking-for-job input[type='checkbox']:checked");
        if(checkBoxes.length) {
            for (let i = 0; i < checkBoxes.length; i++) {
                const checkBox      = checkBoxes[i];  
                checkBox.className  = "check";
                const checkBoxValue = checkBox.value;
                showHideFields(checkBoxValue);
            }
            disableUncheckBoxIfMax();
        }
    }
    return{
        aupair: aupair,
        nanny: nanny,
        grannyAupair: grannyAupair,
        careGiverForElderly: careGiverForElderly,
        liveInHelp: liveInHelp,
        liveInTutor: liveInTutor,
        onlineTutor: onlineTutor,
        virtualChildcare: virtualChildcare,
        startUp: startUp
    };
};