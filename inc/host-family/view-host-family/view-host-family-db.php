<?php
    class View_Host_Family_Db{
        
        private $_wpdb = null;
        
        public function __construct(
            $wpdb
        ){
            $this->_wpdb = $wpdb;
        }

        public function get_host_family_by_wpuserid($wpuserid){
            $result = $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family WHERE wp_user_id = '".$wpuserid."'");
            return $result[0];
        }

        public function get_host_family_preferred_nationalities_by_wpuserid($wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_preferred_nationalities WHERE wp_user_id = '".$wpuserid."'");
        }

        public function get_host_family_applicants_living_in_by_wpuserid($wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_applicants_living_in WHERE wp_user_id = '".$wpuserid."'");
        }

        public function get_host_family_spoken_home_languages_at_home_by_wpuserid($wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_host_family_languages_spoken_at_home WHERE wp_user_id = '".$wpuserid."'");
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