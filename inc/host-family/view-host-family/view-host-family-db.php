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
    }

?>