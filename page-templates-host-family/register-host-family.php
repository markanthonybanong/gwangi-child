<?php
/*
 * Template Name: Register Host Family
 * description: >-
  Active aupair host family registration form
 */
get_header();
?>
<?php
    global $wpdb;
    require get_theme_file_path('assets/utilities/php/variables.php');
    require get_theme_file_path('inc/common-utilities.php');
    require get_theme_file_path('inc/host-family/host-family.php');
    require get_theme_file_path('inc/host-family/register-host-family/register-host-family-db.php');
    require get_theme_file_path('inc/host-family/register-host-family/register-host-family-utils.php');
    $variables    = new Variables();
    $common_utils = new Common_Utilities();
    $host_family  = new Host_Family();
    $db           = new Register_Host_Family_Db($wpdb);
    $utils        = new Register_Host_Family_Utils(
                        $variables
                    );
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <form method="post" action="">
            <div class="warning-msg">
             <?php
                if(isset($_POST['register'])){
                    $result = $common_utils->insert_into_wp_users($_POST['email'], $_POST['password']);
                    //when error it returns an object, if not result is ID
                    if(is_object($result) === false){
                       $host_family->wp_user_id = $result;
                       $host_family_data        = $utils->set_host_family_object($host_family);
                       $insert_host_family      = $db->insert($host_family_data);
                       if($insert_host_family){
                           //aupair_registered_host_family_preferred_nationalities
                           $i = 0;
                           while($i < count($host_family_data->preferred_nationalities) ){
                              $nationality = $host_family_data->preferred_nationalities[$i];
                              $db->insert_preferred_nationality($result, $nationality);
                              $i++;
                           }
                           //aupair_registered_host_family_applicants_living_in
                           $i = 0;
                           while($i < count($host_family_data->applicants_living_in) ){
                              $country = $host_family_data->applicants_living_in[$i];
                              $db->insert_applicant_living_in($result, $country);
                              $i++;
                           }
                           //aupair_registered_host_family_languages_spoken_at_home
                           $i = 0;
                           while($i < count($host_family_data->languages_spoken_at_home) ){
                              $language = $host_family_data->languages_spoken_at_home[$i];
                              $db->insert_spoken_at_home_language($result, $language);
                              $i++;
                           }
                           echo "<p id='required'>We have sent a verification link to your email address. Please check your inbox or spam.</p>";
                       } else {
                        echo "<p id='required'>Something went wrong</p>";
                       }
                    } else {
                       $error = $result->get_error_message();
                       echo "<p id='required'>$error</p>";
                    }
                }
             ?>
            </div>
            <div class="we-are-looking-for-container">
                <h3 class="add-border-bottom">Job Requirements</h3>
                <h5>We are looking for(max. 2)<span id="required">*</span></h5>
                <div class="center">
                <div class="we-are-looking-for">
                        <div class="registration-checkbox">
                            <label><input type="checkbox" name="looking-for[]" value="aupair" class="un-check" id="aupair" <?php echo $utils->selected_we_are_looking_for("aupair");?>/> Aupair</label>
                            <label><input type="checkbox" name="looking-for[]" value="nanny"  class="un-check" id="nanny" <?php echo $utils->selected_we_are_looking_for("nanny");?>/> Nanny</label>
                            <label><input type="checkbox" name="looking-for[]" value="granny aupair" class="un-check" id="granny-aupair" <?php echo $utils->selected_we_are_looking_for("granny aupair");?>/> Granny aupair</label>
                            <label><input type="checkbox" name="looking-for[]" value="caregiver for elderly" class="un-check" id="caregiver-for-elderly" <?php echo $utils->selected_we_are_looking_for("caregiver for elderly");?>/> Caregiver for elderly</label>
                        </div> 
                        <div class="registration-checkbox">
                            <label><input type="checkbox" name="looking-for[]" value="live in help" class="un-check" id="live-in-help" <?php echo $utils->selected_we_are_looking_for("live in help");?>/> Live in help</label>
                            <label><input type="checkbox" name="looking-for[]" value="live in tutor" class="un-check" id="live-in-tutor" <?php echo $utils->selected_we_are_looking_for("live in tutor");?>/> Live in tutor</label>
                        </div>
                    </div>
                </div>
                <!-- LOOKING FOR A JOB SHOW/HIDE INPUTS -->
                <div class="aupair-nanny-granny-aupair-container">
                    <div class="take-care-of-children-container">
                        <h3 class="add-border-bottom">Aupair, Nanny & Granny Aupair</h3>
                            <h6>How old are the children the applicants has to take care of?<span id="required">*</span></h6>
                            <div class="center">
                                <div class="take-care-of-children">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="take-care-children[]" value="0 - 1 year old" <?php echo $utils->selected_i_will_take_care_of_children_from_age("0 - 1 year old");?>/> 0 - 1 year old</label>   
                                        <label><input type="checkbox" name="take-care-children[]" value="1 - 5 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age("1 - 5 years old");?>/> 1 - 5 years old</label>
                                        <label><input type="checkbox" name="take-care-children[]" value="6 - 10 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age("6 - 10 years old");?>/> 6 - 10 years old</label>
                                        <label><input type="checkbox" name="take-care-children[]" value="11 - 14 years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age("11 - 14 years old");?>/> 11 - 14 years old</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="take-care-children[]" value="15+ years old" <?php echo $utils->selected_i_will_take_care_of_children_from_age("15+ years old");?>/> 15+ years old</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="childcare-experience">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h6>Minium required hours childcare experience for the past 24 months?<span id="required">*</span></h6>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" name="hours-child-care-experience" class="hours-child-care-experience">
                                        <option value="" disabled selected>Select</option>
                                        <option value="not important" <?php echo $utils->selected_min_required_hours_children_exp("Not Important");?>>Not Important</option>
                                        <option value="10 - 50" <?php echo $utils->selected_min_required_hours_children_exp("10 - 50");?>>10 - 50</option>
                                        <option value="50 - 100" <?php echo $utils->selected_min_required_hours_children_exp("50 - 100");?>>50 - 100</option>
                                        <option value="100 - 200" <?php echo $utils->selected_min_required_hours_children_exp("100 - 200");?>>100 - 200</option>
                                        <option value="201 - 500" <?php echo $utils->selected_min_required_hours_children_exp("201 - 500");?>>201 - 500</option>
                                        <option value="501 - 800" <?php echo $utils->selected_min_required_hours_children_exp("501 - 800");?>>501 - 800</option>
                                        <option value="800+" <?php echo $utils->selected_min_required_hours_children_exp("800+");?>>800+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="children-people-taken-care">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h6>How many children would you like to take care of?<span id="required">*</span></h6>
                                    </div>
                                </div>
                                <div class="field-container">
                                   <input id="field" type="number" name="how-many-children-people-would" class="how-many-children-people-would" value='<?php echo $utils->inputted_number_of_children_to_be_taken_care();?>'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="take-care-children-special-needs">
                        <div class="center"> 
                            <div class="registration-radio-button">
                                <h6>Does the applicant have to take care children with special needs?<span id="required">*</span></h6>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-yes" value="Yes" <?php echo $utils->selected_take_care_children_with_spcial_needs("Yes");?>>
                                    <label for="take-care-children-with-special-needs-yes" class="take-care-children-with-special-needs">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-no" value="No" <?php echo $utils->selected_take_care_children_with_spcial_needs("No");?>>
                                    <label for="take-care-children-with-special-needs-no" class="take-care-children-with-special-needs">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="describe-children-special-needs-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Describe children<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <textarea id="field" class="describe-children" name="describe-children-special-needs"><?php echo $utils->inputted_describe_children();?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="caregiverforelderly-liveinhelp-container">
                    <div class="we-need-assistance-support-in">
                        <h3 class="add-border-bottom">Caregiver for elderly & Live in help</h3>
                        <h6>We need assistance and support in<span id="required">*</span></h6>
                        <div class="center">
                            <div class="we-need-assistance-support-in-cb">
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="walks and outings" <?php echo $utils->selected_need_assistance_and_support_in("walks and outings");?>/>Walks and outings</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="mobility support" <?php echo $utils->selected_need_assistance_and_support_in("mobility support");?>/>Mobility support</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="driving" <?php echo $utils->selected_need_assistance_and_support_in("driving");?>/>Driving</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="errands/shopping" <?php echo $utils->selected_need_assistance_and_support_in("errands/shopping");?>/>Errands/Shopping</label>
                                </div>
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="cleaning & laundry" <?php echo $utils->selected_need_assistance_and_support_in("cleaning & laundry");?>/>Cleaning & Laundry</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="light domestic work" <?php echo $utils->selected_need_assistance_and_support_in("light domestic work");?>/>Light domestic work</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="cooking meals" <?php echo $utils->selected_need_assistance_and_support_in("cooking meals");?>/>Cooking meals</label>
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="washing & dressing" <?php echo $utils->selected_need_assistance_and_support_in("washing & dressing");?>/>Washing & Dressing</label>
                                </div>
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="need-assistance-support-in[]" value="companionship & conversation" <?php echo $utils->selected_need_assistance_and_support_in("companionship & conversation");?>/>Companionship and Conversation</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="applicant-would-take-care">
                        <div class="center"> 
                            <div class="registration-radio-button">
                                <h6>Does the applicant have to take care people with special needs?<span id="required">*</span></h6>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                        <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-yes" value="Yes" <?php echo $utils->selected_applicant_have_to_take_care_people_with_special_needs("Yes");?>>
                                        <label for="take-care-people-with-special-needs-yes" class="take-care-people-with-special-needs">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                        <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-no" value="No" <?php echo $utils->selected_applicant_have_to_take_care_people_with_special_needs("No");?>>
                                        <label for="take-care-people-with-special-needs-no" class="take-care-people-with-special-needs">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="describe-people-special-needs-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Describe people<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <textarea id="field" class="describe-people" name="describe-people-special-needs"><?php echo $utils->inputted_describe_people();?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="tutor-who-can-teach-subject-container">
                    <h3 class="add-border-bottom">Live in tutor</h3>
                    <h6>We need a tutor who can teach<span id="required">*</span></h6>
                    <div class="center">
                       <div class="tutor-who-can-teach-cb">
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="mathematics" <?php echo $utils->selected_tutor_who_can_teach("mathematics");?>/> Mathematics</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="physics" <?php echo $utils->selected_tutor_who_can_teach("physics");?>/> Physics</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="chemistry" <?php echo $utils->selected_tutor_who_can_teach("chemistry");?>/> Chemistry</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="biology" <?php echo $utils->selected_tutor_who_can_teach("biology");?>/> Biology</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="english" <?php echo $utils->selected_tutor_who_can_teach("english");?>/> English</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="german" <?php echo $utils->selected_tutor_who_can_teach("german");?>/> German</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="french" <?php echo $utils->selected_tutor_who_can_teach("french");?>/> French</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="spanish" <?php echo $utils->selected_tutor_who_can_teach("spanish");?>/> Spanish</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="italian" <?php echo $utils->selected_tutor_who_can_teach("italian");?>/> Italian</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="music" <?php echo $utils->selected_tutor_who_can_teach("music");?>/> Music</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="sport" <?php echo $utils->selected_tutor_who_can_teach("sport");?>/> Sport</label>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="tutor-who-can-do-activities-container">
                    <h6>We need a tutor who can do the following activities with our kids<span id="required">*</span></h6>
                    <div class="center">
                       <div class="tutor-who-can-do-activities-cb">
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="activities-with-kids[]" value="homework assistance" <?php echo $utils->selected_tutor_who_can_do_activities("homework assistance");?>/> Homework Assistance</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="book reading" <?php echo $utils->selected_tutor_who_can_do_activities("book reading");?>/> Book Reading</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="art & craft" <?php echo $utils->selected_tutor_who_can_do_activities("art & craft");?>/> Art & Craft</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="drawing & cutting" <?php echo $utils->selected_tutor_who_can_do_activities("drawing & cutting");?>/> Drawing & Cutting</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="activities-with-kids[]" value="numbers & counting" <?php echo $utils->selected_tutor_who_can_do_activities("numbers & counting");?>/> Numbers & Counting</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="letters & sound" <?php echo $utils->selected_tutor_who_can_do_activities("letters & sound");?>/> Letters & Sounds</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="songs & poetry" <?php echo $utils->selected_tutor_who_can_do_activities("songs & poetry");?>/> Songs & Poetry</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="mind games & activity" <?php echo $utils->selected_tutor_who_can_do_activities("mind games & activity");?>/> Mind Games & Activity</label>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="student-age-group-tutor-would-teach-container">
                   <h6>How old are the students the tutor should teach?<span id="required">*</span></h6>
                   <div class="center">
                      <div class="student-age-group-tutor-would-teach-cb">
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="student-age-group[]" value="infants (0-1)" <?php echo $utils->selected_student_age_group("infants (0-1)");?>/> Infants(0-1)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="toddlers (2-3)" <?php echo $utils->selected_student_age_group("toddlers (2-3)");?>/> Toddlers(2-3)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="preschoolers (4-5)" <?php echo $utils->selected_student_age_group("preschoolers (4-5)");?>/> Preschoolers(4-5)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="primary school (6-12)" <?php echo $utils->selected_student_age_group("primary school (6-12)");?>/> Primary school (6-12)</label>
                         </div>
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="student-age-group[]" value="teenagers (13-17)" <?php echo $utils->selected_student_age_group("teenagers (13-17)");?>/> Teenagers(13-17)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="young adults (18-30)" <?php echo $utils->selected_student_age_group("young adults (18-30)");?>/> Young adults(18-30)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="adults (31-60)" <?php echo $utils->selected_student_age_group("adults (31-60)");?>/> Adults(31-60)</label>
                            <label><input type="checkbox" name="student-age-group[]" value="senior (60+)" <?php echo $utils->selected_student_age_group("senior (60+)");?>/> Senior (60+)</label>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- END LOOKING FOR A JOB SHOW/HIDE INPUTS -->
            </div>
            <div class="preferred-nationalities-container">
                <h5>Preferred Nationalities<span id="required">*</span></h5>
                <div class="center">
                    <div class="preferred-nationalities registration-checkbox">
                        <div>
                            <label><input type="checkbox" name="preferred-nationalities[]" value="No Preferences" id="no-preferences" <?php echo $utils->selected_preferred_nationality("No Preferences");?>/>No Preferences</label>
                            <label><input type="checkbox" name="preferred-nationalities[]" value="Afghan" <?php echo $utils->selected_preferred_nationality("Afghan");?>/>Afghan</label>
                            <label><input type="checkbox" name="preferred-nationalities[]" value="Albanian" <?php echo $utils->selected_preferred_nationality("Albanian");?>/>Albanian</label>
                            <label><input type="checkbox" name="preferred-nationalities[]" value="Algerian" <?php echo $utils->selected_preferred_nationality("Algerian");?>/>Algerian</label>
                        </div>
                        <?php echo $utils->selected_preferred_nationalities();?>
                    </div>
                </div>
            </div>
            <div class="applicant-currently-living-in-container">
                <h5>Applicant Currently Living In<span id="required">*</span></h5>
                <div class="center">
                    <div class="applicant-currently-living-in registration-checkbox">
                        <div>
                            <label><input type="checkbox" name="applicant-living-in[]" value="No Preferences" id="no-preferences" <?php echo $utils->selected_applicant_living_in("No Preferences");?>/>No Preferences</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="EU Countries" id="inside-eu-countries" <?php echo $utils->selected_applicant_living_in("EU Countries");?>/>Inside EU/EØS/SCHENGEN</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="Afghan" id="eu-country" <?php echo $utils->selected_applicant_living_in("Afghan");?>/>Afghan</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="Albanina" id="eu-country" <?php echo $utils->selected_applicant_living_in("Afghan");?>/>Albanian</label>           
                        </div>
                        <?php
                            echo $utils->selected_applicant_living_in_eu_countries();
                            echo $utils->selected_applicant_living_in_normal_countries();
                        ?>
                    </div>
                </div>
            </div>
            <div class="salary-container">
                <div class="center">
                    <div class="registration-input">
                       <div class="label-container">
                          <div>
                             <h6>Salary(per month)<span id="required">*</span></h6>
                          </div>
                       </div>
                       <div class="field-container">
                          <input type="number" id="field-1" name="salary-amount" class="salary-amount" placeholder="Amount" value='<?php echo $utils->inputted_salary_amount();?>'/>
                          <select id="field-2" name="salary-currency" class="salary-currency">
                             <option value="" disabled selected>Currency</option>
                              <?php echo $utils->selected_salary_currencies();?>
                          </select>
                       </div>
                    </div>
                </div>
            </div>
            <div class="earliest-starting-date">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Earliest starting date<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field-1" class="earliest-starting-date-month" name="earliest-starting-date-month" id="input-1">
                                <option value="" disabled selected>Month</option>
                                <?php echo $utils->selected_earliest_starting_date_month();?>
                            </select>
                            <select id="field-2" class="earliest-starting-date-year" name="earliest-starting-date-year" id="input-2">
                                <option value="" disabled selected>Year</option>
                                <?php echo $utils->selected_earliest_starting_date_year();?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-starting-date">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Latest starting date<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field-1" class="latest-starting-date-month" name="latest-starting-date-month" id="input-1">
                                <option value="" disabled selected>Month</option>
                                <?php echo $utils->selected_latest_starting_date_month();?>
                            </select>
                            <select id="field-2" class="latest-starting-date-year" name="latest-starting-date-year" id="input-2">
                                <option value="" disabled selected>Year</option>
                                <?php echo $utils->selected_latest_starting_date_year();?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="duration-of-stay-container">
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
                            <option value="1-3 months" <?php echo $utils->selected_duration_of_stay("1-3 months");?>>1-3 months</option>
                            <option value="1-6 months" <?php echo $utils->selected_duration_of_stay("1-6 months");?>>1-6 months</option>
                            <option value="1-9 months" <?php echo $utils->selected_duration_of_stay("1-9 months");?>>1-9 months</option>
                            <option value="1-2 years" <?php echo $utils->selected_duration_of_stay("1-2 years");?>>1-2 years</option>
                            <option value=">2 years" <?php echo $utils->selected_duration_of_stay(">2 years");?>>>2 years</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
            <div class="preferred-gender-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Preferred Gender<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="preferred-gender" class="preferred-gender">
                                <option value="" disabled selected>Select</option>
                                <option value="Not Important" <?php echo $utils->selected_preferred_gender("Not Important");?>>Not Important</option>
                                <option value="Male" <?php echo $utils->selected_preferred_gender("Male");?>>Male</option>
                                <option value="Female" <?php echo $utils->selected_preferred_gender("Female");?>>Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="require-education-level-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Required Education Level<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="required-education-level" class="required-education-level">
                                <option value="" disabled selected>Select</option>
                                <?php echo $utils->selected_required_education_level();?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="working-hours-per-week-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Working Hours(per week)<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="working-hours-per-week" class="working-hours-per-week">
                                <option value="" disabled selected>Select</option>
                                <option value="25 - 30" <?php echo $utils->selected_working_hours("25 - 30");?>>25 - 30</option>
                                <option value="30 - 35" <?php echo $utils->selected_working_hours("30 - 35");?>>30 - 35</option>
                                <option value="35 - 40" <?php echo $utils->selected_working_hours("35 - 40");?>>35 - 40</option>
                                <option value="40 - 45" <?php echo $utils->selected_working_hours("40 - 45");?>>40 - 45</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="willing-to-pay-share-travel-expenses-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Are you willing to pay for travel expenses?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="pay-for-travel-expenses" class="pay-for-travel-expenses">
                                <option value="" disabled selected>Select</option>
                                <option value="Applicant should pay for everything" <?php echo $utils->selected_willing_to_pay_for_travel_expenses("Applicant should pay for everything");?>>Applicant should pay for everything</option>
                                <option value="We would share your travel expenses" <?php echo $utils->selected_willing_to_pay_for_travel_expenses("We would share your travel expenses");?>>We would share your travel expenses</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="willing-to-pay-visa-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Are you willing to pay for visa?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="pay-for-visa" class="pay-for-visa">
                                <option value="" disabled selected>Select</option>
                                <option value="Applicant should pay for everything" <?php echo $utils->selected_willing_to_pay_for_visa("Applicant should pay for everything");?>>Applicant should pay for everything</option>
                                <option value="We would share your visa expenses" <?php echo $utils->selected_willing_to_pay_for_visa("We would share your visa expenses");?>>We would share your visa expenses</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="required-age-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Required Age<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <input id="field-1" type="number" class="required-age-min" name="required-age-min" placeholder="Min" value='<?php echo $utils->inputted_required_age_min();?>'>
                            <input id="field-1" type="number" class="required-age-max" name="required-age-max" placeholder="Max" value='<?php echo $utils->inputted_required_age_max();?>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="is-smoking-allowed-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Is smoking allowed?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="is-smoking-allowed" class="is-smoking-allowed">
                                <option value="" disabled selected>Select</option>
                                <option value="Yes" <?php echo $utils->selected_is_smoking_allowed("Yes");?>>Yes</option>
                                <option value="No" <?php echo $utils->selected_is_smoking_allowed("No");?>>No</option>
                                <option value="Yes, but not at home" <?php echo $utils->selected_is_smoking_allowed("Yes, but not at home");?>>Yes, but not at home</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-take-care-of-pets-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant have to take care of pets?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-take-care-of-pets" id="applicant-take-care-of-pets-yes" value="Yes" <?php echo $utils->selected_applicant_have_to_take_care_of_pets("Yes");?>>
                                <label for="applicant-take-care-of-pets-yes" class="applicant-take-care-of-pets">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-take-care-of-pets" id="applicant-take-care-of-pets-no" value="No" <?php echo $utils->selected_applicant_have_to_take_care_of_pets("No");?>>
                                <label for="applicant-take-care-of-pets-no" class="applicant-take-care-of-pets">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-know-how-to-swim-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant know how to swim?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-know-how-to-swim" id="applicant-know-how-to-swim-yes" value="Yes" <?php echo $utils->selected_applicant_know_how_to_swim("Yes");?>>
                                <label for="applicant-know-how-to-swim-yes" class="applicant-know-how-to-swim">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-know-how-to-swim" id="applicant-know-how-to-swim-no" value="No" <?php echo $utils->selected_applicant_know_how_to_swim("No");?>>
                                <label for="applicant-know-how-to-swim-no" class="applicant-know-how-to-swim">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-know-how-to-ride-a-bike-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant know how to ride a bike?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-know-how-to-ride-bike" id="applicant-know-how-to-ride-bike-yes" value="Yes" <?php echo $utils->selected_applicant_know_how_to_ride_a_bike("Yes");?>>
                                <label for="applicant-know-how-to-ride-bike-yes" class="applicant-know-how-to-ride-bike">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-know-how-to-ride-bike" id="applicant-know-how-to-ride-bike-no" value="No" <?php echo $utils->selected_applicant_know_how_to_ride_a_bike("No");?>>
                                <label for="applicant-know-how-to-ride-bike-no" class="applicant-know-how-to-ride-bike">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="do-you-expect-applicant-to-drive-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you expect the Applicant to drive?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-to-drive" id="applicant-to-drive-yes" value="Yes" <?php echo $utils->selected_expect_applicant_to_drive("Yes");?>>
                                <label for="applicant-to-drive-yes" class="applicant-to-drive">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-to-drive" id="applicant-to-drive-no" value="No" <?php echo $utils->selected_expect_applicant_to_drive("No");?>>
                                <label for="applicant-to-drive-no" class="applicant-to-drive">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="does-applicant-have-training-in-healthcare-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you expect that the Applicant have training in Healthcare?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-have-training-in-healthcare" id="applicant-healthcare-training-yes" value="Yes" <?php echo $utils->selected_expect_applicant_have_training_in_healthcare("Yes");?>>
                                <label for="applicant-healthcare-training-yes" class="applicant-have-training-in-healthcare">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-have-training-in-healthcare" id="applicant-healthcare-training-no" value="No" <?php echo $utils->selected_expect_applicant_have_training_in_healthcare("No");?>>
                                <label for="applicant-healthcare-training-no" class="applicant-have-training-in-healthcare">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="does-applicant-have-first-aid-training-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you expect that the Applicant have attended a First Aid Training?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-attend-first-aid-training" id="applicant-first-aid-training-yes" value="Yes" <?php echo $utils->selected_expect_applicant_have_attend_firstaid_training("Yes");?>>
                                <label for="applicant-first-aid-training-yes" class="applicant-attend-first-aid-training">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-attend-first-aid-training" id="applicant-first-aid-training-no" value="No" <?php echo $utils->selected_expect_applicant_have_attend_firstaid_training("No");?>>
                                <label for="applicant-first-aid-training-no" class="applicant-attend-first-aid-training">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="add-border-bottom">Personal Information</h3>
             <div class="what-languages-spoken-at-home">
                <h5>What languages are spoken at home?<span id="required">*</span></h5>
                <div class="center">
                    <div class="languages-spoken-at-home registration-checkbox">
                       <?php echo $utils->selected_languages_spoken_at_home();?>
                    </div>
                </div>
             </div>
             <div class="nationality-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Nationality<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select name="nationality" id="field" class="nationality">
                                <option value="" disabled selected>Select</option>
                                <?php echo $utils->selected_nationality();?>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="are-you-a-single-parent-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Are you a single parent?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field"  name="are-you-single-parent" class="are-you-single-parent">
                                <option value="" disabled selected>Select</option>
                                <option value="No, Our family has two parents" <?php echo $utils->selected_are_you_a_single_parent("No, Our family has two parents");?>>No, our family has two parents</option>
                                <option value="Yes, I am single father" <?php echo $utils->selected_are_you_a_single_parent("Yes, I am single father");?>>Yes, I am single father</option>
                                <option value="Yes, I am single mother" <?php echo $utils->selected_are_you_a_single_parent("Yes, I am single mother");?>>Yes, I am single mother</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="parents-age-group-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Parent\'s age group?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field"  name="parents-age-group" class="parents-age-group">
                                <option value="" disabled selected>Select</option>
                                <option value="18 - 30" <?php echo $utils->selected_parents_age_group("18 - 30");?>>18 - 30</option>
                                <option value="31 - 40" <?php echo $utils->selected_parents_age_group("31 - 40");?>>31 - 40</option>
                                <option value="41 - 50" <?php echo $utils->selected_parents_age_group("41 - 50");?>>41 - 50</option>
                                <option value="51 - 60" <?php echo $utils->selected_parents_age_group("51 - 60");?>>51 - 60</option>
                                <option value="61 - 70" <?php echo $utils->selected_parents_age_group("61 - 70");?>>61 - 70</option>
                                <option value="70+" <?php echo $utils->selected_parents_age_group("70+");?>>70+</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="mother-nationality-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Mother Nationality<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" class="mother-nationality-select-box" name="mother-nationality">
                                <option value="" disabled selected>Select</option>
                                 <?php echo $utils->selected_mother_nationality();?>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="father-nationality-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Father Nationality<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" class="father-nationality-select-box" name="father-nationality">
                                <option value="" disabled selected>Select</option>
                                <?php echo $utils->selected_father_nationality();?>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="religion-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Religion<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" class="religion-select-box" name="religion">
                                <option value="" disabled selected>Select</option>
                                <?php echo $utils->selected_religion();?>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="is-religion-important-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Is religion important to you?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="religion-important-to-you" class="religion-important-to-you">
                                <option value="" disabled selected>Select</option>
                                <option value="Not Important" <?php echo $utils->selected_is_religion_important_to_you("Not Important");?>>Not Important</option>
                                <option value="Important" <?php echo $utils->selected_is_religion_important_to_you("Important");?>>Important</option>
                                <option value="Very Important" <?php echo $utils->selected_is_religion_important_to_you("Very Important");?>>Very Important</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="employment-parent-1-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Employment (Parent 1)<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="employment-parent-1" class="employment-parent-1" placeholder="Employment" value='<?php echo $utils->inputted_employee_parent_one();?>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="employment-parent-2-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Employment (Parent 2)</h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="employment-parent-2" class="employment-parent-2" placeholder="Employment" value='<?php echo $utils->inputted_employee_parent_two();?>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-living-in-house-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>How many people living in the house<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="number" name="how-many-people-living-in-the-house" class="how-many-people-living-in-the-house" placeholder="No. of people living in the house" value='<?php echo $utils->inputted_number_of_people_living_in_the_house();?>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="where-do-you-live-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Where do you live?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="where-do-you-live" class="where-do-you-live">
                                <option value="" disabled selected>Select</option>
                                <option value="Small City" <?php echo $utils->selected_where_do_you_live("Small City");?>>Small City</option>
                                <option value="Big City" <?php echo $utils->selected_where_do_you_live("Big City");?>>Big City</option>
                                <option value="Suburd" <?php echo $utils->selected_where_do_you_live("Suburd");?>>Suburd</option>
                                <option value="Country Side" <?php echo $utils->selected_where_do_you_live("Country Side");?>>Country Side</option>
                                <option value="Town" <?php echo $utils->selected_where_do_you_live("Town");?>>Town</option>
                                <option value="Village" <?php echo $utils->selected_where_do_you_live("Town");?>>Village</option>
                                <option value="Sea Side" <?php echo $utils->selected_where_do_you_live("Sea Side");?>>Sea Side</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="do-you-have-any-pets-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you have any pets?<span id="required">*</span></h5>
                    </div>
                    <div class="radio-button-fields">
                        <div id="input-1">
                            <input type="radio" name="have-pets" id="have-pets-yes" value="Yes" <?php echo $utils->selected_have_any_pets("Yes");?>>
                            <label for="have-pets-yes" class="have-pets">Yes</label><br>
                        </div>
                        <div id="input-2">
                            <input type="radio" name="have-pets" id="have-pets-no" value="No" <?php echo $utils->selected_have_any_pets("No");?>>
                            <label for="have-pets-no" class="have-pets">No</label><br>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="add-border-bottom">Contact Information(private)</h3>
            <div class="firstname-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>First name<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="firstname" class="firstname" placeholder="First name" value = '<?php echo $utils->inputted_firstname();?>'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lastname-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                            <h5>Last name<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="lastname" class="lastname" placeholder="Last name" value='<?php echo $utils->inputted_lastname();?>'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address-container">
                <div class="center">
                <div class="registration-input">
                    <div class="label-container">
                        <div>
                            <h5>Addresss<span id="required">*</span></h5>
                        </div>
                    </div>
                    <div class="field-container">
                        <input id="field" type="text" name="address" class="address" placeholder="Address" value='<?php echo $utils->inputted_address();?>'/>
                    </div>
                </div>
                </div>
            </div>
            <div class="zip-code-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                            <h5>Zip code<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="zip-code" class="zip-code" placeholder="Zip code" value='<?php echo $utils->inputted_zipcode();?>'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="city-container">
              <div class="center">
                 <div class="registration-input">
                    <div class="label-container">
                       <div>
                          <h5>City<span id="required">*</span></h5>
                       </div>
                    </div>
                    <div class="field-container">
                       <input id="field" type="text" name="city" class="city" placeholder="City" value='<?php echo $utils->inputted_city();?>'/>
                    </div>
                 </div>
              </div>
            </div>
            <div class="state-container">
                <div class="center">
                <div class="registration-input">
                    <div class="label-container">
                        <div>
                            <h5>State/Region<span id="required">*</span></h5>
                        </div>
                    </div>
                    <div class="field-container">
                        <input id="field" type="text" name="state-region" class="state-region" placeholder="State/Region" value='<?php echo $utils->inputted_state_region();?>'/>
                    </div>
                </div>
                </div>
            </div>
            <div class="country-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Country<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <select id="field" class="country-select" name="country">
                           <option value="" disabled selected>Select</option>
                           <?php echo $utils->selected_country();?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mobile-number-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Mobile Phone No<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="tel" name="mobile-number[]" class="mobile-number"  value='<?php echo $utils->inputted_mobile_phone_no();?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="letter-to-the-applicant-container">
               <h3 class="add-border-bottom">Letter to the Applicant</h3>
               <h5>Letter<span id="required">*</span></h5>
               <div class="center">
                   <textarea id="text-area" name="letter-to-the-applicant" class="letter-to-the-applicant"><?php echo $utils->inputted_letter_to_the_applicant();?></textarea>
               </div>
            </div>
            <h3 class="add-border-bottom">Account Information</h3>
            <div class="email-add-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Email address(will be used as your username)<span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="email" class="email" placeholder="Email" value='<?php echo $utils->inputted_email_address();?>'/>
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
                        <input id="field" type="text" name="confirm-email" class="confirm-email" placeholder="Email" value='<?php echo $utils->inputted_confirm_email_address();?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="password-container">
                <div class="center">
                   <div class="registration-input">
                      <div class="label-container">
                         <div>
                            <h5>Password <span id="required">*</span></h5>
                         </div>
                      </div>
                      <div class="field-container">
                         <input id="field" type="password" name="password" class="password" placeholder="Password" value='<?php echo $utils->inputted_password();?>'/>
                      </div>
                   </div>
                </div>
            </div>
            <div class="confirm-password-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Confirm password <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="password" name="confirm-password" class="confirm-password" placeholder="Confirm password"  value='<?php echo $utils->inputted_confirm_password();?>'/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="register-btn-container">
                <div class="first-div">
                </div>
                <div class="second-div">
                    <input type="submit" name="register" value="Register" id="register-btn"/>
                </div>
            </div>
            <div class="warning-msg-container-btm center">
               <div class="warning-msg-btm">
                  
               </div>
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>