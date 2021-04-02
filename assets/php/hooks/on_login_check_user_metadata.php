<?php
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