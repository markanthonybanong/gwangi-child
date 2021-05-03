export function lookingForAJob(userData){
    function disableUncheckBoxIfMaxOnLoad(){
        const checkCheckBox = $('.looking-for-a-job-as-container .check');
        if(checkCheckBox.length >= 2) {
            $('.looking-for-a-job-as-container .un-check').each(function (){
                this.disabled = true;
            });
        }
    }

    $('.looking-for-a-job-as-container').find('input[type="checkbox"]').each(function(){
        if( userData['looking_for_job_as_aupair'] == '1' && this.name === 'aupair'){
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_nanny'] == '1' && this.name === 'nanny') {
            this.checked   = true;
            this.className = 'check';
        }else if(userData['looking_for_job_as_granny_aupair'] == '1' && this.name === 'grannyAupair') {
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_caregiver_for_elderly'] == '1' && this.name === 'caregiverForElderly') {
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_live_in_help'] == '1' && this.name === 'liveInHelp'){
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_live_in_tutor'] == '1' && this.name === 'liveInTutor'){
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_online_tutor'] == '1' && this.name === 'onlineTutor'){
            this.checked   = true;
            this.className = 'check';
        } else if(userData['looking_for_job_as_virtual_childcare'] == '1' && this.name === 'virtualChildcare') {
            this.checked   = true;
            this.className = 'check';
        }
    });

    disableUncheckBoxIfMaxOnLoad();

}