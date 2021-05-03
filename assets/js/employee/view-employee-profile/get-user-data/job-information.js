import { convertArrayToSingleString } from "../../../../utilities/js/convert-array-to-single-string";

export function jobInformation(userData, selectedCountries){
    const countries = [];
    const container = $('.job-information-container');
    for (let i = 0; i < selectedCountries.length; i++) {
        countries.push(selectedCountries[i].country);        
    }
    function getPreferredCountries(){
        let selectedCountries = '';
        if(countries.length === 1){
            selectedCountries = countries[0].country;
        } else {
            selectedCountries = convertArrayToSingleString(countries);
        }
        return selectedCountries;
    }
    function getPreferredArea(){
        const areas = [];
        if(userData['preferred_area_all'] === "1"){
            areas.push('Small City');
            areas.push('Big City');
            areas.push('Suburd');
            areas.push('Countryside');
            areas.push('Town');
            areas.push('Village');
            areas.push('Sea Side');
        } else {
            if(userData['preferred_area_small_city'] === "1"){
                areas.push('Small City');
            }
            if(userData['preferred_area_big_city'] === "1"){
                areas.push('Big City');
            }
            if(userData['preferred_area_suburd'] === "1"){
                areas.push('Suburd');
            }
            if(userData['preferred_area_countryside'] === "1"){
                areas.push('Countryside');
            }
            if(userData['preferred_area_town'] === "1"){
                areas.push('Town');
            }
            if(userData['preferred_area_village'] === "1"){
                areas.push('Village');
            }
            if(userData['preferred_area_sea_side'] === "1"){
                areas.push('Sea Side');
            }
        }
        return convertArrayToSingleString(areas);
    }    
    function selectedTakeCareOfChildrenFromAge(){
            const ages = [];
            if (userData['ang_takecare_children_age_zero_to_one'] === "1"){
                ages.push('0 - 1 year old');
            }
            if(userData['ang_takecare_children_age_one_to_five'] === "1"){
                ages.push('1 - 5 years old');
            }
            if(userData['ang_takecare_children_age_six_to_ten'] === "1"){
                ages.push('6 - 10 years old');
            }
            if(userData['ang_takecare_children_age_eleven_to_fourteen'] === "1"){
                ages.push('11 - 14 years old');
            }
            if(userData['ang_takecare_children_age_fifteen_plus'] === "1"){
                ages.push('15+ years old');
            }
            return convertArrayToSingleString(ages);
    }
    function selectedAssistAndProvideSupportToElderlyIn(){
            const services = [];
            if(userData['cl_assist_provide_support_in_walks_outings'] === "1"){
                services.push('Walks & outings');
            }if(userData['cl_assist_provide_support_in_mobility_support'] ==="1"){
                services.push('Mobility support');
            }if(userData['cl_assist_provide_support_in_driving'] === "1"){
                services.push('Driving');
            }if(userData['cl_assist_provide_support_in_errands_shopping'] === "1"){
                services.push('Errands/Shopping');
            }if(userData['cl_assist_provide_support_in_cleaning_laundry'] === "1"){
                services.push('Cleaning & Laundry');
            }if(userData['cl_assist_provide_support_in_light_domestic_work'] === "1"){
                services.push('Light domestic work');
            }if(userData['cl_assist_provide_support_in_cooking_meals'] === "1"){
                services.push('Cooking meals');
            }if(userData['cl_assist_provide_support_in_washing_dressing'] === "1"){
                services.push('Washing & Dressing');
            }if(userData['cl_assist_provide_support_in_companionship_conversation'] === "1"){
                services.push('Companionship & Converstion');
            }
            return convertArrayToSingleString(services);
    }
    function selectedPreferredSubjects(){
            const subjects = [];
            if(userData['lo_preffered_subject_mathematics'] === "1"){
                subjects.push('Mathematics');
            }
            if(userData['lo_preffered_subject_physics'] === "1"){
                subjects.push('Physics');
            }
            if(userData['lo_preffered_subject_chemistry'] === "1"){
                subjects.push('Chemistry');
            }
            if(userData['lo_preffered_subject_biology'] === "1"){
                subjects.push('Biology');
            }
            if(userData['lo_preffered_subject_english'] === "1"){
                subjects.push('English');
            }
            if(userData['lo_preffered_subject_german'] === "1"){
                subjects.push('German');
            }
            if(userData['lo_preffered_subject_french'] === "1"){
                subjects.push('French');
            }
            if(userData['lo_preffered_subject_spanish'] === "1"){
                subjects.push('Spanish');
            }
            if(userData['lo_preffered_subject_italian'] === "1"){
                subjects.push('Italian');
            }
            if(userData['lo_preffered_subject_music'] === "1"){
                subjects.push('Music');
            }
            if(userData['lo_preffered_subject_sport'] === "1"){
                subjects.push('Sport');
            }
            return convertArrayToSingleString(subjects);
    }
    function selectedActivitiesWIthKids(){
            const activities = [];
            if(userData['lv_activity_with_kids_homework_assistance'] === "1"){
                activities.push('Homework Assistance');
            }
            if(userData['lv_activity_with_kids_book_reading'] === "1"){
                activities.push('Book Reading');
            }
            if(userData['lv_activity_with_kids_art_craft'] === "1"){
                activities.push('Art & Craft');
            }
            if(userData['lv_activity_with_kids_drawing_cutting'] === "1"){
                activities.push('Drawing & Cutting');
            }
            if(userData['lv_activity_with_kids_numbers_counting'] === "1"){
                activities.push('Numbers & Counting');
            }
            if(userData['lv_activity_with_kids_letters_sounds'] === "1"){
                activities.push('Letters & Sounds');
            }
            if(userData['lv_activity_with_kids_songs_poetry'] === "1"){
                activities.push('Songs & Poetry');
            }
            if(userData['lv_activity_with_kids_mind_games_activity'] === "1"){
                activities.push('Mind Games & Activity');
            }
            return convertArrayToSingleString(activities);
    }
    function selectedPreferredStudentAgeGroup(){
            const ageGroups = [];
            if(userData['lov_preferred_student_age_group_infants'] === "1"){
                ageGroups.push('Infants(0-1)');
            }
            if(userData['lov_preferred_student_age_group_toddllers'] === "1"){
                ageGroups.push('Toddlers(2-3)');
            }
            if(userData['lov_preferred_student_age_group_preschoolers'] === "1"){
                ageGroups.push('Preschoolers(4-5)');
            }
            if(userData['lov_preferred_student_age_group_primary_school'] === "1"){
                ageGroups.push('Primary School(6-12)');
            }
            if(userData['lov_preferred_student_age_group_teenagers'] === "1"){
                ageGroups.push('Teenagers(13-17)');
            }
            if(userData['lov_preferred_student_age_group_young_adults'] === "1"){
                ageGroups.push('Young Adults(18-30)');
            }
            if(userData['lov_preferred_student_age_group_adults'] === "1"){
                ageGroups.push('Adults(31-60)');
            }
            if(userData['lov_preferred_student_age_group_seniors'] === "1"){
                ageGroups.push('Seniors(60+)');
            }
            return convertArrayToSingleString(ageGroups);
    }
    function setLOVjobTitle(){
        const jobs = [];
        if(userData['looking_for_job_as_live_in_tutor'] === "1"){
            jobs.push('Live in tutor');
        }
        if(userData['looking_for_job_as_online_tutor'] === "1"){
            jobs.push('Online tutor');
        }
        if(userData['looking_for_job_as_virtual_childcare'] === "1"){
            jobs.push('Virtual Childcare');
        }
        const jobTitleContainer = `<div class="job-title-container">
                                        <h5 class="list-border">${convertArrayToSingleString(jobs)}</h5>
                                    </div>`;
        container.append(jobTitleContainer)
    }
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
    if(userData['looking_for_job_as_aupair'] === "1" || userData['looking_for_job_as_nanny'] === "1" || userData['looking_for_job_as_granny_aupair'] === "1"){
        const jobs = [];
        if(userData['looking_for_job_as_aupair'] === "1"){
            jobs.push('Aupair');
        }
        if(userData['looking_for_job_as_nanny'] === "1"){
            jobs.push('Nanny');
        }
        if(userData['looking_for_job_as_granny_aupair'] === "1"){
            jobs.push('Granny auapair')
        }
        const jobTitleContainer                                      =  `<div class="job-title-container">
                                                                          <h5 class="list-border">${convertArrayToSingleString(jobs)}</h5>
                                                                        </div>`;
        const iWillTakeCareOfChildrenFromAgeContainer                = `<div class="i-will-take-care-of-children-from-age-container opacity-background">
                                                                          <h5>Take care of children from age</h5>
                                                                          <p>${selectedTakeCareOfChildrenFromAge()}</p>
                                                                        </div>`;
        const hoursOfChildCareExperienceInThePast24MonthsContainer   = `<div class="hours-of-child-care-experience-in-the-past-24-months-container">
                                                                         <h5>Hours of child care experience in the past 24 months</h5>
                                                                         <p>${userData['ang_hours_childcare_experience']}</p>
                                                                       </div>`;
        const howManyChildrenPeopleWouldYouLikeToTakeCareOfContainer = `<div class="how-many-children-people-would-you-like-to-take-care-of-container opacity-background">
                                                                         <h5>Number of children/people to be taken care of</h5>
                                                                         <p>${userData['ang_number_of_people_children_to_take_care']}</p>
                                                                       </div>`;
        const wouldYouWorkForASingleParentContainer                  = `<div class="would-you-work-for-a-single-parent-container">
                                                                         <h5>Work for a single parent</h5>
                                                                         <p>${userData['ang_would_work_for_single_parent']}</p>
                                                                       </div>`;
        const wouldYouTakeCareOfChildrenWithSpecialNeedsContainer    = `<div class="would-you-take-care-of-children-with-special-needs-container opacity-background">
                                                                         <h5>Take care of children with special needs</h5>
                                                                         <p>${userData['ang_take_care_children_special_needs']}</p>
                                                                       </div>`;
        container.append(jobTitleContainer)
        container.append(iWillTakeCareOfChildrenFromAgeContainer);
        container.append(hoursOfChildCareExperienceInThePast24MonthsContainer);
        container.append(howManyChildrenPeopleWouldYouLikeToTakeCareOfContainer);
        container.append(wouldYouWorkForASingleParentContainer);
        container.append(wouldYouTakeCareOfChildrenWithSpecialNeedsContainer);
    }
    if(userData['looking_for_job_as_caregiver_for_elderly'] === "1" || userData['looking_for_job_as_live_in_help'] === "1"){
        const jobs = [];
        if(userData['looking_for_job_as_caregiver_for_elderly'] === "1"){
            jobs.push('Caregiver for elderly');
        }
        if(userData['looking_for_job_as_live_in_help'] === "1"){
            jobs.push('Live in help');
        }
        const jobTitleContainer                                = `<div class="job-title-container">
                                                                    <h5 class="list-border">${convertArrayToSingleString(jobs)}</h5>
                                                                  </div>`;
        const iCanAssistAndProvideSupportToElderlyInContainer  = `<div class="assist-and-provie-support-to-elderly-in-container opacity-background">
                                                                    <h5>Assist and provide support to elderly in</h5>
                                                                    <p>${selectedAssistAndProvideSupportToElderlyIn()}</p>
                                                                  </div>`;
        const wouldYouTakeCareOfPeopleWithSpecialNeedsContainer = `<div class="would-you-take-care-of-people-with-special-needs-container">
                                                                    <h5>Take care of people with special needs</h5>
                                                                    <p>${userData['cl_take_care_people_with_special_needs']}</p>
                                                                   </div>`;
        container.append(jobTitleContainer);
        container.append(iCanAssistAndProvideSupportToElderlyInContainer);
        container.append(wouldYouTakeCareOfPeopleWithSpecialNeedsContainer);
    }
    if(userData['looking_for_job_as_live_in_tutor'] === "1" || userData['looking_for_job_as_online_tutor'] === "1" || userData['looking_for_job_as_virtual_childcare'] === "1"){
        const liveInTutor                       = userData['looking_for_job_as_live_in_tutor'];
        const onlineTutor                       = userData['looking_for_job_as_online_tutor'];
        const virtualChildCare                  = userData['looking_for_job_as_virtual_childcare'];
        const preferredSubjectsContainer        = `<div class="preferred-subjects-container">
                                                     <h5>Preferred subjects</h5>
                                                     <p>${selectedPreferredSubjects()}</p>
                                                  </div>`;
        const activitiesWithKidsContainer       = `<div class="activities-with-kids-container">
                                                     <h5>Activities with kids</h5>
                                                     <p>${selectedActivitiesWIthKids()}</p>
                                                  </div>`;
        const preferredStudentAgeGroupContainer = `<div class="preferred-student-age-group-container">
                                                     <h5>Preferred student age group</h5>
                                                     <p>${selectedPreferredStudentAgeGroup()}</p>
                                                  </div>`;
        const pricePerHourContainer             = `<div class="price-per-hour-container">
                                                     <h5>Price per hour</h5>
                                                     <h5>Amount</h5>
                                                     <p>${userData['ov_price_per_hour_amount']}</p>
                                                     <h5>Currency</h5>
                                                     <p>${userData['ov_price_per_hour_currency']}</p>
                                                  </div>`; 
        setLOVjobTitle();
        //selected 2 in LOV
        if(liveInTutor === "1" && onlineTutor === "1" || liveInTutor === "1" && virtualChildCare === "1" || onlineTutor === "1" && virtualChildCare === "1"){
            container.append(preferredSubjectsContainer);
            container.append(activitiesWithKidsContainer);
            container.append(preferredStudentAgeGroupContainer);
            container.append(pricePerHourContainer);
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
            container.append(preferredSubjectsContainer);
            container.append(activitiesWithKidsContainer);
            container.append(preferredStudentAgeGroupContainer);
            const classes = [
                '.preferred-subjects-container',
                '.activities-with-kids-container',
                '.preferred-student-age-group-container',
            ];
            setLOVOpacityBackground(classes);
        }
        if(liveInTutor === "0" && onlineTutor === "1" && virtualChildCare === "0"){
            container.append(preferredSubjectsContainer);
            container.append(preferredStudentAgeGroupContainer);
            container.append(pricePerHourContainer);
            const classes = [
                '.preferred-subjects-container',
                '.preferred-student-age-group-container',
                '.price-per-hour-container'
            ];
            setLOVOpacityBackground(classes);
        }
        if(liveInTutor === "0" && onlineTutor === "0" && virtualChildCare === "1"){
            container.append(activitiesWithKidsContainer);
            container.append(preferredStudentAgeGroupContainer);
            container.append(pricePerHourContainer);
            const classes = [
                '.activities-with-kids-container',
                '.preferred-student-age-group-container',
                '.price-per-hour-container'
            ];
            setLOVOpacityBackground(classes);
        }
    }
    const addBorderContainer            = `<div class="add-border-bottom">
                                            </div>`;
    const preferredCountriesContainer   = `<div class="preferred-countries-container opacity-background">
                                                <h5>Preferred countries</h5>
                                                <p>${getPreferredCountries()}</p>
                                            </div>`;
    const preferredAreaContainer        = `<div class="preferred-area-container">
                                                <h5>Preferred area</h5>
                                                <p>${getPreferredArea()}</p>
                                            </div>`;
    const earliestStartingDateContainer = `<div class="earliest-starting-date-container opacity-background">
                                                <h5>Earliest starting date</h5>
                                                <p>${userData['earliest_starting_date_month']} ${userData['earliest_starting_date_year']}</p>
                                            </div>`;
    const latestStartingDateContainer   = `<div class="latest-starting-date-container">
                                                <h5>Latest starting date</h5>
                                                <p>${userData['latest_starting_date_month']} ${userData['latest_starting_date_year']}</p>
                                            </div>`;
    const durationOfStayContainer       = `<div class="duration-of-stay-container opacity-background">
                                                <h5>Duration of stay</h5>
                                                <p>${userData['duration_of_stay']}</p>
                                            </div>`;
    const lookingForContainer           = `<div class="looking-for-container">
                                              <h5>Looking for</h5>
                                              <p>${userData['kind_of_work_looking']}</p>
                                           </div>`;
    const accomodation                  = `<div class="accomodation-container opacity-background">
                                              <h5>Accomodation</h5>
                                              <p>${userData['accomodation']}</p>
                                            </div>`;
    const accomodationBoth              = `<div class="accomodation-container opacity-background">
                                              <h5>Accomodation</h5>
                                              <p>Looking for, live in & live out work</p>
                                          </div>`;
    const accomodationContainer         = userData['accomodation'] === 'Both' ? accomodationBoth : accomodation;
    const liveFamilyWithPetsContainer   = `<div class="live-family-with-pets-container">
                                              <h5>Live family with pets</h5>
                                              <p>${userData['would_live_family_with_pets']}</p>
                                           </div>`;
    const takeCareOfPetsContainer       = `<div class="take-care-of-pets-container opacity-background">
                                              <h5>Take care of pets</h5>
                                              <p>${userData['would_take_care_of_pets']}</p>
                                           </div>`;
    const workExtraToEarnContainer      = `<div class="work-extra-to-earn-additional-money-container">
                                              <h5>Work extra to earn some additional money</h5>
                                              <p>${userData['would_work_extra_to_earn']}</p>
                                           </div>`;
    container.append(addBorderContainer);
    container.append(preferredCountriesContainer);
    container.append(preferredAreaContainer);
    container.append(earliestStartingDateContainer);
    container.append(latestStartingDateContainer);
    container.append(durationOfStayContainer);
    container.append(lookingForContainer);
    container.append(accomodationContainer);
    container.append(liveFamilyWithPetsContainer);
    container.append(takeCareOfPetsContainer);
    container.append(workExtraToEarnContainer);
}