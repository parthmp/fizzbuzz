<?php

    namespace wbs\solution\yours;

    class Solution{

        public function generateOutPut($mode = 0){

            $result = '';
            $counter = 100;

            if($mode == 7){
                $counter = 110;
            }

            for($i=1; $i <= $counter; $i++){

                $check_fizz = $i%3;
                $check_buzz = $i%5;

                $check_seven = $i%7;

                $flag = 0;

                $hold_string = '';
                
                if($check_fizz == 0){
                    
                    $flag = 1;
                    $hold_string = "Fizz";
                    
                }

                if($check_buzz == 0){

                    $flag = 1;
                    $hold_string .= "Buzz";
                    
                }
                
                if($mode == 7 && $check_seven == 0){

                    $flag = 1;
                    $hold_string .= 'Seven';

                }

                if($flag == 0){
                    $hold_string .= $i;
                }

                $result .= $hold_string."<br />\r\n";
                
            }

            return $result;

        }

        
}