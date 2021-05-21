<?php
    class String_Utils{

        public function convert_array_items_to_single_string($arr){
            $concatenated_string = null;
            $i                   = 0;
            while($i < count($arr)){
                //next value is last indexx
                if($i+1 === count($arr)-1){
                    $concatenated_string .= "$arr[$i] & ";
                } else if($i+1 === count($arr)) {//last index
                    $concatenated_string .= $arr[$i];
                } else {
                    $concatenated_string .= "$arr[$i], ";
                }
                $i++;
            }
            return $concatenated_string;
        }
    }
?>