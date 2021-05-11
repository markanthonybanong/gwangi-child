<?php
  
   class Find_Employee_Query{
      private $_eu_countries;
      private $_selected_countries_wp_user_id;
      public function __construct($eu_countries, $selected_countries_wp_user_id){
         $this->_selected_countries_wp_user_id = $selected_countries_wp_user_id;
         $this->_eu_countries                  = $eu_countries;
      }
      
      public function query(){
         $query = "SELECT * FROM aupair_registered_employee WHERE user_type = 'employee'";
         if(isset($_POST['required-picture'])){
            $query = "SELECT * FROM aupair_registered_employee WHERE (user_type = 'employee' AND photo IS NOT NULL)";
         }
         if(isset($_POST['looking-for'])){
            $jobs  = $_POST['looking-for'];
            $i     = 0;
            $temp_query = " AND (";
            while($i < count($jobs)){
               $job = $jobs[$i];
               if($job === "aupair"){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_aupair = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_aupair = '1' OR ";
                  }
               }
               if($job === 'nanny'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_nanny = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_nanny = '1' OR ";
                  }
               }
               if($job === 'granny-aupair'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_granny_aupair = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_granny_aupair = '1' OR ";
                  }
               }
               if($job === 'caregiver-for-elderly'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_caregiver_for_elderly = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_caregiver_for_elderly = '1' OR ";
                  }
               }
               if($job === 'live-in-help'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_live_in_help = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_live_in_help = '1' OR ";
                  }
               }
               if($job === 'live-in-tutor'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_live_in_tutor = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_live_in_tutor = '1' OR ";
                  }
               }
               if($job === 'online-tutor'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_online_tutor = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_online_tutor = '1' OR ";
                  }
               }
               if($job === 'virtualchildcare'){
                  if($i + 1 === count($jobs)){
                     $temp_query .= "looking_for_job_as_virtual_childcare = '1')";
                  } else {
                     $temp_query .= "looking_for_job_as_virtual_childcare = '1' OR ";
                  }
               }
               $i++;
            }
            $query .= $temp_query;
         }
         if(count($this->_selected_countries_wp_user_id)){
            $i          = 0;
            $temp_query = " AND (";
            $selected_countries_wp_user_id = $this->_selected_countries_wp_user_id; 
            while($i < count($selected_countries_wp_user_id)){
               if($i + 1 === count($selected_countries_wp_user_id)){
                  $temp_query .= "wp_user_id = '$selected_countries_wp_user_id[$i]')";
               } else {
                  $temp_query .= "wp_user_id = '$selected_countries_wp_user_id[$i]' OR ";
               }
               $i++;
            }
            $query .= $temp_query;
         }
         if(isset($_POST['employee-applying-for'])){
            //add new column employee_currently_living_in
         }
         if(isset($_POST['required-gender']) && $_POST['required-gender'] !== 'No Preferences'){
            if($_POST['required-gender'] === 'Male'){
               $query .=" AND ( gender = 'Male')";
            } elseif($_POST['required-gender'] === 'Female') {
               $query .=" AND ( gender = 'Female')";
            }
         }
         if(isset($_POST['required-age-min']) && isset($_POST['required-age-max'])){
            // add age column
         } else if(isset($_POST['required-age-min'])){

         } else if(isset($_POST['required-age-max'])){
            
         }
         if(isset($_POST['nationality']) && $_POST['nationality'] !== 'No Preferences'){
            $nationality = $_POST['nationality'];
            $query .= " AND( nationality = '$nationality')";
         }
         return $query;
      }
      public function test(){
         return $this->_selected_countries_wp_user_id;
      }
   }
?>