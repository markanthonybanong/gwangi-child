<?php
    function get_block_user($request){
        global $wpdb;
        $wp_user_id_one = $request['wpUserIdOne'];
        $query  = "SELECT * FROM aupair_block_message_from WHERE user_wp_user_id = '".get_current_user_id()."' AND block_msg_from_wp_user_id ='".$wp_user_id_one."'";
        $result =  $wpdb->get_results($query);
        if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }

    function delete_block_user($request){
        global $wpdb;
        $data = array(
            'user_wp_user_id'           => get_current_user_id(),
            'block_msg_from_wp_user_id' => $request['wpUserIdOne']
         );
        $result = $wpdb->delete('aupair_block_message_from', $data);
        if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    
    function block_user($request){
        global $wpdb;
        $data = array(
            'user_wp_user_id'           => get_current_user_id(),
            'block_msg_from_wp_user_id' => $request['wpUserIdOne']
         );
         $result = $wpdb->insert('aupair_block_message_from', $data);
         if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
         die();
    }
    function get_conversation_with($request){
         global $wpdb;
         $wp_user_id_one = $request['wpUserIdOne'];
         $query  = "SELECT * FROM aupair_conversation_with WHERE (from_wp_user_id = '".get_current_user_id()."' AND to_wp_user_id ='".$wp_user_id_one."') OR (to_wp_user_id = '".get_current_user_id()."' AND  from_wp_user_id='".$wp_user_id_one."')";
         $result =  $wpdb->get_results($query);
         if($result){
             wp_send_json_success($result);
         } else {
             wp_send_json_error($wpdb->last_query);
         }
         die();
    }
    function add_conversation_with($request){
        global $wpdb;
        $data = array(
                    'from_wp_user_id'    => get_current_user_id(),
                    'to_wp_user_id'      => $request['wpUserIdOne'],
                );
        $result = $wpdb->insert('aupair_conversation_with', $data);
        if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    function add_message_entry($request){
        global $wpdb;
        $wp_user_id_one = $request['wpUserIdOne'];
        $message        = $request['message'];
      
        $data           = array(
                               'from_wp_user_id' => get_current_user_id(),
                               'to_wp_user_id'   => $wp_user_id_one,
                               'message'         => $message,
                          );

        $result = $wpdb->insert('aupair_messages', $data);
        if($result){
            $mark_up = "<div class='msg-parent-container sender'>
                            <div class='msg-container'>
                                <p>$message</p>
                            </div>
                       </div>";
            $data = array(
                'mark_up'          => $mark_up,
                'last_inserted_id' => $wpdb->insert_id
            );
            wp_send_json_success($data);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    function insert_msg_usermeta($request){
        global $wpdb;
        $data = array(
            'from_wp_user_id' => get_current_user_id(),
            'to_wp_user_id'   => $request['toWpUserId'],
            'room_id'         => $request['roomId']
        );
        $wpdb->insert('aupair_message_usermeta', $data);
        die();
    }
    function get_receiver_msg_usermeta($request){
        global $wpdb;
        $receiver_wpuserid = $request['receiverWpUserId'];
        $current_userid    = get_current_user_id();
        $query             = "SELECT * FROM aupair_message_usermeta WHERE from_wp_user_id = '$receiver_wpuserid' AND to_wp_user_id = '$current_userid' ORDER BY id ASC";
        $result            = $wpdb->get_results($query);
        if($result){
            $last_index = count($result) - 1;
            $data = $result[$last_index]; //get last index to get latest room id, user might refresh page and create another msg user meta
            wp_send_json_success($data);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
    function update_opened_status($request){
        global $wpdb;
        $wpdb->update('aupair_messages', array('opened' => 1), array('id' => $request['id']));
        die();
    }
    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/getBlockUser', [
            'methods'  => 'GET',
            'callback' => 'get_block_user'
        ]);
        register_rest_route( 'activeAupair/v1', '/deleteBlockUser', [
            'methods'  => 'POST',
            'callback' => 'delete_block_user'
        ]);
        register_rest_route( 'activeAupair/v1', '/blockUser', [
            'methods'  => 'POST',
            'callback' => 'block_user'
        ]);
        register_rest_route( 'activeAupair/v1', '/getConversationWith', [
            'methods'  => 'GET',
            'callback' => 'get_conversation_with'
        ]);
        register_rest_route( 'activeAupair/v1', '/addConversationWith', [
            'methods'  => 'POST',
            'callback' => 'add_conversation_with'
        ]);
        register_rest_route( 'activeAupair/v1', '/addMessageEntry', [
            'methods'  => 'POST',
            'callback' => 'add_message_entry'
        ]);
        register_rest_route( 'activeAupair/v1', '/insertMsgUserMeta', [
            'methods'  => 'POST',
            'callback' => 'insert_msg_usermeta'
        ]);
        register_rest_route( 'activeAupair/v1', '/getReceiverMsgUserMeta', [
            'methods'  => 'GET',
            'callback' => 'get_receiver_msg_usermeta'
        ]);
        register_rest_route( 'activeAupair/v1', '/updateOpenedStatus', [
            'methods'  => 'POST',
            'callback' => 'update_opened_status'
        ]);
    });
?>