<?php
    class MessageHostFamilyUtils {
        private $_db               = null;
        private $_membership_level = null;
        public function __construct(
            $db,
            $membership_level
        ){
            $this->_db               = $db;
            $this->_membership_level = $membership_level;
        }
        public function display_previous_conversation(){
            $messages = $this->_db->get_previous_conversation();
            $i = 0;
            $mark_up  = null;
            while($i < count($messages)){
                $message = $messages[$i];
                if($message->from_wp_user_id == get_current_user_id()){
                    $mark_up .= "<div class='msg-parent-container sender'>
                                    <div class='msg-container'>
                                        <p>$message->message</p>
                                        <p id='created-at'>$message->created_at</p>
                                    </div>
                                </div>";
                } else {
                    if($message->opened != 1){
                        $this->_db->update_opened_col_for_msg_to_be_received($message->id);
                    } 
                    //For Host Family
                    if(
                        $message->message_type === 'Premium' &&
                        $message->sender_membership === 'Free' &&
                        $this->_membership_level === false
                    ){
                        $membership_link   = null;
                        $sender_type       = null;
                        if(get_user_meta(get_current_user_id(), 'user_type', true) === 'host-family'){
                            $membership_link = site_url('/membership-host-family');
                            $sender_type       = 'Employee';
                        } else {
                            $membership_link = site_url('/membership-employee');
                            $sender_type       = 'Host Family';
                        }
                        $mark_up .=  "<div class='msg-parent-container receiver'>
                                       <div class='msg-container'>
                                           <p>A $sender_type have sent you a message, View this message by
                                           becoming a <a id='premium-member' href='$membership_link'>Premium Member</a></p>
                                           <p id='created-at'>$message->created_at</p>
                                       </div>
                                    </div>";
                    } else {
                        $mark_up .=  "<div class='msg-parent-container receiver'>
                                        <div class='msg-container'>
                                            <p>$message->message</p>
                                            <p id='created-at'>$message->created_at</p>
                                        </div>
                                    </div>";
                    }
             
                }
                $i++;
            }
            return $mark_up;
        }
        public function have_already_sent_msg(){
             $have_send = false;
             if(count($this->_db->get_send_msgs())){
                 $have_send = true;
             }
             return $have_send;
        }
      
    }
?>