<?php 
/**
 * Active Aupair background hooks, run when certain action is perform.
 */

/**
 * On user register, insert user metadata and send email confirmation.
 */
function on_user_register( $user_id ) {
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
add_action( 'user_register', 'on_user_register', 10, 2 );

/**
 * On login, check user metadata if it is updated.
*/
function custom_authenticate_user($userdata) {
    $isActivated = get_user_meta($userdata->ID, 'account_activated', true);
    if (!$isActivated) {
            $userdata = new WP_Error(
                                'inkfool_confirmation_error',
                                __( '<strong>ERROR:</strong> Your account has not been activiated.', 'inkfool' )
                            );
    }
    return $userdata;
}
add_filter('wp_authenticate_user', 'custom_authenticate_user',11,1);

?>