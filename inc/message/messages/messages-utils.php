<?php
    class MessagesUtils{
        private $_db = null;
        public function __construct(
            $db
        ){
            $this->_db = $db;
        }
        private function get_recipient_wpuserid($conversation){
            $wpuserid = null;
            if($conversation->from_wp_user_id == get_current_user_id()){
                $wpuserid = $conversation->to_wp_user_id;
            } else {
                $wpuserid = $conversation->from_wp_user_id;
            }
            return $wpuserid;
        }
        private function get_recipient_photo($conversation){
            $img                = null;
            $recipient_wpuserid = $this->get_recipient_wpuserid($conversation); 
            if(get_user_meta(get_current_user_id(), 'user_type', true) === 'employee'){
                $host_family = $this->_db->get_host_family($recipient_wpuserid);
                if($host_family->photo != ""){
                    $imgSrc = get_stylesheet_directory_uri().'/users-photo/host-family/'.$host_family->photo;
                    $img    = "<img src='".$imgSrc."' alt='$host_family->firstname-$host_family->lastname' id='user-photo'>"; 
                } else {
                    $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                    $img    = "<img src='".$imgSrc."' alt='$host_family->firstname $host_family->lastname' id='user-photo'>";
                }
             } else {
                $employee = $this->_db->get_employee($recipient_wpuserid);
                if($employee->photo != ""){
                    $imgSrc = get_stylesheet_directory_uri().'/users-photo/employee/'.$employee->photo;
                    $img    =  "<img src='".$imgSrc."' alt='$employee->firstname-$employee->lastname' id='user-photo'>";
                } else {
                    $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                    $img    = "<img src='".$imgSrc."' alt='$employee->firstname $employee->lastname' id='user-photo'>";
                }
             }
          
             return $img;
        }
        private function get_recipient_name($conversation){
             $name               = null;
             $recipient_wpuserid = $this->get_recipient_wpuserid($conversation);
             if(get_user_meta(get_current_user_id(), 'user_type', true) === 'employee'){
                $host_family = $this->_db->get_host_family($recipient_wpuserid);
                $name = "$host_family->firstname $host_family->lastname";
             } else {
                $employee = $this->_db->get_employee($recipient_wpuserid);
                $name = "$employee->firstname $employee->lastname";
             }
             return $name;
        }
        private function get_last_send_msg_in_convo($conversation){
            $message = $this->_db->get_last_send_msg_in_convo(get_current_user_id(), $this->get_recipient_wpuserid($conversation));
            $msg     = null;
            //Success returns the membership level object. Failure returns false
            $membership_level = pmpro_getMembershipLevelForUser(get_current_user_id());
            if(
                $message->message_type === 'Premium' &&
                $message->sender_membership === 'Free' &&
                $membership_level === false
              ){
                $msg = '...';
            } else {
                if(strlen($message->message) > 86) {
                    $letters = str_split($message->message);
                    $i = 0;
                    while($i < 86){
                        $letter = $letters[$i];
                        $msg   .= $letter;
                        $i++;
                    }
                    $msg .= '...';
                } else {
                    $msg = $message->message;
                }
            }
            return $msg;
        }
        private function get_msg_link($conversation){
             $data = null;
             if(get_user_meta(get_current_user_id(), 'user_type', true) === 'employee'){
                 $data = array(
                    'to-send-msg-id' => $this->get_recipient_wpuserid($conversation),
                    'user-type'      => 'host-family'
                 );
             } else {
                $data = array(
                    'to-send-msg-id' => $this->get_recipient_wpuserid($conversation),
                    'user-type'      => 'employee'
                );
             }
             return add_query_arg($data, site_url('/message'));
        }
        private function get_not_deleted_conversations(){
            $to_display_conversations = array();
            $i = 0;
            $conversations = $this->_db->get_conversation_with();
            while($i < count($conversations)){
                $conversation = $conversations[$i];
                if($conversation->from_wp_user_id == get_current_user_id() && $conversation->sender_delete == 0){
                    array_push($to_display_conversations, $conversation);
                }else if($conversation->to_wp_user_id == get_current_user_id() && $conversation->receiver_delete == 0){
                    array_push($to_display_conversations, $conversation);
                }
                $i++;
            }
            return $to_display_conversations;
        }
        public function display_all_msgs(){
            $mark_up       = null;
            $conversations = $this->get_not_deleted_conversations();
            $i = 0;
            while($i < count($conversations)){
                $conversation  = $conversations[$i];
                $unopened_msgs = $this->_db->get_the_unopened_msgs_in_convo(get_current_user_id(), $this->get_recipient_wpuserid($conversation)); 
                $mark_up      .= '<a href="'.$this->get_msg_link($conversation).'">
                                    <div class="msg-row">
                                        <div class="column-one">
                                            <input type="checkbox" name="conversation-with-ids[]" value="'.$conversation->id.'">
                                            <div class="photo-container">
                                                '.$this->get_recipient_photo($conversation).'
                                                <span id="unopened-msgs">'.count($unopened_msgs).'</span>
                                            </div>
                                        </div>
                                        <div class="column-two">
                                            <h6>'.$this->get_recipient_name($conversation).'</h6>
                                            <p>'.$this->get_last_send_msg_in_convo($conversation).'</p>
                                        </div>
                                    </div>
                                 </a>';
                $i++;
            }
            return $mark_up;
        }

        public function delete_msgs(){
             if(count($_POST['conversation-with-ids'])){
                 $i = 0;
                 while($i < count($_POST['conversation-with-ids'])){
                     $id           = $_POST['conversation-with-ids'][$i];
                     $conversation = $this->_db->get_conversation_with_by_id($id);
                     //for sender view
                     if($conversation->from_wp_user_id == get_current_user_id() && $conversation->receiver_delete == 1){
                        $this->_db->delete_conversation_with_by_id($conversation->id); 
                        $this->_db->delete_messages_between_sender_receiver($conversation->from_wp_user_id, $conversation->to_wp_user_id);
                     } else if($conversation->to_wp_user_id == get_current_user_id() && $conversation->sender_delete == 1){ //for receiver view
                        $this->_db->delete_conversation_with_by_id($conversation->id); 
                        $this->_db->delete_messages_between_sender_receiver($conversation->from_wp_user_id, $conversation->to_wp_user_id); 
                     } else if($conversation->from_wp_user_id == get_current_user_id()){
                        $this->_db->update_conversation_with_sender_delete_to_one($conversation->id);
                     } else if($conversation->to_wp_user_id == get_current_user_id()){
                        $this->_db->update_conversation_with_receiver_delete_to_one($conversation->id);
                     }
                     $i++;
                 }
             }
        }
    }
?>