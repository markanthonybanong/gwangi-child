<?php
    class Common_Utilities{
        
        public function insert_into_wp_users($email, $password){
            return wp_insert_user( array(
                'user_login'   => $email,
                'user_pass'    => $password,
                'user_email'   => $email,
                'role'         => 'subscriber'
              ));
             
        }
    }

?>