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
    $db    = new MessageHostFamilyDb($wpdb);
    $utils = new MessageHostFamilyUtils($db);
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <div class="message-container">
            <input type="hidden" id="to-send-msg-id" value="<?php echo $_GET['to-send-msg-id'];?>">
            <div class="send-to">
                <div class="first-column">
                    <?php
                        if($_GET['user-type'] === 'host-family'){
                            $host_family = $db->get_host_family();
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
                            $employee = $db->get_employee();
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
                <input type="text" id="message-field">
                <button id='send-btn'>Send</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>