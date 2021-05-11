<?php 
    function insert_into_aupair_registered_employee($request){
        global $wpdb;
        $result = $wpdb->insert(
            'aupair_registered_employee',
            array(
                'wp_user_id'                                              => $request['wpUserID'],
                'looking_for_job_as_aupair'                               => $request['aupair'],
                'looking_for_job_as_nanny'                                => $request['nanny'],
                'looking_for_job_as_granny_aupair'                        => $request['grannyAupair'],
                'looking_for_job_as_caregiver_for_elderly'                => $request['caregiverForElderly'],
                'looking_for_job_as_live_in_help'                         => $request['liveInHelp'],
                'looking_for_job_as_live_in_tutor'                        => $request['liveInTutor'],
                'looking_for_job_as_online_tutor'                         => $request['onlineTutor'],
                'looking_for_job_as_virtual_childcare'                    => $request['virtualChildcare'],
                'ang_takecare_children_age_zero_to_one'                   => $request['careChildrenZeroToOne'],
                'ang_takecare_children_age_one_to_five'                   => $request['careChildrenOneToFive'],
                'ang_takecare_children_age_six_to_ten'                    => $request['careChildrenSixToTen'],
                'ang_takecare_children_age_eleven_to_fourteen'            => $request['careChildrenElevenToFourteen'],
                'ang_takecare_children_age_fifteen_plus'                  => $request['careChildrenFifteenPlus'],
                'ang_hours_childcare_experience'                          => $request['hoursChildCareExperience'],
                'ang_number_of_people_children_to_take_care'              => $request['numberPeopleChildrenToTakeCare'],
                'ang_would_work_for_single_parent'                        => $request['workForSingleParent'],
                'ang_take_care_children_special_needs'                    => $request['careChildrenWithSpecialNeeds'],
                'cl_assist_provide_support_in_walks_outings'              => $request['assistSupportWalksOutings'],
                'cl_assist_provide_support_in_mobility_support'           => $request['assistSupportMobilitySupport'],
                'cl_assist_provide_support_in_driving'                    => $request['assistSupportDriving'],
                'cl_assist_provide_support_in_errands_shopping'           => $request['assistSupportErrandShopping'],
                'cl_assist_provide_support_in_cleaning_laundry'           => $request['assistSupportCleaningLaundry'],
                'cl_assist_provide_support_in_light_domestic_work'        => $request['assistSupportLightDomesticWork'],
                'cl_assist_provide_support_in_cooking_meals'              => $request['assistSupportCookingMeals'],
                'cl_assist_provide_support_in_washing_dressing'           => $request['assistSupportWashingDressing'],
                'cl_assist_provide_support_in_companionship_conversation' => $request['assistSupportCompanionshipConvo'],
                'cl_take_care_people_with_special_needs'                  => $request['takeCarePeopleWithSpecialNeeds'],
                'lo_preffered_subject_mathematics'                        => $request['preferredSubjectMath'],
                'lo_preffered_subject_physics'                            => $request['preferredSubjectPhysics'],
                'lo_preffered_subject_chemistry'                          => $request['preferredSubjectChemistry'],
                'lo_preffered_subject_biology'                            => $request['preferredSubjectBiology'],
                'lo_preffered_subject_english'                            => $request['preferredSubjectEnglish'],
                'lo_preffered_subject_german'                             => $request['preferredSubjectGerman'],
                'lo_preffered_subject_french'                             => $request['preferredSubjectFrench'],
                'lo_preffered_subject_spanish'                            => $request['preferredSubjectSpanish'],
                'lo_preffered_subject_italian'                            => $request['preferredSubjectItalian'],
                'lo_preffered_subject_music'                              => $request['preferredSubjectMusic'],
                'lo_preffered_subject_sport'                              => $request['preferredSubjectSport'],
                'lv_activity_with_kids_homework_assistance'               => $request['activityWithKidsHomeWorkAst'],
                'lv_activity_with_kids_book_reading'                      => $request['activityWithKidsBookReading'],
                'lv_activity_with_kids_art_craft'                         => $request['activityWithKidsArtCraft'],
                'lv_activity_with_kids_drawing_cutting'                   => $request['activityWithKidsDrawCutting'],
                'lv_activity_with_kids_numbers_counting'                  => $request['activityWithKidsNumberCounting'],
                'lv_activity_with_kids_letters_sounds'                    => $request['activityWithKidsLettersSound'],
                'lv_activity_with_kids_songs_poetry'                      => $request['activityWithKidsSongsPoetry'],
                'lv_activity_with_kids_mind_games_activity'               => $request['activityWithKidsGamesActivity'],
                'lov_preferred_student_age_group_infants'                 => $request['preferredStudentAgeGroupInfant'],
                'lov_preferred_student_age_group_toddllers'               => $request['preferredStudentAgeGroupToddlers'],
                'lov_preferred_student_age_group_preschoolers'            => $request['preferredStudentAgeGroupPreSchoolers'],
                'lov_preferred_student_age_group_primary_school'          => $request['preferredStudentAgeGroupPrimarySchool'],
                'lov_preferred_student_age_group_teenagers'               => $request['preferredStudentAgeGroupTeenagers'],
                'lov_preferred_student_age_group_young_adults'            => $request['preferredStudentAgeGroupYoungAdults'],
                'lov_preferred_student_age_group_adults'                  => $request['preferredStudentAgeGroupAdults'],
                'lov_preferred_student_age_group_seniors'                 => $request['preferredStudentAgeGroupSeniors'],
                'ov_price_per_hour_amount'                                => $request['pricePerHourAmount'],
                'ov_price_per_hour_currency'                              => $request['pricePerHourCurrency'],
                'preferred_area_all'                                      => $request['preferredAreaAll'],
                'preferred_area_small_city'                               => $request['preferredAreaSmallCity'],
                'preferred_area_big_city'                                 => $request['preferredAreaBigCity'],
                'preferred_area_suburd'                                   => $request['preferredAreaSuburd'],
                'preferred_area_countryside'                              => $request['preferredAreaCountrySide'],
                'preferred_area_town'                                     => $request['preferredAreaTown'],
                'preferred_area_village'                                  => $request['preferredAreaVillage'],
                'preferred_area_sea_side'                                 => $request['preferredAreaSeaSide'],
                'earliest_starting_date_month'                            => $request['earliestStartingDateMonth'],
                'earliest_starting_date_year'                             => $request['earliestStartingDateYear'],
                'latest_starting_date_month'                              => $request['latestStartingDateMonth'],
                'latest_starting_date_year'                               => $request['latestStartingDateYear'],
                'duration_of_stay'                                        => $request['durationOfStay'],
                'kind_of_work_looking'                                    => $request['kindOfWorkLooking'],
                'accomodation'                                            => $request['accomodation'],
                'would_live_family_with_pets'                             => $request['wouldLiveFamilyWithPets'],
                'would_take_care_of_pets'                                 => $request['wouldTakeCareOfPets'], 
                'would_work_extra_to_earn'                                => $request['wouldWorkExtraToEarn'], 
                'gender'                                                  => $request['gender'], 
                'date_of_birth_month'                                     => $request['dateOfBirthMonth'],
                'date_of_birth_year'                                      => $request['dateOfBirthYear'], 
                'your_weight_in'                                          => $request['yourWeightIn'],
                'weight_in_kg'                                            => $request['weightInKg'],
                'weight_in_lbs'                                           => $request['weightInLbs'],
                'your_height_in'                                          => $request['yourHeightIn'],
                'height_in_cm'                                            => $request['heightInCm'],
                'height_in_ft'                                            => $request['heightInFt'],
                'nationality'                                             => $request['nationality'],
                'have_a_passport_from'                                    => $request['haveAPassportFrom'],
                'currently_living'                                        => $request['currentlyLiving'],
                'living_in'                                               => $request['livingIn'],
                'visa_status'                                             => $request['visaStatus'],
                'education'                                               => $request['education'],
                'name_of_school_college_university'                       => $request['nameOfSchoolCollegeUni'],
                'profession'                                              => $request['profession'],
                'marital_status'                                          => $request['maritalStatus'],
                'have_own_children'                                       => $request['haveOwnChildren'],
                'have_any_siblings'                                       => $request['haveAnySiblings'], 
                'have_traning_in_healthcare'                              => $request['haveTrainingInHealthCare'],   
                'attend_first_aid_training'                               => $request['attendFirstAidTraining'],
                'have_criminal_record'                                    => $request['haveCriminalRecord'],
                'special_diet_considerations'                             => $request['specialDietConsiderations'],
                'have_health_problems_allergy'                            => $request['haveHealthProblemsAllergy'], 
                'describe_health_problems_allergies'                      => $request['describehealthProblemsAllergy'],
                'do_you_smoke'                                            => $request['doYouSmoke'],
                'can_swim_well'                                           => $request['canSwimWell'],
                'can_ride_bike'                                           => $request['canRideBike'],
                'have_drivers_license'                                    => $request['haveDriversLicense'],
                'sports'                                                  => $request['sports'],
                'religion'                                                => $request['religion'],
                'religion_for_you_is'                                     => $request['religionForYouIs'],
                'firstname'                                               => $request['firstName'],
                'lastname'                                                => $request['lastName'],
                'address'                                                 => $request['address'],
                'zipcode'                                                 => $request['zipcode'],
                'city'                                                    => $request['city'],
                'state_region'                                            => $request['stateRegion'],
                'country'                                                 => $request['country'],
                'mobile_phone_no'                                         => $request['mobilePhoneNo'],
                'letter'                                                  => $request['letter'],  
                'is_activated'                                            => 0,
                'year_created'                                            => $request['yearCreated'],
                'user_type'                                               => 'employee'
            ),
            array(
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%s',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%s',
                '%s',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%d',
                '%d',
                '%s',
            )
        );
        if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_error);
        }
        die();
    }
    function insert_into_aupair_registered_employee_preferred_countries($request){
        global $wpdb;
        $result = $wpdb->insert(
            'aupair_registered_employee_prefferred_countries',
            array(
                'wp_user_id'    => ($request['wpUserID'] != "null") ?  $request['wpUserID'] : get_current_user_id(),
                'country'       => $request['country'],
                'is_activated'  => $request['isActivated'],
                'year_created'  => $request['yearCreated'],
            ),
            array(
                "%d",
                "%s",
                "%d",
                "%d",
            )
        );
        if($result) {
            wp_send_json_success($result);
        } else {
            wp_send_json_error($result);
        }
        
        die();
    }
    function update_employee($request){
        global $wpdb;
        $data = array(
            'looking_for_job_as_aupair'                               => $request['aupair'],
            'looking_for_job_as_nanny'                                => $request['nanny'],
            'looking_for_job_as_granny_aupair'                        => $request['grannyAupair'],
            'looking_for_job_as_caregiver_for_elderly'                => $request['caregiverForElderly'],
            'looking_for_job_as_live_in_help'                         => $request['liveInHelp'],
            'looking_for_job_as_live_in_tutor'                        => $request['liveInTutor'],
            'looking_for_job_as_online_tutor'                         => $request['onlineTutor'],
            'looking_for_job_as_virtual_childcare'                    => $request['virtualChildcare'],
            'ang_takecare_children_age_zero_to_one'                   => $request['careChildrenZeroToOne'],
            'ang_takecare_children_age_one_to_five'                   => $request['careChildrenOneToFive'],
            'ang_takecare_children_age_six_to_ten'                    => $request['careChildrenSixToTen'],
            'ang_takecare_children_age_eleven_to_fourteen'            => $request['careChildrenElevenToFourteen'],
            'ang_takecare_children_age_fifteen_plus'                  => $request['careChildrenFifteenPlus'],
            'ang_hours_childcare_experience'                          => $request['hoursChildCareExperience'],
            'ang_number_of_people_children_to_take_care'              => $request['numberPeopleChildrenToTakeCare'],
            'ang_would_work_for_single_parent'                        => $request['workForSingleParent'],
            'ang_take_care_children_special_needs'                    => $request['careChildrenWithSpecialNeeds'],
            'cl_assist_provide_support_in_walks_outings'              => $request['assistSupportWalksOutings'],
            'cl_assist_provide_support_in_mobility_support'           => $request['assistSupportMobilitySupport'],
            'cl_assist_provide_support_in_driving'                    => $request['assistSupportDriving'],
            'cl_assist_provide_support_in_errands_shopping'           => $request['assistSupportErrandShopping'],
            'cl_assist_provide_support_in_cleaning_laundry'           => $request['assistSupportCleaningLaundry'],
            'cl_assist_provide_support_in_light_domestic_work'        => $request['assistSupportLightDomesticWork'],
            'cl_assist_provide_support_in_cooking_meals'              => $request['assistSupportCookingMeals'],
            'cl_assist_provide_support_in_washing_dressing'           => $request['assistSupportWashingDressing'],
            'cl_assist_provide_support_in_companionship_conversation' => $request['assistSupportCompanionshipConvo'],
            'cl_take_care_people_with_special_needs'                  => $request['takeCarePeopleWithSpecialNeeds'],
            'lo_preffered_subject_mathematics'                        => $request['preferredSubjectMath'],
            'lo_preffered_subject_physics'                            => $request['preferredSubjectPhysics'],
            'lo_preffered_subject_chemistry'                          => $request['preferredSubjectChemistry'],
            'lo_preffered_subject_biology'                            => $request['preferredSubjectBiology'],
            'lo_preffered_subject_english'                            => $request['preferredSubjectEnglish'],
            'lo_preffered_subject_german'                             => $request['preferredSubjectGerman'],
            'lo_preffered_subject_french'                             => $request['preferredSubjectFrench'],
            'lo_preffered_subject_spanish'                            => $request['preferredSubjectSpanish'],
            'lo_preffered_subject_italian'                            => $request['preferredSubjectItalian'],
            'lo_preffered_subject_music'                              => $request['preferredSubjectMusic'],
            'lo_preffered_subject_sport'                              => $request['preferredSubjectSport'],
            'lv_activity_with_kids_homework_assistance'               => $request['activityWithKidsHomeWorkAst'],
            'lv_activity_with_kids_book_reading'                      => $request['activityWithKidsBookReading'],
            'lv_activity_with_kids_art_craft'                         => $request['activityWithKidsArtCraft'],
            'lv_activity_with_kids_drawing_cutting'                   => $request['activityWithKidsDrawCutting'],
            'lv_activity_with_kids_numbers_counting'                  => $request['activityWithKidsNumberCounting'],
            'lv_activity_with_kids_letters_sounds'                    => $request['activityWithKidsLettersSound'],
            'lv_activity_with_kids_songs_poetry'                      => $request['activityWithKidsSongsPoetry'],
            'lv_activity_with_kids_mind_games_activity'               => $request['activityWithKidsGamesActivity'],
            'lov_preferred_student_age_group_infants'                 => $request['preferredStudentAgeGroupInfant'],
            'lov_preferred_student_age_group_toddllers'               => $request['preferredStudentAgeGroupToddlers'],
            'lov_preferred_student_age_group_preschoolers'            => $request['preferredStudentAgeGroupPreSchoolers'],
            'lov_preferred_student_age_group_primary_school'          => $request['preferredStudentAgeGroupPrimarySchool'],
            'lov_preferred_student_age_group_teenagers'               => $request['preferredStudentAgeGroupTeenagers'],
            'lov_preferred_student_age_group_young_adults'            => $request['preferredStudentAgeGroupYoungAdults'],
            'lov_preferred_student_age_group_adults'                  => $request['preferredStudentAgeGroupAdults'],
            'lov_preferred_student_age_group_seniors'                 => $request['preferredStudentAgeGroupSeniors'],
            'ov_price_per_hour_amount'                                => $request['pricePerHourAmount'],
            'ov_price_per_hour_currency'                              => $request['pricePerHourCurrency'],
            'preferred_area_all'                                      => $request['preferredAreaAll'],
            'preferred_area_small_city'                               => $request['preferredAreaSmallCity'],
            'preferred_area_big_city'                                 => $request['preferredAreaBigCity'],
            'preferred_area_suburd'                                   => $request['preferredAreaSuburd'],
            'preferred_area_countryside'                              => $request['preferredAreaCountrySide'],
            'preferred_area_town'                                     => $request['preferredAreaTown'],
            'preferred_area_village'                                  => $request['preferredAreaVillage'],
            'preferred_area_sea_side'                                 => $request['preferredAreaSeaSide'],
            'earliest_starting_date_month'                            => $request['earliestStartingDateMonth'],
            'earliest_starting_date_year'                             => $request['earliestStartingDateYear'],
            'latest_starting_date_month'                              => $request['latestStartingDateMonth'],
            'latest_starting_date_year'                               => $request['latestStartingDateYear'],
            'duration_of_stay'                                        => $request['durationOfStay'],
            'kind_of_work_looking'                                    => $request['kindOfWorkLooking'],
            'accomodation'                                            => $request['accomodation'],
            'would_live_family_with_pets'                             => $request['wouldLiveFamilyWithPets'],
            'would_take_care_of_pets'                                 => $request['wouldTakeCareOfPets'], 
            'would_work_extra_to_earn'                                => $request['wouldWorkExtraToEarn'], 
            'gender'                                                  => $request['gender'], 
            'date_of_birth_month'                                     => $request['dateOfBirthMonth'],
            'date_of_birth_year'                                      => $request['dateOfBirthYear'], 
            'your_weight_in'                                          => $request['yourWeightIn'],
            'weight_in_kg'                                            => $request['weightInKg'],
            'weight_in_lbs'                                           => $request['weightInLbs'],
            'your_height_in'                                          => $request['yourHeightIn'],
            'height_in_cm'                                            => $request['heightInCm'],
            'height_in_ft'                                            => $request['heightInFt'],
            'nationality'                                             => $request['nationality'],
            'have_a_passport_from'                                    => $request['haveAPassportFrom'],
            'currently_living'                                        => $request['currentlyLiving'],
            'living_in'                                               => $request['livingIn'],
            'visa_status'                                             => $request['visaStatus'],
            'education'                                               => $request['education'],
            'name_of_school_college_university'                       => $request['nameOfSchoolCollegeUni'],
            'profession'                                              => $request['profession'],
            'marital_status'                                          => $request['maritalStatus'],
            'have_own_children'                                       => $request['haveOwnChildren'],
            'have_any_siblings'                                       => $request['haveAnySiblings'], 
            'have_traning_in_healthcare'                              => $request['haveTrainingInHealthCare'],   
            'attend_first_aid_training'                               => $request['attendFirstAidTraining'],
            'have_criminal_record'                                    => $request['haveCriminalRecord'],
            'special_diet_considerations'                             => $request['specialDietConsiderations'],
            'have_health_problems_allergy'                            => $request['haveHealthProblemsAllergy'], 
            'describe_health_problems_allergies'                      => $request['describehealthProblemsAllergy'],
            'do_you_smoke'                                            => $request['doYouSmoke'],
            'can_swim_well'                                           => $request['canSwimWell'],
            'can_ride_bike'                                           => $request['canRideBike'],
            'have_drivers_license'                                    => $request['haveDriversLicense'],
            'sports'                                                  => $request['sports'],
            'religion'                                                => $request['religion'],
            'religion_for_you_is'                                     => $request['religionForYouIs'],
            'firstname'                                               => $request['firstName'],
            'lastname'                                                => $request['lastName'],
            'address'                                                 => $request['address'],
            'zipcode'                                                 => $request['zipcode'],
            'city'                                                    => $request['city'],
            'state_region'                                            => $request['stateRegion'],
            'country'                                                 => $request['country'],
            'mobile_phone_no'                                         => $request['mobilePhoneNo'],
            'letter'                                                  => $request['letter'],
            'user_type'                                               => 'employee'
        );
        $where  = array("wp_user_id" => get_current_user_id());
        $result = $wpdb->update("aupair_registered_employee", $data, $where);
        if($result){
            wp_send_json_success($request);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    function delete_employee_countries(){
        global $wpdb;
        $where   = array("wp_user_id" => get_current_user_id());
        $result  = $wpdb->delete("aupair_registered_employee_prefferred_countries", $where);
        if($result){
            wp_send_json_success($data);
        } else {
            wp_send_json_error($wpdb->last_error);
        }
        die();
    }
    function upload_employee_photo($request){
        $employee_photo_path = $_SERVER['DOCUMENT_ROOT'].'/activeaupair/wp-content/themes/gwangi-child/users-photo/employee/';
        //server
        // $employee_photo_path = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/gwangi-child/users-photo/employee/';
        $userImages          = glob($employee_photo_path.get_current_user_id().'*');
        if(!empty($userImages)){
            foreach($userImages as $image){
                unlink($image);
            }
        }
        $test   = explode('.', $_FILES["employeePhoto"]["name"]);
        $ext    = end($test);
        $name   = get_current_user_id().'-'.$_POST["randomFiveDigits"].'.'.$ext;
        $path   = $employee_photo_path.$name;
        $upload = move_uploaded_file($_FILES["employeePhoto"]["tmp_name"], $path);
        if($upload){
            wp_send_json_success($name);
        }
        die();
    }
    function get_directory(){
        // $employee_photo_path = $_SERVER['DOCUMENT_ROOT'].'/activeaupair/wp-content/themes/gwangi-child/users-photo/employee/';
        $document_cwd  = getcwd();
        $document_root = $_SERVER['DOCUMENT_ROOT']; 
        wp_send_json_success('CWD '.$document_cwd. ' DOC_ROOT '.$document_root);
        die();
    }
    function update_employee_photo($request){
        global $wpdb;
        $data_with_photo = array(
                'photo'             => $request['photo'],
                'photo_privacy'     => $request['photoPrivacy'],
                'photo_description' => $request['photoDescription']
        );
        $data_null_photo = array(
            'photo_privacy'     => $request['photoPrivacy'],
            'photo_description' => $request['photoDescription']
        );

        $data   = ($request['photo'] != "null") ? $data_with_photo : $data_null_photo;
        $where  = array('wp_user_id' => get_current_user_id());
        $result = $wpdb->update("aupair_registered_employee", $data, $where);
        if($result){
            wp_send_json_success($request);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/insertIntoAupairRegisteredEmployee', [
            'methods'  => 'POST',
            'callback' => 'insert_into_aupair_registered_employee'
        ]);
        register_rest_route( 'activeAupair/v1', '/insertIntoRegisteredEmployeePreferredCountries', [
            'methods'  => 'POST',
            'callback' => 'insert_into_aupair_registered_employee_preferred_countries'
        ]);
        register_rest_route( 'activeAupair/v1', '/updateEmployee', [
            'methods'  => 'POST',
            'callback' => 'update_employee'
        ]);
        register_rest_route( 'activeAupair/v1', '/deleteEmployeeCountries', [
            'methods'  => 'DELETE',
            'callback' => 'delete_employee_countries'
        ]);
        register_rest_route( 'activeAupair/v1', '/uploadEmployeePhoto', [
            'methods'  => 'POST',
            'callback' => 'upload_employee_photo'
        ]);
        register_rest_route( 'activeAupair/v1', '/updateEmployeePhoto', [
            'methods'  => 'POST',
            'callback' => 'update_employee_photo'
        ]);
        register_rest_route( 'activeAupair/v1', '/getDirectory', [
            'methods'  => 'GET',
            'callback' => 'get_directory'
        ]);
    });

?>