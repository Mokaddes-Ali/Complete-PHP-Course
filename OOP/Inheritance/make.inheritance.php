<?php 

class Vehicle{
    public $brand;
    public $model;

    public function start(){
echo "Vehicle is Starting......\n";
}

public function stop(){
    echo "Vehicle is Stopping......\n";
}
}

class Car extends Vehicle{
    public $doors;

    public function honk(){
echo "Car is honking {$this->doors}";
}
}

$mycar = new Car();
$mycar->brand = "Toyota";
$mycar->model = "Corolla";
$mycar->doors = 4;

$mycar->start();
$mycar->stop();
$mycar->honk();
?>