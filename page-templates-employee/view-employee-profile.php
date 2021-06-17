<?php 
/*
 * Template Name: View Employee Profile
 *
 */
get_header();
?>
<?php 
    global $wpdb, $current_user;
    require get_theme_file_path('inc/employee/view-employee/view-employee-db.php');
    require get_theme_file_path('inc/employee/view-employee/view-employee-utils.php');
    require get_theme_file_path('assets/utilities/php/string.php');
    $db                           = new View_Employee_Db($wpdb);
    $employee_data                = $db->get_employee_by_wpuserid($_GET['employee-id']);
    $employee_preferred_countries = $db->get_employee_preferred_countries_by_wpuserid($_GET['employee-id']);
    $string_utils                 = new String_Utils();   
    $utils                        = new View_Employee_Utils(
                                            $employee_data,
                                            $employee_preferred_countries,
                                            $string_utils,
                                            $db 
                                        );
                                 
    
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <div class="employee-account-container">
            <div class="column-one">
                <div class="container">
                    <?php
                        $photo  = $employee_data->photo;
                        if( $photo != ""){
                            $img_src   = get_stylesheet_directory_uri().'/users-photo/employee/'.$photo;
                            $img_class = ($employee_data->photo_privacy === 'Registered Members' && $employee_data->wp_user_id != get_current_user_id()) ? "blurred" : null;
                            echo "<div class='employee-photo-container'><img src='$img_src' alt='employee-photo' class='$img_class'></div>";
                        } else {
                            $img_src = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                            echo "<div class='employee-photo-container'><img src='$img_src' alt='employee-photo'></div>";
                        }
                        echo '<h5 id="photo-description"> '.$employee_data->photo_description.' </h5>';
                    ?>   
                </div>
                <div class="membership-container">
                    <?php
                            //Success returns the membership level object. Failure returns false
                            $membership_level = pmpro_getMembershipLevelForUser($_GET['employee-id']);
                            if($membership_level){
                                $membsership_info = "$membership_level->name Member($membership_level->description)";
                                if($_GET['employee-id'] == get_current_user_id()){
                                    $membsership_info .= ' Expires '.date_i18n(get_option('date_format'), $membership_level->enddate);
                                }
                                echo "<h5>$membsership_info</h5>";
                            } else {
                                echo "<h5>Free Member</h5>";
                            }
                    ?>
                </div>
            </div>
            <div class="column-two">
                <?php
                    $looking_for_job     = $utils->looking_for_job();
                    $preferred_countries = $utils->preferred_countries();
                    echo "<h3>$employee_data->firstname $employee_data->lastname living in $employee_data->employee_living_in</h3>";
                    echo "<h5>$employee_data->firstname $employee_data->lastname($employee_data->age), $employee_data->nationality
                            living in $employee_data->employee_living_in looking for $looking_for_job in $preferred_countries for
                            $employee_data->duration_of_stay.                     
                         </h5>";
                    
                    if(get_user_meta(get_current_user_id(), 'user_type', true) === 'host-family'){
                        $message_link    = add_query_arg('employee-id', $_GET['employee-id'], site_url('/message-host-family'));

                        $contact_mark_up = '<form method="post" action="">
                                                <div class="action-container">
                                                    <input type="submit" id="block-unblock" name="block-unblock" value="">
                                                    <input type="submit" name="send-message" value="Send Message">
                                                </div>
                                            </form>';
                        echo $contact_mark_up;
                        echo '<input id="employee-id" type="hidden" value="'.$_GET['employee-id'].'">';

                        if(isset($_POST['send-message'])){
                            if(!empty($db->get_block_user($_GET['employee-id'], get_current_user_id()))) {
                                echo "<p class='action-response required'>Employee have blocked you, from sending a message.</p>";
                            } else if(!empty($db->get_chats(get_current_user_id(), $_GET['employee-id'])) && pmpro_hasMembershipLevel() === false) {
                                $host_family_membership_link = site_url('/membership-host-family');
                                echo "<p class='action-response required'>You have already sent this employee a message, have a <a href='$host_family_membership_link'>premium</a> membership to send unlimited message to all employees.</p>";
                            }  else {
                                $data = array(
                                    'to-send-msg-id' => $_GET['employee-id'],
                                    'user-type'      => 'employee'
                                 );
                                $msg_link = add_query_arg($data, site_url('/message'));
                               echo "<p class='action-response required'>Loading...</p>";
                               echo "<script>location.href='$msg_link';</script>";
                            }
                        }  
                    }
                         
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="job-information-parent-container">
            <h3 class="add-border-bottom">Job Information</h3>
            <div class="job-information-container">
                <?php
                    echo $utils->looking_for_job_aupair_nanny_granny_aupair();
                    echo $utils->looking_for_job_caregiver_for_elderly_live_in_help();
                    echo $utils->looking_for_job_liveintutor_onlinetutor_virtualchildcare();
                ?>
                <div class="add-border-bottom">
                </div>
                <div class="preferred-countries-container opacity-background">
                    <h5>Preferred countries</h5>
                    <?php echo '<p>'.$utils->preferred_countries().'</p>';?>
                </div>
                <div class="preferred-area-container">
                    <h5>Preferred area</h5>
                    <?php echo '<p>'.$utils->preferred_area().'</p>';?>
                </div>
                <div class="earliest-starting-date-container opacity-background">
                    <h5>Earliest starting date</h5>
                    <?php echo "<p>$employee_data->earliest_starting_date_month $employee_data->earliest_starting_date_year</p>";?>
                </div>
                <div class="latest-starting-date-container">
                    <h5>Latest starting date</h5>
                    <?php echo "<p>$employee_data->latest_starting_date_month $employee_data->latest_starting_date_year</p>";?>
                </div>
                <div class="duration-of-stay-container opacity-background">
                    <h5>Duration of stay</h5>
                    <?php echo "<p>$employee_data->duration_of_stay</p>";?>
                </div>
                <div class="looking-for-container">
                    <h5>Looking for</h5>
                    <?php echo "<p>$employee_data->kind_of_work_looking</p>";?>
                </div>
                <div class="accomodation-container opacity-background">
                    <h5>Accomodation</h5>
                    <?php 
                        $accomodation_both = "<p>Looking for, live in & live out work</p>";
                        echo ($employee_data->accomodation === "Both") ? $accomodation_both : "<p>$employee_data->accomodation</p>";
                    ?>
                </div>
                <div class="live-family-with-pets-container">
                    <h5>Live family with pets</h5>
                    <?php echo "<p>$employee_data->would_live_family_with_pets</p>";?>
                </div>
                <div class="take-care-of-pets-container opacity-background">
                    <h5>Take care of pets</h5>
                    <?php echo "<p>$employee_data->would_take_care_of_pets</p>";?>
                </div>
                <div class="work-extra-to-earn-additional-money-container">
                    <h5>Work extra to earn some additional money</h5>
                    <?php echo "<p>$employee_data->would_work_extra_to_earn</p>";?>
                </div>
            </div>        
        </div>
        <div class="letter-to-the-family-parent-container">
            <h3 class="add-border-bottom">Letter to the Family</h3>
            <div class="letter-to-the-family-container">
                <?php echo $employee_data->letter;?>
            </div>        
        </div>
    </div>
    <div class="row">
        <div class="personal-information-parent-container">
            <h3 class="add-border-bottom">Personal Information</h3>
            <div class="personal-information-container">
                <div class="gender-container opacity-background">
                    <h5>Gender</h5>
                    <?php echo "<p>$employee_data->gender</p>";?>
                </div>
                <div class="date-of-birth-container">
                    <h5>Date of birth</h5>
                    <?php echo "<p>$employee_data->date_of_birth_month $employee_data->date_of_birth_year</p>"?>
                </div>
                <div class="weight-container opacity-background">
                    <h5>Weight</h5>
                    <?php
                        echo ($employee_data->weight_in_kg !== null ) ? "<p>$employee_data->weight_in_kg kg</p>" : "<p>$employee_data->weight_in_lbs lbs</p>";
                    ?>
                </div>
                <div class="height-container">
                    <h5>Height</h5>
                    <?php 
                        echo ($employee_data->height_in_cm !== null ) ? "<p>$employee_data->height_in_cm cm</p>" : "<p>$employee_data->height_in_ft ft</p>";
                    ?>
                </div>
                <div class="nationality-container opacity-background">
                    <h5>Nationality</h5>
                    <?php echo "<p>$employee_data->nationality</p>";?>
                </div>
                <div class="have-a-passport-from-container">
                    <h5>Have a passport from</h5>
                    <?php echo "<p>$employee_data->have_a_passport_from</p>";?>
                </div>
                <div class="currently-living-container opacity-background">
                    <h5>Currently living</h5>
                    <?php 
                        $another_country = '<h6>Living in</h6>
                                            <p>'.$employee_data->living_in.'</p>
                                            <h6>Visa status</h6>
                                            <p>'.$employee_data->visa_status.'</p>';
                        echo ($employee_data->currently_living === "Another country") ? $another_country : "$employee_data->currently_living($employee_data->country)";
                    ?>
                </div>
                <div class="education-container">
                    <h5>Education</h5>
                    <?php echo "<p>$employee_data->education</>";?>
                </div>
                <div class="name-of-school-college-and-university-container opacity-background">
                    <h5>Name of School, College or University</h5>
                    <?php echo "<p>$employee_data->name_of_school_college_university</p>";?>
                </div>
                <div class="profession-container">
                    <h5>Profession</h5>
                    <?php echo "<p>$employee_data->profession</p>";?>
                </div>
                <div class="marital-status-container opacity-background">
                    <h5>Marital status</h5>
                    <?php echo "<p>$employee_data->marital_status</p>";?>
                </div>
                <div class="have-own-children-container">
                   <h5>Have own children</h5>
                   <?php echo "<p>$employee_data->have_own_children</p>";?>
                </div>
                <div class="have-any-siblings-container opacity-background">
                    <h5>Have any siblings</h5>
                    <?php echo "<p>$employee_data->have_any_siblings</p>";?>
                </div>
                <div class="have-healthcare-training-container">
                    <h5>Have healthcare training</h5>
                    <?php echo "<p>$employee_data->have_traning_in_healthcare</p>";?>
                </div>
                <div class="attend-first-aid-training-container opacity-background">
                   <h5>Attend first aid training</h5>
                   <?php echo "<p>$employee_data->attend_first_aid_training</p>";?>
                </div>
                <div class="have-criminal-record-container">
                   <h5>Have criminal record</h5>
                   <?php echo "<p>$employee_data->have_criminal_record</p>";?>
                </div>
                <div class="special-diet-consideration-container opacity-background">
                  <h5>Special diet consideration</h5>
                  <?php echo "<p>$employee_data->special_diet_considerations</p>";?>
                </div>
                <div class="have-health-problems-or-allergy-container">
                  <h5>Have health problems</h5>
                  <?php 
                    echo "<p>$employee_data->have_health_problems_allergy</p>";
                    if($employee_data->have_health_problems_allergy === "Yes"){
                        echo '<h6>Health Problems/Allergies</h6>
                              <p>'.$employee_data->describe_health_problems_allergies.'</p>';
                    }
                  ?>
                </div>
                <div class="smoke-container opacity-background">
                   <h5>Smoke</h5>
                   <?php echo "$employee_data->do_you_smoke</p>";?> 
                 </div>
                 <div class="can-swim-well-container">
                    <h5>Can swim well</h5>
                    <?php echo "<p>$employee_data->can_swim_well</p>";?>
                 </div>
                 <div class="can-ride-a-bike-container opacity-background">
                     <h5>Can ride a bike</h5>
                     <?php echo "<p>$employee_data->can_ride_bike</p>";?>
                 </div>
                 <div class="have-a-drivers-license-container">
                    <h5>Have a drivers license</h5>
                    <?php echo "<p>$employee_data->have_drivers_license</p>";?>
                 </div>
                 <div class="sports-container opacity-background">
                    <h5>Sports</h5>
                    <?php echo "<p>$employee_data->sports</p>";?>
                 </div>
                 <div class="religion-container">
                    <h5>Religion</h5>
                    <?php echo "<p>$employee_data->religion</p>";?>
                 </div>
                 <div class="religion-is-container opacity-background">
                    <h5>Religion is</h5>
                    <?php echo "<p>$employee_data->religion_for_you_is</p>";?>
                </div>
            </div>
        </div>          
         <?php echo $utils->display_contact_information();?>              
    </div>
</div>
<?php
get_footer();
?>
