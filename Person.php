<?php

    class Person{
        private $first_name;
        private $last_name;
        private $address;
        private $contact_number;

        public function setPerson($first_name, $last_name, $address, $contact_number){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->address = $address;
            $this->contact_number = $contact_number;
        }

        public function getFirstName(){
            return $this->first_name;
        }

        public function getLastName(){
            return $this->last_name;
        }

        public function getAddress(){
            return $this->address;
        }

        public function getContactNumber(){
            return $this->contact_number;
        }
        
    }

?>