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
        public function display_all_msgs(){
            $mark_up       = null;
            $conversations = $this->_db->get_conversation_with();
            $i = 0;
            while($i < count($conversations)){
                $conversation  = $conversations[$i];
                $unopened_msgs = $this->_db->get_the_unopened_msgs_in_convo(get_current_user_id(), $this->get_recipient_wpuserid($conversation)); 
                $mark_up      .= '<a href="'.$this->get_msg_link($conversation).'">
                                    <div class="msg-row">
                                        <div class="column-one">
                                            <input type="checkbox" name ="conversation-with-ids[]" value="'.$conversation->id.'">
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
    }
?>