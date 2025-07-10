<?php 

abstract class Animal{
    abstract public function makeSound();

    public function sleep(){
        echo "The animal is sleeping!\n";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "The dogs barks!\n";
    }
}

$myDog = new Dog();
$myDog->makeSound();
$myDog->sleep();