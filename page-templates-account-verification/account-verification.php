<?php
/*
 * Template Name: Account Verification
 * description: 
 */
get_header();
?>
<div class="account-verification-parent-container">
    <div class="account-verification-container">
        <?php
            if(isset($_GET['act'])){
                $data = unserialize(base64_decode($_GET['act']));
                $code = get_user_meta($data['id'], 'activation_code', true);
                // verify whether the code given is the same in wp_user_meta
                if($code === $data['code']){
                    // update the user meta
                    update_user_meta($data['id'], 'account_activated', 1);
                    // delete activation code, for that user
                    delete_user_meta($data['id'], 'activation_code');
                    echo '<h3 class="add-border-bottom">Your account has been sucessfully activated</h3>';
                    echo '<div class="buttn-container">';
                    echo '<a href='.get_site_url().'/wp-login.php/><button>Login</button></a>';
                    echo '</div>';
                } else {
                    echo '<h3 class="add-border-bottom">Invalid account</h3>';
                } 
            } else {
                echo '<h3 class="add-border-bottom">No account found</h3>';
            }
        ?>
    </div>
</div>
