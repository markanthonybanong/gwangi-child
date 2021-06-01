<?php
    class Update_Host_Family_Utils{
        private $_variables = null;
        private $_host_family              = null;
        private $_preferred_nationalities  = array();
        private $_applicants_living_in     = array();
        private $_languages_spoken_at_home = array();
        public function __construct(
            $variables,
            $host_family,
            $preferred_nationalities,
            $applicants_living,
            $languages_spoken_at_home
        ){
            $this->_variables                = $variables;
            $this->_host_family              = $host_family;

            $i = 0;
            while($i < count($preferred_nationalities)){
                $nationality = $preferred_nationalities[$i];
                array_push($this->_preferred_nationalities, $nationality->nationality);   
                $i++;
            }
            $i = 0;
            while($i < count($applicants_living)){
                $country = $applicants_living[$i];
                array_push($this->_applicants_living_in, $country->country);
                $i++;
            }
            $i = 0;
            while($i < count($languages_spoken_at_home)){
                $language = $languages_spoken_at_home[$i];
                array_push($this->_languages_spoken_at_home, $language->language);
                $i++;
            }
        }
        private function selected_home_languages($language){
            $checked = null;
            if(isset($_POST['update']) && in_array($language, $_POST['spoken-at-home-languages'])){
                $checked = "checked";
            } else if(!isset($_POST['update']) && in_array($language, $this->_languages_spoken_at_home)){
                $checked = "checked";
            }
            return $checked;
        }
        private function have_selected_non_eu_countries(){
            $selected = false;
            for ($i=0; $i < count($_POST['applicant-living-in']); $i++) { 
                $country = $_POST['applicant-living-in'][$i];
               if(in_array($country, $this->_variables->normal_countries)){
                   $selected = true;
                   break;
               }
            }
            return $selected;
        }
        public function selected_photo_privacy($value){
            $checked = null;
            if($this->_host_family->photo_privacy === $value){
                $checked = "checked='checked'";
            }
            return $checked;
        }
        public function selected_preferred_nationality($nationality){
            $checked = null;
            if(isset($_POST['update']) && in_array($nationality, $_POST['preferred-nationalities'])){
                $checked = "checked";
            } else if(!isset($_POST['update']) && in_array($nationality, $this->_preferred_nationalities)){
                $checked = "checked";
            }
            return $checked;
        }
        public function selected_applicant_living_in($country){
            $checked = null;
            if(isset($_POST['update']) && in_array($country, $_POST['applicant-living-in'])){
                $checked = "checked";
            } else if(!isset($_POST['update']) && in_array($country, $this->_applicants_living_in)){
                $checked = "checked";
            }
            return $checked;    
        }
        //we are looking-for
        public function selected_we_are_looking_for($job_name){
             $checked = null;
             if(isset($_POST['update']) && in_array($job_name, $_POST['looking-for'])){
                 $checked = "checked";
             } else if(!isset($_POST['update'])){
                if($this->_host_family->looking_for_aupair === "1" && $job_name === "aupair"){
                    $checked = "checked";
                } else if ($this->_host_family->looking_for_nanny === "1" && $job_name === "nanny"){
                    $checked = "checked";
                } else if ($this->_host_family->looking_for_granny_aupair === "1" && $job_name === "granny aupair"){
                    $checked = "checked";
                }else if($this->_host_family->looking_for_caregiver_for_elderly === "1" && $job_name === "caregiver for elderly"){
                    $checked = "checked";
                } else if($this->_host_family->looking_for_live_in_help === "1" && $job_name === "live in help"){
                    $checked = "checked";
                } else if($this->_host_family->looking_for_live_in_tutor === "1" && $job_name === "live in tutor"){
                    $checked = "checked";
                } 
             }
             return $checked;
        }
        //How old are the children the applicants has to take care of
        public function selected_i_will_take_care_of_children_from_age($age){
            $checked = null;
            if(isset($_POST['update'])){
                if(
                  in_array("aupair", $_POST['looking-for']) ||
                  in_array("nanny", $_POST['looking-for']) ||
                  in_array("granny aupair", $_POST['looking-for'])
                ){
                    if(in_array($age, $_POST['take-care-children'])){
                        $checked = "checked";
                    }
                }
            } else if(
                     $this->_host_family->looking_for_aupair === "1" ||     
                     $this->_host_family->looking_for_nanny === "1" ||
                     $this->_host_family->looking_for_granny_aupair === "1"
                    
            ){
                if($this->_host_family->ang_takecare_children_age_zero_to_one === "1" && $age === "0 - 1 year old"){
                    $checked = "checked";
                }else if($this->_host_family->ang_takecare_children_age_one_to_five === "1" && $age === "1 - 5 years old"){
                    $checked = "checked";
                }else if($this->_host_family->ang_takecare_children_age_six_to_ten === "1" && $age === "6 - 10 years old"){
                    $checked = "checked";
                }else if($this->_host_family->ang_takecare_children_age_eleven_to_fourteen === "1" && $age === "11 - 14 years old"){
                    $checked = "checked";
                }else if($this->_host_family->ang_takecare_children_age_fifteen_plus === "1" && $age === "15+ years old"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //Minium required hours childcare experience for the past 24 months?
        public function selected_min_required_hours_children_exp($hours){
            $selected = null;
            if(isset($_POST['update'])){
                if( 
                    in_array("aupair", $_POST['looking-for']) ||
                    in_array("nanny", $_POST['looking-for']) ||
                    in_array("granny aupair", $_POST['looking-for'])
                ){
                    if($_POST['hours-child-care-experience'] === $hours){
                        $selected = "selected";
                    }
                }
            } else if( 
                     $this->_host_family->looking_for_aupair === "1" ||     
                     $this->_host_family->looking_for_nanny === "1" ||
                     $this->_host_family->looking_for_granny_aupair === "1"
            ){
                if($this->_host_family->ang_minimum_required_childcare_experience === $hours){
                    $selected = "selected";
                }
            }
            return $selected;
        }
        //How many children would you like to take care of?
        public function inputted_number_of_children_to_be_taken_care(){
            $value = null;
            if(isset($_POST['update'])){
                if(
                   in_array("aupair", $_POST['looking-for']) ||
                   in_array("nanny", $_POST['looking-for']) ||
                   in_array("granny aupair", $_POST['looking-for'])
                ){
                    $value = $_POST['how-many-children-people-would'];
                }
            } else if( 
                     $this->_host_family->looking_for_aupair === "1" ||     
                     $this->_host_family->looking_for_nanny === "1" ||
                     $this->_host_family->looking_for_granny_aupair === "1"
            ){
                $value = $this->_host_family->ang_number_children_would_you_like_to_care;
            }
            return $value;
        }
        //Does the applicant have to take care children with special needs
        public function selected_take_care_children_with_special_needs($answer){
            $checked = null;
            if(isset($_POST['update'])){
                if(
                    in_array("aupair", $_POST['looking-for']) ||
                    in_array("nanny", $_POST['looking-for']) ||
                    in_array("granny aupair", $_POST['looking-for'])
                ){
                    if($_POST['take-care-children-with-special-needs'] === $answer){
                        $checked = "checked";
                    }
                }
            } else if( 
                $this->_host_family->looking_for_aupair === "1" ||     
                $this->_host_family->looking_for_nanny === "1" ||
                $this->_host_family->looking_for_granny_aupair === "1"
            ){
                if($this->_host_family->ang_take_care_children_with_special_needs === $answer){
                    $checked = "checked";
                }
            }
            return $checked;
        } 
        //Describe children
        public function inputted_describe_children(){
            $value = null;
            if(isset($_POST['update'])){
                if(
                    in_array("aupair", $_POST['looking-for']) ||
                    in_array("nanny", $_POST['looking-for']) ||
                    in_array("granny aupair", $_POST['looking-for'])
                ){
                    if($_POST['take-care-children-with-special-needs'] === "Yes"){
                        $value = $_POST['describe-children-special-needs'];
                    }
                }
            } else if( 
                $this->_host_family->looking_for_aupair === "1" ||     
                $this->_host_family->looking_for_nanny === "1" ||
                $this->_host_family->looking_for_granny_aupair === "1"
            ) {
                if($this->_host_family->ang_take_care_children_with_special_needs === "Yes"){
                    $value = $this->_host_family->ang_describe_children_special_needs;
                }
            }
            return $value;
        }
        //We need assistance and support in
        public function selected_need_assistance_and_support_in($answer){
            $checked = null;
            if(isset($_POST['update'])){
                if( in_array("caregiver for elderly", $_POST['looking-for']) || in_array("live in help", $_POST['looking-for'])){
                    if(in_array($answer, $_POST['need-assistance-support-in'])) {
                        $checked = "checked";
                    }
                }
            } else if($this->_host_family->looking_for_caregiver_for_elderly === "1" || $this->_host_family->looking_for_live_in_help === "1"){
                if($this->_host_family->cl_assistance_support_in_walks_and_outings === "1" && $answer === "walks and outings"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_mobility_support === "1" && $answer === "mobility support"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_driving === "1" && $answer === "driving"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_errands_shopping === "1" && $answer === "errands/shopping"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_cleaning_and_laundry === "1" && $answer === "cleaning & laundry"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_light_domestic_work === "1" && $answer === "light domestic work"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_cooking_meals === "1" && $answer === "cooking meals"){
                    $checked = "checked";
                }else if($this->_host_family->cl_assistance_support_in_washing_and_dressing === "1" && $answer === "washing & dressing"){
                    $checked = "checked";
                }else if ($this->_host_family->cl_assistance_support_in_companionship_and_conversation === "1" && $answer === "companionship & conversation"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //Does the applicant have to take care people with special needs?
        public function selected_applicant_have_to_take_care_people_with_special_needs($answer){
            $checked = null;
            if(isset($_POST['update'])){
                if(
                    in_array("caregiver for elderly", $_POST['looking-for']) ||
                    in_array("live in help", $_POST['looking-for'])
                ){
                    if($_POST['take-care-people-with-special-needs'] === $answer){
                        $checked = "checked";
                    }
                }
            } else if($this->_host_family->looking_for_caregiver_for_elderly === "1" || $this->_host_family->looking_for_live_in_help === "1"){
                if($this->_host_family->cl_applicant_take_care_people_with_special_needs === $answer){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //Describe people
        public function inputted_describe_people(){
            $value = null;
            if(isset($_POST['update'])){
                if(
                    in_array("caregiver for elderly", $_POST['looking-for']) ||
                    in_array("live in help", $_POST['looking-for'])
                ){
                    $value = $_POST['describe-people-special-needs'];
                }
            } else if($this->_host_family->looking_for_caregiver_for_elderly === "1" || $this->_host_family->looking_for_live_in_help === "1"){
                if($this->_host_family->cl_applicant_take_care_people_with_special_needs === "Yes"){
                    $value = $this->_host_family->cl_describe_people_special_needs;
                }
            }
            return $value;
        }
        //We need a tutor who can teach
        public function selected_tutor_who_can_teach($subject){
            $checked = null;
            if(isset($_POST['update'])){
                if( in_array("live in tutor", $_POST['looking-for'])){
                    if(in_array($subject, $_POST['tutor-who-can-teach'])){
                        $checked = "checked";
                    }
                }
            } else if($this->_host_family->looking_for_live_in_tutor === "1"){
                if($this->_host_family->lo_tutor_teach_mathematics === "1"  && $subject === "mathematics"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_physics === "1"  && $subject === "physics"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_chemistry === "1" && $subject === "chemistry"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_biology === "1" && $subject === "biology"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_english === "1" && $subject === "english"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_german === "1" && $subject === "german"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_french === "1" && $subject === "french"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_spanish === "1" && $subject === "spanish"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_italian === "1" && $subject === "italian"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_music === "1" && $subject === "music"){
                    $checked = "checked";
                } else if($this->_host_family->lo_tutor_teach_sport === "1" && $subject === "sport"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //We need a tutor who can do the following activities with our kids
        public function selected_tutor_who_can_do_activities($activity){
            $checked = null;
            if(isset($_POST['update'])){
                if( in_array("live in tutor", $_POST['looking-for'])){
                    if(in_array($activity, $_POST['activities-with-kids'])){
                        $checked = "checked";
                    }
                }
            } else if($this->_host_family->looking_for_live_in_tutor === "1"){
                if($this->_host_family->lv_tutor_can_do_activity_homework_assistance === "1" && $activity === "homework assistance"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_book_reading === "1" && $activity === "book reading"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_art_and_craft === "1" && $activity === "art & craft"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_drawing_and_cutting === "1" && $activity === "drawing & cutting"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_numbers_and_counting === "1" && $activity === "numbers & counting"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_letters_and_sound === "1" && $activity === "letters & sound"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_songs_and_poetry === "1" && $activity === "songs & poetry"){
                    $checked = "checked";
                } else if($this->_host_family->lv_tutor_can_do_activity_mind_games_and_activity === "1" && $activity === "mind games & activity"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //How old are the students the tutor should teach?
        public function selected_student_age_group($age_group){
            $checked = null;
            if(isset($_POST['update'])){
                if( in_array("live in tutor", $_POST['looking-for'])){
                    if(in_array($age_group, $_POST['student-age-group'])){
                        $checked = "checked";
                    }
                }
            } else if($this->_host_family->looking_for_live_in_tutor === "1"){
                if($this->_host_family->lov_student_age_group_infants === "1" && $age_group === "infants (0-1)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_toddlers === "1" && $age_group === "toddlers (2-3)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_preschoolers === "1" && $age_group === "preschoolers (4-5)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_primary_school === "1" && $age_group === "primary school (6-12)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_teenagers === "1" && $age_group === "teenagers (13-17)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_young_adults === "1" && $age_group === "young adults (18-30)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_adults === "1" && $age_group === "adults (31-60)"){
                    $checked = "checked";
                } else if($this->_host_family->lov_student_age_group_senior === "1" && $age_group === "senior (60+)"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //preferred nationalities
        public function selected_preferred_nationalities(){
            $preferred_nationalities_in_div = null;
            $nationalites                   = null;
            $count_nationality              = 0;
            $i                              = 3;
            while($i < count($this->_variables->nationalities)){
                $nationality = $this->_variables->nationalities[$i];
                $checked = $this->selected_preferred_nationality($nationality);
                //last country
                if($i + 1 === count($this->_variables->nationalities)){
                    $nationalites                   .= "<label><input type='checkbox' name='preferred-nationalities[]' value='$nationality' $checked/>$nationality</label>";
                    $preferred_nationalities_in_div .= "<div>$nationalites</div>";
                } else if($count_nationality < 3){
                    $nationalites .= "<label><input type='checkbox' name='preferred-nationalities[]' value='$nationality' $checked/>$nationality</label> ";
                    $count_nationality++;
                } else {
                    $nationalites                   .= "<label><input type='checkbox' name='preferred-nationalities[]' value='$nationality' $checked/>$nationality</label>";
                    $preferred_nationalities_in_div .= "<div>$nationalites</div>";
                    $nationalites                    = null;
                    $count_nationality               = 0;
                }
                $i++;
            }
            return $preferred_nationalities_in_div;
        }
        //applicant currently living in
        public function selected_applicant_living_in_eu_countries(){
            $eu_countries_in_div = null;
            $eu_countries        = null;
            $count_country       = 0;
            $countries           = $this->_variables->eu_countries;
            $i                   = 2;
            while($i < count($countries)){
                $country = $countries[$i];
                $checked = $this->selected_applicant_living_in($country);
                //last country
                if($i + 1 === count($countries)){
                    $eu_countries        .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='eu-country' $checked/>$country</label>";
                    $eu_countries_in_div .= "<div class='end-eu-countries-border-bottom'>$eu_countries</div>";
                } else if($count_country < 3){
                    $eu_countries .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='eu-country' $checked/>$country</label> ";
                    $count_country++;
                } else {
                    $eu_countries        .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='eu-country' $checked/>$country</label>";
                    $eu_countries_in_div .= "<div>$eu_countries</div>";
                    $eu_countries         = null;
                    $count_country        = 0;
                }
                $i++;
            }
            return $eu_countries_in_div;
        }
        public function selected_applicant_living_in_normal_countries(){
            $normal_countries_in_div = null;
            $normal_countries        = null;
            $count_country           = 0;
            $countries               = $this->_variables->normal_countries;
            $i                       = 0;
            while($i < count($countries)){
                $country = $countries[$i];
                $checked = $this->selected_applicant_living_in($country);
                //last country
                if($i + 1 === count($countries)){
                    $normal_countries        .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='normal-country $checked/'>$country</label>";
                    $normal_countries_in_div .= "<div>$normal_countries</div>";
                } else if($count_country < 3){
                    $normal_countries .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='normal-country' $checked/>$country</label> ";
                    $count_country++;
                } else {
                    $normal_countries        .= "<label><input type='checkbox' name='applicant-living-in[]' value='$country' id='normal-country' $checked/>$country</label>";
                    $normal_countries_in_div .= "<div>$normal_countries</div>";
                    $normal_countries         = null;
                    $count_country            = 0;
                }
                $i++;
            }
            return $normal_countries_in_div;
        }
           //Salary
           public function inputted_salary_amount(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['salary-amount'];
            } else {
                $value = $this->_host_family->salary_per_month_amount;
            } 
            return $value;
        }
        public function selected_salary_currencies(){
            $currencies = null;
            $i          = 0;
            while($i < count($this->_variables->currencies)){
                $currency    = $this->_variables->currencies[$i];
                $selected    = null;
                if(isset($_POST['update'])){
                    if($_POST['salary-currency'] === $currency){
                        $selected = "selected";
                    }
                } else {
                    if($this->_host_family->salary_per_month_currency === $currency){
                        $selected = "selected";
                    }
                }
                $currencies .= "<option value='$currency' $selected>$currency</option>";
                $i++;
            }
            return $currencies;
        }
        //earliest starting date month
        public function selected_earliest_starting_date_month(){
            $months = null;
            $i      = 0;
            while($i < count($this->_variables->months)){
                $month    = $this->_variables->months[$i];
                $selected = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['earliest-starting-date-month'] === $month) ? "selected" : null;
                } else if($month === $this->_host_family->earliest_starting_date_month) {
                    $selected = "selected";
                } 
                $months .= "<option value='$month' $selected>$month</option>";
                $i++;
            }
            return $months;
        }
         //earliest starting date year
         public function selected_earliest_starting_date_year(){
            $years = null;
            $i     = 0;
            $earliest_starting_date_years = array(date("Y"), date("Y")+1);
            while($i < count($earliest_starting_date_years)){
                $year     = $earliest_starting_date_years[$i];
                $selected = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['earliest-starting-date-year'] == $year) ? "selected" : null;    
                } else if($year == $this->_host_family->earliest_starting_date_year) {
                    $selected = "selected";
                }
                $years .= "<option value='$year' $selected>$year</option>";
                $i++;
            }
            return $years;
        }
        //latest starting date month
        public function selected_latest_starting_date_month(){
            $months = null;
            $i      = 0;
            while($i < count($this->_variables->months)){
                $month    = $this->_variables->months[$i];
                $selected = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['latest-starting-date-month'] === $month) ? "selected" : null;
                } else if($month === $this->_host_family->latest_starting_date_month ) {
                    $selected = "selected";
                }
                $months .= "<option value='$month' $selected>$month</option>";
                $i++;
            }
            return $months;
        }
        //latest starting date year
        public function selected_latest_starting_date_year(){
            $years = null;
            $i     = 0;
            $latest_starting_date_years = array(date("Y"), date("Y")+1, date("Y")+2);
            while($i < count($latest_starting_date_years)){
                $year     = $latest_starting_date_years[$i];
                $selected = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['latest-starting-date-year'] == $year) ? "selected" : null;
                } else if($year == $this->_host_family->latest_starting_date_year) {
                    $selected = "selected";
                }
                $years .= "<option value='$year' $selected>$year</option>";
                $i++;
            }
            return $years;
        }
        //duration of stay
        public function selected_duration_of_stay($duration){
            $selected = null;
            if(isset($_POST['update']) && $_POST['duration-of-stay'] === $duration){
                $selected = "selected";
            }else if(!isset($_POST['update']) && $this->_host_family->duration === $duration){
                $selected = "selected";
            }  
            return $selected;
        }
        //preferred gender
        public function selected_preferred_gender($answer){
            $selected = null;
            if(isset($_POST['update']) && $_POST['preferred-gender'] === $answer){
                $selected = "selected";
            } else if(!$_POST['update'] && $this->_host_family->preferred_gender === $answer){
                $selected = "selected";
            }  
            return $selected;
        }
        //requried education level
        public function selected_required_education_level(){
            $educations = null;
            $i          = 0;
            while($i < count($this->_variables->educations)){
                $education = $this->_variables->educations[$i];
                $selected  = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['required-education-level'] === $education) ? "selected" : null;
                } else if($education === $this->_host_family->required_education_level){
                    $selected = "selected";
                }
                $educations .= "<option value='$education' $selected>$education</option>";
                $i++;
            }
            return $educations;
        }
        //working hours per week
        public function selected_working_hours($hours){
            $selected = null;
            if(isset($_POST['update']) && $_POST['working-hours-per-week'] === $hours){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->working_hours_per_week === $hours){
                $selected = "selected";
            }
            return $selected;
        }
        //are you willing to pay for travel expenses
        public function selected_willing_to_pay_for_travel_expenses($answer){
            $selected = null;
            if(isset($_POST['update']) && $_POST['pay-for-travel-expenses'] === $answer){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->willing_to_pay_for_travel_expenses === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //are you willing to pay for visa
        public function selected_willing_to_pay_for_visa($answer){
            $selected = null;
            if(isset($_POST['update']) && $_POST['pay-for-visa'] === $answer){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->willing_to_pay_for_visa === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //required age
        public function inputted_required_age_min(){
             $value = null;
             if(isset($_POST['update'])){
                 $value = $_POST['required-age-min'];
             } else {
                 $value = $this->_host_family->required_age_min;
             }
             return $value;
        }
        public function inputted_required_age_max(){
            $value = null;
            if(isset($_POST['update'])){
                $value = $_POST['required-age-max'];
            } else {
                $value = $this->_host_family->required_age_max;
            }
            return $value;
       }
        //is smoking allowed
        public function selected_is_smoking_allowed($answer){
            $selected = null;
            if(isset($_POST['update']) && $_POST['is-smoking-allowed'] === $answer){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->is_smoking_allowed === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //does the applicant have to take care of pets
        public function selected_applicant_have_to_take_care_of_pets($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-take-care-of-pets'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->applicant_have_to_take_care_of_pets === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //does the applicant know how to swim
        public function selected_applicant_know_how_to_swim($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-know-how-to-swim'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->applicant_know_how_to_swim === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //does the applicant know how to ride a bike
        public function selected_applicant_know_how_to_ride_a_bike($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-know-how-to-ride-bike'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->applicant_know_how_to_ride_a_bike === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //do you expect the Applicant to drive
        public function selected_expect_applicant_to_drive($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-to-drive'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->expect_applicant_to_drive === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //do you expect that the Applicant have training in Healthcare
        public function selected_expect_applicant_have_training_in_healthcare($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-attend-first-aid-training'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->expect_applicant_have_training_in_healthcare ){
                $checked = "checked";
            }
            return $checked;
        }
        //do you expect that the Applicant to attend a First Aid Training
        public function selected_expect_applicant_have_attend_firstaid_training($answer){
            $checked = null;
            if(isset($_POST['update']) && $_POST['applicant-attend-first-aid-training'] === $answer){
                $checked = "checked";
            } else if(!isset($_POST['update']) && $this->_host_family->expect_applicant_have_attended_firstaid_training === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //what languages are spoken at home
        public function selected_languages_spoken_at_home(){
            $languages_in_div    = null;
            $languages           = null;
            $count_language      = 0;
            $i                   = 0;
            while($i < count($this->_variables->languages)){
                $language = $this->_variables->languages[$i];
                $checked  = $this->selected_home_languages($language);
                //last language
                if($i + 1 === count($this->_variables->languages)){
                    $languages        .= "<label><input type='checkbox' name='spoken-at-home-languages[]' value='$language' $checked/>$language</label>";
                    $languages_in_div .= "<div>$languages</div>";
                } else if($count_language < 3){
                    $languages .= "<label><input type='checkbox' name='spoken-at-home-languages[]' value='$language' $checked/>$language</label> ";
                    $count_language++;
                } else {
                    $languages        .= "<label><input type='checkbox' name='spoken-at-home-languages[]' value='$language' $checked/>$language</label>";
                    $languages_in_div .= "<div>$languages</div>";
                    $languages         = null;
                    $count_language    = 0;
                }
                $i++;
            }
            return $languages_in_div;
        }
        //Nationality
        public function selected_nationality(){
         $nationalities = null;
         $i             = 0;
         while($i < count($this->_variables->nationalities)){
             $nationality    = $this->_variables->nationalities[$i];
             $selected       = null;
             if(isset($_POST['update'])){
                 $selected = ($_POST['nationality'] === $nationality) ? "selected" : null;
             } else if($this->_host_family->nationality === $nationality) {
                 $selected = "selected";
             } 
             $nationalities .= "<option value='$nationality' $selected>$nationality</option>";
             $i++;
         }
         return $nationalities;
        }
        //are you a single parent
        public function selected_are_you_a_single_parent($answer){
            $selected = null;
            if(isset($_POST['update']) && $_POST['are-you-single-parent'] === $answer){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->is_single_parent === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //parent\'s age group
        public function selected_parents_age_group($age){
            $selected = null;
            if(isset($_POST['update']) && $_POST['parents-age-group'] === $age){
                $selected = "selected";
            } else if(!isset($_POST['update']) && $this->_host_family->parent_age_group === $age){
                $selected = "selected";
            }
            return $selected;
        }
        //mother nationality
        public function selected_mother_nationality(){
            $nationalities = null;
            $i             = 0;
            while($i < count($this->_variables->nationalities)){
                $nationality    = $this->_variables->nationalities[$i];
                $selected       = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['mother-nationality'] === $nationality) ? "selected" : null;
                } else if ($nationality === $this->_host_family->mother_nationality) {
                    $selected = "selected";
                } 
                $nationalities .= "<option value='$nationality' $selected>$nationality</option>";
                $i++;
            }
            return $nationalities;
        }
        //mother nationality
        public function selected_father_nationality(){
            $nationalities = null;
            $i             = 0;
            while($i < count($this->_variables->nationalities)){
                $nationality    = $this->_variables->nationalities[$i];
                $selected       = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['father-nationality'] === $nationality) ? "selected" : null;
                } else if ($nationality === $this->_host_family->father_nationality) {
                    $selected = "selected";
                } 
                $nationalities .= "<option value='$nationality' $selected>$nationality</option>";
                $i++;
            }
            return $nationalities;
        }
        //religion
        public function selected_religion(){
            $religions = null;
            $i         = 0;
            while($i < count($this->_variables->religions)){
                $religion = $this->_variables->religions[$i];
                $selected = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['religion'] === $religion) ? "selected" : null;
                }else if($religion === $this->_host_family->religion){
                    $selected = "selected";
                }
                $religions .= "<option value='$religion' $selected>$religion</option>";
                $i++;
            }
            return $religions;
        }
        //is religion important to you
        public function selected_is_religion_important_to_you($answer){
             $selected = null;
             if (isset($_POST['update']) && $_POST['religion-important-to-you'] === $answer) {
                 $selected = "selected";
             } else if(!isset($_POST['update']) && $this->_host_family->is_religion_important_to_you === $answer){
                 $selected = "selected";
             }
             return $selected;
        }
        //employment (Parent 1)
        public function inputted_employee_parent_one(){
            $value = null; 
            if(isset($_POST['update'])){
                $value = $_POST['employment-parent-1'];
            } else {
                $value = $this->_host_family->employment_parent_one;
            }
            return $value;
        }
        //employment (Parent 2)
        public function inputted_employee_parent_two(){
            $value = null; 
            if(isset($_POST['update'])){
                $value = $_POST['employment-parent-2'];
            } else {
                $value = $this->_host_family->employment_parent_two;
            }
            return $value;
        }
        //how many people living in the house
        public function inputted_number_of_people_living_in_the_house(){
            $value = null; 
            if(isset($_POST['update'])){
                $value = $_POST['how-many-people-living-in-the-house'];
            } else {
                $value = $this->_host_family->how_many_people_living_in_the_house;
            }
            return $value;
        }
        //do you have any pets
        public function selected_have_any_pets($answer){
             $checked = null;
             if (isset($_POST['update']) && $_POST['have-pets'] === $answer) {
                 $checked = "checked";
             } else if(!isset($_POST['update']) && $this->_host_family->do_you_have_any_pets === $answer){
                 $checked = "checked";
             }
             return $checked;
        }
        //where do you live
        public function selected_where_do_you_live($answer){
             $selected = null;
             if (isset($_POST['update']) && $_POST['where-do-you-live'] === $answer) {
                 $selected = "selected";
             } else if (!isset($_POST['update']) && $this->_host_family->where_do_you_live === $answer){
                 $selected = "selected";
             }
             return $selected;
        }
        //firstname
        public function inputted_firstname(){
             $value = null;
             if (isset($_POST['update'])) {
                 $value = $_POST['firstname'];
             } else {
                 $value = $this->_host_family->firstname;
             }
             return $value;
        }
        //lastname
        public function inputted_lastname(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['lastname'];
            } else {
                $value = $this->_host_family->lastname;
            }
            return $value;
        }
        //address
        public function inputted_address(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['address'];
            } else {
                $value = $this->_host_family->address;
            }
            return $value;
        }
        //zipcode
        public function inputted_zipcode(){
                $value = null;
                if (isset($_POST['update'])) {
                    $value = $_POST['zip-code'];
                } else {
                    $value = $this->_host_family->zipcode;
                }
                return $value;
        }
        //city
        public function inputted_city(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['city'];
            } else {
                $value = $this->_host_family->city;
            }
            return $value;
        }
        //state-region
        public function inputted_state_region(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['state-region'];
            } else {
                $value = $this->_host_family->state_region;
            }
            return $value;
        }
        //country
        public function selected_country(){
            $countries     = null;
            $i             = 0;
            $all_countries = array_merge($this->_variables->eu_countries, $this->_variables->normal_countries);
            while($i < count($all_countries)){
                $country    = $all_countries[$i];
                $selected   = null;
                if(isset($_POST['update'])){
                    $selected = ($_POST['country'] === $country) ? "selected" : null;
                } else if($country === $this->_host_family->country){
                    $selected = "selected";
                }
                $countries .= "<option value='$country' $selected>$country</option>"; 
                $i++;
            }
            return $countries; 
        }
        //mobile Phone No
        public function inputted_mobile_phone_no(){
            $value = null;
            if (isset($_POST['update'])) {
                $value = $_POST['mobile-number'][0];
            } else {
                $value = $this->_host_family->mobile_phone_no;
            }
            return $value;
        }
        //letter to the applicant
        public function inputted_letter_to_the_applicant(){
            $letter = null;
            if(isset($_POST['update'])){
                $letter = $_POST['letter-to-the-applicant'];
            } else {
                $letter = $this->_host_family->letter;
            }
            return $letter;
        }
    
        private function set_job_requirements_fields($host_family){
            //We are looking for
            (in_array("aupair", $_POST['looking-for']))                ? $host_family->looking_for_aupair                = 1 : $host_family->looking_for_aupair                = 0;
            (in_array("nanny", $_POST['looking-for']))                 ? $host_family->looking_for_nanny                 = 1 : $host_family->looking_for_nanny                 = 0;
            (in_array("granny aupair", $_POST['looking-for']))         ? $host_family->looking_for_granny_aupair         = 1 : $host_family->looking_for_granny_aupair         = 0;
            (in_array("caregiver for elderly", $_POST['looking-for'])) ? $host_family->looking_for_caregiver_for_elderly = 1 : $host_family->looking_for_caregiver_for_elderly = 0;
            (in_array("live in help", $_POST['looking-for']))          ? $host_family->looking_for_live_in_help          = 1 : $host_family->looking_for_live_in_help          = 0;
            (in_array("live in tutor", $_POST['looking-for']))         ? $host_family->looking_for_live_in_tutor         = 1 : $host_family->looking_for_live_in_tutor         = 0;
            //Aupair, Nanny & Granny Aupair
            if(
                in_array("aupair", $_POST['looking-for']) ||
                in_array("nanny", $_POST['looking-for']) ||
                in_array("granny aupair", $_POST['looking-for'])
            ){
                (in_array("0 - 1 year old", $_POST['take-care-children']))    ? $host_family->ang_takecare_children_age_zero_to_one        = 1 : $host_family->ang_takecare_children_age_zero_to_one        = 0;
                (in_array("1 - 5 years old", $_POST['take-care-children']))   ? $host_family->ang_takecare_children_age_one_to_five        = 1 : $host_family->ang_takecare_children_age_one_to_five        = 0;
                (in_array("6 - 10 years old", $_POST['take-care-children']))  ? $host_family->ang_takecare_children_age_six_to_ten         = 1 : $host_family->ang_takecare_children_age_six_to_ten         = 0;
                (in_array("11 - 14 years old", $_POST['take-care-children'])) ? $host_family->ang_takecare_children_age_eleven_to_fourteen = 1 : $host_family->ang_takecare_children_age_eleven_to_fourteen = 0;
                (in_array("15+ years old", $_POST['take-care-children']))     ? $host_family->ang_takecare_children_age_fifteen_plus       = 1 : $host_family->ang_takecare_children_age_fifteen_plus       = 0;
                $host_family->ang_minimum_required_childcare_experience       = $_POST['hours-child-care-experience'];
                $host_family->ang_number_children_would_you_like_to_care      = $_POST['how-many-children-people-would'];
                $host_family->ang_take_care_children_with_special_needs       = $_POST['take-care-children-with-special-needs'];
                ($_POST['take-care-children-with-special-needs'] === "Yes")   ? $host_family->ang_describe_children_special_needs = $_POST['describe-children-special-needs'] : null;
            }
            //Caregiver for elderly & Live in help
            if(in_array("caregiver for elderly", $_POST['looking-for']) || in_array("live in help", $_POST['looking-for'])){
                (in_array("walks and outings", $_POST['need-assistance-support-in']))            ? $host_family->cl_assistance_support_in_walks_and_outings              = 1 : $host_family->cl_assistance_support_in_walks_and_outings              = 0;
                (in_array("mobility support", $_POST['need-assistance-support-in']))             ? $host_family->cl_assistance_support_in_mobility_support               = 1 : $host_family->cl_assistance_support_in_mobility_support               = 0;
                (in_array("driving", $_POST['need-assistance-support-in']))                      ? $host_family->cl_assistance_support_in_driving                        = 1 : $host_family->cl_assistance_support_in_driving                        = 0;
                (in_array("errands/shopping", $_POST['need-assistance-support-in']))             ? $host_family->cl_assistance_support_in_errands_shopping               = 1 : $host_family->cl_assistance_support_in_errands_shopping               = 0;
                (in_array("cleaning & laundry", $_POST['need-assistance-support-in']))           ? $host_family->cl_assistance_support_in_cleaning_and_laundry           = 1 : $host_family->cl_assistance_support_in_cleaning_and_laundry           = 0;
                (in_array("light domestic work", $_POST['need-assistance-support-in']))          ? $host_family->cl_assistance_support_in_light_domestic_work            = 1 : $host_family->cl_assistance_support_in_light_domestic_work            = 0;
                (in_array("cooking meals", $_POST['need-assistance-support-in']))                ? $host_family->cl_assistance_support_in_cooking_meals                  = 1 : $host_family->cl_assistance_support_in_cooking_meals                  = 0;
                (in_array("washing & dressing", $_POST['need-assistance-support-in']))           ? $host_family->cl_assistance_support_in_washing_and_dressing           = 1 : $host_family->cl_assistance_support_in_washing_and_dressing           = 0;
                (in_array("companionship & conversation", $_POST['need-assistance-support-in'])) ? $host_family->cl_assistance_support_in_companionship_and_conversation = 1 : $host_family->cl_assistance_support_in_companionship_and_conversation = 0;
                $host_family->cl_applicant_take_care_people_with_special_needs                   = $_POST['take-care-people-with-special-needs'];
                ($_POST['take-care-people-with-special-needs'] === "Yes")                        ? $host_family->cl_describe_people_special_needs = $_POST['describe-people-special-needs'] : null;
            }
            //Live in tutor
            if(in_array("live in tutor", $_POST['looking-for'])){
               (in_array("mathematics", $_POST['tutor-who-can-teach'])) ? $host_family->lo_tutor_teach_mathematics = 1 : $host_family->lo_tutor_teach_mathematics = 0;
               (in_array("physics", $_POST['tutor-who-can-teach']))     ? $host_family->lo_tutor_teach_physics     = 1 : $host_family->lo_tutor_teach_physics     = 0;
               (in_array("chemistry", $_POST['tutor-who-can-teach']))   ? $host_family->lo_tutor_teach_chemistry   = 1 : $host_family->lo_tutor_teach_chemistry   = 0;
               (in_array("biology", $_POST['tutor-who-can-teach']))     ? $host_family->lo_tutor_teach_biology     = 1 : $host_family->lo_tutor_teach_biology     = 0;
               (in_array("english", $_POST['tutor-who-can-teach']))     ? $host_family->lo_tutor_teach_english     = 1 : $host_family->lo_tutor_teach_english     = 0;
               (in_array("german", $_POST['tutor-who-can-teach']))      ? $host_family->lo_tutor_teach_german      = 1 : $host_family->lo_tutor_teach_german      = 0;
               (in_array("french", $_POST['tutor-who-can-teach']))      ? $host_family->lo_tutor_teach_french      = 1 : $host_family->lo_tutor_teach_french      = 0;
               (in_array("spanish", $_POST['tutor-who-can-teach']))     ? $host_family->lo_tutor_teach_spanish     = 1 : $host_family->lo_tutor_teach_spanish     = 0;
               (in_array("italian", $_POST['tutor-who-can-teach']))     ? $host_family->lo_tutor_teach_italian     = 1 : $host_family->lo_tutor_teach_italian     = 0;
               (in_array("music", $_POST['tutor-who-can-teach']))       ? $host_family->lo_tutor_teach_music       = 1 : $host_family->lo_tutor_teach_music       = 0;
               (in_array("sport", $_POST['tutor-who-can-teach']))       ? $host_family->lo_tutor_teach_sport       = 1 : $host_family->lo_tutor_teach_sport       = 0;
           }
           //Live in tutor
           if(in_array("live in tutor", $_POST['looking-for'])){
               (in_array("homework assistance", $_POST['activities-with-kids']))   ? $host_family->lv_tutor_can_do_activity_homework_assistance     = 1 : $host_family->lv_tutor_can_do_activity_homework_assistance     = 0;
               (in_array("book reading", $_POST['activities-with-kids']))          ? $host_family->lv_tutor_can_do_activity_book_reading            = 1 : $host_family->lv_tutor_can_do_activity_book_reading            = 0;
               (in_array("art & craft", $_POST['activities-with-kids']))           ? $host_family->lv_tutor_can_do_activity_art_and_craft           = 1 : $host_family->lv_tutor_can_do_activity_art_and_craft           = 0;
               (in_array("drawing & cutting", $_POST['activities-with-kids']))     ? $host_family->lv_tutor_can_do_activity_drawing_and_cutting     = 1 : $host_family->lv_tutor_can_do_activity_drawing_and_cutting     = 0;
               (in_array("numbers & counting", $_POST['activities-with-kids']))    ? $host_family->lv_tutor_can_do_activity_numbers_and_counting    = 1 : $host_family->lv_tutor_can_do_activity_numbers_and_counting    = 0;
               (in_array("letters & sound", $_POST['activities-with-kids']))       ? $host_family->lv_tutor_can_do_activity_letters_and_sound       = 1 : $host_family->lv_tutor_can_do_activity_letters_and_sound       = 0;
               (in_array("songs & poetry", $_POST['activities-with-kids']))        ? $host_family->lv_tutor_can_do_activity_songs_and_poetry        = 1 : $host_family->lv_tutor_can_do_activity_songs_and_poetry        = 0;
               (in_array("mind games & activity", $_POST['activities-with-kids'])) ? $host_family->lv_tutor_can_do_activity_mind_games_and_activity = 1 : $host_family->lv_tutor_can_do_activity_mind_games_and_activity = 0;
           }
           //Live in tutor,  
           if(in_array("live in tutor", $_POST['looking-for']) ){
               (in_array("infants (0-1)", $_POST['student-age-group']))         ? $host_family->lov_student_age_group_infants        = 1 : $host_family->lov_student_age_group_infants        = 0;
               (in_array("toddlers (2-3)", $_POST['student-age-group']))        ? $host_family->lov_student_age_group_toddlers       = 1 : $host_family->lov_student_age_group_toddlers       = 0;
               (in_array("preschoolers (4-5)", $_POST['student-age-group']))    ? $host_family->lov_student_age_group_preschoolers   = 1 : $host_family->lov_student_age_group_preschoolers   = 0;
               (in_array("primary school (6-12)", $_POST['student-age-group'])) ? $host_family->lov_student_age_group_primary_school = 1 : $host_family->lov_student_age_group_primary_school = 0;
               (in_array("teenagers (13-17)", $_POST['student-age-group']))     ? $host_family->lov_student_age_group_teenagers      = 1 : $host_family->lov_student_age_group_teenagers      = 0;
               (in_array("young adults (18-30)", $_POST['student-age-group']))  ? $host_family->lov_student_age_group_young_adults   = 1 : $host_family->lov_student_age_group_young_adults   = 0;
               (in_array("adults (31-60)", $_POST['student-age-group']))        ? $host_family->lov_student_age_group_adults         = 1 : $host_family->lov_student_age_group_adults         = 0;
               (in_array("senior (60+)", $_POST['student-age-group']))          ? $host_family->lov_student_age_group_senior         = 1 : $host_family->lov_student_age_group_senior         = 0;
           }
           //Preferred Nationalities
           if(in_array("No Preferences", $_POST['preferred-nationalities'])){
                array_push($host_family->preferred_nationalities, "No Preferences");
           } else {
               $i = 0;
               while($i < count($_POST['preferred-nationalities'])){
                    $country = $_POST['preferred-nationalities'][$i];
                    array_push($host_family->preferred_nationalities, $country);
                    $i++;
               }
           }
           //Applicant Currently Living In
           if( in_array("No Preferences", $_POST['applicant-living-in'])){
               array_push($host_family->applicants_living_in, "No Preferences");
           } else if(in_array("EU Countries", $_POST['applicant-living-in']) && $this->have_selected_non_eu_countries() === false){
               array_push($host_family->applicants_living_in, "EU Countries");
           } else if(in_array("EU Countries", $_POST['applicant-living-in']) && $this->have_selected_non_eu_countries()){
               array_push($host_family->applicants_living_in, "EU Countries");
               $i = 0;
               while($i < count($_POST['applicant-living-in'])){
                   $country = $_POST['applicant-living-in'][$i];
                   if(in_array($country, $this->_variables->normal_countries)){
                        array_push($host_family->applicants_living_in, $country);
                   }
                   $i++;
               }
           } else {
               $i = 0;
               while($i < count($_POST['applicant-living-in'])){
                    $country = $_POST['applicant-living-in'][$i];
                    array_push($host_family->applicants_living_in, $country);
                    $i++;
               }
           }
           //Rest of the fields
           $host_family->salary_per_month_amount                          = $_POST['salary-amount'];
           $host_family->salary_per_month_currency                        = $_POST['salary-currency'];
           $host_family->earliest_starting_date_month                     = $_POST['earliest-starting-date-month'];
           $host_family->earliest_starting_date_year                      = $_POST['earliest-starting-date-year'];
           $host_family->latest_starting_date_month                       = $_POST['latest-starting-date-month'];
           $host_family->latest_starting_date_year                        = $_POST['latest-starting-date-year'];
           $host_family->duration                                         = $_POST['duration-of-stay'];
           $host_family->preferred_gender                                 = $_POST['preferred-gender'];
           $host_family->required_education_level                         = $_POST['required-education-level'];
           $host_family->working_hours_per_week                           = $_POST['working-hours-per-week'];

           $host_family->willing_to_pay_for_travel_expenses               = $_POST['pay-for-travel-expenses'];
           $host_family->willing_to_pay_for_visa                          = $_POST['pay-for-visa'];
           $host_family->required_age_min                                 = $_POST['required-age-min'];
           $host_family->required_age_max                                 = $_POST['required-age-max'];
           $host_family->is_smoking_allowed                               = $_POST['is-smoking-allowed'];
           $host_family->applicant_have_to_take_care_of_pets              = $_POST['applicant-take-care-of-pets'];
           $host_family->applicant_know_how_to_swim                       = $_POST['applicant-know-how-to-swim'];
           $host_family->applicant_know_how_to_ride_a_bike                = $_POST['applicant-know-how-to-ride-bike'];
           $host_family->expect_applicant_to_drive                        = $_POST['applicant-to-drive'];
           $host_family->expect_applicant_have_training_in_healthcare     = $_POST['applicant-have-training-in-healthcare'];
           $host_family->expect_applicant_have_attended_firstaid_training = $_POST['applicant-attend-first-aid-training'];
        }
        private function set_personal_information_fields($host_family){
           //What languages are spoken at home
           $i = 0;
           while($i < count($_POST['spoken-at-home-languages'])){
                $language = $_POST['spoken-at-home-languages'][$i];
                array_push($host_family->languages_spoken_at_home, $language);
                $i++;
           } 
           //Rest of the fields
           $host_family->nationality                         = $_POST['nationality'];
           $host_family->is_single_parent                    = $_POST['are-you-single-parent'];
           $host_family->parent_age_group                    = $_POST['parents-age-group'];
           $host_family->mother_nationality                  = $_POST['mother-nationality'];
           $host_family->father_nationality                  = $_POST['father-nationality'];
           $host_family->religion                            = $_POST['religion'];
           $host_family->is_religion_important_to_you        = $_POST['religion-important-to-you'];
           $host_family->employment_parent_one               = $_POST['employment-parent-1'];
           $host_family->employment_parent_two               = $_POST['employment-parent-2'];
           $host_family->how_many_people_living_in_the_house = $_POST['how-many-people-living-in-the-house'];
           $host_family->do_you_have_any_pets                = $_POST['have-pets'];
           $host_family->where_do_you_live                   = $_POST['where-do-you-live'];
        }
        private function set_contact_information_fields($host_family){
            $host_family->firstname       = $_POST['firstname'];
            $host_family->lastname        = $_POST['lastname'];
            $host_family->address         = $_POST['address'];
            $host_family->zipcode         = $_POST['zip-code'];
            $host_family->city            = $_POST['city'];
            $host_family->state_region    = $_POST['state-region'];
            $host_family->country         = $_POST['country'];
            $host_family->mobile_phone_no = $_POST['mobile-number'][0];
        }
        private function set_letter_to_the_applicant_field($host_family){
            $host_family->letter = $_POST['letter-to-the-applicant'];
        }
        public function set_host_family_object($host_family){
            $this->set_job_requirements_fields($host_family);
            $this->set_personal_information_fields($host_family);
            $this->set_contact_information_fields($host_family);
            $this->set_letter_to_the_applicant_field($host_family);
            return $host_family;
        }

    }

?>