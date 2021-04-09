export function weAreLookingForCb() {
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
        const dynamicLabel = document.querySelector(".dynamic-label");
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
        const weNeedAssistance   = document.querySelector(".we-need-assistance-support-in");
        const wouldYouTake       = document.querySelector(".applicant-would-take-care");
        const liveInHelpCheckBox = document.querySelector("#live-in-help") ;
        alterCheckBox(document.querySelector("#caregiver-for-elderly"));
        if(isCheck === true) {
            weNeedAssistance.style.display   = "block";
            wouldYouTake.style.display = "block";
        } else if(liveInHelpCheckBox.checked === false) {
            weNeedAssistance.style.display   = "none";
            wouldYouTake.style.display = "none";
        }
    });
 
    const liveInHelp = document.querySelector("#live-in-help").addEventListener("change", (e) => {
        const isCheck                     = e.target.checked;
        const weNeedAssistance            = document.querySelector(".we-need-assistance-support-in");
        const wouldYouTake                = document.querySelector(".applicant-would-take-care");
        const careGiverForElderlyCheckBox = document.querySelector("#caregiver-for-elderly") ;
        alterCheckBox(document.querySelector("#live-in-help"));
        if(isCheck === true) {
            weNeedAssistance.style.display   = "block";
            wouldYouTake.style.display = "block";
        } else if(careGiverForElderlyCheckBox.checked === false) {
            weNeedAssistance.style.display   = "none";
            wouldYouTake.style.display = "none";
        }
    });
        
    const liveInTutor = document.querySelector("#live-in-tutor").addEventListener("change", (e)=> {
        const isCheck                  = e.target.checked;
        const preferredSubjects        = document.querySelector(".tutor-who-can-teach");
        const activitiesWithKids       = document.querySelector(".tutor-who-can-do-activities");
        const preferredStudentAgeGroup = document.querySelector(".student-age-group-tutor-would-teach");
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
        const preferredSubjects        = document.querySelector(".tutor-who-can-teach");
        const preferredStudentAgeGroup = document.querySelector(".student-age-group-tutor-would-teach");
        const pricePerHour             = document.querySelector(".price-per-hour");
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
        const activitiesWithKids       = document.querySelector(".tutor-who-can-do-activities");
        const preferredStudentAgeGroup = document.querySelector(".student-age-group-tutor-would-teach");
        const pricePerHour             = document.querySelector(".price-per-hour");
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
    
    return{
        aupair: aupair,
        nanny: nanny,
        grannyAupair: grannyAupair,
        careGiverForElderly: careGiverForElderly,
        liveInHelp: liveInHelp,
        liveInTutor: liveInTutor,
        onlineTutor: onlineTutor,
        virtualChildcare: virtualChildcare
    };
};