<?php
     function get_login_user_data($request){
        global $wpdb;
        $tableName = $request['tableName'];
        $result = $wpdb->get_results("SELECT * FROM $tableName WHERE wp_user_id = '".get_current_user_id()."'");
        if( is_wp_error($result) ) {
            wp_send_json_error($result->get_error_message());
        } else {
            wp_send_json_success($result);
        }
        die();
    }

    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/getLoginUserData', [
            'methods'  => 'GET',
            'callback' => 'get_login_user_data'
        ]);
    });
?>