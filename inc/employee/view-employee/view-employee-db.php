<?php
    class View_Employee_Db{
        
        private $_wpdb = null;
        
        public function __construct(
            $wpdb
        ){
            $this->_wpdb = $wpdb;
        }

        public function get_employee_by_wpuserid($wpuserid){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '".$wpuserid."'");
            return $result[0];
        }

        public function get_employee_preferred_countries_by_wpuserid($wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries WHERE wp_user_id = '".$wpuserid."'");
        }

        public function get_block_user($wpuserid_one, $wpuserid_two){
            $query = "SELECT * FROM aupair_block_message_from WHERE user_wp_user_id = '".$wpuserid_one."' AND block_msg_from_wp_user_id ='".$wpuserid_two."'";
            return $this->_wpdb->get_results($query);
        }

        public function get_chats($wpuserid_one, $wpuserid_two){
            $query = "SELECT * FROM aupair_messages WHERE from_wp_user_id = '".$wpuserid_one."' AND to_wp_user_id ='".$wpuserid_two."'";
            return $this->_wpdb->get_results($query);
        }
    }

?>