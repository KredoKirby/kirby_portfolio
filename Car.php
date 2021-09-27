<?php

    class Car{
        // PROPERTIES
        private $brand;
        private $color;
        private $price;

        // METHODS
        // SETTER
        public function setStaticValues(){
            $this->brand = "Toyota";
            $this->color = "White";
            $this->price = "300000";
        }

        // DYNAMIC SETTER
        public function setDynamicValues($car_brand, $car_color, $car_price){
            $this->brand = $car_brand;
            $this->color = $car_color;
            $this->price = $car_price;
        }

        // GETTERS
        public function getBrand(){
            return $this->brand;
        }

        public function getColor(){
            return $this->color;
        }

        public function getPrice(){
            return $this->price;
        }

    }

?>