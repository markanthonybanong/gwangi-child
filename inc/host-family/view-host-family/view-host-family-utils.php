<?php
    class View_Host_Family_Utils{
        private $_host_family                 = null; 
        private $_preferred_nationalites      = null;    
        private $_applicants_living_living_in = null;
        private $_languages_spoken_at_home    = null;   
        private $_string_utils                = null;
        public function __construct(
            $host_family,
            $preferred_nationalities,
            $applicants_living_in,
            $languages_spoken_at_home,
            $string_utils
        ){
                $this->_host_family                 = $host_family;
                $this->_preferred_nationalites      = $preferred_nationalities;
                $this->_applicants_living_living_in = $applicants_living_in;
                $this->_languages_spoken_at_home    = $languages_spoken_at_home;
                $this->_string_utils                = $string_utils;
        }
        private function selected_take_care_of_children_from_age(){
            $ages = array();
            if ($this->_host_family->ang_takecare_children_age_zero_to_one === "1"){
                array_push($ages, '0 - 1 year old');
            }
            if($this->_host_family->ang_takecare_children_age_one_to_five === "1"){
                array_push($ages, '1 - 5 years old');
            }
            if($this->_host_family->ang_takecare_children_age_six_to_ten === "1"){
                array_push($ages, '6 - 10 years old');
            }
            if($this->_host_family->ang_takecare_children_age_eleven_to_fourteen === "1"){
                array_push($ages, '11 - 14 years old');
            }
            if($this->_host_family->ang_takecare_children_age_fifteen_plus === "1"){
                array_push($ages, '15+ years old');
            }
            return $this->_string_utils->convert_array_items_to_single_string($ages);
        }
        private function selected_assist_and_provide_support_to_elderly_in(){
            $services = array();
            if($this->_host_family->cl_assistance_support_in_walks_and_outings === "1"){
                array_push($services, 'Walks & outings');
            }if($this->_host_family->cl_assistance_support_in_mobility_support ==="1"){
                array_push($services, 'Mobility support');
            }if($this->_host_family->cl_assistance_support_in_driving === "1"){
                array_push($services, 'Driving');
            }if($this->_host_family->cl_assistance_support_in_errands_shopping === "1"){
                array_push($services, 'Errands/Shopping');
            }if($this->_host_family->cl_assistance_support_in_cleaning_and_laundry === "1"){
                array_push($services, 'Cleaning & Laundry');
            }if($this->_host_family->cl_assistance_support_in_light_domestic_work === "1"){
                array_push($services, 'Light domestic work');
            }if($this->_host_family->cl_assistance_support_in_cooking_meals === "1"){
                array_push($services, 'Cooking meals');
            }if($this->_host_family->cl_assistance_support_in_washing_and_dressing === "1"){
                array_push($services, 'Washing & Dressing');
            }if($this->_host_family->cl_assistance_support_in_companionship_and_conversation === "1"){
                array_push($services, 'Companionship & Converstion');
            }
            return $this->_string_utils->convert_array_items_to_single_string($services);
        }
        private function selected_preferred_subjects(){
            $subjects = array();
            if($this->_host_family->lo_tutor_teach_mathematics === "1"){
                array_push($subjects, 'Mathematics');
            }
            if($this->_host_family->lo_tutor_teach_physics === "1"){
                array_push($subjects, 'Physics');
            }
            if($this->_host_family->lo_tutor_teach_chemistry === "1"){
                array_push($subjects, 'Chemistry');
            }
            if($this->_host_family->lo_tutor_teach_biology === "1"){
                array_push($subjects, 'Biology');
            }
            if($this->_host_family->lo_tutor_teach_english === "1"){
                array_push($subjects, 'English');
            }
            if($this->_host_family->lo_tutor_teach_german === "1"){
                array_push($subjects, 'German');
            }
            if($this->_host_family->lo_tutor_teach_french === "1"){
                array_push($subjects, 'French');
            }
            if($this->_host_family->lo_tutor_teach_spanish === "1"){
                array_push($subjects, 'Spanish');
            }
            if($this->_host_family->lo_tutor_teach_italian === "1"){
                array_push($subjects, 'Italian');
            }
            if($this->_host_family->lo_tutor_teach_music === "1"){
                array_push($subjects, 'Music');
            }
            if($this->_host_family->lo_tutor_teach_sport === "1"){
                array_push($subjects, 'Sport');
            }
            return $this->_string_utils->convert_array_items_to_single_string($subjects);
        }
        private function selected_activities_with_kids(){
            $activities = array();
            if($this->_host_family->lv_tutor_can_do_activity_homework_assistance === "1"){
                array_push($activities, 'Homework Assistance');
            }
            if($this->_host_family->lv_tutor_can_do_activity_book_reading === "1"){
                array_push($activities, 'Book Reading');
            }
            if($this->_host_family->lv_tutor_can_do_activity_art_and_craft === "1"){
                array_push($activities, 'Art & Craft');
            }
            if($this->_host_family->lv_tutor_can_do_activity_drawing_and_cutting === "1"){
                array_push($activities, 'Drawing & Cutting');
            }
            if($this->_host_family->lv_tutor_can_do_activity_numbers_and_counting === "1"){
                array_push($activities, 'Numbers & Counting');
            }
            if($this->_host_family->lv_tutor_can_do_activity_letters_and_sound === "1"){
                array_push($activities, 'Letters & Sounds');
            }
            if($this->_host_family->lv_tutor_can_do_activity_songs_and_poetry === "1"){
                array_push($activities, 'Songs & Poetry');
            }
            if($this->_host_family->lv_tutor_can_do_activity_mind_games_and_activity === "1"){
                array_push($activities, 'Mind Games & Activity');
            }
            return $this->_string_utils->convert_array_items_to_single_string($activities);
        }
        private function selected_student_age_group(){
            $age_groups = array();
            if($this->_host_family->lov_student_age_group_infants === "1"){
                array_push($age_groups, 'Infants(0-1)');
            }
            if($this->_host_family->lov_student_age_group_toddlers === "1"){
                array_push($age_groups, 'Toddlers(2-3)');
            }
            if($this->_host_family->lov_student_age_group_preschoolers === "1"){
                array_push($age_groups, 'Preschoolers(4-5)');
            }
            if($this->_host_family->lov_student_age_group_primary_school === "1"){
                array_push($age_groups, 'Primary School(6-12)');
            }
            if($this->_host_family->lov_student_age_group_teenagers === "1"){
                array_push($age_groups, 'Teenagers(13-17)');
            }
            if($this->_host_family->lov_student_age_group_young_adults === "1"){
                array_push($age_groups, 'Young Adults(18-30)');
            }
            if($this->_host_family->lov_student_age_group_adults === "1"){
                array_push($age_groups, 'Adults(31-60)');
            }
            if($this->_host_family->lov_student_age_group_senior === "1"){
                array_push($age_groups, 'Seniors(60+)');
            }
            return $this->_string_utils->convert_array_items_to_single_string($age_groups);
        }
        public function looking_for(){
            $jobs = array();
            if($this->_host_family->looking_for_aupair === "1"){
                array_push($jobs, "Aupair");
            }
            if($this->_host_family->looking_for_nanny === "1"){
                array_push($jobs, "Nanny");
            }
            if($this->_host_family->looking_for_granny_aupair === "1"){
                array_push($jobs, "Granny aupair");
            }
            if($this->_host_family->looking_for_caregiver_for_elderly === "1"){
                array_push($jobs, "Caregiver for elderly");
            }
            if($this->_host_family->looking_for_live_in_help === "1"){
                array_push($jobs, "Live in help");
            }
            if($this->_host_family->looking_for_live_in_tutor === "1"){
                array_push($jobs, "Live in tutor");
            }
            return (count($jobs) === 2) ? "$jobs[0] & $jobs[1]":$jobs[0];
        }
        public function preferred_nationalities(){
            $preferred_nationalities = null;
            $i                       = 0;
            while($i < count($this->_preferred_nationalites)){
                $preferred_nationality = $this->_preferred_nationalites[$i];
                //next value is last index
                if($i+1 === count($this->_preferred_nationalites) - 1){
                    $preferred_nationalities .= "$preferred_nationality->nationality & ";
                } else if($i+1 === count($this->_preferred_nationalites)){ //last index
                    $preferred_nationalities .= $preferred_nationality->nationality;
                } else {
                    $preferred_nationalities .= "$preferred_nationality->nationality, ";
                }
                $i++;
            }
            return $preferred_nationalities;
        }
        public function applicants_living_in(){
            $living_in = null;
            $i         = 0;
            while($i < count($this->_applicants_living_living_in)){
                $applicant_living = $this->_applicants_living_living_in[$i];
                //next value is last index
                if($i+1 === count($this->_applicants_living_living_in) - 1){
                    $living_in .= "$applicant_living->country & ";
                } else if($i+1 === count($this->_applicants_living_living_in)){ //last index
                    $living_in .= $applicant_living->country;
                } else {
                    $living_in .= "$applicant_living->country, ";
                }
                $i++;
            }
            return $living_in;
        }
        public function languages_spoken_at_home(){
            $languages = null;
            $i                 = 0;
            while($i < count($this->_languages_spoken_at_home)){
                $languages_at_home = $this->_languages_spoken_at_home[$i];
                //next value is last index
                if($i+1 === count($this->_languages_spoken_at_home) - 1){
                    $languages .= "$languages_at_home->language & ";
                } else if($i+1 === count($this->_languages_spoken_at_home)){ //last index
                    $languages .= $languages_at_home->language;
                } else {
                    $languages .= "$languages_at_home->language, ";
                }
                $i++;
            }
            return $languages;
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
        public function looking_for_aupair_nanny_granny_aupair(){
            $mark_up = null;
            if(
               $this->_host_family->looking_for_aupair === "1" || 
               $this->_host_family->looking_for_nanny === "1" ||
               $this->_host_family->looking_for_granny_aupair === "1"
               ){
                    $jobs = array();
                    if($this->_host_family->looking_for_aupair === "1"){
                        array_push($jobs, "Aupair");
                    }
                    if($this->_host_family->looking_for_nanny === "1"){
                        array_push($jobs, "Nanny");
                    }
                    if($this->_host_family->looking_for_granny_aupair === "1"){
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
                                    <h5>Minium required hours childcare experience for the past 24 months</h5>
                                    <p>'.$this->_host_family->ang_minimum_required_childcare_experience.'</p>
                                </div>';
                    $mark_up .= '<div class="how-many-children-people-would-you-like-to-take-care-of-container opacity-background">
                                    <h5>Number of children to be taken care of</h5>
                                    <p>'.$this->_host_family->ang_number_children_would_you_like_to_care.'</p>
                                </div>';
                    $mark_up .= '<div class="would-you-take-care-of-children-with-special-needs-container">
                                  <h5>Take care of children with special needs</h5>
                                  <p>'.$this->_host_family->ang_take_care_children_with_special_needs.'</p>
                                </div>';
                    if($this->_host_family->ang_take_care_children_with_special_needs === "Yes"){
                        $mark_up .= '<div class="describe-container">
                                        <h6>Children</h6>
                                        <p>'.$this->_host_family->ang_describe_children_special_needs.'</p>
                                    </div>';
                    }
               }    
            return $mark_up;   
        }
        public function looking_for_caregiver_for_elderly_live_in_help(){
            $mark_up = null;
            if(
                $this->_host_family->looking_for_caregiver_for_elderly === "1" ||
                $this->_host_family->looking_for_live_in_help === "1"
              ){
               $jobs = array();
               if($this->_host_family->looking_for_caregiver_for_elderly === "1"){
                  array_push($jobs, 'Caregiver for elderly');
               }
               if($this->_host_family->looking_for_live_in_help === "1"){
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
                              <p>'.$this->_host_family->cl_applicant_take_care_people_with_special_needs.'</p>
                            </div>';
                if($this->_host_family->cl_applicant_take_care_people_with_special_needs === "Yes"){
                    $mark_up .= '<div class="describe-container">
                                    <h6>People</h6>
                                    <p>'.$this->_host_family->cl_describe_people_special_needs.'</p>
                                </div>';
                }
            }
            return $mark_up;
        }
        public function looking_for_liveintutor(){
            $mark_up = null;
            if( $this->_host_family->looking_for_live_in_tutor === "1"){
                $mark_up .= '<div class="job-title-container">
                                <h5 class="list-border">Live in Tutor</h5>
                            </div>';

                $mark_up .= '<div class="preferred-subjects-container opacity-background">
                                <h5>Tutor who can teach</h5>
                                <p>'.$this->selected_preferred_subjects().'</p>
                            </div>';

                $mark_up .= '<div class="activities-with-kids-container">
                                <h5>Tutor who can do activities</h5>
                                <p>'.$this->selected_activities_with_kids().'</p>
                            </div>';

                $mark_up .= '<div class="preferred-student-age-group-container opacity-background">
                                <h5>Student age group</h5>
                                <p>'.$this->selected_student_age_group().'</p>
                            </div>';
            }
            return $mark_up;
        }

    }

?>