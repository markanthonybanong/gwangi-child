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


    }

?>