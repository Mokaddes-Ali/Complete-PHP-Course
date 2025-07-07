<?php

class Car{
    public $brand;
    public $color;

    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    public function display(){
        echo "This car is a {$this->brand}" . " " . $this->color ."";
    }
}

$car = new Car( "Toyota","Red");
$car->display();
?>