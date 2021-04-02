<?php
  

   function insert_into_wp_users(){
        // Check for nonce security      
        if (!wp_verify_nonce( $_POST['nonce'], 'active-aupair-nonce-string' ) ) {
            die();
        }
        $user_id = wp_insert_user( array(
           'user_email' => $_POST['email'],
           'user_pass'  => $_POST['password'],
           'user_login' => $_POST['userLogin'],
           'role'       => 'subscriber'
         ));
         if( is_wp_error( $user_id  ) ) {
            wp_send_json_error($user_id->get_error_message());
        } else {
            wp_send_json_success($user_id);
        }
        die();
    }
    add_action('wp_ajax_insert_into_wp_users', 'insert_into_wp_users');
    add_action('wp_ajax_nopriv_insert_into_wp_users', 'insert_into_wp_users');

    function insert_into_aupair_registered_users(){
        if (!wp_verify_nonce( $_POST['nonce'], 'active-aupair-nonce-string' ) ) {
            die();
        }
        global $wpdb;
        $wpdb->insert(
            'aupair_registered_users',
            array(
                'wp_user_id'                                              => $_POST['wpUserID'],
                'looking_for_job_as_aupair'                               => $_POST['aupair'],
                'looking_for_job_as_nanny'                                => $_POST['nanny'],
                'looking_for_job_as_granny_aupair'                        => $_POST['grannyAupair'],
                'looking_for_job_as_caregiver_for_elderly'                => $_POST['careGiverForElderly'],
                'looking_for_job_as_live_in_help'                         => $_POST['liveInHelp'],
                'looking_for_job_as_live_in_tutor'                        => $_POST['liveInTutor'],
                'looking_for_job_as_online_tutor'                         => $_POST['onlineTutor'],
                'looking_for_job_as_virtual_childcare'                    => $_POST['virtualChildcare'],
                'ang_takecare_children_age_zero_to_one'                   => $_POST['careChildrenZeroToOne'],
                'ang_takecare_children_age_one_to_five'                   => $_POST['careChildrenOneToFive'],
                'ang_takecare_children_age_six_to_ten'                    => $_POST['careChildrenSixToTen'],
                'ang_takecare_children_age_eleven_to_fourteen'            => $_POST['careChildrenElevenToFourteen'],
                'ang_takecare_children_age_fifteen_plus'                  => $_POST['careChildrenFifteenPlus'],
                'ang_hours_childcare_experience'                          => $_POST['hoursChildCareExperience'],
                'ang_number_of_people_children_to_take_care'              => $_POST['numberPeopleChildrenToTakeCare'],
                'ang_would_work_for_single_parent'                        => $_POST['workForSingleParent'],
                'ang_take_care_children_special_needs'                    => $_POST['careChildrenWithSpecialNeeds'],
                'cl_assist_provide_support_in_walks_outings'              => $_POST['assistSupportWalksOutings'],
                'cl_assist_provide_support_in_mobility_support'           => $_POST['assistSupportMobilitySupport'],
                'cl_assist_provide_support_in_driving'                    => $_POST['assistSupportDriving'],
                'cl_assist_provide_support_in_errands_shopping'           => $_POST['assistSupportErrandShopping'],
                'cl_assist_provide_support_in_cleaning_laundry'           => $_POST['assistSupportCleaningLaundry'],
                'cl_assist_provide_support_in_light_domestic_work'        => $_POST['assistSupportLightDomesticWork'],
                'cl_assist_provide_support_in_cooking_meals'              => $_POST['assistSupportCookingMeals'],
                'cl_assist_provide_support_in_washing_dressing'           => $_POST['assistSupportWashingDressing'],
                'cl_assist_provide_support_in_companionship_conversation' => $_POST['assistSupportCompanionshipConvo'],
                'cl_take_care_people_with_special_needs'                  => $_POST['takeCarePeopleWithSpecialNeeds'],
                'lo_preffered_subject_mathematics'                        => $_POST['preferredSubjectMath'],
                'lo_preffered_subject_physics'                            => $_POST['preferredSubjectPhysics'],
                'lo_preffered_subject_chemistry'                          => $_POST['preferredSubjectChemistry'],
                'lo_preffered_subject_biology'                            => $_POST['preferredSubjectBiology'],
                'lo_preffered_subject_english'                            => $_POST['preferredSubjectEnglish'],
                'lo_preffered_subject_german'                             => $_POST['preferredSubjectGerman'],
                'lo_preffered_subject_french'                             => $_POST['preferredSubjectFrench'],
                'lo_preffered_subject_spanish'                            => $_POST['preferredSubjectSpanish'],
                'lo_preffered_subject_italian'                            => $_POST['preferredSubjectItalian'],
                'lo_preffered_subject_music'                              => $_POST['preferredSubjectMusic'],
                'lo_preffered_subject_sport'                              => $_POST['preferredSubjectSport'],
                'lv_activity_with_kids_homework_assistance'               => $_POST['activityWithKidsHomeWorkAst'],
                'lv_activity_with_kids_book_reading'                      => $_POST['activityWithKidsBookReading'],
                'lv_activity_with_kids_art_craft'                         => $_POST['activityWithKidsArtCraft'],
                'lv_activity_with_kids_drawing_cutting'                   => $_POST['activityWithKidsDrawCutting'],
                'lv_activity_with_kids_numbers_counting'                  => $_POST['activityWithKidsNumberCounting'],
                'lv_activity_with_kids_letters_sounds'                    => $_POST['activityWithKidsLettersSound'],
                'lv_activity_with_kids_songs_poetry'                      => $_POST['activityWithKidsSongsPoetry'],
                'lv_activity_with_kids_mind_games_activity'               => $_POST['activityWithKidsGamesActivity'],
                'lov_preferred_student_age_group_infants'                 => $_POST['preferredStudentAgeGroupInfant'],
                'lov_preferred_student_age_group_toddllers'               => $_POST['preferredStudentAgeGroupToddlers'],
                'lov_preferred_student_age_group_preschoolers'            => $_POST['preferredStudentAgeGroupPreSchoolers'],
                'lov_preferred_student_age_group_primary_school'          => $_POST['preferredStudentAgeGroupPrimarySchool'],
                'lov_preferred_student_age_group_teenagers'               => $_POST['preferredStudentAgeGroupTeenagers'],
                'lov_preferred_student_age_group_young_adults'            => $_POST['preferredStudentAgeGroupYoungAdults'],
                'lov_preferred_student_age_group_adults'                  => $_POST['preferredStudentAgeGroupAdults'],
                'lov_preferred_student_age_group_seniors'                 => $_POST['preferredStudentAgeGroupSeniors'],
                'ov_price_per_hour_amount'                                => $_POST['pricePerHourAmount'],
                'ov_price_per_hour_currency'                              => $_POST['pricePerHourCurrency'],
                'preferred_area_all'                                      => $_POST['preferredAreaAll'],
                'preferred_area_small_city'                               => $_POST['preferredAreaSmallCity'],
                'preferred_area_big_city'                                 => $_POST['preferredAreaBigCity'],
                'preferred_area_suburd'                                   => $_POST['preferredAreaSuburd'],
                'preferred_area_countryside'                              => $_POST['preferredAreaCountrySide'],
                'preferred_area_town'                                     => $_POST['preferredAreaTown'],
                'preferred_area_village'                                  => $_POST['preferredAreaVillage'],
                'preferred_area_sea_side'                                 => $_POST['preferredAreaSeaSide'],
                'earliest_starting_date_month'                            => $_POST['earliestStartingDateMonth'],
            ),
            array(
        
            )
        );
        die();
    }
    add_action('wp_ajax_insert_into_aupair_registered_users', 'insert_into_aupair_registered_users');
    add_action('wp_ajax_nopriv_insert_into_aupair_registered_users', 'insert_into_aupair_registered_users');
?>