<?php
/*
 * Template Name: Messages
 */
get_header();
?>
<?php
    global $wpdb;
    require get_theme_file_path('inc/message/messages/messages-db.php');
    require get_theme_file_path('inc/message/messages/messages-utils.php');
    $db    = new MessagesDb($wpdb);
    $utils = new MessagesUtils($db);
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <?php 
            if(isset($_POST['delete-msg'])){
               $utils->delete_msgs();
            }
        ?>  
             

        <form method="post" action="">
            <?php
                if(get_user_meta(get_current_user_id(), 'user_type', true) === 'employee'){
                    $host_family_link = site_url('/find-host-family');
                    echo "<h3 id='no-msgs'>You have no messsages, find a <a href='$host_family_link'>Host Family</a> and start sending a message</h3>";
                } else {
                    $employee_link = site_url('/find-employee');
                    echo "<h3 id='no-msgs'>You have no messsages, find a <a href='$employee_link'>Employee</a> and start sending a message</h3>";
                }
            ?>
            <div class="messages-container">
                <?php echo $utils->display_all_msgs();?>
            </div>
             <div class="btn-container">
                <input type="submit" name="delete-msg" value="delete message" id="delete-msg"/>
             </div>
         </form>

    </div>
</div>
<?php get_footer();?>