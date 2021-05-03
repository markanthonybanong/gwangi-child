<?php 
/*
 * Template Name: View Employee Profile
 * 
 */
get_header();
?>
<div class="page-loading-container">
    <div class="page-loading">
    </div>
</div>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <div class="employee-account-container">
            <div class="column-one">
                <?php
                    global $wpdb;
                    $result = $wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '".get_current_user_id()."'");
                    $photo  = $result[0]->photo;
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
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="job-information-parent-container">
            <h3 class="add-border-bottom">Job Information</h3>
            <div class="job-information-container">
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
