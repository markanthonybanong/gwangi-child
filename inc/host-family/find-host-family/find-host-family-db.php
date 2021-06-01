<?php
    class Find_Host_Family_Db{
        
        private $_wpdb = null;
        
        public function __construct(
            $wpdb
        ){
            $this->_wpdb = $wpdb;
        }

        public function get_preferred_countries_by_wpuserid($wpuserid){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries WHERE wp_user_id = '$wpuserid'");
        }
        public function get_preferred_countries_by_country($country){
            return $this->_wpdb->get_results("SELECT * FROM aupair_registered_employee_prefferred_countries where country = '$country'");
        }
    }
?>