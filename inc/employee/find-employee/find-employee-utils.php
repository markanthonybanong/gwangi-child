<?php 
    class Find_Employee_Utils{
        public  $page  = null;
        public  $limit = 10;
        private $_eu_countries = null;
        private $_wpdb = null;

        public function __construct($eu_countries, $wpdb){
            $this->_wpdb = $wpdb;
            $this->_eu_countries = $eu_countries;
            $this->page = ( isset( $_GET['employee-page'] ) ) ? $_GET['employee-page'] : 1;
        }
        private function get_jobs($employee_jobs){
            $jobs          =  array();
            $selected_jobs = null;
            foreach( $employee_jobs as $job => $value ){
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
                if( $job === 'online-tutor' && $value === "1" ){
                    array_push($jobs, 'Online Tutor');
                }
                if( $job === 'virtual-childcare' && $value === "1" ){
                    array_push($jobs, 'Virtual Childcare');
                }
            }
            if( count($jobs) === 2 ){
                $selected_jobs = "$jobs[0] & $jobs[1]";
            }else{
                $selected_jobs = "$jobs[0]";
            }
            return $selected_jobs;
        }
        private function get_countries($wp_user_id){
            global $wpdb;
            $selected_countries = null;
            $countries          = array();
            $result             = $wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries WHERE wp_user_id = '$wp_user_id'");
            $i                  = 0;
            while($i < count($result)){
                array_push($countries, $result[$i]->country);
                $i++;
            }
            if(count($countries) === 1){
                $selected_countries = $countries[0];
            } elseif (count($countries) > 5) {
                for ($i=0; $i < count($countries); $i++) { 
                    if($i === 4){
                        $selected_countries .= "$countries[$i]...";
                        break;
                    } else {
                        $selected_countries .="$countries[$i], ";
                    }
                }
            } else {
                $i = 0;
                while($i < count($countries)){
                    //next value is last index
                    if($i+1 === count($countries) - 1){
                        $selected_countries .= "$countries[$i] & ";
                    }elseif($i+1 === count($countries)){//last inded
                        $selected_countries .= "$countries[$i]";
                    }else {
                        $selected_countries .= "$countries[$i], ";
                    }
                    $i++;
                }
            }
            return $selected_countries;   
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
        private function countries_wp_user_id($to_check_countries){
            $i                    = 0;
            $countries_wp_user_id = array();
            while($i < count($to_check_countries)){
                $to_check_country = $to_check_countries[$i];
                $db_countries     = $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries where country = '$to_check_country'");
                if(count($db_countries)){
                    $db_country_index = 0;
                    while($db_country_index < count($db_countries)){
                        $db_country = $db_countries[$db_country_index];
                        if(!in_array($db_country->wp_user_id, $countries_wp_user_id)){
                            array_push($countries_wp_user_id, $db_country->wp_user_id);
                        }
                        $db_country_index++;
                    }
                } else {
                    if(!in_array(null, $countries_wp_user_id)){
                        array_push($countries_wp_user_id, null);
                    }
                }
                $i++;
            }
            return $countries_wp_user_id;
        }
        public function display_employees($employees){
          $i                         = 0;
          $employee_parent_container = null;
          $employee_container_count  = 1; 
          $mark_up                   = null; 
          while($i < count($employees)){
              $employee                 = $employees[$i];
              $age                      = date("Y") - $employee->date_of_birth_year;
              $employee_container       = null;
              $employee_jobs            = array(
                                              "aupair"                => $employee->looking_for_job_as_aupair, 
                                              "nanny"                 => $employee->looking_for_job_as_nanny,
                                              "granny-auapir"         => $employee->looking_for_job_as_granny_aupair,
                                              "caregiver-for-elderly" => $employee->looking_for_job_as_caregiver_for_elderly,
                                              "live-in-help"          => $employee->looking_for_job_as_live_in_help,
                                              "live-in-tutor"         => $employee->looking_for_job_as_live_in_tutor,
                                              "online-tutor"          => $employee->looking_for_job_as_online_tutor,
                                              "virtual-childcare"     => $employee->looking_for_job_as_virtual_childcare
                                          );
              $jobs                     = $this->get_jobs($employee_jobs);
              $letter                   = $this->get_letter($employee->letter);
              $img_class                = ($employee->photo_privacy === 'Registered Members')? 'blurred' : null;
              $employee_profile_link    = add_query_arg('employee-id', $employee->wp_user_id, 'view-employee-profile' );
              $img_src                  = $employee->photo != ""
                                           ? get_stylesheet_directory_uri().'/users-photo/employee/'.$employee->photo
                                           : get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
              $countries                = $this->get_countries($employee->wp_user_id);
                                        
              $employee_container   .= "<div class='employee-container'>";
              $employee_container   .=    "<div class='employee'>";
              $employee_container   .=       "<div class='employee-top-info'>
                                                  <p>$employee->firstname, $age years old, $employee->profession from $employee->country looking for
                                                     $jobs jobs in $countries
                                                  </p>
                                              </div>";
              $employee_container   .=       "<img src='$img_src' class='$img_class' alt='$employee->firstname $employee->lastname'>"; 
              $employee_container   .=       "<div class='employee-btm-info'>";
              $employee_container   .=          "<p><span id='bold'>Nationality:</span> $employee->nationality</p>
                                                  <p><span id='bold'>Start:</span> 
                                                     $employee->earliest_starting_date_month $employee->earliest_starting_date_year -  
                                                     $employee->latest_starting_date_month $employee->latest_starting_date_year($employee->duration_of_stay)
                                                 </p>";
              $employee_container   .=       "</div>";
              $employee_container   .=    "</div>";
              $employee_container   .=    "<div class='letter-to-the-family-container'>";
              $employee_container   .=       "<div class='letter-to-family add-border-bottom'>";
              $employee_container   .=         "<p>$letter</p>";
              $employee_container   .=       "</div>";
              $employee_container   .=       "<div class='btn-container'>";
              $employee_container   .=           "<a href='$employee_profile_link'>
                                                     <button>View Profile</button>
                                                  </a>";
              $employee_container   .=       "</div>";
              $employee_container   .=    "</div>";
              $employee_container   .= "</div>";
                                        
              if ($employee_container_count === 2){
                  $employee_parent_container .= $employee_container;
                  $employee_parent_container .= "</div>";
                  $mark_up                   .= $employee_parent_container;
                  $employee_parent_container = null;
                  $employee_container_count  = 1;
              } elseif($employee_container_count === 1 && $i !== count($employees)-1 && count($employees) !== 1){//not equals to last index
                  $employee_parent_container .= "<div class='employee-parent-container'>";
                  $employee_parent_container .= $employee_container;
                  $employee_container_count  += 1;
              }  else {
                  $employee_parent_container .= "<div class='employee-parent-container'>";
                  $employee_parent_container .=  $employee_container;
                  $employee_parent_container .= "</div>";
                  $mark_up                   .= $employee_parent_container;
                  $employee_parent_container = null;
              }
              $i++;
          }
          return $mark_up;
        }
        public function get_employee_applying_for_countries_wp_user_id(){
            $countries_to_check = array();
            if(isset($_POST['employee-applying-for'])){
                $selected_countries = $_POST['employee-applying-for'];
                if(in_array('EU/EØS/SCHENGEN Countries', $selected_countries)){
                    array_push($countries_to_check, 'EU Countries');
                } 
                $i = 0;
                while($i < count($selected_countries)){
                    $country = $selected_countries[$i];
                    if($country !== 'EU/EØS/SCHENGEN Countries'){
                        array_push($countries_to_check, $country);
                    }
                    $i++;
                }
            }
            return $this->countries_wp_user_id($countries_to_check);
        }
    }
?>