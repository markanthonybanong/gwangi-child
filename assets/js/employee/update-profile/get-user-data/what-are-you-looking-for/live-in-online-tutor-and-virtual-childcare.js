export function liveInOnlineTutorAndVirtualChildCare(userData){
    const liveInTutor                          = userData['looking_for_job_as_live_in_tutor'];
    const onlineTutor                          = userData['looking_for_job_as_online_tutor'];
    const virtualChildcare                     = userData['looking_for_job_as_virtual_childcare'];
    const jobLabels                            = [];
    let isPreferredSubjectsNotYetCalled        = true;
    let isActivitiesWithKidsNotYetCalled       = true;
    let isPreferredStudentAgeGroupNotYetCalled = true;
    let isPricePerHourNotYetCalled             = true;
    function preferredSubjects(params) {
        isPreferredSubjectsNotYetCalled = false;
        $('.preferred-subjects-container').find('input[type="checkbox"]').each(function(){
            if(this.name === 'preferredSubjectMath' && userData['lo_preffered_subject_mathematics'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectPhysics' && userData['lo_preffered_subject_physics'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectChemistry' && userData['lo_preffered_subject_chemistry'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectBiology' && userData['lo_preffered_subject_biology'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectEnglish' && userData['lo_preffered_subject_english'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectGerman' && userData['lo_preffered_subject_german'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectFrench' && userData['lo_preffered_subject_french'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectSpanish' && userData['lo_preffered_subject_spanish'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectItalian' && userData['lo_preffered_subject_italian'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectMusic' && userData['lo_preffered_subject_music'] === "1"){
                this.checked = true;
            }else if(this.name === 'preferredSubjectSport' && userData['lo_preffered_subject_sport'] === "1"){
                this.checked = true;
            }
        });
    }
    function activitiesWithKids(){
        isActivitiesWithKidsNotYetCalled = false;
        $('.activities-with-kids-container').find('input[type="checkbox"]').each(function(){
            if(this.name === 'activityWithKidsHomeWorkAst' && userData['lv_activity_with_kids_homework_assistance'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsBookReading' && userData['lv_activity_with_kids_book_reading'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsArtCraft' && userData['lv_activity_with_kids_art_craft'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsDrawCutting' && userData['lv_activity_with_kids_drawing_cutting'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsNumberCounting' && userData['lv_activity_with_kids_numbers_counting'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsLettersSound' && userData['lv_activity_with_kids_letters_sounds'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsSongsPoetry' && userData['lv_activity_with_kids_songs_poetry'] === "1"){
                this.checked = true;
            }else if(this.name === 'activityWithKidsGamesActivity' && userData['lv_activity_with_kids_mind_games_activity'] === "1"){
                this.checked = true;
            }
        });
    }
    function preferredStudentAgeGroup(){
        isPreferredStudentAgeGroupNotYetCalled = false;
        $('.preferred-student-age-group-container').find('input[type="checkbox"]').each(function(){
            if(this.name === 'preferredStudentAgeGroupInfant' && userData['lov_preferred_student_age_group_infants'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupToddlers' && userData['lov_preferred_student_age_group_toddllers'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupPreSchoolers' && userData['lov_preferred_student_age_group_preschoolers'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupPrimarySchool' && userData['lov_preferred_student_age_group_primary_school'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupTeenagers' && userData['lov_preferred_student_age_group_teenagers'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupYoungAdults' && userData['lov_preferred_student_age_group_young_adults'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupAdults' && userData['lov_preferred_student_age_group_adults'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredStudentAgeGroupSeniors' && userData['lov_preferred_student_age_group_seniors'] === "1"){
                this.checked = true;
            }
        });
    }
    function pricePerHour(){
        isPricePerHourNotYetCalled = false;
        $('.price-per-hour-container .amount').val(userData['ov_price_per_hour_amount']);
        $('.price-per-hour-container .currency').val(userData['ov_price_per_hour_currency']);
    }
    function setDynamicLabel(label){
        const dynamicLabel = $('.l-o-v-dynamic-label');
        jobLabels.push(label);
        if(jobLabels.length === 2){
            dynamicLabel.text(`${jobLabels[0]} & ${jobLabels[1]}`);
        } else {
            dynamicLabel.text(`${jobLabels[0]}`);
        }
        dynamicLabel.css('display', 'block');
    }
    if(liveInTutor === "1"){
        setDynamicLabel('Live in Tutor')
        $('.preferred-subjects-container').css('display', 'block');
        $('.activities-with-kids-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
        isPreferredSubjectsNotYetCalled ? preferredSubjects() : null; 
        isActivitiesWithKidsNotYetCalled ? activitiesWithKids() : null;
        isPreferredStudentAgeGroupNotYetCalled ? preferredStudentAgeGroup() : null; 
    }
    if(onlineTutor === "1"){
        setDynamicLabel('Online Tutor');
        $('.preferred-subjects-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
        $('.price-per-hour-container').css('display', 'block');
        isPreferredSubjectsNotYetCalled ? preferredSubjects() : null; 
        isPreferredStudentAgeGroupNotYetCalled ? preferredStudentAgeGroup() : null; 
        isPricePerHourNotYetCalled ? pricePerHour() : null;
    }
    if(virtualChildcare === "1"){
        setDynamicLabel('Virtual Childcare')
        $('.activities-with-kids-container').css('display', 'block');
        $('.preferred-student-age-group-container').css('display', 'block');
        $('.price-per-hour-container').css('display', 'block');
        isActivitiesWithKidsNotYetCalled ? activitiesWithKids() : null;
        isPreferredStudentAgeGroupNotYetCalled ? preferredStudentAgeGroup() : null;
        isPricePerHourNotYetCalled ? pricePerHour() : null;
    }
}