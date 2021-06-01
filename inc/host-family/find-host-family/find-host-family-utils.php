<?php 
    class Find_Host_Family_Utils{
        public  $page       = null;
        public  $limit      = 10;
        private $_db        = null;
        private $_variables = null;
        public function __construct(
            $find_employee_db,
            $variables
        ){
            $this->page       = ( isset( $_GET['host-family-page'] ) ) ? $_GET['host-family-page'] : 1;
            $this->_db        = $find_employee_db;
            $this->_variables = $variables;
        }
        private function get_jobs($jobs_offered){
            $jobs          =  array();
            $selected_jobs = null;
            foreach( $jobs_offered as $job => $value ){
                if( $job === 'aupair' && $value === "1" ){
                    array_push($jobs, 'Au Pair');
                }
                if( $job === 'nanny' && $value === "1" ){
                    array_push($jobs, 'Nanny');
                }
                if( $job === 'granny-aupair' && $value === "1" ){
                    array_push($jobs, 'Granny Aupair');
                }
                if( $job === 'caregiver-for-elderly' && $value === "1" ){
                    array_push($jobs, 'Caregiver for Elderly');
                }
                if( $job === 'live-in-help' && $value === "1" ){
                    array_push($jobs, 'Live in Help');
                }
                if( $job === 'live-in-tutor' && $value === "1" ){
                    array_push($jobs, 'Live in Tutor');
                }
            }
            if( count($jobs) === 2 ){
                $selected_jobs = "$jobs[0] & $jobs[1] jobs";
            }else{
                $selected_jobs = "$jobs[0] job";
            }
            return $selected_jobs;
        }
 
        private function get_letter($employee_letter){
            $letter = null;
            if(strlen($employee_letter) > 360){
                $letters = str_split($employee_letter);
                $i       = 0;
                while($i <= 371){
                    $letter .= $letters[$i];
                    $i++;
                }
                $letter .= "...";
            } else {
                $letter = $employee_letter;
            }
            return $letter;
        }
        public function query(){
            $query = "SELECT * FROM aupair_registered_host_family WHERE (user_type = 'host-family')";
            if(isset($_POST['required-picture'])){
               $query = "SELECT * FROM aupair_registered_host_family WHERE (user_type = 'host-family' AND photo IS NOT NULL)";
            }
            if(isset($_POST['looking-for'])){
               $jobs  = $_POST['looking-for'];
               $i     = 0;
               $temp_query = " AND (";
               while($i < count($jobs)){
                  $job = $jobs[$i];
                  if($job === "aupair"){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_aupair = '1')";
                     } else {
                        $temp_query .= "looking_for_aupair = '1' OR ";
                     }
                  }
                  if($job === 'nanny'){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_nanny = '1')";
                     } else {
                        $temp_query .= "looking_for_nanny = '1' OR ";
                     }
                  }
                  if($job === 'granny-aupair'){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_granny_aupair = '1')";
                     } else {
                        $temp_query .= "looking_for_granny_aupair = '1' OR ";
                     }
                  }
                  if($job === 'caregiver-for-elderly'){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_caregiver_for_elderly = '1')";
                     } else {
                        $temp_query .= "looking_for_caregiver_for_elderly = '1' OR ";
                     }
                  }
                  if($job === 'live-in-help'){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_live_in_help = '1')";
                     } else {
                        $temp_query .= "looking_for_live_in_help = '1' OR ";
                     }
                  }
                  if($job === 'live-in-tutor'){
                     if($i + 1 === count($jobs)){
                        $temp_query .= "looking_for_live_in_tutor = '1')";
                     } else {
                        $temp_query .= "looking_for_live_in_tutor = '1' OR ";
                     }
                  }
                  $i++;
               }
               $query .= $temp_query;
            }
            if(isset($_POST['nationality']) && $_POST['nationality'] !== 'No Preferences'){
                $nationality = $_POST['nationality'];
                $query .= " AND (nationality = '$nationality')";
            }
            if(isset($_POST['countries'])){
                $countries = $_POST['countries'];
                if(count($countries) === 1){
                    $query .= " AND (country = '$countries[0]')";
                } else {
                    $temp_query = " AND (";
                    $i = 0;
                    while($i < count($countries)){
                        $country = $countries[$i];
                        if($i+1 === count($countries)){ //last index
                            $temp_query .= "country = '$country')";
                        } else {
                            $temp_query .= "country = '$country' OR ";
                        }
                        $i++;
                    }
                    $query .= $temp_query;
                }
            }
            if(isset($_POST['living-in'])){
                $areas = $_POST['living-in'];
                if(count($areas) === 1){
                    $query .= " AND (where_do_you_live = '$areas[0]')";
                } else {
                    $temp_query = " AND (";
                    $i = 0;
                    while($i < count($areas)){
                        $area = $areas[$i];
                        if($i+1 === count($areas)){ //last index
                            $temp_query .= "where_do_you_live = '$area')";
                        } else {
                            $temp_query .= "where_do_you_live = '$area' OR ";
                        }
                        $i++;
                    }
                    $query .= $temp_query;
                }
            }
            if(isset($_POST['duration'])){
                $durations = $_POST['duration'];
                if(count($durations) === 1){
                    $query .= " AND (duration = '$durations[0]')";
                } else {
                    $temp_query = " AND (";
                    $i          = 0;
                    while($i < count($durations)){
                        $duration = $durations[$i];
                        if($i+1 === count($durations)){ //last index
                            $temp_query .= "duration = '$duration')";
                        } else {
                            $temp_query .= "duration ='$duration' OR ";
                        }
                        $i++;
                    }
                    $query .= $temp_query;        
                }
            }
            return $query;
        }
        public function display_host_family($host_families){
            $i                            = 0;
            $host_family_parent_container = null;
            $host_family_container_count  = 1; 
            $mark_up                      = null; 
            while($i < count($host_families)){
                $host_family              = $host_families[$i];
                $host_family_container    = null;
                $jobs_offered             = array(
                                                "aupair"                => $host_family->looking_for_aupair, 
                                                "nanny"                 => $host_family->looking_for_nanny,
                                                "granny-auapir"         => $host_family->looking_for_granny_aupair,
                                                "caregiver-for-elderly" => $host_family->looking_for_caregiver_for_elderly,
                                                "live-in-help"          => $host_family->looking_for_live_in_help,
                                                "live-in-tutor"         => $host_family->looking_for_live_in_tutor
                                            );
                $jobs                     = $this->get_jobs($jobs_offered);
                $letter                   = $this->get_letter($host_family->letter);
                $img_class                = ($host_family->photo_privacy === 'Registered Members' && $host_family->photo !== null)? 'blurred' : null;
                $host_family_profile_link = add_query_arg('host-family-id', $host_family->wp_user_id, site_url('/view-host-family-profile') );
                $img_src                  = $host_family->photo != ""
                                             ? get_stylesheet_directory_uri().'/users-photo/host-family/'.$host_family->photo
                                             : get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                                          
                $host_family_container   .= "<div class='host-family-container'>";
                $host_family_container   .=    "<div class='host-family'>";
                $host_family_container   .=       "<div class='host-family-top-info'>
                                                  <p>
                                                    $host_family->nationality family in $host_family->city, $host_family->country, offering an
                                                    $jobs for $host_family->duration
                                                  </p>
                                              </div>";
                $host_family_container   .=       "<img src='$img_src' class='$img_class' alt='$host_family->firstname $host_family->lastname'>"; 
                $host_family_container   .=       "<div class='host-family-btm-info'>";
                $host_family_container   .=          "<p><span id='bold'>Start:</span> 
                                                         $host_family->earliest_starting_date_month $host_family->earliest_starting_date_year -  
                                                         $host_family->latest_starting_date_month $host_family->latest_starting_date_year($host_family->duration)
                                                     </p>
                                                     <p><span id='bold'>Salary(per month):</span> 
                                                         $host_family->salary_per_month_amount $host_family->salary_per_month_currency
                                                     </p>";
                $host_family_container   .=       "</div>";
                $host_family_container   .=    "</div>";
                $host_family_container   .=    "<div class='letter-to-the-applicant-container'>";
                $host_family_container   .=       "<div class='letter-to-applicant add-border-bottom'>";
                $host_family_container   .=         "<p>$letter</p>";
                $host_family_container   .=       "</div>";
                $host_family_container   .=       "<div class='btn-container'>";
                $host_family_container   .=           "<a href='$host_family_profile_link'>
                                                     <button id='view-profile'>View Profile</button>
                                                  </a>";
                $host_family_container   .=       "</div>";
                $host_family_container   .=    "</div>";
                $host_family_container   .= "</div>";
                                          
                if ($host_family_container_count === 2){
                    $host_family_parent_container .= $host_family_container;
                    $host_family_parent_container .= "</div>";
                    $mark_up                      .= $host_family_parent_container;
                    $host_family_parent_container = null;
                    $host_family_container_count  = 1;
                } elseif($host_family_container_count === 1 && $i !== count($host_families)-1 && count($host_families) !== 1){//not equals to last index
                    $host_family_parent_container .= "<div class='host-family-parent-container'>";
                    $host_family_parent_container .= $host_family_container;
                    $host_family_container_count  += 1;
                }  else {
                    $host_family_parent_container .= "<div class='host-family-parent-container'>";
                    $host_family_parent_container .=  $host_family_container;
                    $host_family_parent_container .= "</div>";
                    $mark_up                   .= $host_family_parent_container;
                    $host_family_parent_container = null;
                }
                $i++;
            }
            return $mark_up;
        }
    }



?>