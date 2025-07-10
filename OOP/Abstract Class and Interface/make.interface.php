<?php
interface Vehicle {
    public function start();
    public function stop();
}

class Car implements Vehicle {
    public function start() {
        echo "Car started\n";
    }
    public function stop() {
        echo "Car stopped\n";
    }
}

// Test
$myCar = new Car();
$myCar->start();
$myCar->stop();
?>
