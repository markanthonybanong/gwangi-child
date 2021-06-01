<?php
    function upload_host_family_photo($request){
        $host_family_photo_path = $_SERVER['DOCUMENT_ROOT'].'/activeaupair/wp-content/themes/gwangi-child/users-photo/host-family/';
        //server
        // $host_family_photo_path = $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/gwangi-child/users-photo/host-family/';
        $previouslyUploadedPhoto = glob($host_family_photo_path.get_current_user_id().'*');
        if(!empty($previouslyUploadedPhoto)){
            foreach($previouslyUploadedPhoto as $photo){
                unlink($photo);
            }
        }
        $test   = explode('.', $_FILES["hostFamilyPhoto"]["name"]);
        $ext    = end($test);
        $name   = get_current_user_id().'-'.$_POST["randomFiveDigits"].'.'.$ext;
        $path   = $host_family_photo_path.$name;
        $upload = move_uploaded_file($_FILES["hostFamilyPhoto"]["tmp_name"], $path);
        if($upload){
            wp_send_json_success($name);
        }
        die();
    }
   
    function update_host_family_photo($request){
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
        $result = $wpdb->update("aupair_registered_host_family", $data, $where);
        if($result){
            wp_send_json_success($request);
        } else {
            wp_send_json_error($wpdb->last_query);
        }
        die();
    }
 
    
    add_action('rest_api_init', function(){
        register_rest_route( 'activeAupair/v1', '/uploadHostFamilyPhoto', [
            'methods'  => 'POST',
            'callback' => 'upload_host_family_photo'
        ]);
        register_rest_route( 'activeAupair/v1', '/updateHostFamilyPhoto', [
            'methods'  => 'POST',
            'callback' => 'update_host_family_photo'
        ]);
    });
?>