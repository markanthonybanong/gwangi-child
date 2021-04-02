<?php
    function insert_into_wp_users($request){
        $user_id = wp_insert_user( array(
            'user_email' => $request['email'],
            'user_pass'  => $request['password'],
            'user_login' => $request['userLogin'],
            'role'       => 'subscriber'
          ));
          if( is_wp_error( $user_id  ) ) {
             wp_send_json_error($user_id->get_error_message());
         } else {
             wp_send_json_success($user_id);
         }
        die();
    }

    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/insertWpUser', [
            'methods'  => 'POST',
            'callback' => 'insert_into_wp_users'
        ]);
    });
?>