<?php
    class MessageHostFamilyUtils {
        private $_db = null;
        public function __construct(
            $db
        ){
            $this->_db = $db;
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
                    $mark_up .=  "<div class='msg-parent-container receiver'>
                                    <div class='msg-container'>
                                        <p>$message->message</p>
                                        <p id='created-at'>$message->created_at</p>
                                    </div>
                                </div>";
                }
                $i++;
            }
            return $mark_up;
        }
    }
?>