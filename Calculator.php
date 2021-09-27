<?php
    class Calculator{
        private $first_num;
        private $second_num;
        private $operator;

        function setValues($first_num, $second_num, $operator){
            $this->first_num = $first_num;
            $this->second_num = $second_num;
            $this->operator = $operator;
        }

        function getCalculation(){
            if($this->operator === "addition"){
                return $this->first_num + $this->second_num;
            }else if($this->operator === "subtraction"){
                return $this->first_num - $this->second_num;
            }else if($this->operator === "multiplication"){
                return $this->first_num * $this->second_num;
            }else if($this->operator === "division"){
                return $this->first_num / $this->second_num;
            }
        }
    }
?>