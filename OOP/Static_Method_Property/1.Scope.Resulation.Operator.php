<?php 
class Math{
    public  static $pi = 3.1416;

    public static function calculateCircleArea($radius){
        return $radius * $radius * self::$pi;
    }

    const EULER_NUMBER = 2.71828;
}

echo Math::$pi . "\n";

echo Math::calculateCircleArea(5) . "\n";

echo Math::EULER_NUMBER;
?>