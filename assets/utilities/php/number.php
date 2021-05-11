<?php
   if(!class_exists('Number')){
      class Number{
         public function get_age($birth_year){
            return date("Y") - $birth_year;
         }
      }
   }

?>