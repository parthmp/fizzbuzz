<?php

    namespace wbs\solution\yours;

    class Solution{

        public function generateOutPut($mode = 'default'){

            $result = '';

            for($i=1; $i<=100; $i++){

                $check_fizz = $i%3;
                $check_buzz = $i%5;

                $flag = 0;
                
                if($check_fizz == 0){
                    $flag = 1;
                    $result .= "Fizz";
                }if($check_buzz == 0){
                    $flag = 1;
                    $result .= "Buzz";
                }
                
                if($flag == 0){
                    $result .= $i;
                }

                $result .= "<br />\r\n";
                
            }

            return $result;

        }

        
}