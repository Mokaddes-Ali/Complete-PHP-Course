<?php 
abstract class Vehicle{
    abstract public function getType();

    public function display(){
    echo "The is a vehicle\n";
    }
}

class Car extends Vehicle{
    public function getType(){
        echo "I am a car\n";
    }

}

class Bike extends Vehicle{
    public function getType(){
        echo "I am a Bike\n";
    }

}

// $vehicle = new Vehicle(); error show

$car = new Car();
$car->getType();
$car->display();

$bike = new Bike();
$bike ->getType();
$bike ->display();

?>