<?php
/*
 * Template Name: Message
 */
get_header();
?>
<?php
    global $wpdb;
    require get_theme_file_path('inc/message/message/message-utils.php');
    require get_theme_file_path('inc/message/message/message-db.php');
    $db               = new MessageHostFamilyDb($wpdb);
    //Success returns the membership level object. Failure returns false
    $membership_level = pmpro_getMembershipLevelForUser(get_current_user_id());
    $utils = new MessageHostFamilyUtils(
             $db,
             $membership_level
            );
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <div class="message-container">
            <input type="hidden" id="to-send-msg-id" value="<?php echo $_GET['to-send-msg-id'];?>">
            <div class="send-to">
                <div class="first-column">
                    <?php
                        if($_GET['user-type'] === 'host-family'){
                            $host_family = $db->get_host_family($_GET['to-send-msg-id']);
                            if($host_family->photo != ""){
                                $imgSrc = get_stylesheet_directory_uri().'/users-photo/host-family/'.$host_family->photo;
                                echo "<div class='photo-container'>
                                        <img src='".$imgSrc."' alt='$host_family->firstname-$host_family->lastname' id='user-photo'>
                                      </div>";
                            } else {
                                $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                                echo "<div class='photo-container'>
                                        <img src='".$imgSrc."' alt='$host_family->firstname $host_family->lastname' id='user-photo'>
                                      </div>";
                            }
                            echo "<h6>$host_family->firstname $host_family->lastname</h6>";
                        } else {
                            $employee = $db->get_employee($_GET['to-send-msg-id']);
                            if($employee->photo != ""){
                                $imgSrc = get_stylesheet_directory_uri().'/users-photo/employee/'.$employee->photo;
                                echo "<div class='photo-container'>
                                        <img src='".$imgSrc."' alt='$employee->firstname-$employee->lastname' id='user-photo'>
                                      </div>";
                            } else {
                                $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                                echo "<div class='photo-container'>
                                        <img src='".$imgSrc."' alt='$employee->firstname $employee->lastname' id='user-photo'>
                                      </div>";
                            }
                            echo "<h6>$employee->firstname $employee->lastname</h6>";
                        }
                    ?>
                                         
                </div>
                <div class="second-column">
                    <span id="arrow-left-icon">
                        <a href="<?php echo site_url('/messages');?>"><i class="fas fa-arrow-left"></i></a>
                    </span>
                </div>
            </div>
            <div class="chat-area">
                <?php echo $utils->display_previous_conversation();?> 
            </div>
            <div class="input-area">
                    <?php
                        if( 
                            get_user_meta(get_current_user_id(), 'user_type', true) === 'host-family' &&
                            $membership_level === false &&
                            $utils->have_already_sent_msg() === false
                        ){
                            $host_family          = $db->get_host_family(get_current_user_id());
                            $host_family_free_msg = 'Greetings, I am '.$host_family->firstname.' '.$host_family->lastname.' '.$host_family->nationality.', from '.$host_family->country.
                            ' I have take a look at your profile and Im wondering if you are still looking for a job?';
                            $mark_up  = '<div class="host-family-free-container"> 
                                            <div class="host-family-free-msg-container">
                                                <p>As a registered Host Family, you are free to send, each and every Employee with the following message, for one time. To let them know
                                                that your are interested, for their service.</p>
                                                <p id="host-family-free-msg">'.$host_family_free_msg.'</p>
                                            </div>
                                            <div class="host-family-free-btn-container">
                                                <button type="submit" id="send-host-family-free-msg-btn">send free message</button>
                                            </div>
                                        </div>';
                            echo $mark_up;
                        } else if(
                            get_user_meta(get_current_user_id(), 'user_type', true) === 'employee' &&
                            $membership_level === false &&
                            $utils->have_already_sent_msg() === false
                        ){
                           $mark_up = '<div class="employee-free-container">
                                            <div class="employee-free-msg-container">
                                                <p>As a registered Employee, you are free to send, each and every Host Family a message, for one time. Host Family
                                                that is not a premium member, cannot read your message but will know that you send one. However if your a premium member,
                                                Host Family can read your message, even if the Host Family is not a premium member.</p>
                                            </div>
                                            <div class="send-employee-free-msg-btn-container">
                                                <input type="text" id="message-field">
                                                <button id="send-employee-free-msg-btn">Send free message</button>
                                            </div>
                                      </div>';     
                            echo $mark_up;
                            
                        } else if(
                            get_user_meta(get_current_user_id(), 'user_type', true) === 'host-family' &&
                            $membership_level === false &&
                            $utils->have_already_sent_msg()
                        ){
                            $host_family_membership_link = site_url('/membership-host-family');
                            echo "<p class='action-response required'>You have already sent this employee a message, have a <a id='premium-member' href='$host_family_membership_link'>premium membership</a> to send unlimited message to all employees.</p>";
                        } else if(
                            get_user_meta(get_current_user_id(), 'user_type', true) === 'employee' &&
                            $membership_level === false &&
                            $utils->have_already_sent_msg()
                        ){
                            $employee_membership_link = site_url('/membership-employee');
                            echo "<p class='action-response required'>You have already sent this host family a message, have a <a id='premium-member' href='$employee_membership_link'>premium membership</a> to send unlimited message to all host families.</p>";
                        }else {
                            echo '<input type="text" id="message-field">';
                            echo '<button id="send-btn">Send</button>';
                        }
                    ?>
            
               
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>