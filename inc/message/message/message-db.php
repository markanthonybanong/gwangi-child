<?php
    class MessageHostFamilyDb{
        private $_wpdb = null;
        public function __construct($wpdb){
            $this->_wpdb = $wpdb;
        }
        public function get_host_family(){
            $host_family_id = $_GET['to-send-msg-id'];
            $result         = $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family WHERE wp_user_id  = '$host_family_id'");
            return $result[0];
        }
        public function get_employee(){
            $employee_id = $_GET['to-send-msg-id'];
            $result      = $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id  = '$employee_id'");
            return $result[0];
        }
        public function get_previous_conversation(){
             $host_family_id = $_GET['to-send-msg-id'];
             $query          = "SELECT * FROM aupair_messages WHERE (from_wp_user_id  = '".get_current_user_id()."' AND to_wp_user_id = '".$host_family_id."') OR (to_wp_user_id = '".get_current_user_id()."' AND from_wp_user_id = '".$host_family_id."')";
             return $this->_wpdb->get_results($query);
        }
        public function update_opened_col_for_msg_to_be_received($id){
             $this->_wpdb->update('aupair_messages', array('opened' => 1), array('id' => $id));
        }
    }
?>