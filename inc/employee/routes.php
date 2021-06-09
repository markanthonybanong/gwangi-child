<?php 
    function upload_employee_photo($request){
        $employee_photo_path = $_SERVER['DOCUMENT_ROOT'].'/activeaupair/wp-content/themes/gwangi-child/users-photo/employee/';
        //server
        // $employee_photo_path = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/gwangi-child/users-photo/employee/';
        $previouslyUploadedPhoto = glob($employee_photo_path.get_current_user_id().'*');
        if(!empty($previouslyUploadedPhoto)){
            foreach($previouslyUploadedPhoto as $photo){
                unlink($photo);
            }
        }
        $test   = explode('.', $_FILES["employeePhoto"]["name"]);
        $ext    = end($test);
        $name   = get_current_user_id().'-'.$_POST["randomFiveDigits"].'.'.$ext;
        $path   = $employee_photo_path.$name;
        $upload = move_uploaded_file($_FILES["employeePhoto"]["tmp_name"], $path);
        if($upload){
            wp_send_json_success($name);
        }
        die();
    }
    function get_directory(){
        $document_cwd  = getcwd();
        $document_root = $_SERVER['DOCUMENT_ROOT']; 
        wp_send_json_success('CWD '.$document_cwd. ' DOC_ROOT '.$document_root);
        die();
    }
    function update_employee_photo($request){
        global $wpdb;
        $data_with_photo = array(
                'photo'             => $request['photo'],
                'photo_privacy'     => $request['photoPrivacy'],
                'photo_description' => $request['photoDescription']
        );
        $data_null_photo = array(
            'photo_privacy'     => $request['photoPrivacy'],
            'photo_description' => $request['photoDescription']
        );

        $data   = ($request['photo'] != "null") ? $data_with_photo : $data_null_photo;
        $where  = array('wp_user_id' => get_current_user_id());
        $result = $wpdb->update("aupair_registered_employee", $data, $where);
        if($result){
            wp_send_json_success($result);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }

    function get_block_user($request){
        global $wpdb;
        $wp_user_one = $request['wpUserIdOne'];
        $query  = "SELECT * FROM aupair_block_message_from WHERE user_wp_user_id = '".get_current_user_id()."' AND block_msg_from_wp_user_id ='".$wp_user_one."'";
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
    
    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/uploadEmployeePhoto', [
            'methods'  => 'POST',
            'callback' => 'upload_employee_photo'
        ]);
        register_rest_route( 'activeAupair/v1', '/updateEmployeePhoto', [
            'methods'  => 'POST',
            'callback' => 'update_employee_photo'
        ]);
        register_rest_route( 'activeAupair/v1', '/getDirectory', [
            'methods'  => 'GET',
            'callback' => 'get_directory'
        ]);
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
    });

?>