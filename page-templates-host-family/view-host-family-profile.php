<?php
/*
 * Template Name: View Host Family Profile
 * description: >-
  Active aupair view host family profile
 */
get_header();
?>
<?php 
    global $wpdb;
    require get_theme_file_path('inc/host-family/view-host-family/view-host-family-db.php');
    require get_theme_file_path('inc/host-family/view-host-family/view-host-family-utils.php');
    require get_theme_file_path('assets/utilities/php/string.php');
    $db                                      = new View_Host_Family_Db($wpdb);
    $host_family_data                        = $db->get_host_family_by_wpuserid($_GET['host-family-id']);
    $host_family_preferred_nationalites      = $db->get_host_family_preferred_nationalities_by_wpuserid($_GET['host-family-id']);
    $host_family_applicants_living_living_in = $db->get_host_family_applicants_living_in_by_wpuserid($_GET['host-family-id']);
    $host_family_languages_spoken_at_home    = $db->get_host_family_spoken_home_languages_at_home_by_wpuserid($_GET['host-family-id']);
    $string_utils                            = new String_Utils();   
    $utils                                   = new View_Host_Family_Utils(
                                                       $host_family_data,
                                                       $host_family_preferred_nationalites,
                                                       $host_family_applicants_living_living_in,
                                                       $host_family_languages_spoken_at_home,
                                                       $string_utils
                                             );
    
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <div class="host-family-account-container">
            <div class="column-one">
                <?php
                    $photo  = $host_family_data->photo;
                    if( $photo != ""){
                        $img_src   = get_stylesheet_directory_uri().'/users-photo/host-family/'.$photo;
                        $img_class = ($host_family_data->photo_privacy === 'Registered Members' && $host_family_data->wp_user_id != get_current_user_id()) ? "blurred" : null;
                        echo "<div class='host-family-photo-container'><img src='$img_src' alt='host-family-photo-photo' class='$img_class'></div>";
                    } else {
                        $img_src = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                        echo "<div class='host-family-photo-container'><img src='$img_src' alt='host-family-photo-photo'></div>";
                    }
                    echo '<h5 id="photo-description"> '.$host_family_data->photo_description.' </h5>';
                ?>                       
            </div>
            <div class="column-two">
                <?php
                    $looking_for              = $utils->looking_for();
                    $preferred_nationalities  = $utils->preferred_nationalities();
                    $living_in                = $utils->applicants_living_in();
                    $languages_spoken_at_home = $utils->languages_spoken_at_home();
                    $host_family_info         = null;
                    $host_family_info         = "Host family $host_family_data->firstname $host_family_data->lastname from $host_family_data->city,
                                                 $host_family_data->country loooking a $looking_for for $host_family_data->duration.";
                    if($preferred_nationalities !== "No Preferences"){
                        $host_family_info .= " Preferred nationalities $preferred_nationalities.";
                    }
                    if($living_in !== "No Preferences"){
                        $host_family_info .= " Living in $living_in.";
                    }
                    $host_family_info .= " Can speak $languages_spoken_at_home.";
                    echo "<h3>$looking_for jobs in $host_family_data->country</h3>";
                    echo $host_family_info;
                      
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="job-information-parent-container">
            <h3 class="add-border-bottom">Job Information</h3>
            <div class="job-information-container">
                <div class="salary-container opacity-background">
                    <h5>Salary(per month)</h5>
                    <?php 
                        echo "<p>$host_family_data->salary_per_month_amount $host_family_data->salary_per_month_currency</p>";
                    ?>
                </div>
                <?php
                    echo $utils->looking_for_aupair_nanny_granny_aupair();
                    echo $utils->looking_for_caregiver_for_elderly_live_in_help();
                    echo $utils->looking_for_liveintutor();
                ?>
                <div class="add-border-bottom">
                </div>
                <div class="preferred-nationalites-container opacity-background">
                    <h5>Preferred Nationalities</h5>
                    <?php echo '<p>'.$utils->preferred_nationalities().'</p>';?>
                </div>
                <div class="applicants-living-in-container">
                    <h5>Applicants Living In</h5>
                    <?php echo '<p>'.$utils->applicants_living_in().'</p>';?>
                </div>
                <div class="earliest-starting-date-container opacity-background">
                    <h5>Earliest starting date</h5>
                    <?php echo "<p>$host_family_data->earliest_starting_date_month $host_family_data->earliest_starting_date_year</p>";?>
                </div>
                <div class="latest-starting-date-container">
                    <h5>Latest starting date</h5>
                    <?php echo "<p>$host_family_data->latest_starting_date_month $host_family_data->latest_starting_date_year</p>";?>
                </div>
                <div class="duration-of-stay-container opacity-background">
                    <h5>Duration of stay</h5>
                    <?php echo "<p>$host_family_data->duration</p>";?>
                </div>
                <div class="preferred-gender-container">
                    <h5>Preferred Gender</h5>
                    <?php echo "<p>$host_family_data->preferred_gender</p>";?>
                </div>
                <div class="required-education-level-container opacity-background">
                    <h5>Required education level</h5>
                    <?php 
                        echo "<p>$host_family_data->required_education_level</p>";
                    ?>
                </div>
                <div class="working-hours-per-week-container">
                    <h5>Working hours per week</h5>
                    <?php echo "<p>$host_family_data->working_hours_per_week</p>";?>
                </div>
                <div class="pocket-money-container opacity-background">
                    <h5>Pocket money(per month)</h5>
                    <h6>Amount</h6>
                    <p><?php echo "<p>$host_family_data->pocket_money_per_month_amount</p>";?></p>
                    <h6>Currency</h6>
                    <p><?php echo "<p>$host_family_data->pocket_money_per_month_currency</p>"?></p>
                </div>
                <div class="willing-to-pay-for-travel-expenses-container">
                    <h5>Pay for travel expenses</h5>
                    <p><?php echo "<p>$host_family_data->willing_to_pay_for_travel_expenses</p>";?></p>
                </div>
                <div class="pay-for-visa-container opacity-background opacity-background">
                    <h5>Pay for visa</h5>
                    <?php echo "<p>$host_family_data->willing_to_pay_for_visa</p>";?>
                </div>
                <div class="required-age-container">
                    <h5>Required Age</h5>
                    <h6>Minimum</h6>
                    <p><?php echo "<p>$host_family_data->required_age_min</p>";?></p>
                    <h6>Maximum</h6>
                    <p><?php echo "<p>$host_family_data->required_age_max</p>"?></p>
                </div>
                <div class="is-smoking-allowed-container opacity-background">
                    <h5>Is smoking allowed</h5>
                    <?php echo "<p>$host_family_data->is_smoking_allowed</p>";?>
                </div>
                <div class="have-to-take-care-of-pets-container">
                    <h5>Applicant have to take care of pets</h5>
                    <?php echo "<p>$host_family_data->applicant_have_to_take_care_of_pets</p>";?>
                </div>
                <div class="know-how-to-swim-container opacity-background">
                    <h5>Applicant must know how to swim</h5>
                    <?php echo "<p>$host_family_data->applicant_know_how_to_swim</p>";?>
                </div>
                <div class="know-how-to-ride-a-bike-container">
                    <h5>Applicant must know how to ride a bike</h5>
                    <?php echo "<p>$host_family_data->applicant_know_how_to_ride_a_bike</p>";?>
                </div>
                <div class="know-how-to-drive-container opacity-background">
                    <h5>Applicant must know how to drive</h5>
                    <?php echo "<p>$host_family_data->expect_applicant_to_drive</p>";?>
                </div>
                <div class="training-in-healthcare-container">
                    <h5>Applicant must have healthcare training</h5>
                    <?php echo "<p>$host_family_data->expect_applicant_have_training_in_healthcare</p>";?>
                </div>
                <div class="first-aid-container opacity-background">
                    <h5>Applicant must have attended first aid training</h5>
                    <?php echo "<p>$host_family_data->expect_applicant_have_attended_firstaid_training</p>";?>
                </div>
            </div>        
        </div>
        <div class="letter-to-the-applicant-parent-container">
            <h3 class="add-border-bottom">Letter to the Applicant</h3>
            <div class="letter-to-the-applicant-container">
                <?php echo $host_family_data->letter;?>
            </div>        
        </div>
    </div>
    <div class="row">
        <div class="personal-information-parent-container">
            <h3 class="add-border-bottom">Personal Information</h3>
            <div class="personal-information-container">
                <div class="nationality-container opacity-background">
                    <h5>Nationality</h5>
                    <?php echo '<p>'.$host_family_data->nationality.'</p>';?>
                </div>
                <div class="spoken-languages-container">
                    <h5>Spoken languages at home</h5>
                    <?php echo '<p>'.$utils->languages_spoken_at_home().'</p>';?>
                </div>
                <div class="is-single-parent-container  opacity-background">
                    <h5>Is single parent</h5>
                    <?php echo "<p>$host_family_data->is_single_parent</p>"?>
                </div>
                <div class="parents-age-group-container">
                    <h5>Parents age group</h5>
                    <?php echo "<p>$host_family_data->parent_age_group</p>";?>
                </div>
                <div class="mother-nationality-container opacity-background">
                    <h5>Mother Nationality</h5>
                    <?php echo "<p>$host_family_data->mother_nationality</p>";?>
                </div>
                <div class="father-nationality-container">
                    <h5>Father Nationality</h5>
                    <?php echo "<p>$host_family_data->father_nationality</p>";?>
                </div>
                <div class="religion-container opacity-background">
                    <h5>Religion</h5>
                    <?php echo "<p>$host_family_data->religion</p>";?>
                </div>
                <div class="is-religion-container">
                    <h5>Is religion important</h5>
                    <?php echo "<p>$host_family_data->is_religion_important_to_you</p>";?>
                </div>
                <div class="employment-parent-container opacity-background">
                    <h5>Employment parent one</h5>
                    <?php 
                        echo "<p>$host_family_data->employment_parent_one</p>";
                        if($host_family_data->employment_parent_two != null){
                            echo "<h5>Employment parent two</h5>";
                            echo "<p>$host_family_data->employment_parent_two</p>";
                        }
                    ?>
                </div>
                <div class="number-of-people-living-in-the-house-container">
                    <h5>Number of people living in the house</h5>
                    <?php echo "<p>$host_family_data->how_many_people_living_in_the_house</p>";?>
                </div>
                <div class="have-any-pets-container opacity-background">
                    <h5>Have pets</h5>
                    <?php echo "<p>$host_family_data->do_you_have_any_pets</p>";?>
                </div>
                <div class="living-in-container">
                    <h5>Living in </h5>
                    <?php echo "<p>$host_family_data->where_do_you_live</p>";?>
                </div>
            </div>
        </div>          
        <?php echo $utils->display_contact_information();?>
    </div>
</div>
<?php get_footer();?>