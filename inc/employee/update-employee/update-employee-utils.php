<?php
    class Update_Employee_Profile_Utils{
        private $_employee                     = null;
        private $_employee_preferred_countries = null;
        private $_eu_countries                 = null;
        private $_normal_countries             = null;
        private $_months                       = null;
        private $_earliest_starting_date_year  = null;
        private $_nationalities                = null;
        private $_educations                   = null;
        private $_religions                    = null;
        //order matter
        public function __construct(
            $login_employee,
            $eu_countries,
            $normal_countries,
            $employee_preferred_countries,
            $months,
            $earliest_starting_date_year,
            $nationalities,
            $educations,
            $religions){
            $this->_employee                     = $login_employee;
            $this->_eu_countries                 = $eu_countries;
            $this->_normal_countries             = $normal_countries;
            $this->_employee_preferred_countries = $employee_preferred_countries;
            $this->_months                       = $months;
            $this->_earliest_starting_date_year  = $earliest_starting_date_year;
            $this->_nationalities                = $nationalities;
            $this->_educations                   = $educations;
            $this->_religions                    = $religions;
        }
        //photo privacy
        public function selected_photo_privacy($value){
            $checked = null;
            if($this->_employee->photo_privacy === $value){
                $checked = "checked='checked'";
            }
            return $checked;
        }
        public function test(){
            $aar = array();
            for ($i=0; $i < count($this->_employee_preferred_countries); $i++) { 
                array_push($aar, $this->_employee_preferred_countries[$i]->country);
            }
            return $aar;
        }
        //loking for a job as
        public function selected_looking_for_a_job($form, $job_name){
            $checked = null;
            if(isset($form['update']) && in_array($job_name, $form['looking-for-job'])){
                $checked = "checked";
            } else if(!isset($form['update'])) {
                if($this->_employee->looking_for_job_as_aupair === "1" && $job_name === "aupair"){
                    $checked = "checked";
                } else if ($this->_employee->looking_for_job_as_nanny === "1" && $job_name === "nanny"){
                    $checked = "checked";
                } else if ($this->_employee->looking_for_job_as_granny_aupair === "1" && $job_name === "granny aupair"){
                    $checked = "checked";
                }else if($this->_employee->looking_for_job_as_caregiver_for_elderly === "1" && $job_name === "caregiver for elderly"){
                    $checked = "checked";
                } else if($this->_employee->looking_for_job_as_live_in_help === "1" && $job_name === "live in help"){
                    $checked = "checked";
                } else if($this->_employee->looking_for_job_as_live_in_tutor === "1" && $job_name === "live in tutor"){
                    $checked = "checked";
                } else if($this->_employee->looking_for_job_as_online_tutor === "1" && $job_name === "online tutor"){
                    $checked = "checked";
                } else if($this->_employee->looking_for_job_as_virtual_childcare === "1" && $job_name === "virtual childcare"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //aupair, nanny & granny aupair
        public function selected_i_will_take_care_of_children_from_age($form, $age){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                    if(in_array($age, $form['take-care-of-children'])){
                        $checked = "checked";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_aupair === "1" || $this->_employee->looking_for_job_as_nanny === "1" || $this->_employee->looking_for_job_as_granny_aupair === "1"){
                    if($this->_employee->ang_takecare_children_age_zero_to_one === "1" && $age === "0 - 1 year old"){
                        $checked = "checked";
                    }else if($this->_employee->ang_takecare_children_age_one_to_five === "1" && $age === "1 - 5 years old"){
                        $checked = "checked";
                    }else if($this->_employee->ang_takecare_children_age_six_to_ten === "1" && $age === "6 - 10 years old"){
                        $checked = "checked";
                    }else if($this->_employee->ang_takecare_children_age_eleven_to_fourteen === "1" && $age === "11 - 14 years old"){
                        $checked = "checked";
                    }else if($this->_employee->ang_takecare_children_age_fifteen_plus === "1" && $age === "15+ years old"){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        public function selected_hours_of_child_care_experience($form, $hours){
            $selected = null;
            if(isset($form['update'])){
                if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                    if($form['hours-child-care-experience'] === $hours){
                        $selected = "selected";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_aupair === "1" || $this->_employee->looking_for_job_as_nanny === "1" || $this->_employee->looking_for_job_as_granny_aupair === "1"){
                    if($this->_employee->ang_hours_childcare_experience === $hours){
                        $selected = "selected";
                    }
                }
            }
            return $selected;
        }
        public function selected_how_many_children_people_would_you_like_to_take_care_of($form, $number){
            $selected = null;
            if(isset($form['update'])){
                if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                    if($form['children-people-take-care-of'] === $number){
                        $selected = "selected";    
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_aupair === "1" || $this->_employee->looking_for_job_as_nanny === "1" || $this->_employee->looking_for_job_as_granny_aupair === "1"){
                    if($this->_employee->ang_number_of_people_children_to_take_care === $number){
                        $selected = "selected";
                    }
                }
            }
            return $selected;
        }
        public function selected_would_you_work_for_single_parent($form, $answer){
            $selected = null;
            if(isset($form['update'])){
                if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                    if($form['work-for-single-parent'] === $answer){
                        $selected = "selected";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_aupair === "1" || $this->_employee->looking_for_job_as_nanny === "1" || $this->_employee->looking_for_job_as_granny_aupair === "1"){
                    if($this->_employee->ang_would_work_for_single_parent === $answer){
                        $selected = "selected";
                    }
                }
            }
            return $selected;
        }
        public function selected_would_you_take_care_of_children_with_special_needs($form, $selected){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                    if($form['take-care-children-with-special-needs'] === $selected){
                        $checked = "checked";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_aupair === "1" || $this->_employee->looking_for_job_as_nanny === "1" || $this->_employee->looking_for_job_as_granny_aupair === "1"){
                    if($this->_employee->ang_take_care_children_special_needs === $selected){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        //caregiver for elderly & live in help
        public function selected_i_can_assist_and_provide_support_to_elderly_in($form, $selected){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("caregiver for elderly", $form['looking-for-job']) || in_array("live in help", $form['looking-for-job'])){
                    if(in_array($selected, $form['assist-support-elderly-in'])){
                        $checked = "checked";
                    }
                }
            }else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_caregiver_for_elderly === "1" || $this->_employee->looking_for_job_as_live_in_help === "1"){
                    if($this->_employee->cl_assist_provide_support_in_walks_outings === "1" && $selected === "walks and outings"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_mobility_support === "1" && $selected === "mobility support"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_driving === "1" && $selected === "driving"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_errands_shopping === "1" && $selected === "errands/shopping"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_cleaning_laundry === "1" && $selected === "cleaning & laundry"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_light_domestic_work === "1" && $selected === "light domestic work"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_cooking_meals === "1" && $selected === "cooking meals"){
                        $checked = "checked";
                    }else if($this->_employee->cl_assist_provide_support_in_washing_dressing === "1" && $selected === "washing & dressing"){
                        $checked = "checked";
                    }else if ($this->_employee->cl_assist_provide_support_in_companionship_conversation === "1" && $selected === "companionship and conversation"){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        public function selected_would_you_take_care_of_people_with_special_needs($form, $selected){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("caregiver for elderly", $form['looking-for-job']) || in_array("live in help", $form['looking-for-job'])){
                    if($form['take-care-people-with-special-needs'] === $selected){
                        $checked = "checked";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_caregiver_for_elderly === "1" || $this->_employee->looking_for_job_as_live_in_help === "1"){
                    if($this->_employee->cl_take_care_people_with_special_needs === $selected){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        //livein tutor, online tutor, virtual childcare
        public function selected_preferred_subjects($form, $subject){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("live in tutor", $form['looking-for-job']) || in_array("online tutor", $form['looking-for-job'])){
                    if(in_array($subject, $form['preferred-subjects'])){
                        $checked = "checked";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_live_in_tutor === "1" || $this->_employee->looking_for_job_as_online_tutor === "1"){
                    if($this->_employee->lo_preffered_subject_mathematics === "1"  && $subject === "mathematics"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_physics === "1"  && $subject === "physics"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_chemistry === "1" && $subject === "chemistry"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_biology === "1" && $subject === "biology"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_english === "1" && $subject === "english"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_german === "1" && $subject === "german"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_french === "1" && $subject === "french"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_spanish === "1" && $subject === "spanish"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_italian === "1" && $subject === "italian"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_music === "1" && $subject === "music"){
                        $checked = "checked";
                    } else if($this->_employee->lo_preffered_subject_sport === "1" && $subject === "sport"){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        public function selected_activities_with_kids($form, $activity){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("live in tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                    if(in_array($activity, $form['activities-with-kids'])){
                        $checked = "checked";
                    }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_live_in_tutor === "1" || $this->_employee->looking_for_job_as_virtual_childcare === "1"){
                    if($this->_employee->lv_activity_with_kids_homework_assistance === "1" && $activity === "homework assistance"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_book_reading === "1" && $activity === "book reading"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_art_craft === "1" && $activity === "art & craft"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_drawing_cutting === "1" && $activity === "drawing & cutting"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_numbers_counting === "1" && $activity === "numbers & counting"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_letters_sounds === "1" && $activity === "letters & sound"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_songs_poetry === "1" && $activity === "songs & poetry"){
                        $checked = "checked";
                    } else if($this->_employee->lv_activity_with_kids_mind_games_activity === "1" && $activity === "mind games & activity"){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        public function selected_preferred_student_age_group($form, $age_group){
            $checked = null;
            if(isset($form['update'])){
                if(in_array("live in tutor", $form['looking-for-job']) || in_array("online tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                    if(in_array($age_group, $form['student-age-group'])){
                        $checked = "checked";
                    }
                }
            } else if(!isset($_POST['update'])){
                if($this->_employee->looking_for_job_as_live_in_tutor === "1" || $this->_employee->looking_for_job_as_online_tutor === "1" || $this->_employee->looking_for_job_as_virtual_childcare === "1"){
                    if($this->_employee->lov_preferred_student_age_group_infants === "1" && $age_group === "infants (0-1)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_toddllers === "1" && $age_group === "toddlers (2-3)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_preschoolers === "1" && $age_group === "preschoolers (4-5)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_primary_school === "1" && $age_group === "primary school (6-12)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_teenagers === "1" && $age_group === "teenagers (13-17)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_young_adults === "1" && $age_group === "young adults (18-30)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_adults === "1" && $age_group === "adults (31-60)"){
                        $checked = "checked";
                    } else if($this->_employee->lov_preferred_student_age_group_seniors === "1" && $age_group === "senior (60+)"){
                        $checked = "checked";
                    }
                }
            }
            return $checked;
        }
        public function asked_price_per_hour($form){
            $price = null;
            if(isset($form['update'])){
                if(in_array("online tutor", $form['looking-for-job'])|| in_array("virtual childcare", $form['looking-for-job'])){
                    $price = $form['price-per-hour'];
                }
                
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_online_tutor === "1" || $this->_employee->looking_for_job_as_virtual_childcare === "1"){
                    $price = $this->_employee->ov_price_per_hour_amount;
                }
            }
            return $price;
        }
        public function selected_currency($form, $currency){
            $selected = null;
            if(isset($form['update'])){
                if(in_array("online tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                   if($form['currency'] === $currency){
                       $selected = "selected";
                   }
                }
            } else if(!isset($form['update'])){
                if($this->_employee->looking_for_job_as_online_tutor === "1" || $this->_employee->looking_for_job_as_virtual_childcare === "1"){
                    if($this->_employee->ov_price_per_hour_currency === $currency){
                        $selected = "selected";
                    }
                }
            }
            return $selected;
        }
        //preferred countries
        public function selected_preferred_country($form, $country){
            $countries = array();
            $i         = 0;
            $checked   = null;
            while($i < count($this->_employee_preferred_countries)){
                $preferred_country = $this->_employee_preferred_countries[$i]->country;
                array_push($countries, $preferred_country);
                $i++;
            }
            
            if(isset($form['update']) && in_array($country, $form['preferred-countries'])){
                $checked = "checked";
            } else if(!isset($form['update']) && in_array($country, $countries)){
                $checked = "checked";
            }
            return $checked;
        }
        public function preferred_countries_eu($form){
            $eu_countries_in_div = null;
            $eu_countries        = null;
            $count_country       = 0;
            $countries           = $this->_eu_countries;
            $i                   = 2;
            while($i < count($countries)){
                $country = $countries[$i];
                $checked = $this->selected_preferred_country($form, $country);
                //last country
                if($i + 1 === count($countries)){
                    $eu_countries        .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='eu-country' $checked/>$country</label>";
                    $eu_countries_in_div .= "<div class='end-eu-countries-border-bottom'>$eu_countries</div>";
                } else if($count_country < 3){
                    $eu_countries .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='eu-country' $checked/>$country</label> ";
                    $count_country++;
                } else {
                    $eu_countries        .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='eu-country' $checked/>$country</label>";
                    $eu_countries_in_div .= "<div>$eu_countries</div>";
                    $eu_countries         = null;
                    $count_country        = 0;
                }
                $i++;
            }
            return $eu_countries_in_div;
        }
        public function preferred_countries_normal($form){
            $normal_countries_in_div = null;
            $normal_countries        = null;
            $count_country           = 0;
            $countries               = $this->_normal_countries;
            $i                       = 0;
            while($i < count($countries)){
                $country = $countries[$i];
                $checked = $this->selected_preferred_country($form, $country);
                //last country
                if($i + 1 === count($countries)){
                    $normal_countries        .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='normal-country $checked/'>$country</label>";
                    $normal_countries_in_div .= "<div>$normal_countries</div>";
                } else if($count_country < 3){
                    $normal_countries .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='normal-country' $checked/>$country</label> ";
                    $count_country++;
                } else {
                    $normal_countries        .= "<label><input type='checkbox' name='preferred-countries[]' value='$country' id='normal-country' $checked/>$country</label>";
                    $normal_countries_in_div .= "<div>$normal_countries</div>";
                    $normal_countries         = null;
                    $count_country            = 0;
                }
                $i++;
            }
            return $normal_countries_in_div;
        }
        //preferred area 
        public function selected_preferred_area($form, $area){
            $checked = null;
            if(isset($form['update']) && in_array($area, $form['preferred-area'])){
                $checked = "checked";
            } else if(!isset($form['update'])){
                if($this->_employee->preferred_area_all === "1" && $area === "all"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_small_city === "1" && $area === "small_city"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_big_city === "1" && $area === "big_city"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_suburd === "1" && $area === "suburd"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_countryside === "1" && $area === "countryside"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_town === "1" && $area === "town"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_village === "1" && $area === "village"){
                    $checked = "checked";
                } else if($this->_employee->preferred_area_sea_side === "1" && $area === "sea_side"){
                    $checked = "checked";
                }
            }
            return $checked;
        }
        //earliest date month
        public function selected_earliest_starting_date_month($form){
            $months = null;
            $i      = 0;
            while($i < count($this->_months)){
                $month    = $this->_months[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['earliest-starting-date-month'] === $month) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->earliest_starting_date_month === $month) ? "selected" : null;
                }
                $months  .= "<option value='$month' $selected>$month</option>";
                $i++;
            }
            return $months;
        }
        //earliest date year
        public function selected_earliest_starting_date_year($form){
            $years = null;
            $i     = 0;
            $earliest_starting_date_years = array(date("Y"), date("Y")+1);
            while($i < count($earliest_starting_date_years)){
                $year     = $earliest_starting_date_years[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['earliest-starting-date-year'] == $year) ? "selected" : null;    
                } else {
                    $selected = ($this->_employee->earliest_starting_date_year == $year) ? "selected" : null;
                }
                $years .= "<option value='$year' $selected>$year</option>";
                $i++;
            }
            return $years;
        }
        //latest date month
        public function selected_latest_starting_date_month($form){
            $months = null;
            $i      = 0;
            while($i < count($this->_months)){
                $month    = $this->_months[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['latest-starting-date-month'] === $month) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->latest_starting_date_month === $month) ? "selected" : null;
                }
                $months .= "<option value='$month' $selected>$month</option>";
                $i++;
            }
            return $months;
        }
        //latest date year
        public function selected_latest_starting_date_year($form){
            $years = null;
            $i     = 0;
            $latest_starting_date_years = array(date("Y"), date("Y")+1, date("Y")+2);
            while($i < count($latest_starting_date_years)){
                $year     = $latest_starting_date_years[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['latest-starting-date-year'] == $year) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->latest_starting_date_year == $year) ? "selected" : null;
                }
                $years .= "<option value='$year' $selected>$year</option>";
                $i++;
            }
            return $years;
        }
        //duration of stay
        public function selected_duration_of_stay($form, $duration){
            $selected = null;
            if(isset($form['update']) && $form['duration-of-stay'] === $duration){
                $selected = "selected";
            } else if(!isset($form['update']) && $this->_employee->duration_of_stay === $duration){
                $selected = "selected";
            }
            return $selected;
        }
        //what kind of work are you looking for
        public function selected_what_kind_of_work_are_you_looking($form, $work){
            $checked = null;
            if(isset($form['update']) && $form['kind-of-work-looking'] === $work){
                $checked = "checked";
            } else if(!isset($form['update']) && $this->_employee->kind_of_work_looking === $work){
                $checked = "checked";
            }
            return $checked;
        }
        //accomodation
        public function selected_accomodation($form, $accomodation){
            $selected = null;
            if(isset($form['update']) && $form['accomodation'] === $accomodation){
                $selected = "selected";
            }else if(!isset($form['update']) && $this->_employee->accomodation === $accomodation){
                $selected = "selected";
            }
            return $selected;
        }
        //would you live familty with pets
        public function selected_would_you_live_family_with_pets($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['live-family-with-pets'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->would_live_family_with_pets === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //would you take care of pets
        public function selected_would_you_take_care_of_pets($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['take-care-pets'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->would_take_care_of_pets === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //would you work extra to earn some additional money
        public function selected_would_you_work_extra_to_earn_additional_money($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['work-extra-to-earn-additional-money'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->would_work_extra_to_earn === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //gender
        public function selected_gender($form, $gender){
            $checked = null;
            if(isset($form['update']) && $form['gender'] === $gender){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->gender === $gender){
                $checked = "checked";
            }
            return $checked;
        }
        //date of birth
        public function selected_date_of_birth_month($form){
            $months = null;
            $i = 0;
            while($i < count($this->_months)){
                $month    = $this->_months[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['date-of-birth-month'] === $month) ? "selected" : null;    
                } else {
                    $selected = ($this->_employee->date_of_birth_month === $month) ? "selected" : null;
                }
                $months .= "<option value='$month' $selected>$month</option>";
                $i++;
            }
            return $months;
        }
        //date of birth year
        public function selected_date_of_birth_year($form){
            $years = null;
            $years_to_display = array();
            $current = date("Y");
            while($current >= 1950 ){
                array_push($years_to_display, $current);
                $current--;
            }
            $i = 0;
            while($i < count($years_to_display)){
                $year     = $years_to_display[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['date-of-birth-year'] == $year) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->date_of_birth_year == $year) ? "selected" : null;
                }
                $years .= "<option value='$year' $selected>$year</option>";
                $i++;
            }
            return $years;
        }
        //your weight in
        public function selected_your_weight_in($form, $weight){
            $checked = null;
            if(isset($form['update']) && $form['weight'] === $weight){
                $checked = "checked";
            } else if(!isset($form['update']) && $this->_employee->your_weight_in === $weight){
                $checked = "checked";
            }
            return $checked;
        }
        //weight TEST THIS LATER
        public function inputted_weight($form){
            $weight = null;
            if(isset($form['update'])){
                if($form['weight'] === "kg"){
                    $weight = $form['weight-kg']; 
                } else {
                    $weight = $form['weight-lbs'];
                }
            } else {
                if($this->_employee->your_weight_in === "kg"){
                    $weight .= $this->_employee->weight_in_kg;
                } else {
                    $weight .= $this->_employee->weight_in_lbs;
                }
            }
         
            return $weight;
        } 
       //your height in
        public function selected_your_height_in($form, $height){
            $checked = null;
            if(isset($form['update']) && $form['height'] === $height){
                $checked = "checked";
            } else if(!isset($form['update']) && $this->_employee->your_height_in === $height){
                $checked = "checked";
            }
            return $checked;
        }
        //height
        public function inputted_height($form){
            $height = null;
            if(isset($form['update'])){
                if($form['height'] === "cm"){
                    $height = $form['height-cm'];
                } else {
                    $height = $form['height-ft'];
                }
            } else {
                if($this->_employee->your_height_in === "cm"){
                    $height .= $this->_employee->height_in_cm;
                } else {
                    $height .= $this->_employee->height_in_ft;
                }
            }
            return $height;
        }
        //nationality
        public function selected_nationality($form){
            $nationalities = null;
            $i             = 0;
            while($i < count($this->_nationalities)){
                $nationality    = $this->_nationalities[$i];
                $selected       = null;
                if(isset($form['update'])){
                    $selected = ($form['nationality'] === $nationality) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->nationality === $nationality) ? "selected" : null;
                }
                $nationalities .= "<option value='$nationality' $selected>$nationality</option>";
                $i++;
            }
            return $nationalities;
        }
        //i have a passport from
        public function selected_i_have_a_passport_from($form){
            $countries     = null;
            $i             = 0;
            $all_countries = array_merge($this->_eu_countries, $this->_normal_countries);
            while($i < count($all_countries)){
                $country  = $all_countries[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['have-a-passport-from'] ===  $country) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->have_a_passport_from ===  $country) ? "selected" : null;
                }
                $countries .= "<option value='$country' $selected>$country</option>";
                $i++;
            }
            return $countries;
        }
        //where are you currently living
        public function selected_where_are_you_currently_living($form, $living){
            $checked = null;
            if(isset($form['update']) && $form['currently-living'] === $living){
                $checked = "checked";
            }
            else if(!isset($form['update']) && $this->_employee->currently_living === $living){
                $checked = "checked";
            } 
            return $checked;
        }
        //living in
        public function selected_living_in($form){
            $countries     = null;
            $all_countries = array_merge($this->_eu_countries, $this->_normal_countries);
            $i             = 0;
            while($i < count($all_countries)){
                $country    = $all_countries[$i]; 
                $selected   = null;
                if(isset($form['update'])){
                    $selected = ($form['living-in'] === $country) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->living_in === $country) ? "selected" : null;
                }
                $countries .= "<option value='$country' $selected>$country</option>";
                $i++;
            }
            return $countries;
        }
        //visa status
        public function selected_visa_status($form, $status){
            $selected = null;
            if(isset($form['update']) && $form['visa-status'] === $status){
                $selected = "selected";
            } else if(!isset($form['update']) && $this->_employee->visa_status === $status){
                $selected = "selected";
            }
            return $selected;
        }
        //education
        public function selected_education($form){
            $educations = null;
            $i = 0;
            while($i < count($this->_educations)){
                $education = $this->_educations[$i];
                $selected  = null;
                if(isset($form['update'])){
                    $selected = ($form['education'] === $education) ? "selected" : null;
                } else {
                    $selected = ($this->_employee->education === $education) ? "selected" : null;
                }
                $educations .= "<option value='$education' $selected>$education</option>";
                $i++; 
            }
            return $educations;
        }
        //name of school college & university
        public function inputted_name_of_school_college_and_university($form){
            $name = null;
            if(isset($form['update'])){
                $name = $form['name-of-school-college-university'];
            } else {
                $name = $this->_employee->name_of_school_college_university;
            }
            return $name;
        }
        //profession
        public function inputted_profession($form){
            $profession = null;
            if(isset($form['update'])){
                $profession = $form['profession'];
            } else {
                $profession = $this->_employee->profession;
            }
            return $profession;
        }
        //marital_status
        public function selected_marital_status($form, $status){
            $selected = null;
            if(isset($form['update']) && $form['marital-status'] === $status){
                $selected = "selected";
            } else if(!isset($form['update']) && $this->_employee->marital_status === $status){
                $selected = "selected";
            }
            return $selected;
        }
        //have own children
        public function selected_do_you_have_children_of_your_own($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['have-own-children'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->have_own_children === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //have any siblings
        public function selected_do_you_have_any_siblings($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['have-siblings'] === $answer){
                $checked = "checked";
            } else if(!isset($form['update']) && $this->_employee->have_any_siblings === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //have training in health care
        public function selected_do_you_have_training_in_heatlhcare($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['healthcare-training'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->have_traning_in_healthcare === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //did you attend first aid training
        public function selected_did_you_attend_first_aid_training($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['have-first-aid-traning'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->attend_first_aid_training === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //do you have any criminal record
        public function selected_do_you_have_any_criminal_record($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['have-criminal-record'] === $answer){
                $checked = "checked";
            }else if($this->_employee->have_criminal_record === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //special diet consideration
        public function selected_special_diet_consideration($form, $diet){
            $selected = null;
            if(isset($form['update']) && $form['special-diet-consideration'] === $diet){
                $selected = "selected";
            } else if(!isset($form['update']) && $this->_employee->special_diet_considerations === $diet){
                $selected = "selected";
            }
            return $selected;
        }
        //do you have any health problems or allergy
        public function selected_do_you_have_any_health_problems_or_allergy($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['have-health-problems-or-allergies'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->have_health_problems_allergy === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //describe health problems or allergies
        public function inputted_describe_health_problems_or_allergies($form){
            $describe = null;
            if(isset($form['update']) && $form['have-health-problems-or-allergies'] === "Yes"){
                $describe = $form['describe-health-problems-or-allergies'];
            }else if(!isset($form['update']) && $this->_employee->have_health_problems_allergy === "Yes"){
                $describe = $this->_employee->describe_health_problems_allergies;
            }
            return $describe;
        }
        //do you smoke
        public function selected_do_you_smoke($form, $answer){
            $selected = null;
            if(isset($form['update']) && $form['do-you-smoke'] === $answer){
                $selected = "selected";
            }else if(!isset($form['update']) && $this->_employee->do_you_smoke === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //can you swim well
        public function selected_can_you_swim_well($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['can-swim-well'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->can_swim_well === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //can you ride a bike
        public function selected_can_you_ride_a_bike($form, $answer){
            $checked = null;
            if(isset($form['update']) && $form['can-ride-bike'] === $answer){
                $checked = "checked";
            }else if(!isset($form['update']) && $this->_employee->can_ride_bike === $answer){
                $checked = "checked";
            }
            return $checked;
        }
        //do you have a drivers license
        public function selected_do_you_have_a_drivers_license($form, $answer){
            $selected = null;
            if(isset($form['update']) && $form['have-drivers-license'] === $answer){
                $selected = "selected";
            }else if(!isset($form['update']) && $this->_employee->have_drivers_license === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //sports
        public function inputted_sports($form){
            $sports = null;
            if(isset($form['update'])){
                $sports = $form['sports'];
            } else {
                $sports = $this->_employee->sports;
            }
            return $sports;
        }
        //religion
        public function selected_religion($form){
            $religions = null;
            $i = 0;
            while($i < count($this->_religions)){
                $religion = $this->_religions[$i];
                $selected = null;
                if(isset($form['update'])){
                    $selected = ($form['religion'] === $religion) ? "selected" : null;
                }else{
                    $selected = ($this->_employee->religion === $religion) ? "selected" : null;
                }
                $religions .= "<option value='$religion' $selected>$religion</option>";
                $i++;
            }
            return $religions;
        }
        //religion for you is
        public function selected_religion_for_you_is($form, $answer){
            $selected = null;
            if(isset($form['update']) && $form['religion-for-you-is'] === $answer){
                $selected = "selected";
            }else if(!isset($form['update']) && $this->_employee->religion_for_you_is === $answer){
                $selected = "selected";
            }
            return $selected;
        }
        //firstname
        public function inputted_firstname($form){
            $firstname = null;
            if(isset($form['update'])){
                $firstname = $form['firstname'];
            }else{
                $firstname = $this->_employee->firstname;
            }
            return $firstname;
        }
        //lastname
        public function inputted_lastname($form){
            $lastname = null;
            if(isset($form['update'])){
                $lastname = $form['lastname'];
            } else {
                $lastname = $this->_employee->lastname;
            }
            return $lastname;
        }
        //address
        public function inputted_address($form){
            $address = null;
            if(isset($form['update'])){
                $address = $form['address'];
            } else {
                $address = $this->_employee->address;
            }
            return $address;
        }
        //zip code
        public function inputted_zipcode($form){
            $zipcode = null;
            if(isset($form['update'])){
                $zipcode = $form['zip-code'];
            } else {
                $zipcode = $this->_employee->zipcode;
            }
            return $zipcode;
        }
        //city
        public function inputted_city($form){
            $city = null;
            if(isset($form['update'])){
                $city = $form['city'];
            } else {
                $city = $this->_employee->city;
            }
            return $city;
        }
        //state
        public function inputted_state_region($form){
            $city = null;
            if(isset($form['update'])){
                $city = $form['state-region'];
            } else {
                $city = $this->_employee->state_region;
            }
            return $city;
        }
        //country
        public function selected_country($form){
            $countries     = null;
            $i             = 0;
            $all_countries = array_merge($this->_eu_countries, $this->_normal_countries);
            while($i < count($all_countries)){
                $country    = $all_countries[$i];
                $selected   = null;
                if(isset($form['update'])){
                    $selected = ($form['country'] === $country) ? "selected" : null;
                } else {
                    $selected   = ($this->_employee->country === $country) ? "selected" : null;
                }
                $countries .= "<option value='$country' $selected>$country</option>"; 
                $i++;
            }
            return $countries; 
        }
        //mobile phone no
       public function inputted_mobile_number($form){
           $number = null;
            if(isset($form['update'])){
                $number = $form['mobile-number'][0];
            } else {
                $number = $this->_employee->mobile_phone_no;
            }
            return $number;
       }
        //letter to the family
        public function inputted_letter_to_the_family($form){
            $letter = null;
            if(isset($form['update'])){
                $letter = $form['letter-to-the-family'];
            } else {
                $letter = $this->_employee->letter;
            }
            return $letter;
        }
        private function have_selected_other_country($form){
            $selected = false;
            for ($i=0; $i < count($form['preferred-countries']); $i++) { 
               if(in_array($form['preferred-countries'][$i], $this->_normal_countries)){
                   $selected = true;
                   break;
               }
            }
            return $selected;
        }
        private function get_what_are_you_looking_for_fields($form, $employee){
            //looking for a job as
            (in_array("aupair", $form['looking-for-job']))?$employee->aupair = 1 : $employee->aupair = 0;
            (in_array("nanny", $form['looking-for-job']))?$employee->nanny = 1 : $employee->nanny = 0;
            (in_array("granny aupair", $form['looking-for-job']))?$employee->granny_aupair = 1 : $employee->granny_aupair = 0;
            (in_array("caregiver for elderly", $form['looking-for-job']))?$employee->caregiver_for_elderly = 1 : $employee->caregiver_for_elderly = 0;
            (in_array("live in help", $form['looking-for-job']))?$employee->live_in_help  = 1 : $employee->live_in_help = 0;
            (in_array("live in tutor", $form['looking-for-job']))?$employee->live_in_tutor  = 1 : $employee->live_in_tutor = 0;
            (in_array("online tutor", $form['looking-for-job']))?$employee->online_tutor  = 1 : $employee->online_tutor = 0;
            (in_array("virtual childcare", $form['looking-for-job']))?$employee->virtual_childcare   = 1 : $employee->virtual_childcare = 0;
            //aupair, nanny, granny aupair fields
            if(in_array("aupair", $form['looking-for-job']) || in_array("nanny", $form['looking-for-job']) || in_array("granny aupair", $form['looking-for-job'])){
                (in_array("0 - 1 year old", $form['take-care-of-children']))?$employee->take_care_children_zero_to_one = 1 : $employee->take_care_children_zero_to_one = 0;
                (in_array("1 - 5 years old", $form['take-care-of-children']))?$employee->take_care_children_one_to_five = 1 : $employee->take_care_children_one_to_five = 0;
                (in_array("6 - 10 years old", $form['take-care-of-children']))?$employee->take_care_children_six_to_ten = 1 : $employee->take_care_children_six_to_ten = 0;
                (in_array("11 - 14 years old", $form['take-care-of-children']))?$employee->take_care_children_eleven_to_fourteen = 1 : $employee->take_care_children_eleven_to_fourteen = 0;
                (in_array("15+ years old", $form['take-care-of-children']))?$employee->take_care_children_fifteen_plus = 1 : $employee->take_care_children_fifteen_plus = 0;
                $employee->hours_childcare_experience             = $form['hours-child-care-experience'];
                $employee->number_of_people_children_to_take_care = $form['children-people-take-care-of'];
                $employee->would_work_for_single_parent           = $form['work-for-single-parent'];
                $employee->take_care_children_special_needs       = $form['take-care-children-with-special-needs'];
            }
            //care giver for elderly and live in help fields
            if(in_array("caregiver for elderly", $form['looking-for-job']) || in_array("live in help", $form['looking-for-job'])){
                (in_array("walks and outings", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_walks_outings = 1 : $employee->assist_and_support_in_walks_outings = 0;
                (in_array("mobility support", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_mobility_support = 1 : $employee->assist_and_support_in_mobility_support = 0;
                (in_array("driving", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_driving = 1 : $employee->assist_and_support_in_driving = 0;
                (in_array("errands/shopping", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_errands_shopping = 1 : $employee->assist_and_support_in_errands_shopping = 0;
                (in_array("cleaning & laundry", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_cleaning_laundry = 1 : $employee->assist_and_support_in_cleaning_laundry = 0;
                (in_array("light domestic work", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_light_domestic_work = 1 : $employee->assist_and_support_in_light_domestic_work = 0;
                (in_array("cooking meals", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_cooking_meals = 1 : $employee->assist_and_support_in_cooking_meals = 0;
                (in_array("washing & dressing", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_washing_dressing = 1 : $employee->assist_and_support_in_washing_dressing = 0;
                (in_array("companionship and conversation", $form['assist-support-elderly-in']))?$employee->assist_and_support_in_companionship_conversation = 1 : $employee->assist_and_support_in_companionship_conversation = 0;
                $employee->take_care_people_with_special_needs = $form['take-care-people-with-special-needs'];
            }
            //live in tutor, online tutor
            if(in_array("live in tutor", $form['looking-for-job']) || in_array("online tutor", $form['looking-for-job'])){
                (in_array("mathematics", $form['preferred-subjects']))?$employee->preferred_subject_mathematics = 1 : $employee->preferred_subject_mathematics = 0;
                (in_array("physics", $form['preferred-subjects']))?$employee->preferred_subject_physics = 1 : $employee->preferred_subject_physics = 0;
                (in_array("chemistry", $form['preferred-subjects']))?$employee->preferred_subject_chemistry = 1 : $employee->preferred_subject_chemistry = 0;
                (in_array("biology", $form['preferred-subjects']))?$employee->preferred_subject_biology = 1 : $employee->preferred_subject_biology = 0;
                (in_array("english", $form['preferred-subjects']))?$employee->preferred_subject_english = 1 : $employee->preferred_subject_english = 0;
                (in_array("german", $form['preferred-subjects']))?$employee->preferred_subject_german = 1 : $employee->preferred_subject_german = 0;
                (in_array("french", $form['preferred-subjects']))?$employee->preferred_subject_french = 1 : $employee->preferred_subject_french = 0;
                (in_array("spanish", $form['preferred-subjects']))?$employee->preferred_subject_spanish = 1 : $employee->preferred_subject_spanish = 0;
                (in_array("italian", $form['preferred-subjects']))?$employee->preferred_subject_italian = 1 : $employee->preferred_subject_italian = 0;
                (in_array("music", $form['preferred-subjects']))?$employee->preferred_subject_music = 1 : $employee->preferred_subject_music = 0;
                (in_array("sport", $form['preferred-subjects']))?$employee->preferred_subject_sport = 1 : $employee->preferred_subject_sport = 0;
            }
            //live in tutor, virtual childcare
            if(in_array("live in tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                (in_array("homework assistance", $form['activities-with-kids']))?$employee->activitivies_with_kids_homework_assistance = 1 : $employee->activitivies_with_kids_homework_assistance = 0;
                (in_array("book reading", $form['activities-with-kids']))?$employee->activitivies_with_kids_book_reading = 1 : $employee->activitivies_with_kids_book_reading = 0;
                (in_array("art & craft", $form['activities-with-kids']))?$employee->activitivies_with_kids_art_craft = 1 : $employee->activitivies_with_kids_art_craft = 0;
                (in_array("drawing & cutting", $form['activities-with-kids']))?$employee->activitivies_with_kids_drawing_cutting = 1 : $employee->activitivies_with_kids_drawing_cutting = 0;
                (in_array("numbers & counting", $form['activities-with-kids']))?$employee->activitivies_with_kids_numbers_counting = 1 : $employee->activitivies_with_kids_numbers_counting = 0;
                (in_array("letters & sound", $form['activities-with-kids']))?$employee->activitivies_with_kids_letters_sounds = 1 : $employee->activitivies_with_kids_letters_sounds = 0;
                (in_array("songs & poetry", $form['activities-with-kids']))?$employee->activitivies_with_kids_songs_poetry = 1 : $employee->activitivies_with_kids_songs_poetry = 0;
                (in_array("mind games & activity", $form['activities-with-kids']))?$employee->activitivies_with_kids_mind_games_activity = 1 : $employee->activitivies_with_kids_mind_games_activity = 0;
            }
            //live in tutor, online tutor, virtual childcare
            if(in_array("live in tutor", $form['looking-for-job']) ||  in_array("online tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                (in_array("infants (0-1)", $form['student-age-group']))?$employee->student_age_group_infants = 1 : $employee->student_age_group_infants = 0;
                (in_array("toddlers (2-3)", $form['student-age-group']))?$employee->student_age_group_toddllers = 1 : $employee->student_age_group_toddllers = 0;
                (in_array("preschoolers (4-5)", $form['student-age-group']))?$employee->student_age_group_preschoolers = 1 : $employee->student_age_group_preschoolers = 0;
                (in_array("primary school (6-12)", $form['student-age-group']))?$employee->student_age_group_primary_school = 1 : $employee->student_age_group_primary_school = 0;
                (in_array("teenagers (13-17)", $form['student-age-group']))?$employee->student_age_group_teenagers = 1 : $employee->student_age_group_teenagers = 0;
                (in_array("young adults (18-30)", $form['student-age-group']))?$employee->student_age_group_young_adults = 1 : $employee->student_age_group_young_adults = 0;
                (in_array("adults (31-60)", $form['student-age-group']))?$employee->student_age_group_adults = 1 : $employee->student_age_group_adults = 0;
                (in_array("senior (60+)", $form['student-age-group']))?$employee->student_age_group_seniors = 1 : $employee->student_age_group_seniors = 0;
            }
            // online tutor and virtual childcare
            if(in_array("online tutor", $form['looking-for-job']) || in_array("virtual childcare", $form['looking-for-job'])){
                $employee->price_per_hour_amount   = $form['price-per-hour'];
                $employee->price_per_hour_currency = $form['currency'];
            }
            //preferred countries
            $preferred_countries = array();
            if(in_array("Select All", $form['preferred-countries'])){
                array_push($preferred_countries, "All Countries");
            } else if(in_array("EU Countries", $form['preferred-countries']) && $this->have_selected_other_country($form) === false){
                array_push($preferred_countries, "EU Countries");
            } else if(in_array("EU Countries", $form['preferred-countries']) && $this->have_selected_other_country($form)){
                array_push($preferred_countries, "EU Countries");
                $i = 0;
                while($i < count($this->_normal_countries)){
                    $country = $this->_normal_countries[$i];
                    if(in_array($country, $form['preferred-countries'])){
                        array_push($preferred_countries, $country);
                    }
                    $i++;
                }
            } else {
                $i = 0;
                while($i < count($_POST['preferred-countries'])){
                    array_push($preferred_countries, $_POST['preferred-countries'][$i]);
                    $i++;
                }
            }
            $employee->preferred_countries = $preferred_countries;
            //preferred area
            (in_array("all", $form['preferred-area']))?$employee->preferred_area_all = 1 : $employee->preferred_area_all = 0;
            (in_array("small_city", $form['preferred-area']))?$employee->preferred_area_small_city = 1 : $employee->preferred_area_small_city = 0;
            (in_array("big_city", $form['preferred-area']))?$employee->preferred_area_big_city = 1 : $employee->preferred_area_big_city = 0;
            (in_array("suburd", $form['preferred-area']))?$employee->preferred_area_suburd = 1 : $employee->preferred_area_suburd = 0;
            (in_array("countryside", $form['preferred-area']))?$employee->preferred_area_countryside = 1 : $employee->preferred_area_countryside = 0;
            (in_array("town", $form['preferred-area']))?$employee->preferred_area_town = 1 : $employee->preferred_area_town = 0;
            (in_array("village", $form['preferred-area']))?$employee->preferred_area_village = 1 : $employee->preferred_area_village = 0;
            (in_array("sea_side", $form['preferred-area']))?$employee->preferred_area_sea_side = 1 : $employee->preferred_area_sea_side = 0;
            //fields
            $employee->earliest_starting_date_month = $form['earliest-starting-date-month'];
            $employee->earliest_starting_date_year  = $form['earliest-starting-date-year'];
            $employee->latest_starting_date_month   = $form['latest-starting-date-month'];
            $employee->latest_starting_date_year    = $form['latest-starting-date-year'];
            $employee->duration_of_stay             = $form['duration-of-stay'];
            $employee->kind_of_work_looking         = $form['kind-of-work-looking'];
            $employee->accomodation                 = $form['accomodation'];
            $employee->would_live_family_with_pets  = $form['live-family-with-pets'];
            $employee->would_take_care_of_pets      = $form['take-care-pets'];
            $employee->would_work_extra_to_earn     = $form['work-extra-to-earn-additional-money'];
        }
        private function get_personal_information_fields($form, $employee){
            $employee->gender              = $form['gender'];
            $employee->date_of_birth_month = $form['date-of-birth-month'];
            $employee->date_of_birth_year  = $form['date-of-birth-year'];
            $employee->age                 = date("Y") - $form['date-of-birth-year'];
            $employee->your_weight_in      = $form['weight'];
            ($form['weight'] === "kg") ? $employee->weight_in_kg = $form['weight-kg'] : $employee->weight_in_lbs = $form['weight-lbs'];
            $employee->your_height_in = $form['height'];
            ($form['height'] === "cm") ? $employee->height_in_cm = $form['height-cm'] : $employee->height_in_ft = $form['height-ft'];
            $employee->nationality          = $form['nationality'];
            $employee->have_a_passport_from = $form['have-a-passport-from']; 
            $employee->currently_living     = $form['currently-living'];
            if($form['currently-living'] === "Another country"){
                $employee->living_in          = $form['living-in'];
                $employee->visa_status        = $form['visa-status'];
                $employee->employee_living_in = $form['living-in'];
            } else {
                $employee->employee_living_in = $form['country'];
            }
            
            $employee->education                         = $form['education'];
            $employee->name_of_school_college_university = $form['name-of-school-college-university'];
            $employee->profession                        = $form['profession'];
            $employee->marital_status                    = $form['marital-status'];
            $employee->have_own_children                 = $form['have-own-children'];
            $employee->have_any_siblings                 = $form['have-siblings'];
            $employee->have_traning_in_healthcare        = $form['healthcare-training'];
            $employee->attend_first_aid_training         = $form['have-first-aid-traning'];
            $employee->have_criminal_record              = $form['have-criminal-record'];
            $employee->special_diet_considerations       = $form['special-diet-consideration'];
            $employee->have_health_problems_allergy      = $form['have-health-problems-or-allergies'];
            ($form['have-health-problems-or-allergies'] === "Yes") ? $employee->describe_health_problems_allergies = ltrim($form['describe-health-problems-or-allergies']) : null;
            $employee->do_you_smoke = $form['do-you-smoke'];
            $employee->can_swim_well = $form['can-swim-well'];
            $employee->can_ride_bike = $form['can-ride-bike'];
            $employee->have_drivers_license = $form['have-drivers-license'];
            $employee->sports               = $form['sports'];
            $employee->religion             = $form['religion'];
            $employee->religion_for_you_is  = $form['religion-for-you-is'];
        }
        private function get_contact_information_fields($form, $employee){
            $employee->firstname       = $form['firstname'];
            $employee->lastname        = $form['lastname'];
            $employee->address         = $form['address'];
            $employee->zipcode         = $form['zip-code'];
            $employee->city            = $form['city'];
            $employee->state_region    = $form['state-region'];
            $employee->country         = $form['country'];
            $employee->mobile_phone_no = $form['mobile-number'][0];
            $employee->letter          = ltrim($form['letter-to-the-family']);
        }
        public function set_employee_object($form, $employee){
            $this->get_what_are_you_looking_for_fields($form, $employee);
            $this->get_personal_information_fields($form, $employee);
            $this->get_contact_information_fields($form, $employee);
            return $employee;
        }
      
        
    }
?>