<?php
    function set_user_metadata( $user_id ) {
        // get user data
        $user_info = get_userdata($user_id);
        // create md5 code to verify later
        $code = md5(rand(0,1000));
        // make it into a code to send it to user via email
        $string = array('id'=>$user_id, 'code'=>$code);
        // create the activation code and activation status
        update_user_meta($user_id, 'account_activated', 0);
        update_user_meta($user_id, 'activation_code', $code);
        // create the url
        $url = get_site_url(). '/account-verification/?act=' .base64_encode( serialize($string));
        // basically we will edit here to make this nicer
        $html = 'Please click the following links <br/><br/> <a href="'.$url.'">'.$url.'</a>';
        // send an email out to user
        wp_mail( $user_info->user_email, __('Active Aupair Email Verification','text-domain') , $html);
    }
    add_action( 'user_register', 'set_user_metadata', 10, 2 );
?>