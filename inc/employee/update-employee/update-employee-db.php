<?php 
    class Update_Employee_Db{
        private $_wpdb = null;
        public function __construct($wpdb){
            $this->_wpdb = $wpdb;
        }
        public function get_login_employee(){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '".get_current_user_id()."'");
            return $result[0];
        }
        public function get_login_employee_preferred_countries(){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries WHERE wp_user_id = '".get_current_user_id()."'");
        }
        public function delete_preferred_countries(){
            $this->_wpdb->delete("aupair_registered_employee_prefferred_countries", array("wp_user_id" => get_current_user_id()));
        }
        public function insert_preferred_country($country, $is_activated, $year_created){
            $this->_wpdb->insert(
                'aupair_registered_employee_prefferred_countries',
                array(
                    'wp_user_id'   => get_current_user_id(),
                    'country'      => $country,
                    'is_activated' => $is_activated,
                    'year_created' => $year_created
                ));
        }
        public function update($employee){
            $data = array(
                'looking_for_job_as_aupair'                               => $employee->aupair,
                'looking_for_job_as_nanny'                                => $employee->nanny,
                'looking_for_job_as_granny_aupair'                        => $employee->granny_aupair,
                'looking_for_job_as_caregiver_for_elderly'                => $employee->caregiver_for_elderly,
                'looking_for_job_as_live_in_help'                         => $employee->live_in_help,
                'looking_for_job_as_live_in_tutor'                        => $employee->live_in_tutor,
                'looking_for_job_as_online_tutor'                         => $employee->online_tutor,
                'looking_for_job_as_virtual_childcare'                    => $employee->virtual_childcare,
                'ang_takecare_children_age_zero_to_one'                   => $employee->take_care_children_zero_to_one,
                'ang_takecare_children_age_one_to_five'                   => $employee->take_care_children_one_to_five,
                'ang_takecare_children_age_six_to_ten'                    => $employee->take_care_children_six_to_ten,
                'ang_takecare_children_age_eleven_to_fourteen'            => $employee->take_care_children_eleven_to_fourteen,
                'ang_takecare_children_age_fifteen_plus'                  => $employee->take_care_children_fifteen_plus,
                'ang_hours_childcare_experience'                          => $employee->hours_childcare_experience,
                'ang_number_of_people_children_to_take_care'              => $employee->number_of_people_children_to_take_care,
                'ang_would_work_for_single_parent'                        => $employee->would_work_for_single_parent,
                'ang_take_care_children_special_needs'                    => $employee->take_care_children_special_needs,
                'cl_assist_provide_support_in_walks_outings'              => $employee->assist_and_support_in_walks_outings,
                'cl_assist_provide_support_in_mobility_support'           => $employee->assist_and_support_in_mobility_support,
                'cl_assist_provide_support_in_driving'                    => $employee->assist_and_support_in_driving,
                'cl_assist_provide_support_in_errands_shopping'           => $employee->assist_and_support_in_errands_shopping,
                'cl_assist_provide_support_in_cleaning_laundry'           => $employee->assist_and_support_in_cleaning_laundry,
                'cl_assist_provide_support_in_light_domestic_work'        => $employee->assist_and_support_in_light_domestic_work,
                'cl_assist_provide_support_in_cooking_meals'              => $employee->assist_and_support_in_cooking_meals,
                'cl_assist_provide_support_in_washing_dressing'           => $employee->assist_and_support_in_washing_dressing,
                'cl_assist_provide_support_in_companionship_conversation' => $employee->assist_and_support_in_companionship_conversation,
                'cl_take_care_people_with_special_needs'                  => $employee->take_care_people_with_special_needs,
                'lo_preffered_subject_mathematics'                        => $employee->preferred_subject_mathematics,
                'lo_preffered_subject_physics'                            => $employee->preferred_subject_physics,
                'lo_preffered_subject_chemistry'                          => $employee->preferred_subject_chemistry,
                'lo_preffered_subject_biology'                            => $employee->preferred_subject_biology,
                'lo_preffered_subject_english'                            => $employee->preferred_subject_english,
                'lo_preffered_subject_german'                             => $employee->preferred_subject_german,
                'lo_preffered_subject_french'                             => $employee->preferred_subject_french,
                'lo_preffered_subject_spanish'                            => $employee->preferred_subject_spanish,
                'lo_preffered_subject_italian'                            => $employee->preferred_subject_italian,
                'lo_preffered_subject_music'                              => $employee->preferred_subject_music,
                'lo_preffered_subject_sport'                              => $employee->preferred_subject_sport,
                'lv_activity_with_kids_homework_assistance'               => $employee->activitivies_with_kids_homework_assistance,
                'lv_activity_with_kids_book_reading'                      => $employee->activitivies_with_kids_book_reading,
                'lv_activity_with_kids_art_craft'                         => $employee->activitivies_with_kids_art_craft,
                'lv_activity_with_kids_drawing_cutting'                   => $employee->activitivies_with_kids_drawing_cutting,
                'lv_activity_with_kids_numbers_counting'                  => $employee->activitivies_with_kids_numbers_counting,
                'lv_activity_with_kids_letters_sounds'                    => $employee->activitivies_with_kids_letters_sounds,
                'lv_activity_with_kids_songs_poetry'                      => $employee->activitivies_with_kids_songs_poetry,
                'lv_activity_with_kids_mind_games_activity'               => $employee->activitivies_with_kids_mind_games_activity,
                'lov_preferred_student_age_group_infants'                 => $employee->student_age_group_infants,
                'lov_preferred_student_age_group_toddllers'               => $employee->student_age_group_toddllers,
                'lov_preferred_student_age_group_preschoolers'            => $employee->student_age_group_preschoolers,
                'lov_preferred_student_age_group_primary_school'          => $employee->student_age_group_primary_school,
                'lov_preferred_student_age_group_teenagers'               => $employee->student_age_group_teenagers,
                'lov_preferred_student_age_group_young_adults'            => $employee->student_age_group_young_adults,
                'lov_preferred_student_age_group_adults'                  => $employee->student_age_group_adults,
                'lov_preferred_student_age_group_seniors'                 => $employee->student_age_group_seniors,
                'ov_price_per_hour_amount'                                => $employee->price_per_hour_amount,
                'ov_price_per_hour_currency'                              => $employee->price_per_hour_currency,
                'preferred_area_all'                                      => $employee->preferred_area_all,
                'preferred_area_small_city'                               => $employee->preferred_area_small_city,
                'preferred_area_big_city'                                 => $employee->preferred_area_big_city,
                'preferred_area_suburd'                                   => $employee->preferred_area_suburd,
                'preferred_area_countryside'                              => $employee->preferred_area_countryside,
                'preferred_area_town'                                     => $employee->preferred_area_town,
                'preferred_area_village'                                  => $employee->preferred_area_village,
                'preferred_area_sea_side'                                 => $employee->preferred_area_sea_side,
                'earliest_starting_date_month'                            => $employee->earliest_starting_date_month,
                'earliest_starting_date_year'                             => $employee->earliest_starting_date_year,
                'latest_starting_date_month'                              => $employee->latest_starting_date_month,
                'latest_starting_date_year'                               => $employee->latest_starting_date_year,
                'duration_of_stay'                                        => $employee->duration_of_stay,
                'kind_of_work_looking'                                    => $employee->kind_of_work_looking,
                'accomodation'                                            => $employee->accomodation,
                'would_live_family_with_pets'                             => $employee->would_live_family_with_pets,
                'would_take_care_of_pets'                                 => $employee->would_take_care_of_pets, 
                'would_work_extra_to_earn'                                => $employee->would_work_extra_to_earn, 
                'gender'                                                  => $employee->gender, 
                'date_of_birth_month'                                     => $employee->date_of_birth_month,
                'date_of_birth_year'                                      => $employee->date_of_birth_year, 
                'your_weight_in'                                          => $employee->your_weight_in,
                'weight_in_kg'                                            => $employee->weight_in_kg,
                'weight_in_lbs'                                           => $employee->weight_in_lbs,
                'your_height_in'                                          => $employee->your_height_in,
                'height_in_cm'                                            => $employee->height_in_cm,
                'height_in_ft'                                            => $employee->height_in_ft,
                'nationality'                                             => $employee->nationality,
                'have_a_passport_from'                                    => $employee->have_a_passport_from,
                'currently_living'                                        => $employee->currently_living,
                'living_in'                                               => $employee->living_in,
                'visa_status'                                             => $employee->visa_status,
                'education'                                               => $employee->education,
                'name_of_school_college_university'                       => $employee->name_of_school_college_university,
                'profession'                                              => $employee->profession,
                'marital_status'                                          => $employee->marital_status,
                'have_own_children'                                       => $employee->have_own_children,
                'have_any_siblings'                                       => $employee->have_any_siblings, 
                'have_traning_in_healthcare'                              => $employee->have_traning_in_healthcare,   
                'attend_first_aid_training'                               => $employee->attend_first_aid_training,
                'have_criminal_record'                                    => $employee->have_criminal_record,
                'special_diet_considerations'                             => $employee->special_diet_considerations,
                'have_health_problems_allergy'                            => $employee->have_health_problems_allergy, 
                'describe_health_problems_allergies'                      => $employee->describe_health_problems_allergies,
                'do_you_smoke'                                            => $employee->do_you_smoke,
                'can_swim_well'                                           => $employee->can_swim_well,
                'can_ride_bike'                                           => $employee->can_ride_bike,
                'have_drivers_license'                                    => $employee->have_drivers_license,
                'sports'                                                  => $employee->sports,
                'religion'                                                => $employee->religion,
                'religion_for_you_is'                                     => $employee->religion_for_you_is,
                'firstname'                                               => $employee->firstname,
                'lastname'                                                => $employee->lastname,
                'address'                                                 => $employee->address,
                'zipcode'                                                 => $employee->zipcode,
                'city'                                                    => $employee->city,
                'state_region'                                            => $employee->state_region,
                'country'                                                 => $employee->country,
                'mobile_phone_no'                                         => $employee->mobile_phone_no,
                'letter'                                                  => $employee->letter,
                'age'                                                     => $employee->age,
                'employee_living_in'                                      => $employee->employee_living_in
            );
            $where  = array("wp_user_id" => get_current_user_id());
            return  $this->_wpdb->update("aupair_registered_employee", $data, $where);
        }
    }

?>