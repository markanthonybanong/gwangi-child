<?php 
/*
 * Template Name: View Employee Profile
 *
 */
get_header();
?>
<?php 
    global $wpdb;
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
                                            $string_utils
                                        );
                                 
    
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <pre>
            <?php
             #Test
            ?>
        </pre>
        <div class="employee-account-container">
            <div class="column-one">
                <?php
                    $photo  = $employee_data->photo;
                    if( $photo != ""){
                        $imgSrc = get_stylesheet_directory_uri().'/users-photo/employee/'.$photo;
                        echo "<img src='".$imgSrc."' alt='employee-photo'>";
                    } else {
                        $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                        echo "<img src='".$imgSrc."' alt='employee-photo'>";
                    }
                ?>
            </div>
            <div class="column-two">
                <?php
                    $looking_for_job     = $utils->looking_for_job();
                    $preferred_countries = $utils->preferred_countries();
                    echo "<h3>$employee_data->firstname $employee_data->lastname living in $employee_data->employee_living_in</h3>";
                    echo  "<h5>$employee_data->firstname $employee_data->lastname($employee_data->age), $employee_data->nationality
                            living in $employee_data->employee_living_in looking for $looking_for_job job in $preferred_countries for
                            $employee_data->duration_of_stay.                     
                          </h5>";
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
            </div>        
        </div>
    </div>
    <div class="row">
        <div class="personal-information-parent-container">
            <h3 class="add-border-bottom">Personal Information</h3>
            <div class="personal-information-container">
            </div>
        </div>          
        <div class="contact-information-parent-container">
            <h3 class="add-border-bottom">Contact Information</h3>
            <div class="contact-information-container">
            </div>     
        </div>
    </div>
</div>
<?php
get_footer();
?>
