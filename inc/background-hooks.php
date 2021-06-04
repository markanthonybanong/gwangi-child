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
    // create the activation code,activation status,
    update_user_meta($user_id, 'account_activated', 0);
    update_user_meta($user_id, 'year_created', date("Y"));
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
    $is_activated = get_user_meta($userdata->ID, 'account_activated', true);
    if (!$is_activated) {
            $userdata = new WP_Error(
                                'inkfool_confirmation_error',
                                __( '<strong>ERROR:</strong> Your account has not been activiated.', 'inkfool' )
                            );
    }
    return $userdata;
}
add_filter('wp_authenticate_user', 'custom_authenticate_user',11,1);

/**
 * Display aupair-login-user-menu depending on user type
 */
function display_user_menu($items, $args){
    $employee_url_data    = add_query_arg('employee-id', get_current_user_id(), site_url('/view-employee-profile'));
    $employee             = '<li>
                                <a href="'.site_url('/message-employee').'">
                                    <span id="envelope-icon">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>Profile<span class="arrow down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="'.site_url('/update-employee-profile').'">Update Profile</a></li>
                                    <li><a href="'.$employee_url_data.'">View Profile</a></li>
                                    <li><a href="'.site_url('/wp-login.php?action=logout"').'">Log Out?</a></li>
                                </ul>
                            </li>';
    $host_family_url_data = add_query_arg('host-family-id', get_current_user_id(), site_url('/view-host-family-profile'));
    $host_family          = '<li>
                                <a>Profile<span class="arrow down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="'.site_url('/update-host-family-profile').'">Update Profile</a></li>
                                    <li><a href="'.$host_family_url_data.'">View Profile</a></li>
                                    <li><a href="'.site_url('/wp-login.php?action=logout"').'">Log Out?</a></li>
                                </ul>
                            </li>';
    $user_type            = get_user_meta(get_current_user_id(), 'user_type', true);
    if($args->theme_location == 'aupair-login-user-menu'){
        if($user_type === "employee"){
            $items .= $employee;
        } else if($user_type === "host-family"){
            $items .= $host_family;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'display_user_menu', 10, 2);

function aupair_login_user_menu(){
    register_nav_menu('aupair-login-user-menu', __('Aupair Login User Menu'));
}
add_action('init', 'aupair_login_user_menu');


?>