<?php
    class Update_Host_Family_Db{
        private $_wpdb = null;
        public function __construct(
            $wpdb
        ){
            $this->_wpdb = $wpdb;    
        }
        public function get_login_host_family(){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family WHERE wp_user_id  = '".get_current_user_id()."'");
            return $result[0];
        }
        public function get_login_host_family_preferred_nationalities(){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_preferred_nationalities WHERE wp_user_id  = '".get_current_user_id()."'");
        }
        public function get_login_host_family_applicants_living_in(){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_applicants_living_in WHERE wp_user_id  = '".get_current_user_id()."'");
        }
        public function get_login_host_family_languages_spoken_at_home(){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_languages_spoken_at_home WHERE wp_user_id  = '".get_current_user_id()."'");
        }
        public function delete_preferred_nationalities(){
            $this->_wpdb->delete("aupair_registered_host_family_preferred_nationalities", array("wp_user_id" => get_current_user_id()));
        }
        public function delete_host_family_applicants_living_in(){
            $this->_wpdb->delete("aupair_registered_host_family_applicants_living_in", array("wp_user_id" => get_current_user_id()));
        }
        public function delete_languages_spoken_at_home(){
            $this->_wpdb->delete("aupair_registered_host_family_languages_spoken_at_home", array("wp_user_id" => get_current_user_id()));
        }
        public function insert_preferred_nationality($nationality){
            $data = array(
                'wp_user_id'  => get_current_user_id(),
                'nationality' => $nationality
            );
            $this->_wpdb->insert('aupair_registered_host_family_preferred_nationalities', $data);
        }
        public function insert_applicant_living_in($country){
            $data = array(
                'wp_user_id' => get_current_user_id(),
                'country'    => $country
            );
            $this->_wpdb->insert('aupair_registered_host_family_applicants_living_in', $data);
        }
        public function insert_language_spoken_at_home($language){
            $data = array(
                'wp_user_id' => get_current_user_id(),
                'language'    => $language
            );
            $this->_wpdb->insert('aupair_registered_host_family_languages_spoken_at_home', $data);
            
        }
        public function update($host_family){
            $data = array(
                'looking_for_aupair'                                      => $host_family->looking_for_aupair,                                      
                'looking_for_nanny'                                       => $host_family->looking_for_nanny,                                       
                'looking_for_granny_aupair'                               => $host_family->looking_for_granny_aupair,                               
                'looking_for_caregiver_for_elderly'                       => $host_family->looking_for_caregiver_for_elderly,                       
                'looking_for_live_in_help'                                => $host_family->looking_for_live_in_help,                                
                'looking_for_live_in_tutor'                               => $host_family->looking_for_live_in_tutor,                               
                'ang_takecare_children_age_zero_to_one'                   => $host_family->ang_takecare_children_age_zero_to_one,                   
                'ang_takecare_children_age_one_to_five'                   => $host_family->ang_takecare_children_age_one_to_five,                   
                'ang_takecare_children_age_six_to_ten'                    => $host_family->ang_takecare_children_age_six_to_ten,                    
                'ang_takecare_children_age_eleven_to_fourteen'            => $host_family->ang_takecare_children_age_eleven_to_fourteen,            
                'ang_takecare_children_age_fifteen_plus'                  => $host_family->ang_takecare_children_age_fifteen_plus,                  
                'ang_minimum_required_childcare_experience'               => $host_family->ang_minimum_required_childcare_experience,                
                'ang_number_children_would_you_like_to_care'              => $host_family->ang_number_children_would_you_like_to_care,              
                'ang_take_care_children_with_special_needs'               => $host_family->ang_take_care_children_with_special_needs,               
                'ang_describe_children_special_needs'                     => $host_family->ang_describe_children_special_needs,                     
                'cl_assistance_support_in_walks_and_outings'              => $host_family->cl_assistance_support_in_walks_and_outings,              
                'cl_assistance_support_in_mobility_support'               => $host_family->cl_assistance_support_in_mobility_support,               
                'cl_assistance_support_in_driving'                        => $host_family->cl_assistance_support_in_driving,                        
                'cl_assistance_support_in_errands_shopping'               => $host_family->cl_assistance_support_in_errands_shopping,               
                'cl_assistance_support_in_cleaning_and_laundry'           => $host_family->cl_assistance_support_in_cleaning_and_laundry,           
                'cl_assistance_support_in_light_domestic_work'            => $host_family->cl_assistance_support_in_light_domestic_work,            
                'cl_assistance_support_in_cooking_meals'                  => $host_family->cl_assistance_support_in_cooking_meals,                 
                'cl_assistance_support_in_washing_and_dressing'           => $host_family->cl_assistance_support_in_washing_and_dressing,           
                'cl_assistance_support_in_companionship_and_conversation' => $host_family->cl_assistance_support_in_companionship_and_conversation,
                'cl_applicant_take_care_people_with_special_needs'        => $host_family->cl_applicant_take_care_people_with_special_needs,        
                'cl_describe_people_special_needs'                        => $host_family->cl_describe_people_special_needs,                        
                'lo_tutor_teach_mathematics'                              => $host_family->lo_tutor_teach_mathematics,                              
                'lo_tutor_teach_physics'                                  => $host_family->lo_tutor_teach_physics,                                  
                'lo_tutor_teach_chemistry'                                => $host_family->lo_tutor_teach_chemistry,                                
                'lo_tutor_teach_biology'                                  => $host_family->lo_tutor_teach_biology,                                  
                'lo_tutor_teach_english'                                  => $host_family->lo_tutor_teach_english,                                  
                'lo_tutor_teach_german'                                   => $host_family->lo_tutor_teach_german,                                   
                'lo_tutor_teach_french'                                   => $host_family->lo_tutor_teach_french,                                   
                'lo_tutor_teach_spanish'                                  => $host_family->lo_tutor_teach_spanish,                                  
                'lo_tutor_teach_italian'                                  => $host_family->lo_tutor_teach_italian,                                  
                'lo_tutor_teach_music'                                    => $host_family->lo_tutor_teach_music,                                    
                'lo_tutor_teach_sport'                                    => $host_family->lo_tutor_teach_sport,                                    
                'lv_tutor_can_do_activity_homework_assistance'            => $host_family->lv_tutor_can_do_activity_homework_assistance,            
                'lv_tutor_can_do_activity_book_reading'                   => $host_family->lv_tutor_can_do_activity_book_reading,                   
                'lv_tutor_can_do_activity_art_and_craft'                  => $host_family->lv_tutor_can_do_activity_art_and_craft,                  
                'lv_tutor_can_do_activity_drawing_and_cutting'            => $host_family->lv_tutor_can_do_activity_drawing_and_cutting,            
                'lv_tutor_can_do_activity_numbers_and_counting'           => $host_family->lv_tutor_can_do_activity_numbers_and_counting,           
                'lv_tutor_can_do_activity_letters_and_sound'              => $host_family->lv_tutor_can_do_activity_letters_and_sound,              
                'lv_tutor_can_do_activity_songs_and_poetry'               => $host_family->lv_tutor_can_do_activity_songs_and_poetry,               
                'lv_tutor_can_do_activity_mind_games_and_activity'        => $host_family->lv_tutor_can_do_activity_mind_games_and_activity,        
                'lov_student_age_group_infants'                           => $host_family->lov_student_age_group_infants,                           
                'lov_student_age_group_toddlers'                          => $host_family->lov_student_age_group_toddlers,                          
                'lov_student_age_group_preschoolers'                      => $host_family->lov_student_age_group_preschoolers,                      
                'lov_student_age_group_primary_school'                    => $host_family->lov_student_age_group_primary_school,                    
                'lov_student_age_group_teenagers'                         => $host_family->lov_student_age_group_teenagers,                         
                'lov_student_age_group_young_adults'                      => $host_family->lov_student_age_group_young_adults,                      
                'lov_student_age_group_adults'                            => $host_family->lov_student_age_group_adults,                            
                'lov_student_age_group_senior'                            => $host_family->lov_student_age_group_senior,                            
                'salary_per_month_amount'                                 => $host_family->salary_per_month_amount,                           
                'salary_per_month_currency'                               => $host_family->salary_per_month_currency,   
                'earliest_starting_date_month'                            => $host_family->earliest_starting_date_month,                            
                'earliest_starting_date_year'                             => $host_family->earliest_starting_date_year,                             
                'latest_starting_date_month'                              => $host_family->latest_starting_date_month,                              
                'latest_starting_date_year'                               => $host_family->latest_starting_date_year,                               
                'duration'                                                => $host_family->duration,                                                
                'preferred_gender'                                        => $host_family->preferred_gender,                                        
                'required_education_level'                                => $host_family->required_education_level,                                
                'working_hours_per_week'                                  => $host_family->working_hours_per_week,                                  
                'willing_to_pay_for_travel_expenses'                      => $host_family->willing_to_pay_for_travel_expenses,                      
                'willing_to_pay_for_visa'                                 => $host_family->willing_to_pay_for_visa,                                 
                'required_age_min'                                        => $host_family->required_age_min,                                        
                'required_age_max'                                        => $host_family->required_age_max,                                        
                'is_smoking_allowed'                                      => $host_family->is_smoking_allowed,                                      
                'applicant_have_to_take_care_of_pets'                     => $host_family->applicant_have_to_take_care_of_pets,                     
                'applicant_know_how_to_swim'                              => $host_family->applicant_know_how_to_swim,                              
                'applicant_know_how_to_ride_a_bike'                       => $host_family->applicant_know_how_to_ride_a_bike,                       
                'expect_applicant_to_drive'                               => $host_family->expect_applicant_to_drive,                               
                'expect_applicant_have_training_in_healthcare'            => $host_family->expect_applicant_have_training_in_healthcare,            
                'expect_applicant_have_attended_firstaid_training'        => $host_family->expect_applicant_have_attended_firstaid_training,       
                'nationality'                                             => $host_family->nationality,
                'is_single_parent'                                        => $host_family->is_single_parent,                                        
                'parent_age_group'                                        => $host_family->parent_age_group,                                        
                'mother_nationality'                                      => $host_family->mother_nationality,                                      
                'father_nationality'                                      => $host_family->father_nationality,                                      
                'religion'                                                => $host_family->religion,                                                
                'is_religion_important_to_you'                            => $host_family->is_religion_important_to_you,                            
                'employment_parent_one'                                   => $host_family->employment_parent_one,                                   
                'employment_parent_two'                                   => $host_family->employment_parent_two,                                   
                'how_many_people_living_in_the_house'                     => $host_family->how_many_people_living_in_the_house,                     
                'do_you_have_any_pets'                                    => $host_family->do_you_have_any_pets,                                    
                'where_do_you_live'                                       => $host_family->where_do_you_live,                                       
                'firstname'                                               => $host_family->firstname,                                               
                'lastname'                                                => $host_family->lastname,                                                
                'address'                                                 => $host_family->address,                                                 
                'zipcode'                                                 => $host_family->zipcode,                                                 
                'city'                                                    => $host_family->city,                                                    
                'state_region'                                            => $host_family->state_region,                                            
                'country'                                                 => $host_family->country,                                                 
                'mobile_phone_no'                                         => $host_family->mobile_phone_no,                                         
                'letter'                                                  => $host_family->letter,                                                  
             );
             $where = array("wp_user_id" => get_current_user_id());
             $this->_wpdb->update("aupair_registered_host_family", $data, $where);
        }
      
    }

?>