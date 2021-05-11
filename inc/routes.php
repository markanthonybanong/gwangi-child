<?php
    function insert_into_wp_users($request){
        $user_id = wp_insert_user( array(
            'user_email'   => $request['email'],
            'user_pass'    => $request['password'],
            'user_login'   => $request['email'],
            'role'         => 'subscriber'
          ));
          if( is_wp_error( $user_id  ) ) {
             wp_send_json_error($user_id->get_error_message());
         } else {
             wp_send_json_success($user_id);
         }
        die();
    }

    function get_user_data(){
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '".get_current_user_id()."'");
        if( is_wp_error($result) ) {
            wp_send_json_error($result->get_error_message());
        } else {
            wp_send_json_success($result);
        }
        die();
    }

    function get_user_preferred_countries_data(){
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries WHERE wp_user_id = '".get_current_user_id()."'");
        if( is_wp_error($result) ) {
            wp_send_json_error($result->get_error_message());
        } else {
            wp_send_json_success($result);
        }
        die();
    }

    function get_wp_photo_path(){
        wp_send_json_success(get_stylesheet_directory_uri().'/users-photo');
        die();
    }

   

    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/insertWpUser', [
            'methods'  => 'POST',
            'callback' => 'insert_into_wp_users'
        ]);
        register_rest_route( 'activeAupair/v1', '/getUserData', [
            'methods'  => 'GET',
            'callback' => 'get_user_data'
        ]);
        register_rest_route( 'activeAupair/v1', '/getUserPreferredCountriesData', [
            'methods'  => 'GET',
            'callback' => 'get_user_preferred_countries_data'
        ]);
        register_rest_route( 'activeAupair/v1', '/getWPPhotoPath', [
            'methods'  => 'GET',
            'callback' => 'get_wp_photo_path'
        ]);
  
    });
?>