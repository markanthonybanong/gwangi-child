<?php
    class Shared_Utils{
        public function selected_array_cb($arr_check_box, $item){
            $array_cb = array();
            $checked  = null;
            if(isset($_POST[$arr_check_box])){
                $array_cb = $_POST[$arr_check_box];
            }
            if(in_array($item, $array_cb)){
                $checked = 'checked';
            }
            return $checked;
        }
        public function selected_select_item($select_name, $value){
            $selected = null;
            if( $value === $_POST[$select_name]){
                $selected = 'selected';
            }
            return $selected;
        }
        public function input_value($input_name){
            $input_val = null;
            if(isset($_POST[$input_name])){
                $input_val = $_POST[$input_name];
            }
            return $input_val;
        }
    }

?>