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
        <div class="messages-container">
            <?php echo $utils->display_all_msgs();?>
        </div>
         <div class="btn-container">
             <form method="post " action="">
                <input type="submit" name="delete-msg" value="delete">
             </form>
            
         </div>
        
    </div>
</div>
<?php get_footer();?>