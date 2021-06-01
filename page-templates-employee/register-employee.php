<?php 
/*
 * Template Name: Register Employee
 * description: >-
  Active aupair employee registration form(Activate this template in wordpress dashboard)
 */
get_header();
?>
<?php
   global $wpdb;
   require get_theme_file_path('assets/utilities/php/variables.php');
   require get_theme_file_path('inc/common-utilities.php');
   require get_theme_file_path('inc/employee/employee.php');
   require get_theme_file_path('inc/employee/register-employee/register-employee-utils.php');
   require get_theme_file_path('inc/employee/register-employee/register-employee-db.php');
   $variables    = new Variables();
   $common_utils = new Common_Utilities();
   $employee     = new Employee();
   $utils        = new Register_Employee_Utils($variables);
   $db           = new Register_Employee_Db($wpdb);
?>
   <div class="active-aupair-parent-container">
      <div class="active-aupair-container register-employee-container">
         <form id="form" method="post" action="">
            <div class="warning-msg">
               <?php
                  if(isset($_POST['insert'])){
                     $result = $common_utils->insert_into_wp_users($_POST['email'], $_POST['password']);
                     //when error it returns an object, if not result is ID
                     if(is_object($result) === false){
                        $employee->wp_user_id = $result;
                        $employee_data        = $utils->set_employee_object($_POST, $employee);
                        $insert_employee      = $db->insert($employee_data);
                        if($insert_employee){
                           $i = 0;
                           while($i < count($employee_data->preferred_countries) ){
                              $country = $employee_data->preferred_countries[$i];
                              $db->insert_preferred_country($result, $country);
                              $i++;
                           }
                           echo "<p id='required'>We have sent a verification link to your email address. Please check your inbox or spam.</p>";
                        } else {
                           echo "<p id='required'>Something went wrong.</p>";
                        }
                     } else {
                        $error = $result->get_error_message();
                        echo "<p id='required'>$error</p>";
                     }
                  }
               ?>
            </div>
            <pre>
               <?php
                  #TEST
                  if(isset($_POST['insert'])){
                   
                  }
               ?>
            </pre>
            <div>
               <h3 class="add-border-bottom">What are you looking for?</h3>
               <h5>Looking for a job as (max. 2)<span id="required">*</span></h5>
               <div class="center">
                  <div class="looking-for-job">
                     <div class="registration-checkbox">
                           <label><input type="checkbox" name="looking-for-job[]" value="aupair" class="un-check" id="aupair" <?php echo $utils->selected_looking_for_job($_POST, "aupair");?>/> Aupair</label>
                           <label><input type="checkbox" name="looking-for-job[]" value="nanny" class="un-check" id="nanny" <?php echo $utils->selected_looking_for_job($_POST, "nanny");?>/> Nanny</label>
                           <label><input type="checkbox" name="looking-for-job[]" value="granny aupair" class="un-check" id="granny-aupair" <?php echo $utils->selected_looking_for_job($_POST, "granny aupair");?>/> Granny aupair</label>
                           <label><input type="checkbox" name="looking-for-job[]" value="caregiver for elderly" class="un-check" id="caregiver-for-elderly" <?php echo $utils->selected_looking_for_job($_POST, "caregiver for elderly");?>/> Caregiver for elderly</label>
                     </div>
                     <div class="registration-checkbox">
                           <label><input type="checkbox" name="looking-for-job[]" value="live in help" class="un-check" id="live-in-help" <?php echo $utils->selected_looking_for_job($_POST, "live in help");?>/> Live in help</label> 
                           <label><input type="checkbox" name="looking-for-job[]" value="live in tutor" class="un-check" id="live-in-tutor" <?php echo $utils->selected_looking_for_job($_POST, "live in tutor");?>/> Live in tutor</label> 
                           <label><input type="checkbox" name="looking-for-job[]" value="online tutor" class="un-check" id="online-tutor" <?php echo $utils->selected_looking_for_job($_POST, "online tutor");?>/> Online tutor</label> 
                           <label><input type="checkbox" name="looking-for-job[]" value="virtual childcare" class="un-check" id="virtual-childcare" <?php echo $utils->selected_looking_for_job($_POST, "virtual childcare");?>/> Virtual Childcare</label> 
                     </div>
                  </div>
               </div>
            </div>
            <!-- LOOKING FOR A JOB SHOW/HIDE INPUTS -->
            <div class="aupair-nanny-granny-aupair">
               <div class="r-e-take-care-of-children active-aupair-registration-checkbox">
                  <h3 class="add-border-bottom">Aupair, Nanny & Granny Aupair</h3>
                     <h6>I will take care of children from age<span id="required">*</span></h6>
                     <div class="center">
                        <div class="take-care-children">
                           <div class="registration-checkbox">
                              <label><input type="checkbox" name="take-care-of-children[]" value="0 - 1 year old" <?php echo $utils->selected_i_will_take_care_of_children_from_age($_POST, "0 - 1 year old");?>/> 0 - 1 year old</label>   
                              <label><input type="checkbox" name="take-care-of-children[]" value="1 - 5 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age($_POST, "1 - 5 years old");?>/> 1 - 5 years old</label>
                              <label><input type="checkbox" name="take-care-of-children[]" value="6 - 10 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age($_POST, "6 - 10 years old");?>/> 6 - 10 years old</label>
                              <label><input type="checkbox" name="take-care-of-children[]" value="11 - 14 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age($_POST, "11 - 14 years old");?>/> 11 - 14 years old</label>
                           </div>
                           <div class="registration-checkbox">
                              <label><input type="checkbox" name="take-care-of-children[]" value="15+ years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age($_POST, "15+ years old");?>/> 15+ years old</label>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="r-e-hours-childcare-experience input-border-padding">
                  <div class="center">
                     <div class="registration-input">
                        <div class="label-container">
                           <div>
                              <h6>Hours of child care experience in the past 24 months?<span id="required">*</span></h6>
                           </div>
                        </div>
                        <div class="field-container">
                           <select id="field" name="hours-child-care-experience" class="hour-child-care-experience">
                              <option value="" disabled selected>Select</option>
                              <option value="10 - 50" <?php echo $utils->selected_hours_of_child_care_experience($_POST, "10 - 50");?>>10 - 50</option>
                              <option value="50 - 100" <?php echo $utils->selected_hours_of_child_care_experience($_POST, "50 - 100");?>>50 - 100</option>
                              <option value="100 - 200" <?php echo $utils->selected_hours_of_child_care_experience($_POST, "100 - 200");?>>100 - 200</option>
                              <option value="201 - 500" <?php echo $utils->selected_hours_of_child_care_experience($_POST, "201 - 500");?>>201 - 500</option>
                              <option value="501 - 800" <?php echo $utils->selected_hours_of_child_care_experience($_POST, "501 - 800");?>>501 - 800</option>
                              <option value="800+">800+</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="r-e-children-taken-care input-border-padding">
                  <div class="center">
                     <div class="registration-input">
                        <div class="label-container">
                           <div>
                              <h6>How many children/people would you like to take care of?<span id="required">*</span></h6>
                           </div>
                        </div>
                        <div class="field-container">
                           <select name="children-people-take-care-of" id="field" class="children-people-take-care">
                              <option value="" disabled selected>Select</option>
                              <option value="1" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "1");?>>1</option>
                              <option value="2" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "2");?>>2</option>
                              <option value="3" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "3");?>>3</option>
                              <option value="4" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "4");?>>4</option>
                              <option value="5" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "5");?>>5</option>
                              <option value="6" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "6");?>>6</option>
                              <option value="7" <?php echo $utils->selected_how_many_children_people_would_you_like_to_take_care_of($_POST, "7");?>>7</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="r-e-would-work-for-single-parent input-border-padding">
                  <div class="center">
                     <div class="registration-input">
                        <div class="label-container">
                           <div>
                              <h6>Would you work for a single parent?<span id="required">*</span></h6>
                           </div>
                        </div>
                        <div class="field-container">
                           <select name="work-for-single-parent" id="field" class="work-for-single-parent">
                              <option value="" disabled selected>Select</option>
                              <option value="No" <?php echo $utils->selected_would_you_work_for_single_parent($_POST, "No");?>>No</option>
                              <option value="Yes, with the father" <?php echo $utils->selected_would_you_work_for_single_parent($_POST, "Yes, with the father");?>>Yes, with the father</option>
                              <option value="Yes, with the mother" <?php echo $utils->selected_would_you_work_for_single_parent($_POST, "Yes, with the mother");?>>Yes, with the mother</option>
                              <option value="Yes, with any of them" <?php echo $utils->selected_would_you_work_for_single_parent($_POST, "Yes, with any of them");?>>Yes, with any of them</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="r-e-care-children-special-needs input-border-padding">
                  <div class="center">
                     <div class="registration-radio-button">
                        <h6>Would you take care of chilren with special needs?<span id="required">*</span></h6>
                        <div class="radio-button-fields">
                           <div id="input-1">
                                 <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-yes" value="Yes" <?php echo $utils->selected_would_you_take_care_of_children_with_special_needs($_POST, "Yes");?>>
                                 <label for="take-care-children-with-special-needs-yes" class="take-care-children-with-special-needs">Yes</label><br>
                           </div>
                           <div id="input-2">
                                 <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-no" value="No" <?php echo $utils->selected_would_you_take_care_of_children_with_special_needs($_POST, "No");?>>
                                 <label for="take-care-children-with-special-needs-no" class="take-care-children-with-special-needs">No</label><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
             <div class="caregiverforelderly-liveinhelp-fields">
                <div class="r-e-i-can-assist active-aupair-registration-checkbox">
                   <h3 class="add-border-bottom">Caregiver for elderly & Live in help</h3>
                   <h6>I can assist and provide support to elderly in<span id="required">*</span></h6>
                   <div class="center">
                      <div class="i-can-assist-provide-support-to-elderly-in">
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="walks and outings" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "walks and outings");?>/>Walks and outings</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="mobility support" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "mobility support");?>/>Mobility support</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="driving" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "driving");?>/>Driving</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="errands/shopping" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "errands/shopping");?>/>Errands/Shopping</label>
                         </div>
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="cleaning & laundry" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "cleaning & laundry");?>/>Cleaning & Laundry</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="light domestic work" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "light domestic work");?>/>Light domestic work</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="cooking meals" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "cooking meals");?>/>Cooking meals</label>
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="washing & dressing" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "washing & dressing");?>/>Washing & Dressing</label>
                         </div>
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="assist-support-to-elderly[]" value="companionship and conversation" <?php echo $utils->selected_i_can_assist_and_provide_support_to_elderly_in($_POST, "washing & dressing");?>/>Companionship and conversation</label>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="r-e-would-you-take input-border-padding">
                   <div class="center"> 
                      <div class="registration-radio-button">
                            <h6>Would you take care of people with special needs?<span id="required">*</span></h6>
                         <div class="radio-button-fields">
                            <div id="input-1">
                               <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-yes" value="Yes" <?php echo $utils->selected_would_you_take_care_of_people_with_special_needs($_POST, "Yes");?>>
                               <label for="take-care-people-with-special-needs-yes" class="take-care-people-with-special-needs">Yes</label><br>
                            </div>
                            <div id="input-2">
                               <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-no" value="No" <?php echo $utils->selected_would_you_take_care_of_people_with_special_needs($_POST, "No");?>>
                               <label for="take-care-people-with-special-needs-no" class="take-care-people-with-special-needs">No</label><br>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
            <h3 class="r-e-dynamic-label add-border-bottom">
             </h3>
            <div class="r-e-preferred-subjects active-aupair-registration-checkbox">
                  <h6>Preffered subjects<span id="required">*</span></h6>
                  <div class="center">
                     <div class="preferred-subjects">
                        <div class="registration-checkbox">
                           <label><input type="checkbox" name="preferred-subjects[]" value="mathematics" <?php echo $utils->selected_preferred_subjects($_POST, "mathematics");?>/> Mathematics</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="physics" <?php echo $utils->selected_preferred_subjects($_POST, "physics");?>/> Physics</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="chemistry" <?php echo $utils->selected_preferred_subjects($_POST, "chemistry");?>/> Chemistry</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="biology" <?php echo $utils->selected_preferred_subjects($_POST, "biology");?>/> Biology</label>
                        </div>
                        <div class="registration-checkbox">
                           <label><input type="checkbox" name="preferred-subjects[]" value="english" <?php echo $utils->selected_preferred_subjects($_POST, "english");?>/> English</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="german" <?php echo $utils->selected_preferred_subjects($_POST, "german");?>/> German</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="french" <?php echo $utils->selected_preferred_subjects($_POST, "french");?>/> French</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="spanish" <?php echo $utils->selected_preferred_subjects($_POST, "spanish");?>/> Spanish</label>
                        </div>
                        <div class="registration-checkbox">
                           <label><input type="checkbox" name="preferred-subjects[]" value="italian" <?php echo $utils->selected_preferred_subjects($_POST, "italian");?> /> Italian</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="music" <?php echo $utils->selected_preferred_subjects($_POST, "music");?>/> Music</label>
                           <label><input type="checkbox" name="preferred-subjects[]" value="sport" <?php echo $utils->selected_preferred_subjects($_POST, "sport");?>/> Sport</label>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="r-e-activities-with-kids active-aupair-registration-checkbox">
                  <h6>Activities with kids<span id="required">*</span></h6>
                  <div class="center">
                     <div class="activities-with-kids">
                        <div class="registration-checkbox">
                           <label><input type="checkbox" name="activity-with-kids[]" value="homework assistance" <?php echo $utils->selected_activities_with_kids($_POST, "homework assistance");?>/> Homework Assistance</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="book reading" <?php echo $utils->selected_activities_with_kids($_POST, "book reading");?>/> Book Reading</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="art & craft" <?php echo $utils->selected_activities_with_kids($_POST, "art & craft");?>/> Art & Craft</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="drawing & cutting" <?php echo $utils->selected_activities_with_kids($_POST, "drawing & cutting");?>/> Drawing & Cutting</label>
                        </div>
                        <div class="registration-checkbox">
                           <label><input type="checkbox" name="activity-with-kids[]" value="numbers & counting" <?php echo $utils->selected_activities_with_kids($_POST, "numbers & counting");?>/> Numbers & Counting</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="letters & sound" <?php echo $utils->selected_activities_with_kids($_POST, "letters & sound");?>/> Letters & Sounds</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="songs & poetry" <?php echo $utils->selected_activities_with_kids($_POST, "songs & poetry");?>/> Songs & Poetry</label>
                           <label><input type="checkbox" name="activity-with-kids[]" value="mind games & activity" <?php echo $utils->selected_activities_with_kids($_POST, "mind games & activity");?>/> Mind Games & Activity</label>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="r-e-preferred-student-age-group active-aupair-registration-checkbox">
               <h6>Preferred student age group<span id="required">*</span></h6>
               <div class="center">
                  <div class="preferred-student-age-group">
                     <div class="registration-checkbox">
                        <label><input type="checkbox" name="student-age-group[]" value="infants (0-1)" <?php echo $utils->selected_preferred_student_age_group($_POST, "infants (0-1)");?>/> Infants(0-1)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="toddlers (2-3)" <?php echo $utils->selected_preferred_student_age_group($_POST, "toddlers (2-3)");?>/> Toddlers(2-3)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="preschoolers (4-5)" <?php echo $utils->selected_preferred_student_age_group($_POST, "preschoolers (4-5)");?>/> Preschoolers(4-5)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="primary school (6-12)" <?php echo $utils->selected_preferred_student_age_group($_POST, "primary school (6-12)");?>/> Primary school (6-12)</label>
                     </div>
                     <div class="registration-checkbox">
                        <label><input type="checkbox" name="student-age-group[]" value="teenagers (13-17)" <?php echo $utils->selected_preferred_student_age_group($_POST, "teenagers (13-17)");?>/> Teenagers(13-17)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="young adults (18-30)" <?php echo $utils->selected_preferred_student_age_group($_POST, "young adults (18-30)");?>/> Young adults(18-30)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="adults (31-60)" <?php echo $utils->selected_preferred_student_age_group($_POST, "adults (31-60)");?>/> Adults(31-60)</label>
                        <label><input type="checkbox" name="student-age-group[]" value="senior (60+)" <?php echo $utils->selected_preferred_student_age_group($_POST, "senior (60+)");?>/> Senior (60+)</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-price-per-hour input-border-padding">
               <div class="center">
                  <div class="registration-input">
                     <div class="r-e-price-label-container">
                        <div>
                           <h6>Price per hour<span id="required">*</span></h6>
                           <p>We recommend to start with a lower price per hour and increase it as your experience in this field grows.</p>
                        </div>
                     </div>
                     <div class="field-container">
                        <input type="number" id="field-1" name="price-per-hour" placeholder="Amount" class="amount" value='<?php echo $utils->asked_price_per_hour($_POST);?>'/>
                        <select id="field-2" name="currency" class="currency">
                           <option value="" disabled selected>Currency</option>
                           <option value="EUR" <?php echo $utils->selected_currency($_POST, "EUR");?>>EUR</option>
                           <option value="USD" <?php echo $utils->selected_currency($_POST, "USD");?>>USD</option>
                           <option value="GBP" <?php echo $utils->selected_currency($_POST, "GBP");?>>GBP</option>
                           <option value="AUD" <?php echo $utils->selected_currency($_POST, "AUD");?>>AUD</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END LOOKING FOR A JOB SHOW/HIDE INPUTS -->
            <div class="r-e-preferred-countries">
               <h5>Preferred countries<span id="required">*</span></h5>
               <div class="center">
                 <div class="registration-countries r-e-preferred-countries-div registration-checkbox">
                     <div>
                        <label><input type="checkbox" name="preferred-countries[]" value="Select All" id="select-all" <?php echo $utils->selected_preferred_country($_POST, "Select All");?>/>Select All</label>
                        <label><input type="checkbox" name="preferred-countries[]" value="EU Countries" id="select-eu" <?php echo $utils->selected_preferred_country($_POST, "EU Countries");?>/>Select EU/EØS/SCHENGEN</label>
                        <label><input type="checkbox" name="preferred-countries[]" value="Austria" id="eu-country" <?php echo $utils->selected_preferred_country($_POST, "Austria");?>/>Austria</label>
                        <label><input type="checkbox" name="preferred-countries[]" value="Belgium" id="eu-country" <?php echo $utils->selected_preferred_country($_POST, "Belgium");?>/>Belgium</label>
                     </div>
                     <?php
                        echo $utils->preferred_countries_eu($_POST);
                        echo $utils->preferred_countries_normal($_POST);
                     ?>
                 </div>
               </div>
            </div>
            <div>
               <h5>Preferred Area <span id="required">*</span></h5>
               <div class="center active-aupair-registration-checkbox">
                  <div  class="r-e-preferred-area">
                     <div class="registration-checkbox">
                        <label><input type="checkbox" name="preferred-area[]" value="all" id="preferred-area-select-all" <?php echo $utils->selected_preferred_area($_POST, "all");?>/>Select All</label>
                        <label><input type="checkbox" name="preferred-area[]" value="small city" <?php echo $utils->selected_preferred_area($_POST, "small city");?>/>Small City</label>
                        <label><input type="checkbox" name="preferred-area[]" value="big city" <?php echo $utils->selected_preferred_area($_POST, "big city");?>/>Big City</label>
                        <label><input type="checkbox" name="preferred-area[]" value="suburd" <?php echo $utils->selected_preferred_area($_POST, "suburd");?>/>Suburd</label>
                     </div>
                     <div class="registration-checkbox">
                        <label><input type="checkbox" name="preferred-area[]" value="countryside" <?php echo $utils->selected_preferred_area($_POST, "countryside")?>>Countryside</label>
                        <label><input type="checkbox" name="preferred-area[]" value="town" <?php echo $utils->selected_preferred_area($_POST, "town");?>/>Town</label>
                        <label><input type="checkbox" name="preferred-area[]" value="village" <?php echo $utils->selected_preferred_area($_POST, "village");?>/>Village</label>
                        <label><input type="checkbox" name="preferred-area[]" value="sea side" <?php echo $utils->selected_preferred_area($_POST, "sea side");?>/>Sea Side</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-earliest-starting-date">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Earliest starting date <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field-1" class="r-e-earliest-starting-date-month" name="earliest-starting-date-month" id="input-1">
                           <option value="" disabled selected>Month</option>
                           <?php echo $utils->selected_earliest_starting_date_month($_POST);?>
                        </select>
                        <select id="field-2" class="r-e-earliest-starting-date-year" name="earliest-starting-date-year" id="input-2">
                           <option value="" disabled selected>Year</option>
                           <?php echo $utils->selected_earliest_starting_date_year($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-latest-starting-date">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Latest starting date <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field-1" class="r-e-latest-starting-date-month" name="latest-starting-date-month" id="input-1">
                           <option value="" disabled selected>Month</option>
                           <?php echo $utils->selected_latest_starting_date_month($_POST);?>
                        </select>
                        <select id="field-2" class="r-e-latest-starting-date-year" name="latest-starting-date-year" id="input-2">
                           <option value="" disabled selected>Year</option>
                           <?php echo $utils->selected_latest_starting_date_year($_POST);?>
                        </select>
                     </div>
                  </div>
               </div> 
            </div>
            <div class="r-e-duration-of-stay">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Duration of stay<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" name="duration-of-stay" class="duration-of-stay">
                           <option value="" disabled selected>Select</option>
                           <option value="1-3 Months" <?php echo $utils->selected_duration_of_stay($_POST, "1-3 Months");?>>1-3 Months</option>
                           <option value="1-6 Months" <?php echo $utils->selected_duration_of_stay($_POST, "1-6 Months");?>>1-6 Months</option>
                           <option value="1-9 Months" <?php echo $utils->selected_duration_of_stay($_POST, "1-9 Months");?>>1-9 Months</option>
                           <option value="1-2 Years" <?php echo $utils->selected_duration_of_stay($_POST, "1-2 Years");?>>1-2 Years</option>
                           <option value=">2 Years" <?php echo $utils->selected_duration_of_stay($_POST, ">2 Years");?>>>2 Years</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="kind-of-work">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>What kind of work are you looking for?</h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="kind-of-work-looking" id="full-time-work" value="Full time work" <?php echo $utils->selected_what_kind_of_work_are_you_looking($_POST, "Full time work");?>>
                           <label for="full-time-work" class="kind-of-work-looking">Full time work</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="kind-of-work-looking" id="part-time-work" value="Part time work" <?php echo $utils->selected_what_kind_of_work_are_you_looking($_POST, "Part time work");?>>
                           <label for="part-time-work" class="kind-of-work-looking">Part time work</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accomodation-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Accomodation<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field"  name="accomodation" class="accomodation">
                           <option value="" disabled selected>Select</option>
                           <option value="Im looking for live in work" <?php echo $utils->selected_accomodation($_POST, "Im looking for live in work");?>>Im looking for live in work</option>
                           <option value="Im looking for live out work" <?php echo $utils->selected_accomodation($_POST, "Im looking for live out work");?>>Im looking for live out work</option>
                           <option value="Both" <?php echo $utils->selected_accomodation($_POST, "Both");?>>Both</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-live-family-with-pets">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Would you live with a family with pets?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="live-family-with-pets" id="live-family-with-pets-yes" value="Yes" <?php echo $utils->selected_would_you_live_family_with_pets($_POST, "Yes");?>>
                           <label for="live-family-with-pets-yes" class="live-family-with-pets">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="live-family-with-pets" id="live-family-with-pets-no" value="No" <?php echo $utils->selected_would_you_live_family_with_pets($_POST, "No");?>>
                           <label for="live-family-with-pets-no" class="live-family-with-pets">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-take-care-pets">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Would you take care of pets?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="take-care-pets" id="take-care-pets-yes" value="Yes" <?php echo $utils->selected_would_you_take_care_of_pets($_POST, "Yes");?>>
                           <label for="take-care-pets-yes" class="take-care-pets">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="take-care-pets" id="take-care-pets-no" value="No" <?php echo $utils->selected_would_you_take_care_of_pets($_POST, "No");?>>
                           <label for="take-care-pets-no" class="take-care-pets">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-work-aditional-money">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Would you work extra to earn some additional money?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="work-extra-to-earn-additional-money" id="work-extra-to-earn-additional-money-yes" value="Yes" <?php echo $utils->selected_would_you_work_extra_to_earn_additional_money($_POST, "Yes");?>>
                           <label for="work-extra-to-earn-additional-money-yes" class="work-extra-to-earn-additional-money">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="work-extra-to-earn-additional-money" id="work-extra-to-earn-additional-money-no" value="No" <?php echo $utils->selected_would_you_work_extra_to_earn_additional_money($_POST, "No");?>>
                           <label for="work-extra-to-earn-additional-money-no" class="work-extra-to-earn-additional-money">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-gender">
               <h3 class="add-border-bottom">Personal Information</h3>
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Gender<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="gender" id="male" value="Male" <?php echo $utils->selected_gender($_POST, "Male");?>>
                           <label for="male" class="gender">Male</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="gender" id="female" value="Female" <?php echo $utils->selected_gender($_POST, "Female");?>>
                           <label for="female" class="gender">Female</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-date-of-birth">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Date of brith <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field-1" class="r-e-date-of-birth-month" name="date-of-birth-month" id="input-1">
                           <option value="" disabled selected>Month</option>
                           <?php echo $utils->selected_date_of_birth_month($_POST);?>
                        </select>
                        <select id="field-2" class="r-e-date-of-birth-year" name="date-of-birth-year" id="input-2">
                           <option value="" disabled selected>Year</option>
                           <?php echo $utils->selected_date_of_birth_year($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="weight">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Your weight in?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="weight" id="weight-kg" value="kg" <?php echo $utils->selected_your_weight_in($_POST, "kg");?>>
                           <label for="weight-kg" class="weight">kg</label>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="weight" id="weight-lbs" value="lbs" <?php echo $utils->selected_your_weight_in($_POST, "lbs");?>>
                           <label for="weight-lbs" class="weight">lbs</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="weight-in-kg">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Weight in kg<span id="required">*</span></h5>         
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="number" name="weight-kg" placeholder="Weight(kg)" class="weight-kg" value='<?php echo $utils->inputted_weight($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="weight-in-lbs">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Weight in lbs<span id="required">*</span></h5>         
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="number" name="weight-lbs" placeholder="Weight(lbs)" class="weight-lbs"  value='<?php echo $utils->inputted_weight($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="height">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Your height in?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="height" id="height-cm" value="cm" <?php echo $utils->selected_your_height_in($_POST, "cm");?>>
                           <label for="height-cm" class="height">cm</label>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="height" id="height-ft" value="ft" <?php echo $utils->selected_your_height_in($_POST, "ft");?>>
                           <label for="height-ft" class="height">ft</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="height-in-cm">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <h5>Heigth in cm<span id="required">*</span></h5>  
                     </div>
                     <div class="field-container">
                        <input id="field" type="number" name="height-cm" placeholder="Height(cm)" class="height-cm" value='<?php echo $utils->inputted_height($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="height-in-ft">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <h5>Heigth in ft<span id="required">*</span></h5>  
                     </div>
                     <div class="field-container">
                        <input id="field" type="number" name="height-ft" placeholder="Height(ft)" class="height-ft" value='<?php echo $utils->inputted_height($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-nationality">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Nationality<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="r-e-nationality-select-input" name="nationality">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_nationality($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="have-a-passport-from">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>I have a passport from<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="r-e-have-a-passport-from-select" name="have-a-passport-from">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_i_have_a_passport_from($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="living-in-own-country-or-outside">
               <div>
                  <div class="center">
                     <div class="registration-radio-button">
                        <h5>Where are you currently living?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                           <div id="input-1">
                              <input type="radio" name="where-are-you-currently-living" id="home-country" value="In my home Country" <?php echo $utils->selected_where_are_you_currently_living($_POST, "In my home Country");?>>
                              <label for="home-country" class="currently-living">In my Home Country</label><br>
                           </div>
                           <div id="input-2">
                              <input type="radio" name="where-are-you-currently-living" id="another-country" value="Another country" <?php echo $utils->selected_where_are_you_currently_living($_POST, "Another country");?>>
                              <label for="another-country" class="currently-living">Another Country</label><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="another-country">
                  <div class="currently-living">
                     <div class="center">
                        <div class="registration-input">
                           <div class="label-container">
                              <div>
                                 <h5>Living in?<span id="required">*</span></h5>
                              </div>
                           </div>
                           <div class="field-container">
                              <select id="field" class="currently-living-select" name="living-in">
                                 <option value="" disabled selected>Select</option>
                                 <?php echo $utils->selected_living_in($_POST);?>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="visa-status">
                     <div class="center">
                        <div class="registration-input">
                           <div class="label-container">
                              <div>
                                 <h5>Visa status?<span id="required">*</span></h5>
                              </div>
                           </div>
                           <div class="field-container">
                              <select id="field" class="visa-status-select" name="visa-status">
                                 <option value="" disabled selected>Select</option>
                                 <option value="I have for 1-2 years" <?php echo $utils->selected_visa_status($_POST, "I have for 1-2 years");?>>I have for 1-2 years</option>
                                 <option value="I have for 2+ years" <?php echo $utils->selected_visa_status($_POST, "I have for 2+ years");?>>I have for 2+ years</option>
                                 <option value="I have a permanent visa" <?php echo $utils->selected_visa_status($_POST, "I have a permanent visa");?>>I have a permanent visa</option>
                                 <option value="My visa is close to expire" <?php echo $utils->selected_visa_status($_POST, "My visa is close to expire");?>>My visa is close to expire</option>
                                 <option value="I do not have a valid visa" <?php echo $utils->selected_visa_status($_POST, "I do not have a valid visa");?>>I do not have a valid visa</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
            <div class="r-e-eduction">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Education<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="education" name="education">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_education($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-name-of-school-&-university">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Name of school, College & University<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="name-of-school-college-university" placeholder="School, College or University" class="name-of-school-college-university" value='<?php echo $utils->inputted_name_of_school_college_and_university($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-profession">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Profession<span id="required">*</span></h5>         
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="profession" placeholder="Profession" class="profession" value='<?php echo $utils->inputted_profession($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-marital-status">   
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Marital status<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" name="marital-status" class="marital-status">
                           <option value="" disabled selected>Select</option>
                           <option value="Single" <?php echo $utils->selected_marital_status($_POST, "Single");?>>Single</option>
                           <option value="Married" <?php echo $utils->selected_marital_status($_POST, "Married");?>>Married</option>
                           <option value="Engaged" <?php echo $utils->selected_marital_status($_POST, "Engaged");?>>Engaged</option>
                           <option value="Separated" <?php echo $utils->selected_marital_status($_POST, "Separated");?>>Separated</option>
                           <option value="Divorced" <?php echo $utils->selected_marital_status($_POST, "Divorced");?>>Divorced</option>
                           <option value="Widow" <?php echo $utils->selected_marital_status($_POST, "Widow");?>>Widow</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-have-own-children">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Do you have children of your own?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="have-own-children" id="have-own-children-yes" value="Yes" <?php echo $utils->selected_do_you_have_children_of_your_own($_POST, "Yes");?>>
                           <label for="have-own-children-yes" class="have-own-children">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="have-own-children" id="have-own-children-no" value="No" <?php echo $utils->selected_do_you_have_children_of_your_own($_POST, "No");?>>
                           <label for="have-own-children-no" class="have-own-children">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="have-siblings">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Do you have any siblings?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="have-siblings" id="have-siblings-yes" value="Yes" <?php echo $utils->selected_do_you_have_any_siblings($_POST, "Yes");?>>
                           <label for="have-siblings-yes" class="have-siblings">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="have-siblings" id="have-siblings-no" value="No" <?php echo $utils->selected_do_you_have_any_siblings($_POST, "No");?>>
                           <label for="have-siblings-no" class="have-siblings">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-have-training-in-healthcare">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Do you have a training in healthcare?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="healthcare-training" id="healthcare-training-yes" value="Yes" <?php echo $utils->selected_do_you_have_training_in_heatlhcare($_POST, "Yes");?>>
                           <label for="healthcare-training-yes" class="healthcare-training">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="healthcare-training" id="healthcare-training-no" value="No" <?php echo $utils->selected_do_you_have_training_in_heatlhcare($_POST, "No");?>>
                           <label for="healthcare-training-no" class="healthcare-training">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-have-attend-first-aid-training">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Did you attend first aid training?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="have-first-aid-traning" id="have-first-aid-traning-yes" value="Yes" <?php echo $utils->selected_did_you_attend_first_aid_training($_POST, "Yes");?>>
                           <label for="have-first-aid-traning-yes" class="have-first-aid-traning">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="have-first-aid-traning" id="have-first-aid-traning-no" value="No" <?php echo $utils->selected_did_you_attend_first_aid_training($_POST, "No");?>>
                           <label for="have-first-aid-traning-no" class="have-first-aid-traning">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
            <div class="r-e-have-criminal-record">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Do you have a criminal record?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="have-criminal-record" id="have-criminal-record-yes" value="Yes" <?php echo $utils->selected_do_you_have_any_criminal_record($_POST, "Yes");?>>
                           <label for="have-criminal-record-yes" class="have-criminal-record">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="have-criminal-record" id="have-criminal-record-no" value="No" <?php echo $utils->selected_do_you_have_any_criminal_record($_POST, "No");?>>
                           <label for="have-criminal-record-no" class="have-criminal-record">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-special-diet-consideration">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Special diet considerations<span id="required">*</span></h5>
                        </div>         
                     </div>
                     <div class="field-container">
                        <select id="field" name="special-diet-consideration" class="special-diet-consideration">
                           <option value="" disabled selected>Select</option>
                           <option value="No Preferences/I eat anything" <?php echo $utils->selected_special_diet_consideration($_POST, "No Preferences/I eat anything");?>>No Preferences/I eat anything</option>
                           <option value="Vegetarian" <?php echo $utils->selected_special_diet_consideration($_POST, "Vegetarian");?>>Vegetarian</option>
                           <option value="Special diet" <?php echo $utils->selected_special_diet_consideration($_POST, "Special diet");?>>Special Diet</option>
                           <option value="No special diet" <?php echo $utils->selected_special_diet_consideration($_POST, "No special diet");?>>Vegetarian</option>
                           <option value="Vegan" <?php echo $utils->selected_special_diet_consideration($_POST, "Vegan");?>>Vegan</option>
                           <option value="Lactose Intolerance" <?php echo $utils->selected_special_diet_consideration($_POST, "Lactose Intolerance");?>>Lactose Intolerance</option>
                           <option value="Fructose Intolerance" <?php echo $utils->selected_special_diet_consideration($_POST, "Fructose Intolerance");?>>Fructose Intolerance</option>
                           <option value="Gluten Free" <?php echo $utils->selected_special_diet_consideration($_POST, "Gluten Free");?>>Gluten Free</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-have-health-problmes-allergies">
              <div class="center">
                 <div class="registration-radio-button">
                     <h5>Do you have any health problems or allergies?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="have-health-problems-or-allergies" id="have-health-problems-or-allergies-yes" value="Yes" <?php echo $utils->selected_do_you_have_any_health_problems_or_allergy($_POST, "Yes");?>>
                           <label for="have-health-problems-or-allergies-yes" class="have-health-problems-or-allergies">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="have-health-problems-or-allergies" id="have-health-problems-or-allergies-no" value="No" <?php echo $utils->selected_do_you_have_any_health_problems_or_allergy($_POST, "No");?>>
                           <label for="have-health-problems-or-allergies-no" class="have-health-problems-or-allergies">No</label><br>
                        </div>
                     </div>                    
                 </div>
              </div>
            </div>
            <div class="describe-health-problems-allergies-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Describe your health problems or allergies <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <textarea id="field" name="describe-health-problems-or-allergies" rows="4" cols="50" class="describe-health-problems-or-allergies"><?php echo $utils->inputted_describe_health_problems_or_allergies($_POST);?></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-do-you-smoke">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Do you smoke?<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" name="do-you-smoke" class="do-you-smoke">
                           <option value="" disabled selected>Select</option>
                           <option value="Yes" <?php echo $utils->selected_do_you_smoke($_POST, "Yes");?>>Yes</option>
                           <option value="No" <?php echo $utils->selected_do_you_smoke($_POST, "No");?>>No</option>
                           <option value="Sometimes" <?php echo $utils->selected_do_you_smoke($_POST, "Sometimes");?>>Sometimes</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-can-you-swim-well">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Can you swim well?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="can-swim-well" id="can-swim-well-yes" value="Yes" <?php echo $utils->selected_can_you_swim_well($_POST, "Yes");?>>
                           <label for="can-swim-well-yes" class="can-swim-well">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="can-swim-well" id="can-swim-well-no" value="No" <?php echo $utils->selected_can_you_swim_well($_POST, "No");?>>
                           <label for="can-swim-well-no" class="can-swim-well">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-can-you-ride-a-bike">
               <div class="center">
                  <div class="registration-radio-button">
                     <h5>Can you ride a bike?<span id="required">*</span></h5>
                     <div class="radio-button-fields">
                        <div id="input-1">
                           <input type="radio" name="can-ride-bike" id="can-ride-bike-yes" value="Yes" <?php echo $utils->selected_can_you_ride_a_bike($_POST, "Yes");?>>
                           <label for="can-ride-bike-yes" class="can-ride-bike">Yes</label><br>
                        </div>
                        <div id="input-2">
                           <input type="radio" name="can-ride-bike" id="can-ride-bike-no" value="No" <?php echo $utils->selected_can_you_ride_a_bike($_POST, "No");?>>
                           <label for="can-ride-bike-no" class="can-ride-bike">No</label><br>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="r-e-have-drivers-license">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Do you have a drivers license?<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" name="have-drivers-license" class="have-drivers-license">
                           <option value="" disabled selected>Select</option>
                           <option value="No" <?php echo $utils->selected_do_you_have_a_drivers_license($_POST, "No");?>>No</option>
                           <option value="Yes, I have National driving license" <?php echo $utils->selected_do_you_have_a_drivers_license($_POST, "Yes, I have National driving license");?>>Yes, I have National driving license</option>
                           <option value="Yes, I have International driving license" <?php echo $utils->selected_do_you_have_a_drivers_license($_POST, "Yes, I have International driving license");?>>Yes, I have International driving license</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
      
            <div class="e-r-sports">
              <div class="center">
                 <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Sports?<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="sports" placeholder="Sports" class="sports" value='<?php echo $utils->inputted_sports($_POST);?>'/>
                     </div>
                 </div>
              </div>
            </div>
             <div class="e-r-religion">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Religion<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="e-r-religion-select" name="religion">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_religion($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
             </div>
            <div class="e-r-religion-for-you">
              <div class="center">
                 <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Religion for you is<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" name="religion-for-you-is" class="religion-for-you-is">
                           <option value="" disabled selected>Select</option>
                           <option value="Not important" <?php echo $utils->selected_religion_for_you_is($_POST, "Not important");?>>Not Imporant</option>
                           <option value="Important" <?php echo $utils->selected_religion_for_you_is($_POST, "Important");?>>Imporant</option>
                           <option value="Very important" <?php echo $utils->selected_religion_for_you_is($_POST, "Very important");?>>Very Imporant</option>
                        </select>
                     </div>
                 </div>
              </div>
            </div>
            <div class="e-r-firstname">
               <h3 class="add-border-bottom">Contact Information</h3>
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>First name<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="firstname" placeholder="Firstname" class="firstname" value='<?php echo $utils->inputted_firstname($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-lastname">
              <div class="center">
                 <div class="registration-input">
                    <div class="label-container">
                       <div>
                          <h5>Last name<span id="required">*</span></h5>
                       </div>
                    </div>
                    <div class="field-container">
                       <input id="field" type="text" name="lastname" placeholder="Lastname" class="lastname" value='<?php echo $utils->inputted_lastname($_POST);?>'/>
                    </div>
                 </div>
              </div>
            </div>
            <div class="address-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Address<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="address" placeholder="Address" class="address" value='<?php echo $utils->inputted_address($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-zip-code">
              <div class="center">
                 <div class="registration-input">
                    <div class="label-container">
                       <div>
                          <h5>Zip code<span id="required">*</span></h5>
                       </div>
                    </div>
                    <div class="field-container">
                       <input id="field" type="text" name="zip-code" placeholder="Zip code" class="zip-code" value='<?php echo $utils->inputted_zipcode($_POST);?>'/>
                    </div>
                 </div>
              </div>
            </div>
            <div class="e-r-city">
              <div class="center">
                 <div class="registration-input">
                    <div class="label-container">
                       <div>
                          <h5>City<span id="required">*</span></h5>
                       </div>
                    </div>
                    <div class="field-container">
                       <input id="field" type="text" name="city" placeholder="City" class="city" value='<?php echo $utils->inputted_city($_POST);?>'/>
                    </div>
                 </div>
              </div>
            </div>
            <div class="e-r-state">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>State/Region<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="state-region" placeholder="State/Region" class="state-region" value='<?php echo $utils->inputted_state_region($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-country">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Country<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="e-r-country-select" name="country">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_country($_POST);?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="e-r-mobile-number">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Mobile Phone No<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="tel" name="mobile-number[]" class="mobile-number" value='<?php echo $utils->inputted_mobile_number($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="letter-to-the-family-container">
                <h3 class="add-border-bottom">Letter to the Family</h3>
                <h5>Letter<span id="required">*</span></h5>
                <div class="center">
                   <textarea id="text-area" name="letter-to-the-family" class="letter-to-the-family"><?php echo $utils->inputted_letter_to_the_family($_POST);?></textarea>
                </div>
            </div>
            <h3 class="add-border-bottom">Account Information</h3>
            <div class="r-e-email-add">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Email address(will be used as your username)<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="email" placeholder="Email" class="email" value='<?php echo $utils->inputted_email_address($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="confirm-email-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Confirm Email address <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="confirm-email" placeholder="Confirm Email" class="confirm-email" value='<?php echo $utils->inputted_confirm_email_address($_POST);?>'/>
                     </div>
                  </div>
               </div>    
            </div>
            <div class="r-e-password">
                  <div class="center">
                     <div class="registration-input">
                        <div class="label-container">
                           <div>
                              <h5>Password <span id="required">*</span></h5>
                           </div>
                        </div>
                        <div class="field-container">
                           <input id="field" type="password" name="password" placeholder="Password" class="password" value='<?php echo $utils->inputted_password($_POST);?>'/>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="r-e-confirm-password">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Confirm password <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="password" name="confirm-password" placeholder="Confirm password" class="confirm-password" value='<?php echo $utils->inputted_confirm_password($_POST);?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="register-btn-container">
               <div class="first-div">
               </div>
               <div class="second-div">
                  <input type="submit" name="insert" value="Register" id="register-btn"/>
               </div>
            </div>
            <div class="warning-msg-container-btm center">
               <div class="warning-msg-btm">
                  
               </div>
            </div>
         </form>
      </div>
   </div>
<?php
get_footer();
?>

