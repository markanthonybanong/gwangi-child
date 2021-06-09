<?php
    class View_Employee_Utils{
        private $_employee                     = null; 
        private $_employee_preferred_countries = null;
        private $_string_utils                 = null;
        private $_db                           = null;
        public function __construct(
            $employee,
            $employee_preferred_countries,
            $string_utils,
            $db
        ){
            $this->_employee                     = $employee;
            $this->_employee_preferred_countries = $employee_preferred_countries;
            $this->_string_utils                 = $string_utils;
            $this->_db                           = $db;
        }
        private function selected_take_care_of_children_from_age(){
            $ages = array();
            if ($this->_employee->ang_takecare_children_age_zero_to_one === "1"){
                array_push($ages, '0 - 1 year old');
            }
            if($this->_employee->ang_takecare_children_age_one_to_five === "1"){
                array_push($ages, '1 - 5 years old');
            }
            if($this->_employee->ang_takecare_children_age_six_to_ten === "1"){
                array_push($ages, '6 - 10 years old');
            }
            if($this->_employee->ang_takecare_children_age_eleven_to_fourteen === "1"){
                array_push($ages, '11 - 14 years old');
            }
            if($this->_employee->ang_takecare_children_age_fifteen_plus === "1"){
                array_push($ages, '15+ years old');
            }
            return $this->_string_utils->convert_array_items_to_single_string($ages);
        }
        private function selected_assist_and_provide_support_to_elderly_in(){
            $services = array();
            if($this->_employee->cl_assist_provide_support_in_walks_outings === "1"){
                array_push($services, 'Walks & outings');
            }if($this->_employee->cl_assist_provide_support_in_mobility_support ==="1"){
                array_push($services, 'Mobility support');
            }if($this->_employee->cl_assist_provide_support_in_driving === "1"){
                array_push($services, 'Driving');
            }if($this->_employee->cl_assist_provide_support_in_errands_shopping === "1"){
                array_push($services, 'Errands/Shopping');
            }if($this->_employee->cl_assist_provide_support_in_cleaning_laundry === "1"){
                array_push($services, 'Cleaning & Laundry');
            }if($this->_employee->cl_assist_provide_support_in_light_domestic_work === "1"){
                array_push($services, 'Light domestic work');
            }if($this->_employee->cl_assist_provide_support_in_cooking_meals === "1"){
                array_push($services, 'Cooking meals');
            }if($this->_employee->cl_assist_provide_support_in_washing_dressing === "1"){
                array_push($services, 'Washing & Dressing');
            }if($this->_employee->cl_assist_provide_support_in_companionship_conversation === "1"){
                array_push($services, 'Companionship & Converstion');
            }
            return $this->_string_utils->convert_array_items_to_single_string($services);
        }
        private function selected_preferred_subjects(){
            $subjects = array();
            if($this->_employee->lo_preffered_subject_mathematics === "1"){
                array_push($subjects, 'Mathematics');
            }
            if($this->_employee->lo_preffered_subject_physics === "1"){
                array_push($subjects, 'Physics');
            }
            if($this->_employee->lo_preffered_subject_chemistry === "1"){
                array_push($subjects, 'Chemistry');
            }
            if($this->_employee->lo_preffered_subject_biology === "1"){
                array_push($subjects, 'Biology');
            }
            if($this->_employee->lo_preffered_subject_english === "1"){
                array_push($subjects, 'English');
            }
            if($this->_employee->lo_preffered_subject_german === "1"){
                array_push($subjects, 'German');
            }
            if($this->_employee->lo_preffered_subject_french === "1"){
                array_push($subjects, 'French');
            }
            if($this->_employee->lo_preffered_subject_spanish === "1"){
                array_push($subjects, 'Spanish');
            }
            if($this->_employee->lo_preffered_subject_italian === "1"){
                array_push($subjects, 'Italian');
            }
            if($this->_employee->lo_preffered_subject_music === "1"){
                array_push($subjects, 'Music');
            }
            if($this->_employee->lo_preffered_subject_sport === "1"){
                array_push($subjects, 'Sport');
            }
            return $this->_string_utils->convert_array_items_to_single_string($subjects);
        }
        private function selected_activities_with_kids(){
            $activities = array();
            if($this->_employee->lv_activity_with_kids_homework_assistance === "1"){
                array_push($activities, 'Homework Assistance');
            }
            if($this->_employee->lv_activity_with_kids_book_reading === "1"){
                array_push($activities, 'Book Reading');
            }
            if($this->_employee->lv_activity_with_kids_art_craft === "1"){
                array_push($activities, 'Art & Craft');
            }
            if($this->_employee->lv_activity_with_kids_drawing_cutting === "1"){
                array_push($activities, 'Drawing & Cutting');
            }
            if($this->_employee->lv_activity_with_kids_numbers_counting === "1"){
                array_push($activities, 'Numbers & Counting');
            }
            if($this->_employee->lv_activity_with_kids_letters_sounds === "1"){
                array_push($activities, 'Letters & Sounds');
            }
            if($this->_employee->lv_activity_with_kids_songs_poetry === "1"){
                array_push($activities, 'Songs & Poetry');
            }
            if($this->_employee->lv_activity_with_kids_mind_games_activity === "1"){
                array_push($activities, 'Mind Games & Activity');
            }
            return $this->_string_utils->convert_array_items_to_single_string($activities);
        }
        private function selected_preferred_student_age_group(){
            $age_groups = array();
            if($this->_employee->lov_preferred_student_age_group_infants === "1"){
                array_push($age_groups, 'Infants(0-1)');
            }
            if($this->_employee->lov_preferred_student_age_group_toddllers === "1"){
                array_push($age_groups, 'Toddlers(2-3)');
            }
            if($this->_employee->lov_preferred_student_age_group_preschoolers === "1"){
                array_push($age_groups, 'Preschoolers(4-5)');
            }
            if($this->_employee->lov_preferred_student_age_group_primary_school === "1"){
                array_push($age_groups, 'Primary School(6-12)');
            }
            if($this->_employee->lov_preferred_student_age_group_teenagers === "1"){
                array_push($age_groups, 'Teenagers(13-17)');
            }
            if($this->_employee->lov_preferred_student_age_group_young_adults === "1"){
                array_push($age_groups, 'Young Adults(18-30)');
            }
            if($this->_employee->lov_preferred_student_age_group_adults === "1"){
                array_push($age_groups, 'Adults(31-60)');
            }
            if($this->_employee->lov_preferred_student_age_group_seniors === "1"){
                array_push($age_groups, 'Seniors(60+)');
            }
            return $this->_string_utils->convert_array_items_to_single_string($age_groups);
        }
        private function setLOVjobTitle(){
            $jobs = array();
            if($this->_employee->looking_for_job_as_live_in_tutor  === "1"){
                array_push($jobs, 'Live in tutor');
            }
            if($this->_employee->looking_for_job_as_online_tutor === "1"){
                array_push($jobs, 'Online tutor');
            }
            if($this->_employee->looking_for_job_as_virtual_childcare  === "1"){
                array_push($jobs, 'Virtual Childcare');
            }
            return $this->_string_utils->convert_array_items_to_single_string($jobs);
        }
        public function looking_for_job(){
            $jobs = array();
            if($this->_employee->looking_for_job_as_aupair === "1"){
                array_push($jobs, "Aupair");
            }
            if($this->_employee->looking_for_job_as_nanny === "1"){
                array_push($jobs, "Nanny");
            }
            if($this->_employee->looking_for_job_as_granny_aupair === "1"){
                array_push($jobs, "Granny aupair");
            }
            if($this->_employee->looking_for_job_as_caregiver_for_elderly === "1"){
                array_push($jobs, "Caregiver for elderly");
            }
            if($this->_employee->looking_for_job_as_live_in_help === "1"){
                array_push($jobs, "Live in help");
            }
            if($this->_employee->looking_for_job_as_live_in_tutor === "1"){
                array_push($jobs, "Live in tutor");
            }
            if($this->_employee->looking_for_job_as_online_tutor === "1"){
                array_push($jobs, "Online tutor");
            }
            if($this->_employee->looking_for_job_as_virtual_childcare === "1"){
                array_push($jobs, "Virtual Childcare");
            }
            return (count($jobs) === 2) ? "$jobs[0] & $jobs[1] jobs":"$jobs[0] job";
        }
        public function preferred_countries(){
            $preferred_countries = null;
            $i                   = 0;
            while($i < count($this->_employee_preferred_countries)){
                $preferred_country = $this->_employee_preferred_countries[$i];
                //next value is last index
                if($i+1 === count($this->_employee_preferred_countries) - 1){
                    $preferred_countries .= "$preferred_country->country & ";
                } else if($i+1 === count($this->_employee_preferred_countries)){ //last index
                    $preferred_countries .= $preferred_country->country;
                } else {
                    $preferred_countries .= "$preferred_country->country, ";
                }
                $i++;
            }
            return $preferred_countries;

        }
        public function preferred_area(){
            $areas = array();
            if($this->_employee->preferred_area_all === "1"){
                array_push($areas, "Small City");
                array_push($areas, "Big City");
                array_push($areas, "Suburd");
                array_push($areas, "Countryside");
                array_push($areas, "Town");
                array_push($areas, "Village");
                array_push($areas, "Sea Side");
            } else {
                if($this->_employee->preferred_area_small_city === "1"){
                    array_push($areas, 'Small City');
                }
                if($this->_employee->preferred_area_big_city === "1"){
                    array_push($areas, 'Big City');
                }
                if($this->_employee->preferred_area_suburd === "1"){
                    array_push($areas, 'Suburd');
                }
                if($this->_employee->preferred_area_countryside === "1"){
                    array_push($areas, 'Countryside');
                }
                if($this->_employee->preferred_area_town === "1"){
                    array_push($areas, 'Town');
                }
                if($this->_employee->preferred_area_village === "1"){
                    array_push($areas, 'Village');
                }
                if($this->_employee->preferred_area_sea_side === "1"){
                    array_push($areas, 'Sea Side');
                }
            }
            return $this->_string_utils->convert_array_items_to_single_string($areas);
        }
        public function looking_for_job_aupair_nanny_granny_aupair(){
            $mark_up = null;
            if(
               $this->_employee->looking_for_job_as_aupair === "1" || 
               $this->_employee->looking_for_job_as_nanny === "1" ||
               $this->_employee->looking_for_job_as_granny_aupair === "1"
               ){
                    $jobs = array();
                    if($this->_employee->looking_for_job_as_aupair === "1"){
                        array_push($jobs, "Aupair");
                    }
                    if($this->_employee->looking_for_job_as_nanny === "1"){
                        array_push($jobs, "Nanny");
                    }
                    if($this->_employee->looking_for_job_as_granny_aupair === "1"){
                        array_push($jobs, "Granny aupair");
                    }
                    $mark_up .= '<div class="job-title-container">
                                    <h5 class="list-border">'.$this->_string_utils->convert_array_items_to_single_string($jobs).'</h5>
                                </div>';
                    $mark_up .= '<div class="i-will-take-care-of-children-from-age-container opacity-background">
                                    <h5>Take care of children from age</h5>
                                    <p>'.$this->selected_take_care_of_children_from_age().'</p>
                                </div>';
                    $mark_up .= '<div class="hours-of-child-care-experience-in-the-past-24-months-container">
                                    <h5>Hours of child care experience in the past 24 months</h5>
                                    <p>'.$this->_employee->ang_hours_childcare_experience.'</p>
                                </div>';
                    $mark_up .= '<div class="how-many-children-people-would-you-like-to-take-care-of-container opacity-background">
                                    <h5>Number of children/people to be taken care of</h5>
                                    <p>'.$this->_employee->ang_number_of_people_children_to_take_care.'</p>
                                </div>';
                    $mark_up .=  '<div class="would-you-work-for-a-single-parent-container">
                                    <h5>Work for a single parent</h5>
                                    <p>'.$this->_employee->ang_would_work_for_single_parent.'</p>
                                </div>';
                    $mark_up .= '<div class="would-you-take-care-of-children-with-special-needs-container opacity-background">
                                  <h5>Take care of children with special needs</h5>
                                  <p>'.$this->_employee->ang_take_care_children_special_needs.'</p>
                                </div>';
               }    
            return $mark_up;   
        }
        public function looking_for_job_caregiver_for_elderly_live_in_help(){
            $mark_up = null;
            if(
                $this->_employee->looking_for_job_as_caregiver_for_elderly === "1" ||
                $this->_employee->looking_for_job_as_live_in_help === "1"
              ){
               $jobs = array();
               if($this->_employee->looking_for_job_as_caregiver_for_elderly === "1"){
                  array_push($jobs, 'Caregiver for elderly');
               }
               if($this->_employee->looking_for_job_as_live_in_help === "1"){
                   array_push($jobs, 'Live in help');
               }
                $mark_up .= '<div class="job-title-container">
                              <h5 class="list-border">'.$this->_string_utils->convert_array_items_to_single_string($jobs).'</h5>
                            </div>';
                $mark_up .= '<div class="assist-and-provie-support-to-elderly-in-container opacity-background">
                              <h5>Assist and provide support to elderly in</h5>
                              <p>'.$this->selected_assist_and_provide_support_to_elderly_in().'</p>
                            </div>';
                $mark_up .= '<div class="would-you-take-care-of-people-with-special-needs-container">
                              <h5>Take care of people with special needs</h5>
                              <p>'.$this->_employee->cl_take_care_people_with_special_needs.'</p>
                            </div>';
            }
            return $mark_up;
        }
        public function looking_for_job_liveintutor_onlinetutor_virtualchildcare(){
            $mark_up = null;
            if(
                $this->_employee->looking_for_job_as_live_in_tutor === "1" ||
                $this->_employee->looking_for_job_as_online_tutor === "1" ||
                $this->_employee->looking_for_job_as_virtual_childcare === "1"
            ){
                $mark_up .= '<div class="job-title-container">
                                <h5 class="list-border">'.$this->setLOVjobTitle().'</h5>
                            </div>';
                //selected 2 in LOV
                if(
                    $this->_employee->looking_for_job_as_live_in_tutor === "1" && $this->_employee->looking_for_job_as_online_tutor === "1" ||
                    $this->_employee->looking_for_job_as_live_in_tutor === "1" && $this->_employee->looking_for_job_as_virtual_childcare === "1" ||
                    $this->_employee->looking_for_job_as_online_tutor  === "1" && $this->_employee->looking_for_job_as_virtual_childcare === "1"
                  ){
                    $mark_up .= '<div class="preferred-subjects-container opacity-background">
                                    <h5>Preferred subjects</h5>
                                    <p>'.$this->selected_preferred_subjects().'</p>
                                </div>';
                    $mark_up .=  '<div class="activities-with-kids-container">
                                    <h5>Activities with kids</h5>
                                    <p>'.$this->selected_activities_with_kids().'</p>
                                </div>';
                    $mark_up .= '<div class="preferred-student-age-group-container opacity-background">
                                    <h5>Preferred student age group</h5>
                                    <p>'.$this->selected_preferred_student_age_group().'</p>
                                </div>';
                    $mark_up .= '<div class="price-per-hour-container">
                                    <h5>Price per hour</h5>
                                    <h6>Amount</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_amount.'</p>
                                    <h6>Currency</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_currency.'</p>
                                </div>';
                }
                //selected 1 IN LOV
                if(
                    $this->_employee->looking_for_job_as_live_in_tutor === "1" &&
                    $this->_employee->looking_for_job_as_online_tutor === "0" &&
                    $this->_employee->looking_for_job_as_virtual_childcare === "0"
                ){
                    $mark_up .= '<div class="preferred-subjects-container opacity-background">
                                    <h5>Preferred subjects</h5>
                                    <p>'.$this->selected_preferred_subjects().'</p>
                                </div>';
                    $mark_up .= '<div class="activities-with-kids-container">
                                    <h5>Activities with kids</h5>
                                    <p>'.$this->selected_activities_with_kids().'</p>
                                </div>';
                    $mark_up .= '<div class="preferred-student-age-group-container opacity-background">
                                    <h5>Preferred student age group</h5>
                                    <p>'.$this->selected_preferred_student_age_group().'</p>
                                </div>';
                }
                if(
                    $this->_employee->looking_for_job_as_live_in_tutor === "0" &&
                    $this->_employee->looking_for_job_as_online_tutor === "1" &&
                    $this->_employee->looking_for_job_as_virtual_childcare === "0"
                ){
                    $mark_up .= '<div class="preferred-subjects-container opacity-background">
                                    <h5>Preferred subjects</h5>
                                    <p>'.$this->selected_preferred_subjects().'</p>
                                </div>';
                    $mark_up .= '<div class="preferred-student-age-group-container">
                                    <h5>Preferred student age group</h5>
                                    <p>'.$this->selected_preferred_student_age_group().'</p>
                                </div>';
                    $mark_up .= '<div class="price-per-hour-container opacity-background">
                                    <h5>Price per hour</h5>
                                    <h6>Amount</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_amount.'</p>
                                    <h6>Currency</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_currency.'</p>
                                </div>';
                }
                if(
                    $this->_employee->looking_for_job_as_live_in_tutor === "0" &&
                    $this->_employee->looking_for_job_as_online_tutor === "0" &&
                    $this->_employee->looking_for_job_as_virtual_childcare === "1"
                ){
                    $mark_up .= '<div class="activities-with-kids-container opacity-background">
                                    <h5>Activities with kids</h5>
                                    <p>'.$this->selected_activities_with_kids().'</p>
                                </div>';
                    $mark_up .= '<div class="preferred-student-age-group-container">
                                    <h5>Preferred student age group</h5>
                                    <p>'.$this->selected_preferred_student_age_group().'</p>
                                </div>';
                    $mark_up .= '<div class="price-per-hour-container opacity-background">
                                    <h5>Price per hour</h5>
                                    <h6>Amount</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_amount.'</p>
                                    <h6>Currency</h6>
                                    <p>'.$this->_employee->ov_price_per_hour_currency.'</p>
                                </div>';
                }
            }
            return $mark_up;
        }
        public function display_contact_information(){
             $mark_up = '<div class="contact-information-parent-container">
                            <h3 class="add-border-bottom">Contact Information(private)</h3>
                            <div class="contact-information-container">
                                <div class="fullname-container opacity-background">
                                    <h5>Fullname</h5>
                                    <p>'.$this->_employee->firstname.''.$this->_employee->lastname.'</p>
                                </div>       
                                <div class="address-container">
                                    <h5>Address</h5>
                                    <p>'.$this->_employee->address.'</p>
                                </div> 
                                <div class="zipcode-container opacity-background">
                                    <h5>Zip code</h5>
                                   <p>'.$this->_employee->zipcode.'</p>
                                </div>  
                                <div class="city-container">
                                   <h5>City</h5>
                                   <p>'.$this->_employee->city.'</p>
                                </div>
                                <div class="state-region-container opacity-background">
                                    <h5>State/Region</h5>
                                    <p>'.$this->_employee->state_region.'</p>
                                </div>
                                <div class="country-container">
                                   <h5>Country</h5>
                                   <p>'.$this->_employee->country.'</p>
                                </div>
                                <div class="mobile-phone-container opacity-background">
                                  <h5>Mobile Phone No.</h5>
                                  <p>'.$this->_employee->mobile_phone_no.'</p>
                                </div>
                            </div>     
                        </div>';
            return ($this->_employee->wp_user_id == get_current_user_id()) ? $mark_up : null;
        }
    }

?>