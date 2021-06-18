<?php
    class MessagesDb{
        private $_wpdb = null;
        public function __construct($wpdb){
              $this->_wpdb = $wpdb;
        }

        public function get_conversation_with(){
            $wp_user_id = get_current_user_id();
            return $this->_wpdb->get_results("SELECT * FROM aupair_conversation_with WHERE from_wp_user_id = '$wp_user_id' OR to_wp_user_id = '$wp_user_id' ORDER BY id DESC");    
        }

        public function get_conversation_with_by_id($id){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_conversation_with WHERE id = '$id'");
            return $result[0];  
        }
        
        public function update_conversation_with_sender_delete_to_one($id){
            $this->_wpdb->update('aupair_conversation_with', array('sender_delete' => 1), array('id' => $id));
        }

        public function update_conversation_with_receiver_delete_to_one($id){
            $this->_wpdb->update('aupair_conversation_with', array('receiver_delete' => 1), array('id' => $id));
        }

        public function delete_conversation_with_by_id($id){
            $this->_wpdb->delete("aupair_conversation_with", array('id' => $id));
        }

        public function delete_messages_between_sender_receiver($sender, $receiver){
            $query = "DELETE FROM aupair_messages WHERE (from_wp_user_id = '$sender' AND to_wp_user_id = '$receiver') OR (from_wp_user_id = '$receiver' AND to_wp_user_id = '$sender');";
            $this->_wpdb->query($query);
        }

        
        public function get_employee($wp_user_id){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '$wp_user_id'");
            return $result[0];
        }

        public function get_host_family($wp_user_id){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family WHERE wp_user_id = '$wp_user_id'");
            return $result[0];
        }

        public function get_last_send_msg_in_convo($current_userid, $recipient_wpuserid){
            $query      = "SELECT * FROM aupair_messages WHERE (from_wp_user_id = '$recipient_wpuserid' AND to_wp_user_id = '$current_userid') OR (from_wp_user_id = '$current_userid' AND to_wp_user_id = '$recipient_wpuserid')";
            $result     = $this->_wpdb->get_results($query);
            $last_index = count($result) - 1;
            return $result[$last_index];
        }

        public function get_the_unopened_msgs_in_convo($current_userid, $recipient_wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_messages WHERE from_wp_user_id = '$recipient_wpuserid' AND to_wp_user_id = '$current_userid' AND opened = 0");
        }
    }

?>