 export function employeeAccount(userData, countries){
    const columnTwo = $('.employee-account-container .column-two');
    const date      = new Date();
    const age       = date.getFullYear() - userData['date_of_birth_year'];
    const jobs      = [];
    function selectedJobs(){
        if(userData['looking_for_job_as_aupair'] === "1"){
            jobs.push('Aupair');
        }
        if(userData['looking_for_job_as_nanny'] === "1"){
            jobs.push('Nanny');
        }
        if(userData['looking_for_job_as_granny_aupair'] === "1"){
            jobs.push('Granny aupair')
        }
        if(userData['looking_for_job_as_caregiver_for_elderly'] === "1"){
            jobs.push('Caregiver for elderly');
        }
        if(userData['looking_for_job_as_live_in_help'] === "1"){
            jobs.push('Live in help');
        }
        if(userData['looking_for_job_as_live_in_tutor'] === "1"){
            jobs.push('Live in tutor');
        }
        if(userData['looking_for_job_as_online_tutor'] === "1"){
            jobs.push('Online tutor');
        }
        if(userData['looking_for_job_as_virtual_childcare'] === "1"){
            jobs.push('Virtual Childcare');
        }
    }
    function getJob(){
       selectedJobs();
       return jobs.length === 2 ? `${jobs[0]} & ${jobs[1]}`:jobs[0];
    }
    function getPreferredCountries(){
        let selectedCountries = '';
        if(countries.length === 1){
            selectedCountries += countries[0].country;
        } else {
           for (let i = 0; i < countries.length; i++) {
                //next value is last indexx
                if(i+1 === countries.length-1){
                    selectedCountries += `${countries[i].country} & `;
                } else if(i+1 === countries.length) {//last index
                    selectedCountries += countries[i].country;
                } else {
                    selectedCountries += `${countries[i].country}, `
                }
            }
        }
        return selectedCountries;
    }
    columnTwo.append(`<h3>${userData['firstname']} ${userData['lastname']} living in ${userData['country']}</h3>`);
    columnTwo.append(`<h5>
                        ${userData['firstname']} ${userData['lastname']}(${age}),
                        ${userData['nationality']} living in ${userData['country']} looking for ${getJob()} job in ${getPreferredCountries()}
                        for ${userData['duration_of_stay']}
                     </h5>`);
   
}