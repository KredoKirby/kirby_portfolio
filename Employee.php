<?php

    class Employee{
        private $civil_status;
        private $position;
        private $employment_status;
        private $hours_worked;

        public function setValues($civil_status, $position, $employment_status, $hours_worked){
            $this->civil_status = $civil_status;
            $this->position = $position;
            $this->employment_status = $employment_status;
            $this->hours_worked = $hours_worked;
        }

        public function computeRegularPay(){
            if($this->hours_worked > 40){
                if($this->position == "staff"){
                    if($this->employment_status == "contractual"){
                        return (300/8) * 40;
                    }elseif($this->employment_status == "probationary"){
                        return (350/8) * 40;
                    }elseif($this->employment_status == "regular"){
                        return (400/8) * 40;
                    }
                }elseif($this->position == "admin"){
                    if($this->employment_status == "contractual"){
                        return (350/8) * 40;
                    }elseif($this->employment_status == "probationary"){
                        return (400/8) * 40;
                    }elseif($this->employment_status == "regular"){
                        return (500/8) * 40;
                    }
                }
            }else{
                if($this->position == "staff"){
                    if($this->employment_status == "contractual"){
                        return (300/8) * $this->hours_worked;
                    }elseif($this->employment_status == "probationary"){
                        return (350/8) * $this->hours_worked;
                    }elseif($this->employment_status == "regular"){
                        return (400/8) * $this->hours_worked;
                    }
                }elseif($this->position == "admin"){
                    if($this->employment_status == "contractual"){
                        return (350/8) * $this->hours_worked;
                    }elseif($this->employment_status == "probationary"){
                        return (400/8) * $this->hours_worked;
                    }elseif($this->employment_status == "regular"){
                        return (500/8) * $this->hours_worked;
                    }
                }
            }
        }

        public function computeOvertimePay(){
            if($this->hours_worked > 40){
                $overtime = $this->hours_worked - 40;
            }else{
                $overtime = 0;
            }
            if($this->position == "staff"){
                if($this->employment_status == "contractual"){
                    return $overtime * 10;
                }elseif($this->employment_status == "probationary"){
                    return $overtime * 25;
                }elseif($this->employment_status == "regular"){
                    return $overtime * 30;
                }
            }elseif($this->position == "admin"){
                if($this->employment_status == "contractual"){
                    return $overtime * 15;
                }elseif($this->employment_status == "probationary"){
                    return $overtime * 30;
                }elseif($this->employment_status == "regular"){
                    return $overtime * 40;
                }
            }
        }

        public function getHealthCare(){
            if($this->civil_status == "single"){
                return 200;
            }elseif($this->civil_status == "married"){
                return 75;
            }
        }

        public function computeGrossIncome(){
            return $this->computeRegularPay() + $this->computeOvertimePay();
        }

        public function computeTax(){
            if($this->civil_status == "single"){
                if($this->computeGrossIncome() <= 1000){
                    return 0;
                }else{
                    return $this->computeGrossIncome() * .05;
                }
            }elseif($this->civil_status == "married"){
                if($this->computeGrossIncome() <= 1500){
                    return 0;
                }else{
                    return $this->computeGrossIncome() * .03;
                }
            }
        }

        public function computeNetIncome(){
            return $this->computeGrossIncome() - ($this->getHealthCare() + $this->computeTax());
        }

    }

?>