<?php

    class Book{
        // PROPERTIES
        private $title;
        public $price;

        // METHODS

        // SETTER
        public function setTitle($new_title){
            $this->title = $new_title;
        }

        // GETTER
        private function getTitle(){
            return $this->title;
        }

        public function displayTitle(){
            echo $this->getTitle();
        }

    }

    // OBJECTS
    $math = new Book();
    // $math->title = "Algebra"; //CANNOT ACCESS PRIVATE PROPERTY
    
    $math->price = 700;
    echo $math->price;

    $math->setTitle("Algebra");
    // echo $math->getTitle(); //CALL TO PRIVATE METHOD
    $math->displayTitle();
    

?>