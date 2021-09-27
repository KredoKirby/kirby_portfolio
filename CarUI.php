<?php
    include 'Car.php';

    // OBJECTS
    $toyota = new Car();
    $honda = new Car();

    $toyota->setStaticValues();

    $honda->setDynamicValues("Honda", "Black", "500000");

    echo "Brand: ".$toyota->getBrand()."<br>";
    echo "Color: ".$toyota->getColor()."<br>";
    echo "Price: ".$toyota->getPrice()."<br>";

    echo "Brand: ".$honda->getBrand()."<br>";
    echo "Color: ".$honda->getColor()."<br>";
    echo "Price: ".$honda->getPrice()."<br>";

?>