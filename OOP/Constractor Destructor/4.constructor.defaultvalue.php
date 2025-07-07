<?php

class Car{
    public $brand;
    public $color;

    public function __construct($brand = "TATA", $color = "Blue"){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function display(){
        echo "This car is a {$this->brand}" . " " . $this->color ."";
    }
}

// $car = new Car( "Toyota","Red");
$car = new Car( );
$car->display();
?>