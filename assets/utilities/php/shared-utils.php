<?php
    class Shared_Utils{
        public function __construct(){
           
        }
        #filter - used in find employe, etc.
        public function filter_selected_array_cb($arr_check_box, $item){
            $checked  = null;
            if(isset($_POST[$arr_check_box]) && in_array($item, $_POST[$arr_check_box])){
                $checked = 'checked';
            }
            return $checked;
        }
        public function filter_selected_select_item($select_name, $value){
            $selected = null;
            if( $value === $_POST[$select_name]){
                $selected = 'selected';
            }
            return $selected;
        }
        public function filter_input_value($input_name){
            $input_val = null;
            if(isset($_POST[$input_name])){
                $input_val = $_POST[$input_name];
            }
            return $input_val;
        }
       
    }

?>