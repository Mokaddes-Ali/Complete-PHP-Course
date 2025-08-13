<?php 

namespace MyLibrary;

class Calculator{
    public function add($num1, $num2){
        return $num1 + $num2;
    }
}

use MyLibrary\Calculator as Calc;
$calc = new Calc();

echo $calc->add(10,20);

?>