export function jobInformation(userData){
    function setLOVOpacityBackground(classes){
        let addBackgroundClass = true;
        for (let i = 0; i < classes.length; i++) {
            if (addBackgroundClass) {
                $(classes[i]).addClass('opacity-background');
                addBackgroundClass = false;
            } else {
                addBackgroundClass = true;
            }
        }
    }
    
    if(
        userData['looking_for_job_as_live_in_tutor'] === "1" || 
        userData['looking_for_job_as_online_tutor'] === "1" || 
        userData['looking_for_job_as_virtual_childcare'] === "1"
    ){
        const liveInTutor                       = userData['looking_for_job_as_live_in_tutor'];
        const onlineTutor                       = userData['looking_for_job_as_online_tutor'];
        const virtualChildCare                  = userData['looking_for_job_as_virtual_childcare'];
        //selected 2 in LOV
        if(
            liveInTutor === "1" && onlineTutor === "1" ||
            liveInTutor === "1" && virtualChildCare === "1" || 
            onlineTutor === "1" && virtualChildCare === "1"
        ){
            const classes = [
                '.preferred-subjects-container',
                '.activities-with-kids-container',
                '.preferred-student-age-group-container',
                '.price-per-hour-container'
            ];
            setLOVOpacityBackground(classes);
        }
        //selected one
        if(liveInTutor === "1" && onlineTutor === "0" && virtualChildCare === "0"){
            const classes = [
                '.preferred-subjects-container',
                '.activities-with-kids-container',
                '.preferred-student-age-group-container',
            ];
            setLOVOpacityBackground(classes);
        }
        if(liveInTutor === "0" && onlineTutor === "1" && virtualChildCare === "0"){
            const classes = [
                '.preferred-subjects-container',
                '.preferred-student-age-group-container',
                '.price-per-hour-container'
            ];
            setLOVOpacityBackground(classes);
        }
        if(liveInTutor === "0" && onlineTutor === "0" && virtualChildCare === "1"){
            const classes = [
                '.activities-with-kids-container',
                '.preferred-student-age-group-container',
                '.price-per-hour-container'
            ];
            setLOVOpacityBackground(classes);
        }
    }
}